<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Reservation;
use App\Models\Table;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();
        return view('reservations.step-one', compact('reservation', 'min_date', 'max_date'));
    }

    public function storeStepOne(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'res_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'tel_number' => ['required'],
            'guest_number' => ['required'],
        ]);

        if (empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }

        return to_route('reservations.step.two');
    }
    public function stepTwo(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $res_table_ids = Reservation::orderBy('res_date')->get()->filter(function ($value) use ($reservation) {
            return $value->res_date->format('Y-m-d') == $reservation->res_date->format('Y-m-d');
        })->pluck('table_id');
        $tables = Table::where('status', TableStatus::Avalaiable)
            ->where('guest_number', '>=', $reservation->guest_number)
            ->whereNotIn('id', $res_table_ids)->get();
        return view('reservations.step-two', compact('reservation', 'tables'));
    }

    public function storeStepTwo(Request $request)
    {
        $validated = $request->validate([
            'table_id' => ['required']
        ]);
        $reservation = $request->session()->get('reservation');
        $reservation->fill($validated);
        $reservation->save();

        return to_route('reservations.store.step.three');
    }

    public function stepThree(Request $request)
    {
        $validated = $request->session()->get('reservation');
        $tables = Table::where('id', $validated->table_id)->first();

        return view('reservations.step-three', compact('validated', 'tables'));
    }

    public function storeStepThree(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload dan simpan gambar ke direktori storage/app/public/payment
        $imagePath = $request->file('image')->store('public/payment');

        // Simpan data pembayaran
        $payment = Payment::create([
            'image' => $imagePath,
            // Tambahkan atribut lain untuk disimpan di model Payment sesuai kebutuhan
        ]);

        // Ambil data reservasi dari session
        $reservation = $request->session()->get('reservation');

        // Kaitkan data pembayaran dengan reservasi (jika dibutuhkan)
        $reservation->payment_id = $payment->id;

        // Simpan data reservasi
        $reservation->save();

        // Ambil nomor telepon pengguna dari informasi otentikasi
        $userPhone = $reservation->tel_number;

        // Clear the reservation data from the session after successful reservation
        $request->session()->forget('reservation');

        // Redirect to the thank you page with the user's phone number as a query parameter
        return redirect()->route('thankyou')->with('userPhone', $userPhone);
    }
}

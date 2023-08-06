<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservations.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Reservation</a>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Email
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Date
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Table
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Guests
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Bukti Pembayaran
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservations as $reservation)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $reservation->first_name }} {{ $reservation->last_name }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $reservation->email }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $reservation->res_date }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $reservation->table->name }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $reservation->guest_number }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                @if ($reservation->payment)
                                                    <img src="{{ Storage::url($reservation->payment->image) }}"
                                                        alt="">
                                                @else
                                                    No Payment Image
                                                @endif
                                            </td>
                                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                @if (optional($reservation->payment)->approve)
                                                    <small class="text-green-500">Approved</small>
                                                    <small class="text-green-500">
                                                        <a href="https://wa.me/{{ $reservation->tel_number }}?text=Terima%20Kasih%20telah%20melakukan%20reservasi%20di%20CafeTanaza,%20Untuk%20status%20Pembayaran%20kamu%20sudah%20approve%20yaa,%20jangan%20lupa%20datang!!">
                                                            <br>Kirim Pesan
                                                        </a></small>
                                                @else
                                                    <small style="color:red">Rejected</small>
                                                @endif
                                            </td>
                                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                                <div class="flex space-x-2 items-center">
                                                    @if (optional($reservation->payment)->approve)
                                                        <form class="approve-form"
                                                            onsubmit="return showRejectConfirmation(event);"
                                                            action="{{ route('admin.reservations.reject', $reservation->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" id="rejectBtn"
                                                                class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">Reject</button>
                                                        </form>
                                                    @else
                                                        <form class="approve-form"
                                                            onsubmit="return showApproveConfirmation(event);"
                                                            action="{{ route('admin.reservations.approve', $reservation->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" id="approveBtn"
                                                                class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Approve</button>
                                                        </form>
                                                    @endif

                                                    <a href="{{ route('admin.reservations.edit', $reservation->id) }}"
                                                        class="px-4 py-2 rounded-lg text-white"
                                                        style="background-color: rgb(214, 214, 70);">Edit</a>

                                                    <form class="delete-form" method="POST"
                                                        action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                                        onsubmit="return showDeleteConfirmation(event);">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="deleteBtn"
                                                            class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

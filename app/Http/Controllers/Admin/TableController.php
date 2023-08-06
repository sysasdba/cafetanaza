<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use function Ramsey\Uuid\v1;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::all();
        return view('admin.tables.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableStoreRequest $request)
    {
        $image = $request->file('image')->store('public/payment');

        Table::create([
            'name' => $request->name,
            'price' => $request->price,
            'guest_number' => $request->guest_number,
            'status' => $request->status,
            'location' => $request->location,
            'image' => $image,
        ]);

        return to_route('admin.tables.index')->with('success', 'Table created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        return view('admin.tables.edit', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TableStoreRequest $request, Table $table)
{
    $validatedData = $request->validated();

    // Check if a new image has been uploaded
    if ($request->hasFile('image')) {
        // Delete the previous image if it exists
        if ($table->image && Storage::exists($table->image)) {
            Storage::delete($table->image);
        }
        // Store the new image
        $image = $request->file('image')->store('public/payment');
        $validatedData['image'] = $image;
    }

    // Update the price if it has changed
    if ($validatedData['price'] !== $table->price) {
        $table->update(['price' => $validatedData['price']]);
    }

    $table->update($validatedData);

    return redirect()->route('admin.tables.index')->with('success', 'Table updated successfully.');
}






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        $table->reservations()->delete();
        $table->delete();

        return to_route('admin.tables.index')->with('danger', 'Table daleted successfully.');
    }
}

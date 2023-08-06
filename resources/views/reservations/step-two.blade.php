<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="items-center bg-gray-50">
        <a href="{{ route('reservations.step.one') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white text-sm">Back</a>
            <h3 class="mb-4 text-xl text-center font-bold text-blue-600" >Choose a Table</h3>

            <div class=" bg-gray-200 rounded-full w-44 p-1 text-center mx-auto" style="width: 500px; display :flex; justify-content: center; align-items: center;">
                <div class="p-2 text-medium font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full" style="width: 50%">
                    Step 2
                </div>
            </div>


            <div class="flex flex-wrap justify-center mt-3 ">
                @forelse ($tables as $table)
                    <div class="mx-auto mt-4 rounded overflow-hidden shadow-lg" style="width: 250px; height: 350px">
                        <img class="w-full" src="{{ Storage::url($table->image) }}" style="max-height: 40%">
                        <div class="px-6 pt-4 py-4">
                            <div class="font-bold text-sm mb-1">{{ $table->name }}</div>
                            <p class="text-gray-700 text-base">
                                ({{ $table->guest_number }} Guests)
                            </p>
                            <p class="text-gray-700 text-base mt-2">
                                Rp.{{ $table->price }}
                            </p>
                        </div>
                        <form method="POST" action="{{ route('reservations.store.step.two') }}">
                            @csrf
                            <input type="hidden" name="table_id" value="{{ $table->id }}">
                            <div class="px-6 pt-2 pb-2 mt-3 flex justify-between">

                                <button type="submit"
                                    class="px-2 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white text-sm">Make Reservation</button>
                            </div>
                        </form>
                    </div>
                @empty
                    <div class="alert alert-secondary w-100 text-center" role="alert">
                        <h4>Produk belum tersedia</h4>
                    </div>
                @endforelse
            </div>

            {{-- <div class="sm:col-span-6 pt-5">
                <div class="mt-1">
                    <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
                        @foreach ($tables as $table)
                            <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                {{ $table->name }}
                                ({{ $table->guest_number }} Guests)
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('table_id')
                    <div class="text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-6 p-4 flex justify-between">
                <a href="{{ route('reservations.step.one') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Previous</a>
                <button type="submit"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Make
                    Reservation</button>
            </div> --}}

        </div>

    </div>
</x-guest-layout>

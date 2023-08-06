<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full" src="{{ asset('images/qr-code.jpeg') }}" alt="img" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">DP (Down Payment)</h3>

                            <div class="w-full bg-gray-200 rounded-full flex justify-end">
                                <div class="w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    Step 3
                                </div>
                            </div>


                            <form method="POST" action="{{ route('reservations.store.step.three') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="sm:col-span-6">
                                    <p class="text-gray-700 text-base mt-4">
                                        Rp. {{ $tables->price }}
                                    </p>
                                    <label for="image" class="block text-sm font-medium text-gray-700 pt-5"> Upload your payment screenshot
                                    </label>
                                    <div class="mt-1">
                                        <input type="file" id="image" name="image"
                                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('image')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="px-6 pt-4 pb-2 mt-6 flex justify-between">
                                    <a href="{{ route('reservations.step.two') }}"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white text-sm">Back</a>
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white text-sm">Done</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>

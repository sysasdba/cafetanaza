<x-guest-layout>
    <!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-32 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center
     md:bg-cover md:bg-center" style="background-image: url('{{ asset('images/home.jpg') }}')">
        <h1 class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">&nbsp;</span>
        </h1>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('reservations.step.one') }}" type="hidden" class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
                </a>
        </div>
    </div>

    <!-- End Main Hero Content -->

    <!-- Terms & Con -->
    <section class="px-2 py-20 bg-white md:px-0">
        <div class="mt-4 text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="mb-12 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Terms & Conditions
            </h2>
            <div class="mt-4 text-center">
                <style>
                    .justify-text {
                        text-align: justify;
                        text-justify: inter-word;
                        margin-bottom: 1rem;
                    }

                    .amount {
                        font-weight: bold;
                    }
                </style>
                <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-2xl md:max-w-3xl text-center justify-text">
                    ⭐ Reservasi tempat dapat dilakukan H-8 sebelum tanggal reservasi.
                </p>
                <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-2xl md:max-w-3xl text-center justify-text">
                    ⭐ Reservasi dilakukan untuk jumlah kunjungan minimal 10 orang dengan Minimum Charge <span class="amount">IDR 500.000</span>.
                </p>
                <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-2xl md:max-w-3xl text-center justify-text">
                    ⭐ Khusus Ruangan Non-Smoking Area Minimum Charge <span class="amount">IDR 300.000</span>.
                </p>
                <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-2xl md:max-w-3xl text-center justify-text">
                    ⭐ Khusus VIP's Room <span class="amount">IDR 1,5JT</span> / 3 hours up to 40-person.
                </p>
                <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-2xl md:max-w-3xl text-center justify-text">
                    ⭐ Pembayaran DP (Down Payment) melalui scan QR DANA.
                </p>
                <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-2xl md:max-w-3xl text-center justify-text">
                    ⭐ Pembayaran DP (Down Payment) dapat di refund H-1 sebelum tanggal reservasi.
                </p>
                <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-2xl md:max-w-3xl text-center justify-text">
                    ⭐ Pembayaran DP (Down Payment) akan dipotong dengan total harga pesanan menu di lokasi.
                </p>
                <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-2xl md:max-w-3xl text-center justify-text">
                    ⭐ Mohon untuk tetap menjaga kebersihan dan kenyamanan pelanggan lain.
                </p>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="py-20 bg-gray-50">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16" data-aos="fade-up" data-aos-duration="1000">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-2xl font-bold">About Us</h2>
                        <h2 class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                            WHY CHOOSE US?</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">
                            Indoor but outdoor? Yes, the coffee shop concept is new, only in Gading Serpong. Let's come and feel a comfortable atmosphere with a minimalist design. </p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">"Everyone Can Buy" is our Tagline</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-medium text-gray-500">Easy Payments (Cashless Only)</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Very Affordable Prices</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                    <img class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl" src="https://cdn.pixabay.com/photo/2020/04/17/12/49/barista-5055060_1280.jpg" alt="feature image">
                </div>
            </div>
        </div>
    </section>
    <!-- Today's Speciality -->
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center" data-aos="fade-up" data-aos-duration="1000">
            <h3 class="text-2xl font-bold">Our Menu</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                TODAY'S SPECIALITY</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6" data-aos="fade-up" data-aos-duration="3000">
                @if (!is_null($categories))
                @foreach ($categories as $category)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48" src="{{ Storage::url($category->image) }}" alt="Image" />
                    <div class="px-6 py-4">

                        <a href="{{ route('categories.show', $category->id) }}">
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-400 uppercase">
                                {{ $category->name }}
                            </h4>
                        </a>
                    </div>
                </div>
                @endforeach
                @else
                <div>Tidak ada item yang ditemukan</div>
                @endif

            </div>
        </div>
    </section>
    <!-- Location -->
    <section class="pt-4 pb-12 bg-gray-800">
        <div class="my-16 text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 mb-4">
                Our Location </h2>
        </div>

        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
                        <h1 class="text-3xl" style="color: white;">We're Open 24 hours Everyday!</h1>
                        <h6 class="text-sm" style="color: white;">Ruko Sektor 1B, Jl. Klp. Gading Sel. No.31, RT.1/RW.13, Kabupaten Tangerang, Banten 15810.</h6>
                    </div>
                </div>
                <div class="w-full md:w-1/2 mt-4 md:ml-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63459.13635754939!2d106.56287720004727!3d-6.237874750021719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbbddd52ddfd%3A0x654f588869f7059c!2sTanaza%20Cafe!5e0!3m2!1sen!2sid!4v1690969239048!5m2!1sen!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
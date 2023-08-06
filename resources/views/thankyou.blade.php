<x-guest-layout>

<script>
    function showThankYouAlert() {
        // Menampilkan SweetAlert2 dengan pesan "Thank You!"
        Swal.fire({
            title: "Thank You!",
            icon: "success",
            text: "We have received your reservation. Your payment is being processed and we will contact you.",
        }).then((result) => {
            // Setelah tombol "OK" diklik, alihkan ke halaman welcome.blade.php
            if (result.isConfirmed) {
                window.location.href = "{{ route('welcome') }}";
            }
        });
    }

    // Panggil fungsi showThankYouAlert() ketika halaman dimuat
    window.onload = showThankYouAlert;
</script>

</x-guest-layout>
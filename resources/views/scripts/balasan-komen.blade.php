<script>
    // Ambil semua tombol "toggle-replies"
    const toggleButtons = document.querySelectorAll('.toggle-replies');

    toggleButtons.forEach((button) => {
        button.addEventListener('click', () => {
            // Cari elemen "replies" yang terkait dengan tombol yang diklik
            const replies = button.closest('article').querySelector('.replies');

            // Toggle class untuk animasi
            if (replies.classList.contains('max-h-0')) {
                replies.classList.remove('max-h-0');
                replies.classList.add('max-h-96'); // Tinggi maksimum balasan
                button.textContent = 'Sembunyikan Balasan';
            } else {
                replies.classList.add('max-h-0');
                replies.classList.remove('max-h-96');
                button.textContent = 'Lihat Balasan';
            }
        });
    });
</script>

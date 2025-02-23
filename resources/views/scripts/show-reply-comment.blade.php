<script>
    document.addEventListener('DOMContentLoaded', function() {
        // animasi untuk memunculkan comment reply
        document.querySelectorAll('.toggle-replies').forEach(button => {
            button.addEventListener('click', function() {
                const replies = this.closest('article').querySelector('.replies');

                if (replies.classList.contains('hidden')) {
                    replies.classList.remove('hidden');
                    setTimeout(() => {
                        replies.classList.remove('opacity-0', 'translate-y-4');
                    }, 10);
                } else {
                    replies.classList.add('opacity-0', 'translate-y-4');
                    setTimeout(() => {
                        replies.classList.add('hidden');
                    }, 300);
                }
            });
        });
    });
    // Button Memunculkan comment reply
    // Ambil semua tombol "toggle-replies"
    const toggleButtons = document.querySelectorAll('.toggle-replies');
    toggleButtons.forEach((button) => {
        button.addEventListener('click', () => {
            // Cari elemen "replies" yang terkait dengan tombol yang diklik
            const replies = button.closest('article').querySelector('.replies');

            // Toggle class untuk animasi
            if (replies.classList.contains('max-h-0')) {
                replies.classList.remove('max-h-0');
                replies.classList.add('max-h'); // Tinggi maksimum balasan
            } else {
                replies.classList.add('max-h-0');
                replies.classList.remove('max-h');
            }
        });
    });
</script>

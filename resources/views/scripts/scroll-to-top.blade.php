<!-- Scroll On Top -->
<div id="scroll-to-top-btn" class="fixed end-6 bottom-6 group hidden">
    <button type="button" onclick="scrollToTopWithAnimation()"
        class="flex items-center justify-center text-white bg-blue-700 rounded-full w-10 h-10 sm:w-14 sm:h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
        <svg id="scroll-icon" class="w-5 h-5 transition-transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 19V5M5 12l7-7 7 7" />
        </svg>
        <span class="sr-only">Scroll to top</span>
    </button>
</div>
<style>
    /* Rotate animasi untuk klik */
    @keyframes rotate {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .rotate-animation {
        animation: rotate 0.5s ease-in-out;
        /* Animasi berputar 0.5 detik */
    }
</style>
<script>
    // Function to scroll to the top of the page
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Function to show or hide the button based on scroll position
    window.onscroll = function() {
        let btn = document.getElementById('scroll-to-top-btn');
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            btn.classList.remove('hidden'); // Show the button
        } else {
            btn.classList.add('hidden'); // Hide the button
        }
    }

    function scrollToTopWithAnimation() {
        // Animasi ikon saat diklik
        const icon = document.getElementById('scroll-icon');
        icon.classList.add('rotate-animation'); // Tambah animasi rotate

        // Hilangkan animasi setelah selesai (durasi 500ms)
        setTimeout(() => {
            icon.classList.remove('rotate-animation');
        }, 500);

        // Scroll ke atas
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
</script>
<!-- Scroll On Top -->

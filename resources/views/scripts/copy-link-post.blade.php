<script>
    // Script Copy Link Post ke Clipboard
    function copyToClipboard() {
        const url = window.location.href; // Ambil URL halaman saat ini
        const tempInput = document.createElement("input"); // Buat input sementara
        tempInput.value = url;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy"); // Gunakan metode lama untuk kompatibilitas
        document.body.removeChild(tempInput); // Hapus input setelah copy
        alert('Link copied to clipboard!');
    }
</script>

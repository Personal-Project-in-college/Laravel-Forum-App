<script>
    // Animasi Masuk Saat tombol memunculkan from tambah komen dan reply komen
    document.addEventListener('DOMContentLoaded', function() {
        // animasi untuk from balas komen
        document.querySelectorAll('.toggle-reply-btn').forEach(button => {
            button.addEventListener('click', function() {
                const commentId = this.getAttribute('data-comment-id');
                const replyForm = document.getElementById(`reply-form-${commentId}`);

                if (replyForm.classList.contains('hidden')) {
                    replyForm.classList.remove('hidden');
                    setTimeout(() => {
                        replyForm.classList.remove('opacity-0', 'translate-y-4');
                    }, 10);
                } else {
                    replyForm.classList.add('opacity-0', 'translate-y-4');
                    setTimeout(() => {
                        replyForm.classList.add('hidden');
                    }, 300);
                }
            });
        });
    });
</script>

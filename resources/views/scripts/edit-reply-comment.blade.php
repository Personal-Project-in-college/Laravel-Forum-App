<script>
    document.addEventListener('DOMContentLoaded', function() {
        // animasi untuk memunculkan edit reply komen
        const editButtons = document.querySelectorAll("[data-comment-id]");
        editButtons.forEach(button => {
            button.addEventListener("click", function() {
                const commentId = this.getAttribute("data-comment-id");
                const editForm = document.getElementById(`edit-reply-form-${commentId}`);

                if (!editForm) return;

                // Animasi transisi
                if (editForm.classList.contains("hidden")) {
                    editForm.classList.remove("hidden");
                    setTimeout(() => {
                        editForm.classList.remove('opacity-0', 'translate-y-4');
                    }, 10);
                } else {
                    editForm.classList.add("opacity-0", "translate-y-4");
                    setTimeout(() => {
                        editForm.classList.add("hidden");
                    }, 300);
                }
            });
        });
    });
</script>

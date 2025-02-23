<script>
    // Animasi Masuk Saat tombol memunculkan from tambah komen dan reply komen
    document.addEventListener('DOMContentLoaded', function() {
        // animasi untuk memunculkan edit komen
        document.querySelectorAll(".edit-comment-btn").forEach((button) => {
            button.addEventListener("click", function() {
                let commentId = this.getAttribute("data-comment-id");
                let commentBody = this.getAttribute("data-comment-body");
                let editForm = document.getElementById(`edit-form-${commentId}`);

                if (editForm) {
                    if (editForm.classList.contains("hidden")) {
                        editForm.classList.remove("hidden");
                        setTimeout(() => {
                            editForm.classList.remove('opacity-0', 'translate-y-4');
                        }, 10);
                    } else {
                        editForm.classList.add('opacity-0', 'translate-y-4');
                        setTimeout(() => {
                            editForm.classList.add("hidden");
                        }, 300);
                    }

                    editForm.querySelector("textarea").value = commentBody;
                }
            });
        });
    });
</script>

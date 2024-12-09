document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-todo');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const todoId = this.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this todo?')) {
                window.location.href = `index.php?action=delete&id=${todoId}`;
            }
        });
    });
});

// assets/js/script.js

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const taskInput = document.querySelector('input[name="task"]');
    const deleteLinks = document.querySelectorAll('.delete');

    // Validasi untuk memastikan input tidak kosong sebelum menambahkan task
    form.addEventListener('submit', function(event) {
        if (taskInput.value.trim() === '') {
            alert('Please enter a task before adding!');
            event.preventDefault();
        }
    });

    // Konfirmasi sebelum menghapus task
    deleteLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            const confirmation = confirm('Are you sure you want to delete this task?');
            if (!confirmation) {
                event.preventDefault(); // Mencegah penghapusan jika pengguna membatalkan
            }
        });
    });
});

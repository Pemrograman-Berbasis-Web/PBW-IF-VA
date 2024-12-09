document.addEventListener('DOMContentLoaded', function() {
    // Tambahkan event listener untuk konfirmasi penghapusan
    document.querySelectorAll('a.delete').forEach(function(deleteLink) {
        deleteLink.addEventListener('click', function(event) {
            if (!confirm('Apakah Anda yakin ingin menghapus tugas ini?')) {
                event.preventDefault();
            }
        });
    });

    // Tambahkan event listener untuk menandai sebagai selesai
    document.querySelectorAll('a.complete').forEach(function(completeLink) {
        completeLink.addEventListener('click', function() {
            const li = this.closest('li');
            li.classList.add('completed');
        });
    });
});

function showEditForm(id, task) {
    document.getElementById('updateForm').style.display = 'block';
    document.getElementById('updateId').value = id;
    document.getElementById('updateTask').value = task;
}

function hideEditForm() {
    document.getElementById('updateForm').style.display = 'none';
}

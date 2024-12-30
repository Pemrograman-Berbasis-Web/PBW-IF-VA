document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.delete').forEach(function(deleteLink) {
        deleteLink.addEventListener('click', function(event) {
            if (!confirm('Apakah Anda yakin ingin menghapus tugas ini?')) {
                event.preventDefault();
            }
        });
    });
});

function showEditForm(id, title, deadline, description) {
    document.getElementById('updateForm').style.display = 'block';
    document.getElementById('updateId').value = id;
    document.getElementById('updateTitle').value = title;
    document.getElementById('updateDeadline').value = deadline;
    document.getElementById('updateDescription').value = description;
}

function hideEditForm() {
    document.getElementById('updateForm').style.display = 'none';
}

$(document).ready(function() {
    if (!$.fn.DataTable.isDataTable('#todoTable')) {
        $('#todoTable').DataTable({
            "paging": true,
            "ordering": true,
            "searching": false,
            "pageLength": 5,  // Ganti menjadi 5 untuk menampilkan 5 per halaman
            "lengthMenu": [5, 10, 15] // Ganti menjadi [5 atau 10 atau 15] untuk menampilkan opsi 5 per halaman
        });
    }

    // Menambahkan pencarian manual untuk tabel
    $('#searchInput').on('keyup', function() {
        $('#todoTable').DataTable().search(this.value).draw();
    });
});



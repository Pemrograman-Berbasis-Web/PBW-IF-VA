document.addEventListener("DOMContentLoaded", function() {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const modal = document.getElementById('deleteModal');
    const confirmButton = document.getElementById('confirmDelete');
    const cancelButton = document.getElementById('cancelDelete');
    let deleteUrl = null;

    // Menambahkan event listener untuk setiap tombol delete
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            
            // Menyimpan URL penghapusan yang akan diproses
            deleteUrl = button.href;

            // Menampilkan modal konfirmasi
            modal.style.display = 'flex';
        });
    });

    // Konfirmasi untuk menghapus tugas
    confirmButton.addEventListener('click', function() {
        if (deleteUrl) {
            window.location.href = deleteUrl; // Arahkan ke URL delete
        }
    });

    // Menutup modal jika pengguna membatalkan
    cancelButton.addEventListener('click', function() {
        modal.style.display = 'none'; // Menutup modal
    });

    // Menutup modal jika pengguna mengklik di luar modal
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none'; // Menutup modal
        }
    });
});

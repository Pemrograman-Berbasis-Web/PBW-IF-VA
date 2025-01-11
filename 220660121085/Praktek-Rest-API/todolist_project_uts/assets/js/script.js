// Menangani konfirmasi sebelum menandai sebagai selesai
function confirmComplete(todoId) {
    if (confirm("Are you sure you want to mark this task as completed?")) {
        // Redirect ke URL yang menandai sebagai selesai
        window.location.href = "?action=complete&id=" + todoId;
    }
}

// Menangani konfirmasi sebelum menghapus tugas
function confirmDelete(todoId) {
    if (confirm("Are you sure you want to delete this task?")) {
        // Redirect ke URL yang menghapus tugas
        window.location.href = "?action=delete&id=" + todoId;
    }
}

// Menampilkan notifikasi ketika tugas berhasil ditambahkan
function showAlert(message) {
    alert(message);
}

// Cek jika ada notifikasi untuk tugas yang ditambahkan
document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('taskAdded')) {
        showAlert("Task successfully added!");
    }
});

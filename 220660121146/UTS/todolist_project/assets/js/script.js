// assets/js/script.js

// Menambah event listener untuk konfirmasi saat menghapus todo
document.addEventListener("DOMContentLoaded", function () {
    const deleteLinks = document.querySelectorAll(".delete-btn");

    deleteLinks.forEach(function (link) {
        link.addEventListener("click", function (e) {
            const isConfirmed = confirm("Apakah Anda yakin ingin menghapus todo ini?");
            if (!isConfirmed) {
                e.preventDefault();
            }
        });
    });
});

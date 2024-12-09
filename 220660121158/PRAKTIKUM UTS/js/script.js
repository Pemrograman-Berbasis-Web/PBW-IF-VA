// js/script.js

// Validasi Formulir di Sisi Klien
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.form-input');
    const namaInput = form.querySelector('input[name="nama"]');
    const nimInput = form.querySelector('input[name="nim"]');
    const umurInput = form.querySelector('input[name="umur"]');

    form.addEventListener('submit', (event) => {
        let valid = true;

        if (namaInput.value.trim() === "") {
            alert("Nama tidak boleh kosong!");
            valid = false;
        }

        if (nimInput.value.trim() === "") {
            alert("NIM tidak boleh kosong!");
            valid = false;
        }

        if (umurInput.value <= 0) {
            alert("Umur harus lebih dari 0!");
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});

// Konfirmasi Sebelum Hapus
const deleteLinks = document.querySelectorAll('.delete');
deleteLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        const confirmed = confirm("Apakah Anda yakin ingin menghapus data ini?");
        if (!confirmed) {
            event.preventDefault();
        }
    });
});

// Sembunyikan notifikasi sukses/error setelah 3 detik
document.addEventListener('DOMContentLoaded', () => {
    const successMessage = document.querySelector('.success');
    const errorMessage = document.querySelector('.error');

    if (successMessage) {
        setTimeout(() => {
            successMessage.style.display = 'none';
        }, 3000);
    }

    if (errorMessage) {
        setTimeout(() => {
            errorMessage.style.display = 'none';
        }, 3000);
    }
});

function confirmDelete() {
  return confirm("Apakah Anda yakin ingin menghapus tugas ini?");
}

document.querySelector("form").addEventListener("submit", function(event) {
  // Menambahkan animasi tombol saat ditekan
  const addButton = document.querySelector("button[type='submit']");
  addButton.disabled = true; // Nonaktifkan tombol sementara
  addButton.classList.add('active'); // Tambahkan kelas untuk animasi saat tombol ditekan
  
  // Menambahkan animasi pada form
  this.classList.add('form-adding');

  // Delay submit agar animasi selesai
  setTimeout(() => {
      this.submit(); // Submit form setelah animasi selesai
  }, 500); // Waktu tunggu 500ms
});


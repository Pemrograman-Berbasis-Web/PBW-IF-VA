function validateForm() {
  const dueDate = document.querySelector('input[name="due_date"]').value;

  // Jika due_date kosong, tampilkan alert dan return false untuk mencegah pengiriman form
  if (!dueDate) {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Tanggal jatuh tempo harus diisi!",
      showConfirmButton: true,
    });
    return false;
  }
  return true;
}

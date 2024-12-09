document.addEventListener('DOMContentLoaded', () => {
  // Konfirmasi sebelum menghapus todo
  const deleteLinks = document.querySelectorAll('a[href*="action=delete"]');
  deleteLinks.forEach(link => {
      link.addEventListener('click', function(event) {
          const confirmDelete = confirm("Are you sure you want to delete this task?");
          if (!confirmDelete) {
              event.preventDefault(); // Membatalkan aksi jika tidak dikonfirmasi
          }
      });
  });

  // Pesan konfirmasi saat menandai todo sebagai selesai
  const completeLinks = document.querySelectorAll('a[href*="action=complete"]');
  completeLinks.forEach(link => {
      link.addEventListener('click', function(event) {
          event.preventDefault();
          const confirmComplete = confirm("Mark this task as completed?");
          if (confirmComplete) {
              window.location.href = link.href; // Lanjutkan ke tautan jika dikonfirmasi
          }
      });
  });

  // Alert ketika tugas baru ditambahkan
  const form = document.querySelector('form');
  form.addEventListener('submit', function() {
      const taskInput = document.querySelector('input[name="task"]');
      if (taskInput.value.trim() !== "") {
          alert("Task added successfully!");
      } else {
          alert("Please enter a task!");
      }
  });
});

// Mengirim data form menggunakan AJAX
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const taskInput = document.querySelector('input[name="task"]');
    const todoList = document.querySelector('ul');

    // Tangani pengiriman form
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const task = taskInput.value.trim();

        // Validasi input
        if (!task) {
            alert('Task cannot be empty!');
            return;
        }

        // Kirim data ke server menggunakan Fetch API
        fetch('?action=add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({ task }),
        })
            .then((response) => response.text())
            .then((data) => {
                // Tambahkan elemen baru ke daftar tanpa refresh halaman
                const li = document.createElement('li');
                li.innerHTML = `
                    ${task}
                    <a href="#">Mark as completed</a>
                    <a href="#">Delete</a>
                `;
                todoList.appendChild(li);

                // Reset input
                taskInput.value = '';

                // Tampilkan alert
                alert('Task added successfully!');
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('Failed to add task. Please try again!');
            });
    });
});

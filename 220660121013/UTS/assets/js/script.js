document.addEventListener("DOMContentLoaded", () => {
    const editLinks = document.querySelectorAll('.edit-link');
    editLinks.forEach(link => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            const li = link.closest("li");
            const editForm = li.querySelector(".edit-form");
            const taskSpan = li.querySelector("span");

            taskSpan.style.display = "none";
            editForm.style.display = "block";
        });
    });

    const cancelButtons = document.querySelectorAll('.cancel-edit');
    cancelButtons.forEach(button => {
        button.addEventListener("click", (event) => {
            event.preventDefault();
            const li = button.closest("li");
            const editForm = li.querySelector(".edit-form");
            const taskSpan = li.querySelector("span");

            taskSpan.style.display = "block";
            editForm.style.display = "none";
        });
    });
});

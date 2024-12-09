// script.js

document.addEventListener("DOMContentLoaded", () => {
    const todoList = document.querySelector("ul");
    const form = document.querySelector("form");
    const taskInput = document.querySelector('input[name="task"]');
  
    // Add new task
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const task = taskInput.value.trim();
      if (task) {
        addTask(task);
        taskInput.value = "";
      }
    });
  
    // Mark task as completed
    todoList.addEventListener("click", (e) => {
      if (e.target.classList.contains("complete")) {
        e.target.closest("li").classList.toggle("completed");
      }
    });
  
    // Delete task
    todoList.addEventListener("click", (e) => {
      if (e.target.classList.contains("delete")) {
        e.target.closest("li").remove();
      }
    });
  
    function addTask(task) {
      const li = document.createElement("li");
      li.innerHTML = `
            ${task}
            <div>
                <button class="complete">✔️</button>
                <button class="delete">❌</button>
            </div>
        `;
      todoList.prepend(li);
    }
  });
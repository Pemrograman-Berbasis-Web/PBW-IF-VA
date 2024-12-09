// script.js
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("todo-form");
    const input = document.getElementById("todo-input");
    const todoList = document.getElementById("todo-list");
    const filterButtons = document.querySelectorAll(".filter-btn");
  
    let todos = JSON.parse(localStorage.getItem("todos")) || [];
  
    // Fungsi untuk render todo list
    function renderTodos(filter = "all") {
      todoList.innerHTML = "";
  
      const filteredTodos = todos.filter((todo) => {
        if (filter === "completed") return todo.completed;
        if (filter === "uncompleted") return !todo.completed;
        return true;
      });
  
      filteredTodos.forEach((todo, index) => {
        const listItem = document.createElement("li");
        listItem.classList.toggle("completed", todo.completed);
  
        listItem.innerHTML = `
          <span>${todo.text}</span>
          <button class="delete-btn" data-index="${index}">Hapus</button>
        `;
  
        // Toggle selesai
        listItem.addEventListener("click", (e) => {
          if (e.target.tagName !== "BUTTON") {
            todo.completed = !todo.completed;
            saveTodos();
            renderTodos(filter);
          }
        });
  
        // Hapus todo
        listItem.querySelector(".delete-btn").addEventListener("click", () => {
          todos.splice(index, 1);
          saveTodos();
          renderTodos(filter);
        });
  
        todoList.appendChild(listItem);
      });
    }
  
    // Fungsi untuk menyimpan ke localStorage
    function saveTodos() {
      localStorage.setItem("todos", JSON.stringify(todos));
    }
  
    // Tambahkan item baru
    form.addEventListener("submit", (e) => {
      e.preventDefault();
  
      const todoText = input.value.trim();
      if (todoText === "") return;
  
      todos.push({ text: todoText, completed: false });
      saveTodos();
      renderTodos();
      input.value = "";
    });
  
    // Filter todo berdasarkan status
    filterButtons.forEach((button) => {
      button.addEventListener("click", () => {
        const filter = button.dataset.filter;
        renderTodos(filter);
      });
    });
  
    // Render todo saat halaman dimuat
    renderTodos();
  });
  
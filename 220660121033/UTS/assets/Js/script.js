function validateForm() {
    var inputBox = document.getElementById("input-box");
    if (inputBox.value.trim() === "") {
        alert("Task cannot be empty. Please enter a task.");
        return false; // Mencegah pengiriman form
    }
    return true; // Mengizinkan pengiriman form jika input valid
}
$(document).ready(function () {
  $("#todoTable").DataTable({ searching: false });

  // Function to populate modal
  window.editTodo = function (todo) {
    $("#editTodoId").val(todo.id);
    $("#editTitle").val(todo.title);
    $("#editDescription").val(todo.description);
    $("#editStatus").prop("checked", todo.status);
  };

  // SweetAlert for delete action
  $(".delete-todo").click(function (event) {
    event.preventDefault();
    const url = $(this).attr("href");

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  });

  // SweetAlert for toggle status
  $(".toggle-status").click(function (event) {
    event.preventDefault();
    const url = $(this).attr("href");

    Swal.fire({
      title: "Change Status?",
      text: "Are you sure you want to toggle the status?",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  });
});

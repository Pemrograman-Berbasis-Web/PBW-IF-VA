<?php
require_once "../db.php";

data = json_decode(file_get_contents("php://input"));

if (!empty(data->title)) {
    query = "INSERT INTO todos (title) VALUES (:title)";
    stmt = $conn->prepare(query);

    stmt->bindParam(":title", data->title);

    if (stmt->execute()) {
        echo json_encode(["message" => "Todo created successfully"]);
    } else {
        echo json_encode(["message" => "Failed to create todo"]);
    }
} else {
    echo json_encode(["message" => "Title is required"]);
}
?>

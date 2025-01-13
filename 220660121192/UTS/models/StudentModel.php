<?php
require_once 'core/Database.php';

class StudentModel {
    private $conn;
    private $table = "students";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllStudents() {
        $stmt = $this->conn->prepare("SELECT * FROM " . $this->table);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createStudent($name, $npm, $subject, $grade) {
        $stmt = $this->conn->prepare("INSERT INTO " . $this->table . " (name, npm, subject, grade) VALUES (:name, :npm, :subject, :grade)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':npm', $npm);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':grade', $grade);
        return $stmt->execute();
    }
}
?>

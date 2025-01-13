<?php
require_once 'controllers/StudentController.php';

$controller = new StudentController();
$action = $_GET['action'] ?? '';

if ($action == 'add') {
    $name = $_POST['name'] ?? '';
    $npm = $_POST['npm'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $grade = $_POST['grade'] ?? '';
    $controller->addStudent($name, $npm, $subject, $grade);
    header('Location: index.php');
    exit;
}

$students = $controller->index();
require 'views/listStudent.php';
?>

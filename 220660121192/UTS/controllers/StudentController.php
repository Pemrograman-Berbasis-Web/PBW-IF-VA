<?php
require_once 'models/StudentModel.php';

class StudentController {
    private $model;

    public function __construct() {
        $this->model = new StudentModel();
    }

    public function index() {
        return $this->model->getAllStudents();
    }

    public function addStudent($name, $npm, $subject, $grade) {
        return $this->model->createStudent($name, $npm, $subject, $grade);
    }
}
?>

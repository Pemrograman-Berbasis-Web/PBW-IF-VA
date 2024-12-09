<?php
// models/Todo.php

class Todo {
    public $id;
    public $title;
    public $description;
    public $is_completed;

    public function __construct($id, $title, $description, $is_completed) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->is_completed = $is_completed;
    }
}
?>
<?php
// models/Todo.php

class Todo {
    public $id;
    public $title;
    public $description;
    public $is_completed;
    public $created_at;
    public $updated_at;

    public function __construct($id, $title, $description, $is_completed, $created_at, $updated_at) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->is_completed = $is_completed;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
?>
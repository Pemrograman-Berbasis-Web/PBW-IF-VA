<?php
// models/Todo.php

class Todo {
    public $id;
    public $title;
    public $description;
    public $status;
    public $created_at;

    /**
     * Konstruktor untuk Todo
     * @param int|null $id ID dari todo
     * @param string $title Judul dari todo
     * @param string $description Deskripsi dari todo
     * @param bool $status Status penyelesaian todo (0: belum selesai, 1: selesai)
     * @param string|null $created_at Timestamp pembuatan todo
     */
    public function __construct($id = null, $title = '', $description = '', $status = 0, $created_at = null) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->created_at = $created_at ?? date('Y-m-d H:i:s');
    }

    /**
     * Tandai todo sebagai selesai
     */
    public function markAsCompleted() {
        $this->status = 1;
    }

    /**
     * Tandai todo sebagai belum selesai
     */
    public function markAsPending() {
        $this->status = 0;
    }

    /**
     * Perbarui judul dan deskripsi dari todo
     * @param string $newTitle Judul baru dari todo
     * @param string $newDescription Deskripsi baru dari todo
     * @param bool $status Status penyelesaian
     */
    public function updateTodo($newTitle, $newDescription, $status = null) {
        $this->title = $newTitle;
        $this->description = $newDescription;
        if ($status !== null) {
            $this->status = $status;
        }
    }

    /**
     * Dapatkan representasi data Todo dalam bentuk array
     * @return array
     */
    public function toArray() {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'created_at' => $this->created_at,
        ];
    }
}

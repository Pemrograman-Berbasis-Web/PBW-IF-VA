<?php
// index.php

require_once 'controllers/TodoController.php';

$controller = new TodoController();
$todos = $controller->index();

// Merender tampilan
require 'views/listTodos.php';
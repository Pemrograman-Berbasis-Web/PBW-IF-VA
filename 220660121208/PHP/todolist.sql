CREATE DATABASE todolist;

USE todolist;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    is_complete BOOLEAN DEFAULT FALSE
);

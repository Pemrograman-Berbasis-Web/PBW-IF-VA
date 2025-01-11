<?php
class Database {
    private static $host = 'localhost';
    private static $db_name = 'todo_app';
    private static $username = 'root';
    private static $password = '';
    private static $conn;

    public static function connect() {
        if (!isset(self::$conn)) {
            self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }
}
?>

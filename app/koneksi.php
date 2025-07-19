<?php
class Koneksi {
    public static function connect() {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=pbl3", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }
}
?>
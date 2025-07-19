<?php
require_once "Koneksi.php";

class Hewan {
    public static function getAll() {
        $db = Koneksi::connect();
        $stmt = $db->query("SELECT * FROM hewan");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insert($nama, $jenis) {
        $db = Koneksi::connect();
        $stmt = $db->prepare("INSERT INTO hewan (nama, jenis) VALUES (?, ?)");
        return $stmt->execute([$nama, $jenis]);
    }

    public static function update($id, $nama, $jenis) {
        $db = Koneksi::connect();
        $stmt = $db->prepare("UPDATE hewan SET nama = ?, jenis = ? WHERE id = ?");
        return $stmt->execute([$nama, $jenis, $id]);
    }

    public static function delete($id) {
        $db = Koneksi::connect();
        $stmt = $db->prepare("DELETE FROM hewan WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public static function getById($id) {
        $db = Koneksi::connect();
        $stmt = $db->prepare("SELECT * FROM hewan WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
<?php
require_once "../OOP/Koneksi.php";

try {
    $db = Koneksi::connect();
    echo "Koneksi berhasil!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
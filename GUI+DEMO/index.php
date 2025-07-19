<?php
header("Location: login.php");
exit;
require_once "../OOP/Hewan.php";
$data = Hewan::getAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Hewan</title>
</head>
<body>
    <h1>Daftar Hewan</h1>
    <a href="form_insert.php">+ Tambah Hewan</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($data as $hewan): ?>
            <tr>
                <td><?= $hewan['id'] ?></td>
                <td><?= $hewan['nama'] ?></td>
                <td><?= $hewan['jenis'] ?></td>
                <td>
                    <a href="form_update.php?id=<?= $hewan['id'] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $hewan['id'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
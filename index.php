<?php

require_once "products.php";
require_once "functions.php";

$totalStok = hitungTotalNilaiStok($katalog);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Information System</title>

    <style>
        body {
            font-family: Arial;
            margin: 30px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #ddd;
        }

        .kritis {
            background-color: #ffcccc;
        }
    </style>
</head>

<body>

<h1>Product Information System</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Deskripsi</th>
    </tr>

    <?php foreach ($katalog as $produk): ?>

        <?php
        $class = "";

        if ($produk["stok"] < 3) {
            $class = "kritis";
        }
        ?>

        <tr class="<?= $class ?>">
            <td><?= $produk["id"] ?></td>
            <td><?= $produk["nama"] ?></td>
            <td><?= $produk["kategori"] ?></td>
            <td>Rp <?= number_format($produk["harga"], 0, ',', '.') ?></td>
            <td><?= $produk["stok"] ?></td>
            <td><?= $produk["deskripsi"] ?></td>
        </tr>

    <?php endforeach; ?>

</table>

<h3>
    Total Nilai Stok:
    Rp <?= number_format($totalStok, 0, ',', '.') ?>
</h3>

</body>
</html>
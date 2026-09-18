<?php

function hitungTotalNilaiStok($katalog)
{
    $total = 0;

    foreach ($katalog as $produk) {
        $total += $produk["harga"] * $produk["stok"];
    }

    return $total;
}

?>
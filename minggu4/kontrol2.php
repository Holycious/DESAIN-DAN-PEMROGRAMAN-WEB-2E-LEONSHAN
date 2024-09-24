<?php
$harga_produk = 120000;
$diskon = 20;
$batas_diskon = 100000;
$harga_setelah_diskon = 0;

if ($harga_produk > $batas_diskon) {
    $besar_diskon = ($diskon / 100) * $harga_produk;
    $harga_setelah_diskon = $harga_produk - $besar_diskon;
} else {
    $harga_setelah_diskon = $harga_produk;
}

echo "Harga yang harus dibayar setelah diskon: Rp " . $harga_setelah_diskon;
?>

<?php
$nilaiSiswa = [85,92,78,64,90,75,88,79,70,96];
$jumlahNilai = 10;
$totalNilai = 0;
sort($nilaiSiswa);
for ($i = 0; $i < $jumlahNilai; $i++) {
    if ($i >= 2 && $i < $jumlahNilai - 2) {
        $totalNilai += $nilaiSiswa[$i];
    }
}
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $totalNilai;
?>
<?php
// $nilaiSiswa = [85,92,78,64,90,55,88,79,70,96];
// $nilaiLulus = [];

// foreach ($nilaiSiswa as $nilai) {
//     if ($nilai >= 70) {
//         $nilaiLulus[] =  $nilai;
//     }
// }
// echo "Daftar nilai siswa yang lulus: " .implode(',',$nilaiLulus);

// $daftarKaryawan = [
//     ['Alice', 7],
//     ['Bob', 3],
//     ['Charlie', 9],
//     ['David', 5],
//     ['Eva', 6],
// ];

// $karyawanPengalamanLimaTahun = [];

// foreach ($daftarKaryawan as $karyawan) {
//     if ($karyawan[1] > 5) {
//         $karyawanPengalamanLimaTahun[] = $karyawan[0];
//     }
// }
// echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(',', $karyawanPengalamanLimaTahun);

// $daftarNilai = [
//     'Matematika' => [
//         ['Alice', 85],
//         ['Bob', 92],
//         ['Charlie', 78],
//     ],
//     'Fisika' => [
//         ['Alice', 90],
//         ['Bob', 88],
//         ['Charlie', 75],
//     ],
//     'Kimia' => [
//         ['Alice', 92],
//         ['Bob', 80],
//         ['Charlie', 85],
//     ],
// ];

// $mataKuliah = 'Fisika';

// echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

// foreach ($daftarNilai[$mataKuliah] as $nilai) {
//     echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
// }


$nilai_siswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];


$total_nilai = 0;
$jumlah_siswa = 0;

foreach ($nilai_siswa as $nilai) {
    $total_nilai += $nilai;
    $jumlah_siswa++;
}

$rata_rata = $total_nilai / $jumlah_siswa;

echo "Rata-rata kelas: " . $rata_rata . "<br><br>";

echo "Daftar siswa yang mendapatkan nilai di atas rata-rata:<br>";

foreach ($nilai_siswa as $nama => $nilai) {
    if ($nilai > $rata_rata) {
        echo "Nama: $nama, Nilai: $nilai<br>";
    }
}
?>


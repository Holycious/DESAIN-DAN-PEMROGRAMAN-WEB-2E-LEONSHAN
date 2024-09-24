<?php
// Jumlah poin yang dikumpulkan pemain
$poin_pemain = 520;

echo "Total skor pemain adalah: " . $poin_pemain . "<br>";

if ($poin_pemain > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>

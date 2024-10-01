
<?php
$x = 75;
$y = 25;

function penjumlahan() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

penjumlahan();
echo $z;  
?>






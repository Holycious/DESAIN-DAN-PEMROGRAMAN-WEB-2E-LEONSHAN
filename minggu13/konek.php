<?php
$host = "LAPTOP-AQ8AA8CK";

$connInfo = array("Database" => "TSQL", "UID" => "", "PWD" => "");
$conn = sqlsrv_connect($host, $connInfo);

if ($conn) {
    echo "Koneksi berhasil.<br />";
} else {
    echo "Koneksi Gagal";
    die(print_r(sqlsrv_errors(), true));
}?>

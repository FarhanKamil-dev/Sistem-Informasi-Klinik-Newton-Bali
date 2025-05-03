<?php
$host = "localhost";
$user = "u440963478_klinikjakarta";
$pass = "!!!Klnkjkrt867";
$db   = "u440963478_klinikjakarta";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bag_shop";

   // untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "";
// mysqli_close($conn);
?>



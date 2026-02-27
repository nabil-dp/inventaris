<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM barang WHERE id='$id'");

if($query) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data!";
}
?>
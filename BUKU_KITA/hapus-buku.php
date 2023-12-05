<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM buku WHERE id = '$id'";

if($koneksi->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
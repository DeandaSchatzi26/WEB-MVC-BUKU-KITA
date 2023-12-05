<?php

// include koneksi database
include('koneksi.php');

// get data dari form
$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];
$kategori= $_POST['kategori_id'];
$harga = $_POST['harga'];


// query insert data ke dalam database
$query = "INSERT INTO buku (judul, penerbit, pengarang, tahun, kategori_id, harga) VALUES ('$judul', '$penerbit', '$pengarang', '$tahun', '$kategori', '$harga')";

// kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    // redirect ke halaman index.php
    header("location: index.php");

}else{

    // pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>
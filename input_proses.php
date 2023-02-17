<?php

include 'koneksi.php';

if (isset($_POST['input'])) {

    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $kategori = $_POST['kategori'];

    $query = "INSERT INTO tb_buku VAlUES (NULL ,'$kode_buku','$judul_buku','$penulis','$penerbit','$kategori' )";
    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query gagal dijalankan: " .mysqli_errno($link).
        " - ".mysqli_error($link));
    }
}

header("location:index.php")
?>
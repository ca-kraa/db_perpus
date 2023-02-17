<?php
if (isset($_POST['edit'])) {
    include("koneksi.php");

    $id = $_POST['id'];
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $kategori = $_POST['kategori'];

    $query  = "UPDATE tb_buku SET ";
    $query .= "kode_buku = '$kode_buku', judul_buku = '$judul_buku', ";
    $query .= "penulis = '$penulis', ";
    $query .= "penerbit = '$penerbit', kategori = '$kategori' ";
    $query .= "WHERE id = '$id' ";

    $result = mysqli_query($link, $query);


    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
}


header("location:index.php");
?>
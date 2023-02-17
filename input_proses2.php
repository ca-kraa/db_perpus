<?php

include 'koneksi.php';

if (isset($_POST['input'])) {

    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO tb_anggota VAlUES (NULL ,'$id_anggota','$nama','$kelas','$jurusan')";
    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query gagal dijalankan: " .mysqli_errno($link).
        " - ".mysqli_error($link));
    }
}

header("location:index.php")
?>
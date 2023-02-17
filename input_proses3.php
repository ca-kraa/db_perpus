<?php

include 'koneksi.php';

if (isset($_POST['input'])) {

    $id_pegawai = $_POST['id_pegawai'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];


    $query = "INSERT INTO tb_pegawai VAlUES (NULL ,'$id_pegawai','$nama','$jabatan','$alamat')";
    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query gagal dijalankan: " .mysqli_errno($link).
        " - ".mysqli_error($link));
    }
}

header("location:index.php")
?>
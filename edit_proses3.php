<?php
if (isset($_POST['edit'])) {
    include("koneksi.php");

    $id = $_POST['id'];
    $id_pegawai = $_POST['id_pegawai'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $alamat = $_POST['alamat'];

    $query  = "UPDATE tb_pegawai SET ";
    $query .= "id_pegawai = '$id_pegawai', nama = '$nama', ";
    $query .= "jabatan = '$jabatan', ";
    $query .= "alamat = '$alamat' ";
    $query .= "WHERE id = '$id' ";

    $result = mysqli_query($link, $query);


    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
}


header("location:index.php");
?>
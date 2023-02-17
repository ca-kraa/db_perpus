<?php
if (isset($_POST['edit'])) {
    include("koneksi.php");

    $id = $_POST['id'];
    $kode_buku = $_POST['kode_buku'];
    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $query  = "UPDATE tb_anggota SET ";
    $query .= "id_anggota = '$id_anggota', nama = '$nama', ";
    $query .= "kelas = '$kelas', ";
    $query .= "jurusan = '$jurusan' ";
    $query .= "WHERE id = '$id' ";

    $result = mysqli_query($link, $query);


    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }
}


header("location:index.php");
?>
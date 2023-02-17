<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = ($_GET['id']);

    $query = "SELECT * FROM tb_anggota WHERE id='$id'";
    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query Error: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
    $id_anggota = $data['id_anggota'];
    $nama = $data['nama'];
    $kelas = $data['kelas'];
    $jurusan = $data['jurusan'];

} else {
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            .container{
                width: 400px;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <h1>Edit Data</h1>
        <div class="container">
            <form id="form_tb_anggota" action="edit_proses2.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <fieldset>
                <legend>Edit Data Anggota</legend>
                <p>
                    <label for="id_anggota">ID Anggota : </label>
                    <input type="text" name="id_anggota" id="id_anggota" value="<?php echo $id_anggota ?>">
        </p>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
        </p>
        <p>
            <Label for="Kelas">Kelas : </label>
            <input type="text" name="kelas" id="kelas" value="<?php echo $kelas ?>">
        </p>
        <p>
            <label for = "jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan" value="<?php echo $jurusan ?>">
        </p>
        <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </form>
        </div>
    </body>
</html>
<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = ($_GET['id']);

    $query = "SELECT * FROM tb_pegawai WHERE id='$id'";
    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query Error: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
    $id_pegawai = $data['id_pegawai'];
    $nama = $data['nama'];
    $jabatan = $data['jabatan'];
    $alamat = $data['alamat'];

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
            <form id="form_tb_pegawai" action="edit_proses3.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <fieldset>
                <legend>Edit Data Pegawai</legend>
        </p>
        <p>
                    <label for="id_pegawai">ID Pegawai : </label>
                    <input type="text" name="id_pegawai" id="buku" value="<?php echo $id_pegawai ?>">
        </p>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
        </p>
        <p>
            <Label for="jabatan">Jabatan : </label>
            <input type="text" name="jabatan" id="jabatan" value="<?php echo $nama ?>">
        </p>
        <p>
            <Label for="jabatan">Jabatan : </label>
            <input type="text" name="jabatan" id="jabatan" value="<?php echo $jabatan ?>">
        </p>
        <p>
        <label for = "alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>">
        </p>
        </p>
        <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </form>
        </div>
    </body>
</html>
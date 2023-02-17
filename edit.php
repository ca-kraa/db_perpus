<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = ($_GET['id']);

    $query = "SELECT * FROM tb_buku WHERE id='$id'";
    $result = mysqli_query($link, $query);

    if(!$result){
        die ("Query Error: ".mysqli_errno($link).
        " - ".mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);
    $kode_buku = $data['kode_buku'];
    $judul_buku = $data['judul_buku'];
    $penulis = $data['penulis'];
    $penerbit = $data['penerbit'];
    $kategori = $data['kategori'];

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
            <form id="form_tb_buku" action="edit_proses.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <fieldset>
                <legend>Edit Data Buku</legend>
        </p>
        <p>
                    <label for="kode_buku">Kode Buku : </label>
                    <input type="text" name="kode_buku" id="kode_buku">
        </p>
        <p>
            <label for="judul_buku">Judul buku : </label>
            <input type="text" name="judul_buku" id="judul_buku" value="<?php echo $judul_buku ?>">
        </p>
        <p>
            <Label for="penulis">Penulis : </label>
            <input type="text" name="penulis" id="penulis" value="<?php echo $penulis ?>">
        </p>
        <p>
            <label for = "penerbit">Penerbit : </label>
            <input type="text" name="penerbit" id="penerbit" value="<?php echo $penerbit ?>">
        </p>
        <p>
        <label for = "kategori">Kategori : </label>
            <input type="text" name="kategori" id="kategori" value="<?php echo $kategori ?>">
        </p>
        <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </form>
        </div>
   </body>
</html>
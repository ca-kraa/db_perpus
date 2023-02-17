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
    <h1>Input Data</h1>
    <div class="container">
        <form id="form_tb_buku" action="input_proses.php" method="post">
            <fieldset>
                <legend>Input Data Buku</legend>
                <p>
                    <label for="kode_buku">Kode Buku : </label>
                    <input type="text" name="kode_buku" id="buku">
        </p>
        <p>
            <label for="judul_buku">Judul buku : </label>
            <input type="text" name="judul_buku" id="judul_buku">
        </p>
        <p>
            <Label for="penulis">Penulis : </label>
            <input type="text" name="penulis" id="penulis">
        </p>
        <p>
            <label for = "penerbit">Penerbit : </label>
            <input type="text" name="penerbit" id="penerbit">
        </p>
        <p>
        <label for = "kategori">Kategori : </label>
            <input type="text" name="kategori" id="kategori">
        </p>

        </fieldset>
        <p>
            <input type="submit" name="input" value="Tambah Data">
        </p>
        </form>
        </div>
        </body>
        </html>
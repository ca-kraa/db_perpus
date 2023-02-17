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
    <h1>Input Data Anggota</h1>
    <div class="container">
        <form id="form_tb_anggota" action="input_proses2.php" method="post">
            <fieldset>
                <legend>Input Data</legend>

                <p>
                    <label for="kode_buku">Kode Buku : </label>
                    <input type="text" name="kode_buku" id="kode_buku">
        </p>
                <p>
                    <label for="id_anggota">ID Anggota : </label>
                    <input type="id_anggota" name="id_anggota" id="id_anggota">
        </p>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
        </p>
        <p>
            <Label for="kelas">Kelas : </label>
            <input type="text" name="kelas" id="kelas">
        </p>
        <p>
            <label for = "jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan">
        </p>

        </fieldset>
        <p>
            <input type="submit" name="input" value="Tambah Data">
        </p>
        </form>
        </div>
        </body>
        </html>
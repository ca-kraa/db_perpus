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
    <h1>Input Data Pegawai</h1>
    <div class="container">
        <form id="form_tb_pegawai" action="input_proses3.php" method="post">
            <fieldset>
                <legend>Input Data</legend>
                <p>
                    <label for="id_pegawai">ID Anggota : </label>
                    <input type="text" name="id_pegawai" id="buku">
        </p>
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
        </p>
        <p>
            <Label for="jabatan">Jabatan : </label>
            <input type="text" name="jabatan" id="jabatan">
        </p>
        <p>
        <label for = "alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat">
        </p>

        </fieldset>
        <p>
            <input type="submit" name="input" value="Tambah Data">
        </p>
        </form>
        </div>
        </body>
        </html>
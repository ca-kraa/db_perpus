<?php
     include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                width: 840px;
                margin: auto;
            }
            h1{
                text-align: center;
            }
            </style>
        </head>
    <body>
        <h1>Tabel Perpustakaan</h1>
        <fieldset>
        <center><a href="input.php">Input Data Buku &Gt; </a></center>
        <br/>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Kategori</th>
                <th>Pilihan</th>
        </tr>
        <?php

        $query = "SELECT * FROM tb_buku ORDER BY kode_buku ASC";
        $result = mysqli_query($link, $query);
        
        if(!$result){
            die ("Query Error : " .mysqli_errno($link).
            " - " .mysqli_error($link));
        }

        $no = 1;
        while($data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$data[kode_buku]</td>";
            echo "<td>$data[judul_buku]</td>";
            echo "<td>$data[penulis]</td>";
            echo "<td>$data[penerbit]</td>";
            echo "<td>$data[kategori]</td>";

            echo '<td>
            <a href="edit.php?id='.$data['id'].'">Edit</a> /
            <a href="hapus.php?id='.$data['id'].'"
            onclick="return confirm(\'Anda Yakin Akan Menghapus Data?\')">Hapus</a>
            </td>';
            echo "</tr>";
            $no++;
        }
        ?>
        </table>
    </fieldset>
    <p>
    <fieldset>
    <center><a href="input2.php">Input Data Anggota &Gt; </a></center>
        <br/>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Pilihan</th>
        </tr>
        <?php

        $query = "SELECT * FROM tb_anggota ORDER BY id_anggota ASC";
        $result = mysqli_query($link, $query);
        
        if(!$result){
            die ("Query Error : " .mysqli_errno($link).
            " - " .mysqli_error($link));
        }

        $no = 1;
        while($data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$data[id_anggota]</td>";
            echo "<td>$data[nama]</td>";
            echo "<td>$data[kelas]</td>";
            echo "<td>$data[jurusan]</td>";

            echo '<td>
            <a href="edit2.php?id='.$data['id'].'">Edit</a> /
            <a href="hapus2.php?id='.$data['id'].'"
            onclick="return confirm(\'Anda Yakin Akan Menghapus Data?\')">Hapus</a>
            </td>';
            echo "</tr>";
            $no++;
        }
        ?>
        </table>
    </fieldset>
    </p>
    <p>
    <fieldset>
    <center><a href="input3.php">Input Data Pegawai &Gt; </a></center>
        <br/>
        <table border="1">
            <tr>
                <th>No</th>
                <th>ID Pegawai</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Pilihan</th>
        </tr>
        <?php

        $query = "SELECT * FROM tb_pegawai ORDER BY id_pegawai ASC";
        $result = mysqli_query($link, $query);
        
        if(!$result){
            die ("Query Error : " .mysqli_errno($link).
            " - " .mysqli_error($link));
        }

        $no = 1;
        while($data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$data[id_pegawai]</td>";
            echo "<td>$data[nama]</td>";
            echo "<td>$data[jabatan]</td>";
            echo "<td>$data[alamat]</td>";

            echo '<td>
            <a href="edit3.php?id='.$data['id'].'">Edit</a> /
            <a href="hapus3.php?id='.$data['id'].'"
            onclick="return confirm(\'Anda Yakin Akan Menghapus Data?\')">Hapus</a>
            </td>';
            echo "</tr>";
            $no++;
        }
        ?>
        </table>
    </fieldset>
    </p>
    </body>
    </html>
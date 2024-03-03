<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="proses.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <td><label for="">Judul</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="Judul" id="Judul">
                    </td>
                </tr>
                <tr>
                    <td><label for="tanggal-post">Tanggal posting </label></td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal-post" id="tanggal-post">
                    </td>
                </tr>

                <tr>
                    <td><label for="">Artikel</label></td>
                    <td>:</td>
                    <td>
                        <textarea name="artikel" id="artikel" cols="30" rows="10"></textarea>
                    </td>
                </tr>
            </table>
            <button type="submit">simpan</button>
        </form>
    </center>
</body>
</html>
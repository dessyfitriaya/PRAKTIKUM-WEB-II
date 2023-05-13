<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Buku</title>
        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
            table { margin-bottom: 15px; }
        </style>
    </head>
    <body>
        <table>
            <form action="Model.php" method="post">
                <?php
                    include "koneksi.php";

                    $ambilData = mysqli_query($koneksi, "SELECT * FROM buku");
                    echo "<h2>Daftar Buku</h2>";
                    echo "<tr>
                        <td>ID Buku</td>
                        <td>Judul Buku</td>
                        <td>Penulis</td>
                        <td>Penerbit</td>
                        <td>Tahun Terbit</td>
                        <td colspan='2'>Perintah</td>
                    </tr>";

                    while($tampil = mysqli_fetch_array($ambilData)) {
                        echo 
                        "<tr>
                            <td>$tampil[id_buku]</td>
                            <td>$tampil[judul_buku]</td>
                            <td>$tampil[penulis]</td>
                            <td>$tampil[penerbit]</td>
                            <td>$tampil[tahun_terbit]</td>
                            <td><a href='?kode=$tampil[id_buku]'>Hapus</a></td>"
                ?>
                            <td><a href='Model.php?kode=$tampil[id_buku]'>Edit</a></td>
                <?php
                        echo "</tr>";
                    }
                ?>
            </form>
        </table>
        <?php
            echo "<a href='FormBuku.php'>Input buku baru</a><br>";
        ?>
    </body>
</html>

<?php
    include "koneksi.php";

    if(isset($_GET['kode'])) {
        mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$_GET[kode]'");

        echo "<meta http-equiv=refresh content=2;URL='Buku.php'>";
    }
?>
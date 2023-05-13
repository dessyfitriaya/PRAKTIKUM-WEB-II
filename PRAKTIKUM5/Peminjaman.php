<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Peminjaman</title>
        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
            table { 
                margin-bottom: 15px; 
            }
        </style>
    </head>
    <body>
        <table>
            <form action="Model.php" method="post">
                <tr>
                    <td>ID Peminjaman</td>
                    <td>Tanggal Pinjam</td>
                    <td>Tanggal Kembali</td>
                    <td colspan='2'>Perintah</td>
                </tr>
           
                <?php
                    include "koneksi.php";

                    $ambilData = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                    echo "<h2>Daftar Peminjaman</h2>";

                    while($tampil = mysqli_fetch_array($ambilData)) {
                        echo 
                        "<tr>
                            <td>$tampil[id_peminjaman]</td>
                            <td>$tampil[tgl_pinjam]</td>
                            <td>$tampil[tgl_kembali]</td>
                            <td><a href='?kode=$tampil[id_peminjaman]'>Hapus</a></td>";
                ?>
                            <td><a href='Model.php?kode=$tampil[id_buku]'>Edit</a></td>
                <?php
                        echo "</tr>";
                    }
                ?>
            </form>
        </table>
        <?php
            echo "<a href='FormPeminjaman.php'>Input peminjaman</a><br>";
        ?>
    </body>
</html>

<?php
    include "koneksi.php";

    if(isset($_GET['kode'])) {
        mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman='$_GET[kode]'");

        echo "<meta http-equiv=refresh content=2;URL='Peminjaman.php'>";
    }
?>

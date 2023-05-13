<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Member</title>
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
                <?php
                    include "koneksi.php";

                    $ambilData = mysqli_query($koneksi, "SELECT * FROM member");
                    echo "<h2>Daftar Member</h2>";

                    while($tampil = mysqli_fetch_array($ambilData)) {
                        echo 
                        "<tr>
                            <td>$tampil[id_member]</td>
                            <td>$tampil[nama_member]</td>
                            <td>$tampil[nomor_member]</td>
                            <td>$tampil[alamat]</td>
                            <td>$tampil[tgl_mendaftar]</td>
                            <td>$tampil[tgl_terakhir_bayar]</td>
                            <td><a href='?hapus=$tampil[id_member]'>Hapus</a></td>";
                ?>
                            <td><a href='Model.php?kode=$tampil[id_buku]'>Edit</a></td>
                <?php
                        echo "</tr>";
                    }
                ?>
            </form>
        </table>
        <?php
            echo "<a href= FormMember.php'>Input member</a><br>";
        ?>
    </body>
</html>

<?php
    include "koneksi.php";

    if(isset($_GET['hapus'])) {
        mysqli_query($koneksi, "DELETE FROM member WHERE id_member='$_GET[hapus]'");

        echo "<meta http-equiv=refresh content=2;URL='Member.php'>";
    }
?>

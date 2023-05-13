<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Utama</title>
        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
                background-color: #FFE87C;
            }
            .main {
                padding: 50px;
                background-color: #FFF9C4;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td><a href="FormMember.php">Form Member</a></td>
                <td><a href="FormBuku.php">Form Buku</a></td>
                <td><a href="FormPeminjaman.php">Form Peminjaman</a></td>
            </tr>
            <tr>
                <td><a href="Member.php">List Member</a></td>
                <td><a href="Buku.php">List Buku</a></td>
                <td><a href="Peminjaman.php">List Peminjaman</a></td>
            </tr>
            <tr>
                <td colspan='3' class='main'>Selamat datang di Perpustakaan Matahari!</td>
            </tr>
        </table>
    </body>
</html>
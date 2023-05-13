<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Peminjaman</title></head>
        <style>
            table {
                padding-bottom: 15px;
            }
            th {
                padding-right: 30px;
                text-align: left;
            }
        </style>
    <body>
        <form action="Model.php" method="post">
            <table>
                <tr>
                    <th>Tanggal Peminjaman</th>
                    <td><input type="date" name="pinjam"/></td>
                </tr>
                <tr>
                    <th>Tanggal Kembali</th>
                    <td><input type="date" name="kembali"/></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="input3">Input</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>
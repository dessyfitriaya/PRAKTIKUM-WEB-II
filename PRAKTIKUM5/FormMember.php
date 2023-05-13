<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Member</title></head>
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
                    <th>Nama</th>
                    <td><input type="text" name="nama"/></td>
                </tr>
                <tr>
                    <th>Nomor Member</th>
                    <td><input type="text" name="nomor"/></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat"/></td>
                </tr>
                <tr>
                    <th>Tanggal Mendaftar</th>
                    <td><input type="date" name="daftar"/></td>
                </tr>
                <tr>
                    <th>Tanggal Terakhir Bayar</th>
                    <td><input type="date" name="bayar"/></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="input1">Input</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>
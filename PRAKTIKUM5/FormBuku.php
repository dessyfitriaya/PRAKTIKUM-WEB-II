<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Buku</title></head>
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
                    <th>Judul Buku</th>
                    <td><input type="text" name="judul"/></td>
                </tr>
                <tr>
                    <th>Penulis</th>
                    <td><input type="text" name="penulis"/></td>
                </tr>
                <tr>
                    <th>Penerbit</th>
                    <td><input type="text" name="penerbit"/></td>
                </tr>
                <tr>
                    <th>Tahun Terbit</th>
                    <td><input type="number" name="tahun_terbit"/></td>
                </tr>
                <tr>
                    <td>  </td>
                    <td><button type="submit" name="input2">Input</button></td>
                    <td>  </td>
                </tr>
            </table>
        </form>
    </body>
</html>
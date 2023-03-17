<html>
    <head></head>
    <body>
        <style>
            table, th, td {
                border: 1px solid black;
            }
            th {
                padding-top: 20px;
                padding-bottom: 20px;
                font-size: 30px;
                background: red;
            }
        </style>
        <?php
            $samsung = [
                "s22" => "Samsung Galaxy S22",
                "s22+" => "Samsung Galaxy S22+",
                "a03" => "Samsung Galaxy A03",
                "xc5" => "Samsung Galaxy Xcover 5"];
        ?>
        <main>
            <table>
                <tr>
                    <th>
                        <?php echo "Daftar Smartphone Samsung"?>
                    </th>
                </tr>
                <tr>
                    <td><?php echo $samsung["s22"]?></td>
                </tr>
                <tr>
                    <td><?php echo $samsung["s22+"]?></td>
                </tr>
                <tr>
                    <td><?php echo $samsung["a03"]?></td>
                </tr>
                <tr>
                    <td><?php echo $samsung["xc5"]?></td>
                </tr>
            </table>
        </main>
    </body>
</html>
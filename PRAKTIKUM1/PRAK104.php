<html>
    <head></head>
    <body>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
        <?php
            $samsung = [
                "Samsung Galaxy S22",
                "Samsung Galaxy S22+",
                "Samsung Galaxy A03",
                "Samsung Galaxy Xcover 5"];
        ?>
        <main>
            <table>
                <tr>
                    <th><?php echo "Daftar Smartphone Samsung"?></th>
                </tr>
                <tr>
                    <td><?php echo $samsung[0]?></td>
                </tr>
                <tr>
                    <td><?php echo $samsung[1]?></td>
                </tr>
                <tr>
                    <td><?php echo $samsung[2]?></td>
                </tr>
                <tr>
                    <td><?php echo $samsung[3]?></td>
                </tr>
            </table>
        </main>
    </body>
</html>
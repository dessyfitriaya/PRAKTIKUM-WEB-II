<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK401</title>
        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            td {
                padding: 5px;
            }
        </style>
    </head>

    <body>
        <form>
            Panjang : <input type="number" name="panjang" /><br>
            Lebar : <input type="number" name="lebar" /><br>
            Nilai : <input type="text" name="nilai" /><br>
            <button type="submit">Cetak</button><br>

            <?php
                if(isset($_GET['panjang']) && isset($_GET['lebar']) && isset($_GET['nilai'])) {
                    $panjang = $_GET['panjang'];
                    $lebar = $_GET['lebar'];
                    $nilai = $_GET['nilai'];
                    $index = 0;

                    $no_space = explode(" ", $nilai);
                    $element_amount = count($no_space);

                    if(($panjang * $lebar) !== $element_amount) {
                        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
                    }
                    else {
                        echo "<table>";
                        for($a = 0; $a < $lebar; $a++) {
                            echo "<tr>";
                            for($b = 0; $b < $panjang; $b++) {
                                echo "<td> $no_space[$index] </td>";
                                $index++;
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
            ?>
        </form>
    </body>
</html>
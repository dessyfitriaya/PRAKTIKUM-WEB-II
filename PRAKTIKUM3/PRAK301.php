<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK301</title>
        <style>
            .ganjil {
                color: red;
            }
            .genap {
                color: green;
            }
        </style>
    </head>
    <body>
        <form>
            Jumlah peserta: <input type="number" name="jumlah"/>
            <br>
            <button type="submit" name="tombol">Cetak</button>
        </form>

        <?php 
            if(isset($_GET['jumlah'])) {

                $jumlahPeserta = $_GET['jumlah'];
                $increment = 1;

                while($jumlahPeserta >= $increment) {
                    if($increment % 2 == 0) {
                        echo "<h2><div class='genap'>Peserta ke-$increment</div></h2>";
                    }
                    elseif($increment % 2 != 0) {
                        echo "<h2><div class='ganjil'>Peserta ke-$increment</div></h2>";
                    }
                    $increment+=1;
                }
            }
            else { echo ""; }
        ?>
    </body>
</html>
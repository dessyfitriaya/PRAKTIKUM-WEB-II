<html> 
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK204</title>
    </head>
    <body>
        <form method="get">
            Nilai : <input type="number" name="nilai"><br>
            <button type="submit" name="konversi">Konversi</button>

            <?php
                if(isset($_GET['konversi']) && $_GET['nilai'] != null) {
                    if($_GET['nilai'] == 0){
                        echo "<br><br>Nol";
                    }
                    elseif($_GET['nilai'] > 0 && $_GET['nilai'] < 10) {
                        echo "<h3>Hasil: Satuan</h3>";
                    }
                    elseif($_GET['nilai'] > 10 && $_GET['nilai'] < 20) {
                        echo "<h3>Hasil: Belasan</h3>";
                    }
                    elseif($_GET['nilai'] == 10 || ($_GET['nilai'] > 19 && $_GET['nilai'] < 100)) {
                        echo "<h3>Hasil: Puluhan</h3>";
                    }
                    elseif($_GET['nilai'] > 99 && $_GET['nilai'] < 1000) {
                        echo "<h3>Hasil: Ratusan</h3>";
                    }
                    else{
                        echo "<br><br>Anda Menginput Melebihi Limit Bilangan";
                    }
                }
            ?>
        </form>
    </body>
</html>
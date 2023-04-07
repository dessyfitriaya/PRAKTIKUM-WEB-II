<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK303</title>
    </head>
    <body>
        <form>
            Batas Bawah : <input type="number" name="bawah"/>
            <br>
            Batas Atas : <input type="number" name="atas"/>
            <br>
            <button type="submit">Cetak</button>
        </form>

        <?php
            if(isset($_GET['atas']) && isset($_GET['bawah'])) {
                $atas = $_GET['atas'];
                $bawah = $_GET['bawah'];
                $url = 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Twemoji_1f600.svg/1200px-Twemoji_1f600.svg.png';

                do {
                    if(($bawah + 7) % 5 == 0) {
                        echo "<img src=$url alt='star' style='width:20px;'>";
                    }
                    else {
                        echo " $bawah ";
                    }
                    $bawah++;
                }
                while($bawah <= $atas);
            }
        ?>
    </body>
</html>
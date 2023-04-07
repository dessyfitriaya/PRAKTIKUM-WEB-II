<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equix="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK304</title>
    </head>
    <body>
        <?php
            $gambar = 'https://freepngimg.com/download/icon/1000317-clown-emoji-[download-iphone-emojis]-icon-download-free.png';

            if(isset($_GET['jumlah'])) {
                $jumlah = $_GET['jumlah']; 
            }
            if(isset($_GET['tambah'])) {
                $jumlah += 1; 
            }
            if(isset($_GET['kurang'])) {
                $jumlah -= 1; 
            }
            if(empty($jumlah)) {
        ?>
            <form method="get">
                Jumlah badut <input type="number" name="jumlah" />
                <br>
                <input type="submit" name="kirim"/>
            </form>
        <?php
            }
            elseif(!empty($jumlah)) {
                echo "Jumlah badut: $jumlah<br>";
                echo "<br>";
                for($x = 1; $x <= $jumlah; $x++) {
                    echo "<img src=$gambar alt='emoji' style='width:40px'>";
                }
        ?>
                <br>
                <input type="text" name="jumlah" value="<?=$jumlah?>" hidden>
                <button type="submit" name="tambah">Tambah</button>
                <button type="submit" name="kurang">Kurang</button>
        <?php
            }
        ?>
    </body>
</html>
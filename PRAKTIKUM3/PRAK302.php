<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK302</title>
        <style>
            .putih {
                color: white;
                display: inline;
            }
        </style>
    </head>
    <body>
        <form>
            Tinggi: <input type="number" name="tinggi" />
            <br>
            Alamat Gambar: <input type="text" name="gambar" />
            <br>
            <button type="submit" name="tombol">Cetak</button>
        </form>

        <?php
            if(isset($_GET['tinggi']) && isset($_GET['gambar']) && isset($_GET['tombol'])) {

                $tinggi = $_GET['tinggi'];
                $gambar = $_GET['gambar'];
                $increment1 = 1;
                $increment2 = 1;
                    
                while($tinggi >= $increment1) {
                    echo "<img src=$gambar alt='gambar' style='width:40px'>";
                    $increment1++;
                }
                echo "<br>";
                while(($tinggi-1) >= $increment2) {
                    for($x = 1; $x <= $increment2; $x++) {
                        echo "<div class='putih'>%%%</div>";
                    }
                    for($y = ($tinggi-1); $y >= $increment2; $y--) {
                        echo "<img src=$gambar alt='gambar' style='width:40px'>";
                    }
                    echo "<br>";
                    $increment2++;
                }
            }
        ?>
    </body>
</html>
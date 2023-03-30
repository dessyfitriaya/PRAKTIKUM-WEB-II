<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK203</title>
    </head>
    <body>
        <form method="get">
            Nilai : <input type="number" name="nilai"><br>
            Dari : <br>
            <input type="radio" id="celcius1" name="dari" value="celcius">
            <label for="celcius1">Celcius</label><br>
            
            <input type="radio" id="fahrenheit2" name="dari" value="fahrenheit">
            <label for="fahrenheit2">Fahrenheit</label><br>

            <input type="radio" id="reamur3" name="dari" value="reamur">
            <label for="reamur3">Reamur</label><br>

            <input type="radio" id="kelvin4" name="dari" value="kelvin">
            <label for="kelvin4">Kelvin</label><br>

            Ke : <br>
            <input type="radio" id="celcius1" name="ke" value="celcius">
            <label for="celcius1">Celcius</label><br>
            
            <input type="radio" id="fahrenheit2" name="ke" value="fahrenheit">
            <label for="fahrenheit2">Fahrenheit</label><br>

            <input type="radio" id="reamur3" name="ke" value="reamur">
            <label for="reamur3">Reamur</label><br>

            <input type="radio" id="kelvin4" name="ke" value="kelvin">
            <label for="kelvin4">Kelvin</label><br>
            
            <button type="submit" name="tombol">Konversi</button>
        </form>

        <?php
            if(isset($_GET['nilai']) && isset($_GET['dari']) && isset($_GET['ke'])) {
                if($_GET['dari'] == "celcius") {
                    if($_GET['ke'] == "reamur"){
                        $hasil = $_GET['nilai'] * (4/5);
                        echo "<h3>Hasil Konversi: $hasil °R</h3>";
                    }
                    elseif($_GET['ke'] == "fahrenheit"){
                        $hasil = $_GET['nilai'] * (9/5) + 32;
                        echo "<h3>Hasil Konversi: $hasil °F</h3>";
                    }
                    elseif($_GET['ke'] == "kelvin"){
                        $hasil = $_GET['nilai'] + 273;
                        echo "<h3>Hasil Konversi: $hasil °K</h3>";
                    }
                    else {
                        echo "<h3>Hasil Konversi: $suhu °C</h3>";
                    }
                }
                elseif($_GET['dari'] == "reamur") {
                    if ($_GET['ke'] == "celcius"){
                        $hasil = $_GET['nilai'] * (5/4);
                        echo "<h3>Hasil Konversi: $hasil °C</h3>";
                    }
                    elseif($_GET['ke'] == "fahrenheit"){
                        $hasil = $_GET['nilai'] * (9/4) + 32;
                        echo "<h3>Hasil Konversi: $hasil °F</h3>";
                    }
                    elseif($_GET['ke'] == "kelvin"){
                        $hasil = $_GET['nilai'] * (5/4) + 273;
                        echo "<h3>Hasil Konversi: $hasil °K</h3>";
                    }
                    else {
                        echo "<h3>Hasil Konversi: $suhu °R</h3>";
                    }
                }
                elseif($_GET['dari'] == "fahrenheit") {
                    if($_GET['ke'] == "reamur"){
                        $hasil = ($_GET['nilai'] - 32) * (4/9);
                        echo "<h3>Hasil Konversi: $hasil °R</h3>";
                    }
                    elseif($_GET['ke'] == "celcius"){
                        $hasil = ($_GET['nilai'] - 32) * (5/9);
                        echo "<h3>Hasil Konversi: $hasil °C</h3>";
                    }
                    elseif($_GET['ke'] == "kelvin"){
                        $hasil = ($_GET['nilai'] - 32) * (5/9) + 273;
                        echo "<h3>Hasil Konversi: $hasil °K</h3>";
                    }
                    else {
                        echo "<h3>Hasil Konversi: $suhu °F</h3>";
                    }
                }
                elseif($_GET['dari'] == "Kelvin"){
                    if($_GET['ke'] == "reamur"){
                        $hasil = ($_GET['nilai'] - 273) * (4/5);
                        echo "<h3>Hasil Konversi: $hasil °R</h3>";
                    }
                    elseif($_GET['ke'] == "fahrenheit"){
                        $hasil = ($_GET['nilai'] - 273) * (5/9) + 32;
                        echo "<h3>Hasil Konversi: $hasil °F</h3>";
                    }
                    elseif($_GET['ke'] == "celcius"){
                        $hasil = $_GET['nilai'] - 273;
                        echo "<h3>Hasil Konversi: $hasil °C</h3>";
                    }
                    else {
                        echo "<h3>Hasil Konversi: $suhu °F</h3>";
                    }
                }
            }
        ?>
    </body>
</html>
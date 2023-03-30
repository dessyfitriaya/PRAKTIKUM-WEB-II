<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK201</title>
    </head>
    <body>
        <form action="" method="get">
            Nama: 1 <input type="text" name="nama1">
            <br>
            Nama: 2 <input type="text" name="nama2">
            <br>
            Nama: 3 <input type="text" name="nama3">
            <br>
            <button type="submit">Urutkan</button>
        </form>

        <?php 
            if (isset($_GET['nama1']) && isset($_GET['nama2']) && isset($_GET['nama3'])) {
                if ($_GET['nama1'] < $_GET['nama2'] && $_GET['nama1'] < $_GET['nama3']) {
                    if ($_GET['nama2'] < $_GET['nama3']) {
                        echo $_GET['nama1'] . "<br>";
                        echo $_GET['nama2'] . "<br>";
                        echo $_GET['nama3'] . "<br>";
                    }
                    else {
                        echo $_GET['nama1'] . "<br>";
                        echo $_GET['nama3'] . "<br>";
                        echo $_GET['nama2'] . "<br>";
                    }
                }
                elseif ($_GET['nama2'] < $_GET['nama1'] && $_GET['nama2'] < $_GET['nama3']) {
                    if ($_GET['nama1'] < $_GET['nama3']) {
                        echo $_GET['nama2'] . "<br>";
                        echo $_GET['nama1'] . "<br>";
                        echo $_GET['nama3'] . "<br>";
                    }
                    else {
                        echo $_GET['nama2'] . "<br>";
                        echo $_GET['nama3'] . "<br>";
                        echo $_GET['nama1'] . "<br>";
                    }
                }
                elseif ($_GET['nama3'] < $_GET['nama1'] && $_GET['nama3'] < $_GET['nama2']) {
                    if ($_GET['nama1'] < $_GET['nama2']) {
                        echo $_GET['nama3'] . "<br>";
                        echo $_GET['nama1'] . "<br>";
                        echo $_GET['nama2'];
                    }
                    else {
                        echo $_GET['nama3'] . "<br>";
                        echo $_GET['nama2'] . "<br>";
                        echo $_GET['nama1'] . "<br>";
                    }
                }
            }
            
        ?>
    </body>
</html>
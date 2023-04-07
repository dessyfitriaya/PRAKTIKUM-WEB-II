<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK305</title>
    </head>
    <body>
        <form>
            <input type="text" name="input">
            <button type="submit" name="tombol">submit</button>
        </form>

        <?php
            if(isset($_GET['input'])) {

                $input = $_GET['input'];
                $input_nospace = str_replace(" ", "", $input);
                $counter = 0;

                for($x = 0; $x < strlen($input_nospace); $x++) {
                    echo strtoupper(substr($input_nospace, $x, 1));
                    while($counter < strlen($input_nospace)-1) {
                        echo strtolower(substr($input_nospace, $x, 1));
                        $counter++;
                    }
                    // membuat nilai $counter kembali menjadi 0
                    $counter = strlen($input_nospace) - ($counter+1);
                }

            }
        ?>
    </body>
</html>
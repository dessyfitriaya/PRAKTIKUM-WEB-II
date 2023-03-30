<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK202</title>
        <style>
            .text-danger {
                color: red;
            }
        </style>
    </head>
    <body>
        <form action="" method="">

            <!--input Nama-->

            Nama: <input type="text" name="nama">
            <span class="text-danger">*
                <?php if(isset($_GET['tombol']) && $_GET['nama'] == null) {
                    echo "Nama tidak boleh kosong";}
                ?>
            </span>
            
            <!--input NIM-->

            <br> NIM: <input type="text" name="nim">
            <span class="text-danger">*
                <?php if(isset($_GET['tombol']) && $_GET['nim'] == null) {
                    echo "NIM tidak boleh kosong";}
                ?>
            </span>
            
            <!--input Jenis Kelamin-->

            <br>Jenis Kelamin:
            <span class="text-danger">*
                <?php if(isset($_GET['tombol']) && isset($_GET['jk']) == null) {
                    echo "Jenis Kelamin tidak boleh kosong";}
                ?>
            </span>

            <br><input type="radio" name="jk" id="jkl" value="Laki-laki">
            <label for="jkl">Laki-laki</label><br>
            
            <input type="radio" name="jk" id="jkp" value="Perempuan">
            <label for="jkp">Perempuan</label>
            
            <!--Tombol "Submit"-->

            <br><input type="submit" name="tombol">
        </form>
        <?php
            if(isset($_GET['nama']) && isset($_GET['jk']) && $_GET['nim'] != null) {
                echo "<h3>Output:</h3>\n";
                echo $_GET['nama'] . "<br>";
                echo $_GET['nim'] . "<br>";
                echo $_GET['jk'];
            }
        ?>
    </body>
</html>
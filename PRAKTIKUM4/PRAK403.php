<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK403</title>
        <style>
            .keterangan[data-keterangan="Tidak Revisi"] {
                background-color: green;
                color: white;
            }
            .keterangan[data-keterangan="Revisi KRS"] {
                background-color: red;
                color: white;
            }
            .matkul {
                text-align: left;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
            }
            th, td {
                padding: 10px;
            }
            th {
                background-color: #d6d6d6;
            }
        </style>
    </head>
    <body>
        <?php
            $daftar_matkul = ["matkul1", "matkul2", "matkul3", "matkul4"];
            $daftar_sks = ["sks1", "sks2", "sks3", "sks4"];

            $data = [
                [
                    ["no" => "1"],
                    ["nama" => "Ridho"],
                    ["matkul1" => "Pemrograman I",
                    "matkul2" => "Praktikum Pemrograman I",
                    "matkul3" => "Pengantar Lingkungan Lahan Basah",
                    "matkul4" => "Arsitektur Komputer"],
                    ["sks1" => 2,
                    "sks2" => 1,
                    "sks3" => 2,
                    "sks4" => 3],
                    ["total_sks" => ""],
                    ["keterangan" => ""]
                ],
                [
                    ["no" => "2"],
                    ["nama" => "Ratna"],
                    ["matkul1" => "Basis Data I",
                    "matkul2" => "Praktikum Basis Data I",
                    "matkul3" => "Kalkulus"],
                    ["sks1" => 2,
                    "sks2" => 1,
                    "sks3" => 3],
                    ["total_sks" => ""],
                    ["keterangan" => ""]
                ],
                [
                    ["no" => "3"],
                    ["nama" => "Tono"],
                    ["matkul1" => "Rekayasa Perangkat Lunak",
                    "matkul2" => "Analisis dan Perancangan Sistem",
                    "matkul3" => "Komputasi Awan",
                    "matkul4" => "Kecerdasan Bisnis"],
                    ["sks1" => 3,
                    "sks2" => 3,
                    "sks3" => 3,
                    "sks4" => 3],
                    ["total_sks" => ""],
                    ["keterangan" => ""]
                ]
            ];
            
            for($a = 0; $a < count($data); $a++) {
                $data[$a][4]["total_sks"] = array_sum($data[$a][3]);
                if($data[$a][4]["total_sks"] < 7) {
                    $data[$a][5]["keterangan"] = "Revisi KRS";
                }
                if($data[$a][4]["total_sks"] > 7) {
                    $data[$a][5]["keterangan"] = "Tidak Revisi";
                }
            }

            echo "<table>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Mata Kuliah diambil</th>
                    <th>SKS</th>
                    <th>Total SKS</th>
                    <th>Keterangan</th>";
            
            for($b = 0; $b < count($data); $b++) {
                $c = $b;
                echo "<tr>
                    <td rowspan=". count($data[$b][2]) . ">" . $data[$b][0]["no"] . "</td>
                    <td rowspan=". count($data[$b][2]) . ">" . $data[$b][1]["nama"] . "</td>
                    <td class='matkul'>" . $data[$b][2][$daftar_matkul[$c!==0 ? $c=0 : $c]] . "</td>
                    <td>" . $data[$b][3][$daftar_sks[$c!==0 ? $c=0 : $c]] . "</td>
                    <td rowspan=". count($data[$b][2]) . ">" . $data[$b][4]["total_sks"] . "</td>
                    <td class='keterangan' data-keterangan='" . $data[$b][5]["keterangan"]. "' rowspan=". count($data[$b][2]) . ">" . $data[$b][5]["keterangan"] . "</td>
                </tr>";

                for($d = 1; $d < count($data[$b][2]); $d++) {
                    echo "<tr>
                        <td class='matkul'>" . $data[$b][2][$daftar_matkul[$d]] . "</td>
                        <td>" . $data[$b][3][$daftar_sks[$d]] . "</td>
                    </tr>";
                }
            }
            echo "</table>";
        ?>
    </body>
</html>
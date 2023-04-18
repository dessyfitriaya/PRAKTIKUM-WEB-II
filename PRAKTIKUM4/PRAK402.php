<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PRAK402</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
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
            $data = array(
                array("nama" => "Andi", 
                "nim" => "2101001", 
                "uts" => 87, 
                "uas" => 65,
                "nilai_akhir" => "",
                "huruf" => ""),
                array("nama" => "Budi", 
                "nim" => "2101002", 
                "uts" => 76, 
                "uas" => 79,
                "nilai_akhir" => "",
                "huruf" => ""),
                array("nama" => "Tono",
                "nim" => "2101003",
                "uts" => 50,
                "uas" => 41,
                "nilai_akhir" => "",
                "huruf" => ""),
                array("nama" => "Jessica",
                "nim" => "2101004",
                "uts" => 60,
                "uas" => 75,
                "nilai_akhir" => "",
                "huruf" => "")
            );

            for($i = 0; $i < count($data); $i++) { 
                $data[$i]["nilai_akhir"] = ($data[$i]["uts"] * 0.4) + (0.6 * $data[$i]["uas"]); 
                $rounded = $data[$i]["nilai_akhir"];
                if($rounded > 79) {
                    $data[$i]["huruf"] = "A";
                }
                if($rounded > 69 and $rounded < 80) {
                    $data[$i]["huruf"] = "B";
                }
                if($rounded > 59 and $rounded < 70) {
                    $data[$i]["huruf"] = "C";
                }
                if($rounded > 49 and $rounded < 60) {
                    $data[$i]["huruf"] = "D";
                }
                if($rounded < 50) {
                    $data[$i]["huruf"] = "E";
                }
            }

            echo "<table>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Nilai Akhir</th>
                        <th>Huruf</th>
                    </tr>";
     
            $b = 0;
            for($a = 0; $a < 4; $a++) {
                echo "<tr>";
                while ($b < count($data)) {
                    echo "<td>" . $data[$b]["nama"] . "</td>";
                    echo "<td>" . $data[$b]["nim"] . "</td>";
                    echo "<td>" . $data[$b]["uts"] . "</td>";
                    echo "<td>" . $data[$b]["uas"] . "</td>";
                    echo "<td>" . $data[$b]["nilai_akhir"] . "</td>";
                    echo "<td>" . $data[$b]["huruf"] . "</td>";
                    break;
                }
                $b++;
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$sumaWszystkich = 0;
$sumaParzystych = 0;
$sumaNieparzystych = 0;
$iloscPodzielnychPrzez3 = 0;

for ($i = 1; $i <= 100; $i++){
    $sumaWszystkich += $i;
    $opis = "";

    if ($i % 2 == 0) {
        $opis = "parzysta";
        $sumaParzystych += $i;
    } else {
        $opis = "nieparzysta";
        $sumaNieparzystych += $i;
    }

    if ($i %3 == 0) {
        $opis .= ", podzielna przez 3";
        $iloscPodzielnychPrzez3++;
    }

    echo $i . " - " . $opis . "<br>";
}

    echo "<br>";
    echo "Suma wszystkich liczb: " . $sumaWszystkich . "<br>";
    echo "Suma liczb parzystych: " . $sumaParzystych . "<br>";
    echo "Suma liczb nieparzystch: " . $sumaNieparzystych . "<br>";
    echo "Liczb podzielnych przez 3: " . $iloscPodzielnychPrzez3 . "<br>";

?>
</body>
</html>
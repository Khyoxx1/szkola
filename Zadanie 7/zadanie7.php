<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$uczniowie = [

    "Anna" => 85,
    "Jan" => 35,
    "Piotr" => 92,
    "Katarzyna" => 58,
    "Tomasz" => 71
];

function obliczProcent($punkty) {
    return ($punkty / 100) * 100;
}
//zadanie 1
function przyznajOcene($punkty) {
    
    if ($punkty >= 90) {
        return 5;
    } elseif ($punkty >= 80) {
        return 4;
    }
    elseif ($punkty >= 60) {
        return 3;
    }
    elseif ($punkty >= 40) {
        return 2;
    }
    else {
        return 1;
    }
}

function czyZdal($punkty) {
    return $punkty >= 40;
}

//zadanie 2

foreach ($uczniowie as $imie => $punkty) {
    $ocena = przyznajOcene($punkty);
    $status = czyZdal($punkty) ? "Zaliczone" : "Niezaliczone";
    echo "$imie: $punkty pkt, ocena: $ocena, status: $status<br>";
}

echo "<br>";

//zadanie 4

$punktyWartosci = array_values($uczniowie);
$liczbaUczniow = count($punktyWartosci);
$suma = 0;

for ($i = 0; $i < $liczbaUczniow; $i++) {
    $suma += $punktyWartosci[$i];
}

$srednia = $suma / $liczbaUczniow;

echo "Suma punktów: $suma<br>";
echo "Średnia punktów: $srednia<br><br>";

//zadanie 5

$zdali = [];
$nieZdali = [];

foreach ($uczniowie as $imie => $punkty) {
    if (czyZdal($punkty)) {
        $zdali[] = $imie;
    } else {
        $nieZdali[] = $imie;
    }
}

echo "Liczba uczniów, którzy zaliczyli: " . count($zdali) . "<br>";
echo "Liczba uczniów, którzy nie zaliczyli: " . count($nieZdali) . "<br>";

//zadanie 6
echo "Komentarz: ";
switch (true) {
    case ($srednia >= 80):
        echo "Bardzo dobry wynik klasy";
        break;
    case ($srednia >= 60):
        echo "Dobry wynik klasy";
        break;
    case ($srednia >= 40):
        echo "Wynik klasy jest niezadowalający";
        break;
    default:
        echo "Bardzo słaby wynik klasy";
        break;
}
echo "<br>"
?>
</body>
</html>
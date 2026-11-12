<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis samochodowy</title>
</head>
<body>
<pre>
<?php 

$samochody = [
    ["marka" => "BMW", "model" => "320d", "rok" => 2018, "cena" => 85000, "przebieg" => 120000, "paliwo" => "diesel", "moc" => 190],
    ["marka" => "Audi", "model" => "A4", "rok" => 2020, "cena" => 110000, "przebieg" => 80000, "paliwo" => "benzyna", "moc" => 150],
    ["marka" => "Volkswagen", "model" => "Golf", "rok" => 2015, "cena" => 42000, "przebieg" => 165000, "paliwo" => "diesel", "moc" => 110],
    ["marka" => "Toyota", "model" => "Corolla", "rok" => 2022, "cena" => 98000, "przebieg" => 35000, "paliwo" => "hybryda", "moc" => 140],
    ["marka" => "Ford", "model" => "Focus", "rok" => 2017, "cena" => 47000, "przebieg" => 135000, "paliwo" => "benzyna", "moc" => 125],
    ["marka" => "Skoda", "model" => "Octavia", "rok" => 2019, "cena" => 69000, "przebieg" => 115000, "paliwo" => "diesel", "moc" => 150],
    ["marka" => "Opel", "model" => "Astra", "rok" => 2014, "cena" => 29000, "przebieg" => 190000, "paliwo" => "diesel", "moc" => 110],
    ["marka" => "Renault", "model" => "Clio", "rok" => 2021, "cena" => 55000, "przebieg" => 45000, "paliwo" => "benzyna", "moc" => 90],
    ["marka" => "Mercedes", "model" => "C200", "rok" => 2019, "cena" => 125000, "przebieg" => 95000, "paliwo" => "benzyna", "moc" => 184],
    ["marka" => "Volvo", "model" => "XC60", "rok" => 2018, "cena" => 119000, "przebieg" => 130000, "paliwo" => "diesel", "moc" => 190],
    ["marka" => "Fiat", "model" => "Tipo", "rok" => 2016, "cena" => 32000, "przebieg" => 140000, "paliwo" => "benzyna", "moc" => 95],
    ["marka" => "Kia", "model" => "Ceed", "rok" => 2021, "cena" => 68000, "przebieg" => 52000, "paliwo" => "benzyna", "moc" => 120],
    ["marka" => "Hyundai", "model" => "i30", "rok" => 2015, "cena" => 36000, "przebieg" => 155000, "paliwo" => "diesel", "moc" => 110],
    ["marka" => "Mazda", "model" => "6", "rok" => 2017, "cena" => 62000, "przebieg" => 110000, "paliwo" => "benzyna", "moc" => 165],
    ["marka" => "Peugeot", "model" => "308", "rok" => 2016, "cena" => 39000, "przebieg" => 145000, "paliwo" => "diesel", "moc" => 120],
    ["marka" => "Seat", "model" => "Leon", "rok" => 2019, "cena" => 59000, "przebieg" => 88000, "paliwo" => "benzyna", "moc" => 130],
    ["marka" => "Honda", "model" => "Civic", "rok" => 2018, "cena" => 73000, "przebieg" => 92000, "paliwo" => "benzyna", "moc" => 129],
    ["marka" => "Audi", "model" => "A3", "rok" => 2008, "cena" => 18000, "przebieg" => 260000, "paliwo" => "diesel", "moc" => 105],
    ["marka" => "BMW", "model" => "530d", "rok" => 2023, "cena" => 265000, "przebieg" => 22000, "paliwo" => "diesel", "moc" => 286],
    ["marka" => "Volkswagen", "model" => "Passat", "rok" => 2005, "cena" => 12000, "przebieg" => 310000, "paliwo" => "diesel", "moc" => 140]
];

function obliczWiek($rokProdukcji) {
    return (int)date("Y") - $rokProdukcji;
}

function okreslKategorie($wiek) {
    if ($wiek <= 3) {
        return "samochód prawie nowy";
    } elseif ($wiek <= 7) {
        return "samochód kilkuletni";
    } elseif ($wiek <= 15) {
        return "samochód używany";
    } else {
        return "samochód zabytkowy lub starszy";
    }
}

function wyszukajSamochody($samochody, $maksymalnaCena) {
    echo "================================\n";
    echo "  WYSZUKIWANIE DO $maksymalnaCena zł\n";
    echo "================================\n";
    $znaleziono = false;
    foreach ($samochody as $auto) {
        if ($auto["cena"] <= $maksymalnaCena) {
            echo $auto["marka"] . " " . $auto["model"] . " - " . $auto["cena"] . " zł\n";
            $znaleziono = true;
        }
    }
    if (!$znaleziono) {
        echo "Nie znaleziono żadnego samochodu w tej cenie.\n";
    }
    echo "--------------------------------\n\n";
}

function najdrozszySamochod($samochody) {
    $najdrozszy = $samochody[0];
    foreach ($samochody as $auto) {
        if ($auto["cena"] > $najdrozszy["cena"]) {
            $najdrozszy = $auto;
        }
    }
    return $najdrozszy;
}

function najtanszySamochod($samochody) {
    $najtanszy = $samochody[0];
    foreach ($samochody as $auto) {
        if ($auto["cena"] < $najtanszy["cena"]) {
            $najtanszy = $auto;
        }
    }
    return $najtanszy;
}

function obliczSredniaCene($samochody) {
    $suma = 0;
    foreach ($samochody as $auto) {
        $suma += $auto["cena"];
    }
    return $suma / count($samochody);
}

$ile = count($samochody);
for ($i = 0; $i < $ile - 1; $i++) {
    for ($j = 0; $j < $ile - $i - 1; $j++) {
        if ($samochody[$j]["cena"] > $samochody[$j + 1]["cena"]) {
            $tymczasowa = $samochody[$j];
            $samochody[$j] = $samochody[$j + 1];
            $samochody[$j + 1] = $tymczasowa;
        }
    }
}

echo "================================\n";
echo "       KOMIS SAMOCHODOWY\n";
echo "================================\n\n";

foreach ($samochody as $auto) {
    $wiek = obliczWiek($auto["rok"]);
    $kategoria = okreslKategorie($wiek);

    echo $auto["marka"] . " " . $auto["model"] . "\n";
    echo "Rok produkcji: " . $auto["rok"] . "\n";
    echo "Cena: " . $auto["cena"] . " zł\n";
    echo "Przebieg: " . $auto["przebieg"] . " km\n";
    echo "Paliwo: " . $auto["paliwo"] . "\n";
    echo "Moc: " . $auto["moc"] . " KM\n";
    echo "Wiek: " . $wiek . " lat\n";
    echo "Kategoria: " . $kategoria . "\n";
    echo "\n--------------------------------\n\n";
}

wyszukajSamochody($samochody, 50000);

$liczbaWszystkich = count($samochody);
$sredniaCena = obliczSredniaCene($samochody);
$najdrozszy = najdrozszySamochod($samochody);
$najtanszy = najtanszySamochod($samochody);

$dieselLicznik = 0;
$po2020Licznik = 0;
$przebiegPonizej100k = 0;

foreach ($samochody as $auto) {
    if (strtolower($auto["paliwo"]) === "diesel") {
        $dieselLicznik++;
    }
    if ($auto["rok"] > 2020) {
        $po2020Licznik++;
    }
    if ($auto["przebieg"] < 100000) {
        $przebiegPonizej100k++;
    }
}

echo "================================\n";
echo "          STATYSTYKI\n";
echo "================================\n\n";
echo "Liczba samochodów: " . $liczbaWszystkich . "\n";
echo "Średnia cena: " . round($sredniaCena, 2) . " zł\n";
echo "Najdroższy: " . $najdrozszy["marka"] . " " . $najdrozszy["model"] . " (" . $najdrozszy["cena"] . " zł)\n";
echo "Najtańszy: " . $najtanszy["marka"] . " " . $najtanszy["model"] . " (" . $najtanszy["cena"] . " zł)\n";
echo "Samochody diesel: " . $dieselLicznik . "\n";
echo "Samochody po 2020 roku: " . $po2020Licznik . "\n";
echo "Przebieg poniżej 100000 km: " . $przebiegPonizej100k . "\n";
echo "================================\n";
?>
</pre>
</body>
</html>
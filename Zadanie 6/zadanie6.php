    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// Zadanie 1
function suma($a, $b) {
    echo $a + $b . "<br><br>";
}
suma(5, 10);

// Zadanie 2
function podstawy($a, $b) {
    echo "Różnica: " . ($a - $b) . "<br>";
    echo "Iloczyn: " . ($a * $b) . "<br>";
    if ($b != 0) {
        echo "Iloraz: " . ($a / $b) . "<br><br>";
    } else {
        echo "Nie dziel przez zero<br><br>";
    }
}
podstawy(10, 2);

// Zadanie 3
function kalkulator($a, $b, $dzialanie) {
    $w = 0;
    if ($dzialanie == '+') $w = $a + $b;
    if ($dzialanie == '-') $w = $a - $b;
    if ($dzialanie == '*') $w = $a * $b;
    if ($dzialanie == '/') $w = $b != 0 ? $a / $b : "Błąd";
    
    echo "<div id='wynik'>$w</div><br>";
}
kalkulator(8, 4, '+');

// Zadanie 4
function maks($a, $b, $c) {
    $max = $a;
    if ($b > $max) $max = $b;
    if ($c > $max) $max = $c;
    echo $max . "<br><br>";
}
maks(4, 12, 7);

// Zadanie 5
function wzrost($w) {
    if ($w < 150) {
        echo "niski<br><br>";
    } elseif ($w > 180) {
        echo "wysoki<br><br>";
    } else {
        echo "średni<br><br>";
    }
}
wzrost(175);

// Zadanie 6
function bmi($wzrost, $waga) {
    $m = $wzrost / 100;
    $bmi = $waga / ($m * $m);
    
    if ($bmi < 18.5) {
        $komentarz = "za mało!";
    } elseif ($bmi > 25) {
        $komentarz = "za dużo!";
    } else {
        $komentarz = "OK!";
    }
    
    echo "<div id='wynik'>$bmi - $komentarz</div><br>";
}
bmi(180, 75);

// Zadanie 7
function starszy($data1, $data2) {
    if ($data1 < $data2) {
        echo "Pierwsza osoba jest starsza<br><br>";
    } elseif ($data1 > $data2) {
        echo "Druga osoba jest starsza<br><br>";
    } else {
        echo "Obie osoby są w tym samym wieku<br><br>";
    }
}
starszy("2000-05-12", "2002-08-20");

// Zadanie 8
function przestepny($rok) {
    if (($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 == 0)) {
        echo "Rok przestępny<br><br>";
    } else {
        echo "Rok nie jest przestępny<br><br>";
    }
}
przestepny(2024);

// Zadanie 9
function sila($haslo) {
    $dlugosc = strlen($haslo);
    $cyfra = preg_match('/[0-9]/', $haslo);
    $duza = preg_match('/[A-Z]/', $haslo);
    $mala = preg_match('/[a-z]/', $haslo);
    $specjalny = preg_match('/[^a-zA-Z0-9]/', $haslo);

    if ($dlugosc <= 4 || !$cyfra || !$duza || !$mala || !$specjalny) {
        echo "hasło słabe<br><br>";
    } elseif ($dlugosc < 8) {
        echo "hasło średnie<br><br>";
    } else {
        echo "hasło mocne<br><br>";
    }
}
sila("Trudne1!");

// Zadanie 10
function trojkat($a, $b, $c) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Da się utworzyć trójkąt<br><br>";
    } else {
        echo "Nie da się utworzyć trójkąta<br><br>";
    }
}
trojkat(3, 4, 5);

// Zadanie 11
function szyfr($tekst) {
    $wynik = "";
    for ($i = 0; $i < strlen($tekst); $i++) {
        $znak = $tekst[$i];
        if ($znak >= 'a' && $znak <= 'z') {
            $kod = ord($znak) + 2;
            if ($kod > 122) $kod -= 26;
            $wynik .= chr($kod);
        } elseif ($znak >= 'A' && $znak <= 'Z') {
            $kod = ord($znak) + 2;
            if ($kod > 90) $kod -= 26;
            $wynik .= chr($kod);
        } else {
            $wynik .= $znak;
        }
    }
    echo $wynik . "<br><br>";
}
szyfr("akz");

?>
</body>
</html>
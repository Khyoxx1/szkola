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
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

// Zadanie 2
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}

// Zadanie 3
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma = $suma + $i;
}
echo $suma;

// Zadanie 4
for ($i = 1; $i <= 10; $i++) {
    echo ($i * 2) . " ";
}

// Zadanie 5
$X = 12;
$Y = 100;
$oszczednosci = 0;

for ($i = 1; $i <= $X; $i++) {
    $oszczednosci = $oszczednosci + $Y;
    $oszczednosci = $oszczednosci * 1.08;
}
echo $oszczednosci;

// Zadanie 6
$suma = 0;
$element = 5;

for ($i = 1; $i <= 100; $i++) {
    $suma = $suma + $element;
    $element = $element + 10;
}
echo $suma;

// Zadanie 7
$suma_cegiel = 0;

for ($i = 10; $i >= 1; $i--) {
    $suma_cegiel = $suma_cegiel + ($i * $i);
}
echo $suma_cegiel;

// Zadanie 8
$X = 20;
$Y = 5;
$Z = 2;
$suma_cegiel = 0;
$aktualny_rzad = $X;

for ($i = 1; $i <= $Y; $i++) {
    $suma_cegiel = $suma_cegiel + $aktualny_rzad;
    $aktualny_rzad = $aktualny_rzad - $Z;
}
echo $suma_cegiel;

// Zadanie 9
$X = 20;
$Y = 5;
$Z = 2;
$K = 2.5;

$suma_cegiel = 0;
$aktualny_rzad = $X;

for ($i = 1; $i <= $Y; $i++) {
    $suma_cegiel = $suma_cegiel + $aktualny_rzad;
    $aktualny_rzad = $aktualny_rzad - $Z;
}

$waga = $suma_cegiel * $K;
echo $waga;

// Zadanie 10
$a = 10;
$b = 5;
$dzialanie = "+";

if ($dzialanie == "+") {
    echo $a + $b;
} elseif ($dzialanie == "-") {
    echo $a - $b;
} elseif ($dzialanie == "*") {
    echo $a * $b;
} elseif ($dzialanie == "/") {
    echo $a / $b;
}
?>
</body>
</html>
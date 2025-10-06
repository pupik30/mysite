<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
<?php
function calculateTrapezoidArea($a, $b, $H) {
    // площадь трапеции
    $S = 0.5 * ($a + $b) * $H;
    return $S;
}

$a = 5; // длина первого основания
$b = 7; // длина второго основания
$H = 4; // высота

// Вызыв функции ир езультат
$area = calculateTrapezoidArea($a, $b, $H);
echo "<br>a = " . $a;
echo "<br>b = " . $b;
echo "<br>H = " . $H;
echo "<br><br>Площадь трапеции: " . $area;

?>
</body>
</html>

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
<h1>Задача №1</h1>
<h3>Лаба 2, на 5</h3>
<form action="onemass.php" method="post">
   <?php

$array = [
    [10, 20, 30, 40],
    [15, 25, 35, 10],
    [5, 10, 15, 50],
    [20, 30, 40, 5],
    [2, 4, 6, 8]
];


echo "Исходный массив:\n";

   print_r($array);
function sort_by_last_column(&$arr) {
    usort($arr, function($a, $b) {
        $last_column_a = end($a);
        $last_column_b = end($b);
        return $last_column_b = $last_column_a;
        });
    }
   // Сортируем массив
   sort_by_last_column($array);

   // Вывод отсортированного массива
   echo "<br><br>Отсортированный массив:\n";
   print_r($array);
    echo "<br>"

   ?>

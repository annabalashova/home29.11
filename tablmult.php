<?php
/*
С помощью двух циклов for (один вложен в другой) написать алгоритм вывода на экран таблицы умножения
Оформить можно с помощью html элементов table или через кастомный css

Дополнительно. Выделить первый ряд и первую колонку дополнительным цветом

*/

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
    <style>

    </style>
</head>
<body>
<h1>Цикл for</h1>
<table border = "1">
    <caption>Таблица Пифагора</caption>
    <?php
    $cols = 10;
    $rows = 10;
    for ($tr=1; $tr<=$rows; $tr++){
        echo "<tr>";
        for ($td=1; $td<=10; $td++) {
            if ($td == 1 or $tr == 1) {
                echo "<th style='background-color:lightskyblue'>", $tr * $td, "</th>";
            } else {
                echo '<td>' . $tr * $td . '</td>';
            }
        }
        echo '</tr>';
    }

      ?>
</table>
</body>
</html>

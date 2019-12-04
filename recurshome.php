<?php
ini_set('display_errors', 1);
/*
 * Написать рекурсивную функцию для нахождения факториала числа n.
 * То есть функция должна принимать число n и возвращать произведение всех натуральных чисел от 1 до n.
 * Вызвать функцию с рандомным числом и вывести результат на экран в виде "Факториал числа n = П"
 * Для получения рандомного числа можно воспользоваться встроенной функцией rand(min, max),
 * например rand(1, 100)
 */

// Функция

?>

<html>
<head>
    <title>Recursion</title>
</head>
<body>
    <div>
        <?php
         function fac($x) {
    if ($x == 0)
        return 1;
    return $x*fac($x-1);
}
$x = rand(5,10);
echo "Факториал числа $x = ". fac($x);
        ?>
    </div>
</body>
</html>

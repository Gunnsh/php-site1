<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<table>
<?php
function sum(...$numbers) // определяем функцию sum с типом данных "массив" по названием numbers
{
    $result = 0; // задаем параметр для цикла
    foreach($numbers as $number) { // задаем цикл массива numbers и переменную number для каждого элемента массива
        $result += $number; // действие с заданными выше параметрами, сначала плюсуем к 0 number, потом возвращаем результат в переменную
// действие будет произведено столько раз, сколько элементов в массиве numbers
    }
    echo "<p>Сумма: $result</p>"; // выводим на экран конечное значение переменной result
}
sum(1, 2, 3); // result(0)+number(1)=result(1)
 // result(1)+number(2)=result(3)
 // result(3)+number(3)=result(6), цикл окончен, вывод на экран значение переменной result "Сумма: 6"
sum(2, 3);
sum(4, 5, 8, 10);
?>
</table>
</body>
</html>
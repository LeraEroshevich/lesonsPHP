<?php
require('functions.php');

$strings = ['test1', 'test2', 'test3'];
//Задача 1
echo " <h1>Задача 1</h1>";
echo "Тест 1";
task1($strings);

echo "Тест 2" . "<br>";
$result = task1($strings, true);
echo $result;

//Задача 2
echo " <h1>Задача 2</h1>";
echo task2("*", 1, 2, 3, 5.2);

//Задача 3
echo " <h1>Задача 3</h1>";
echo task3(9, 6);

//Задача 4
echo " <h1>Задача 4</h1>";
task4();

//Задача 5
echo " <h1>Задача 5</h1>";
task5();

//Задача 5
echo " <h1>Задача 6</h1>";
task6();
<?php

function task1( array $strings, bool $returnAsString = false){
    if ($returnAsString) {
        return implode(' ', $strings);
    } else {
        foreach ($strings as $element) {
            echo "<p>$element</p>";
        }
    }
    return false;
}

function task2(... $args){
    $args = func_get_args();
    $operation = array_shift($args);
    $result = $args[0];

    if ($operation == '+') {
        for ($i = 1; $i < sizeof($args); $i++) {
            $number = $args[$i];
            $result += $number;
        }
    } elseif ($operation == '*') {
        for ($i = 1; $i < sizeof($args); $i++) {
            $number = $args[$i];
            $result *= $number;
        }
    } elseif ($operation == '/') {
        for ($i = 1; $i < sizeof($args); $i++) {
            $number = $args[$i];
            $result /= $number;
        }
    } elseif ($operation == '-') {
        for ($i = 1; $i < sizeof($args); $i++) {
            $number = $args[$i];
            $result /= $number;
        }
    } else {
        echo "Ошибка";
    }

    return $result;
}

function task3 ($a, $b){
    if (is_int($a) && is_int($b) ) {
        echo '<table border="1">';
         for ($tr=1; $tr <= $a ; $tr++ ) {
            echo '<tr>';
            for ($td=1; $td <= $b; $td++) {
                echo '<td>'."$tr x $td = " . $tr * $td.'</td>';
            }
            echo '</tr>';
        }
echo '</table>';
    } else {
        return "Оба аргумента должны быть целыми числами.";
    }
    return false;
}

function task4 (): void
{
    echo date('d.m.Y H:i');
    echo "<br>";

    $unixTime = mktime(0, 0, 0, 2, 24, 2016);
    echo $unixTime;
}

function task5 () {
    $string1 = "Карл у Клары украл Кораллы";
    echo str_replace("К", "", $string1);
    echo "</br>";

    $string2 = "Две бутылки лимонада";
    echo str_replace("Две", "Три", $string2);
}

function task6 (){
    $text = "Hello again!";
    file_put_contents('test.txt', $text);
    echo file_get_contents('test.txt');
}


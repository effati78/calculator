<?php
$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$req = $_REQUEST['req'];

if ($num1 == "") {
    $num1 = '0';
}
if ($num2 == "") {
    $num2 = '0';
}

if ($req == 'add') {
    echo $num1 + $num2;
} elseif ($req == 'sub') {
    echo $num1 - $num2;
} elseif ($req == 'mult') {
    echo $num1 * $num2;
} elseif ($req == 'div') {
    if ($num2 == 0)
        echo "Cannot divide by zero‬";
    else
        echo $num1 / $num2;
}
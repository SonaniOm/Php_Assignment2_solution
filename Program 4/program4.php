<?php

$a = $_POST['n1'];

switch($a)
{
    case $a%3==0 && $a%5==0:
        echo "Number Is Divisible By 3 And 5 Both";
        break;
    case $a%3==0 :
            echo "Number Is Divisible By 3";
            break;
    case $a%5==0:
                echo "Number Is Divisible By 5";
                break;
    default:
        echo "Not Divisible By 3 Or/And 5";
}
    

?>
<?php

$a = $_POST['n1'];
$b = $_POST['n2'];
$o = $_POST['o1'];



switch($o)
{
    case '+':
        $c = $a+$b;
        echo "Sum Is ".$c;
        break;
    case '-':
         $c = $a-$b;
        echo "Subtraction Is ".$c;
        break;
    case '*':
         $c = $a*$b;
        echo "Multiplication Is ".$c;
        break;
    case '/':
         $c = $a/$b;
        echo "Division Is ".$c;
        break;
    case '%':
         $c = $a%$b;
        echo "Moduls Is ".$c;
        break;
    default:
        echo "Enter Valid Information";
}


?>
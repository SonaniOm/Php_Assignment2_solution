<?php

$a = $_POST['n1'];
$g = $_POST['g1'];

switch($g)
{
    case 'f':
        $b = $a*10/100;
        echo "Emplyee Bonus Is ".$b;
        break;
    case 'F':
        $b = $a*10/100;
        echo "Emplyee Bonus Is ".$b;
        break;
    case  'm':
        $b = $a*15/100;
        echo "Emplyee Bonus Is ".$b;
        break;
    case  'M':
        $b = $a*15/100;
        echo "Emplyee Bonus Is ".$b;
        break;
    default:
        echo "Enter Valid Gender";
}



?>
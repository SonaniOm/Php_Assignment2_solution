<?php

$a = $_POST['n1'];

switch($a)
{
    case $a%2==0:
        echo "Number Is Even";
        break;
    case $a%2==1:
        echo "Number Is Odd";
        break;
    default:
        echo "Enter Invalid Character";
}
    

?>
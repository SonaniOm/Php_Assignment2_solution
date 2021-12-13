<?php

$a = $_POST['n1'];
$b = $_POST['n2'];
$c = $_POST['n3'];

if($a > $b)
{
    echo "A Is Maximum";
}
elseif($a > $c)
{
    echo "A Is Maximum";
}
elseif($b > $c)
{
    echo "B Is Maximum";
}
elseif($c > $a)
{
    echo "C Is Maximum";
}
else
{
    echo "Enter Valid Number";
}
    

?>
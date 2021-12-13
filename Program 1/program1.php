<?php

$a = $_POST['n1'];

if($a%2==0)
{
    echo "Number Is Even";
}
elseif($a%2==1)
{
    echo "Number Is Odd";
}
else
{
    echo "Enter Valid Character";
}

?>
<?php

$a = $_POST['n1'];

if($a<=100)
{
    echo "Rate Is 500";
}
elseif($a<=200 && $a>=100)
{
    echo "Youe Total Bile Is ".$a*1;
}
elseif($a<=300 && $a>=200)
{
    echo "Youe Total Bile Is ".$a*2;
}
elseif($a<=400 && $a>=300)
{
    echo "Youe Total Bile Is ".$a*2.5;
}
elseif($a<=500 && $a>=400)
{
    echo "Youe Total Bile Is ".$a*4;
}
else//if($a>=500)
{
    echo "Youe Total Bile Is ".$a*5;
}

?>
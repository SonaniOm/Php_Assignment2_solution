<?php

$a = $_POST['i1'];
$b = $_POST['pi'];

$tp = $a * $b;

if($tp>1000)
{
    $dis = $tp*15/100;
    $fp = $tp - $dis;
    echo '<h1>You Get 15% Discount</h1>';
    echo "<br><br>";
    echo "   Your Bill Price Is ".$tp;
    echo "<br><br>";
    echo "-   ";
    echo "Your Discout Is ".$dis;
    echo "<br><br>";
    echo "-----------------------------------";
    echo "<br><br>";
    echo "Your Total Bill Is ".$fp;
}
else
{
    $dis = $tp*10/100;
    $fp = $tp - $dis;
    echo '<h1>You Get 10% Discount</h1>';
    echo "<br><br>";
    echo "   Your Bill Price Is ".$tp;
    echo "<br><br>";
    echo "-   ";
    echo "Your Discout Is ".$dis;
    echo "<br><br>";
    echo "-----------------------------------";
    echo "<br><br>";
    echo "Your Total Bill Is ".$fp;
}

?>
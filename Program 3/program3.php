<?php

$a = $_POST['s1'];
$b = $_POST['s2'];
$c = $_POST['s3'];
$d = $_POST['s4'];
$e = $_POST['s5'];
$f = $_POST['s6'];
$g = $_POST['s7'];

$total = $a+$b+$c+$d+$e+$f+$g;
$per = $total/7;

echo "Total Is ".$total;
echo "<br><br>";
echo "Percentage Is ".$per;
echo "<br><br>";

if($per>=70)
{
    echo "Grade Is A";
}
elseif($per>=60)
{
    echo "Grade Is B";
}
elseif($per>=50)
{
    echo "Grade Is C";
}
elseif($per>=40)
{
    echo "Grade Is D";
}
elseif($per<40)
{
    echo "Fail";
}
else
{
    echo "FAIL";
}


?>
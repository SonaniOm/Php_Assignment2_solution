<?php

$a = $_POST['n1'];

if($a=='a' || $a=='e' || $a=='i' || $a=='o' || $a=='u' || $a=='A' || $a=='E' || $a=='I' || $a=='O' || $a=='U')
{
    echo "Character Is Vowel";
}
else
{
    echo "Character Is Not Vowel";
}
    

?>
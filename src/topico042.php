<?php
$a = 10;
$b = "10";
echo "Igualdade = ".($a==$b)."<br>";
echo "Idêntico = ".($a===$b)."<br>";
echo "Não igual = ".($a!=$b)."<br>";
echo "Não idêntico = ".($a!==$b)."<br>";

echo "<hr>";
$a = 10;
$b = 20;
$c = 50;
$d=($a<=$b);
var_dump($d);
echo "<hr>";

$e=($a<=$c)&&($c>1000);
var_dump($e);
echo"<hr>";

$g=(($a<$b) xor ($b<$c));
var_dump($g);
echo "<hr>";

$d=($a<=$b) ? "Verdadeiro" : "Falso";
$e=($a>=$c) ? "Verdadeiro" : "Falso";
echo "d = $d<br>e = $e";
?>
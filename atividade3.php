<?php
$a =$_POST['a'];
$b =$_POST['b'];
$c = $_POST['c'];
$calc = $_POST['calc'];

$r= $a + $b;
$R=(pow($r,2));
$s= $c + $b; 
$S=(pow($s,2));
$d=($R + $S)/2;

echo "valor de R:" . $R ."<br> valor de S:" . $S ."<br>
valor de D:" . $d; 
?>
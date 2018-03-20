<?php 

$a = 1;

$b = 2;

$c = 3;

$result;

//test 333 y 123

// mostrar el mayor

if($a == $b && $a == $c )
{
	$result = $a;
}

if($a > $b && $a > $c)
{
	$result = $a;
}

if($b > $a && $b > $c)
{
	$result = $b;
}

if($c > $a && $c > $b)
{
	$result = $c;
}

echo $result;

 ?>

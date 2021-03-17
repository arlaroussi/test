<?php

$i=1;
$val=-10;
$result=0;

while ($val <= 10) {

	if ($val != 0) {
		$result = round((1/($val)),2);
		echo "f(".$val.") = ".$result;
		echo "<br/>";
	}
	$val++ ;
}
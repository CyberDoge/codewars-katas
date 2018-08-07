<?php
define("LIMIT",1000000);
define("SQRT_LIMIT",floor(sqrt(LIMIT)));

$S = array_fill(2,LIMIT-1,true);
for($i=2;$i<=SQRT_LIMIT;$i++){
	if($S[$i]===true){
		for($j=$i*$i; $j<=LIMIT; $j+=$i){
			$S[$j]=false;
			}
		}
	}
	$res = array();

	foreach ($S as $key => $value) {
		if ($value == 1) {
			$res[] = $key;
		}
	}
  print_r($res);

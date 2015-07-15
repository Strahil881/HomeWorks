<?php
$arr=array(32,12,312,7,556,8,77,96,12,32,543,43,664,54,3,75,6,83,15);
function print_order($a){
	$k;
	$min;
	$swap;
	for ($i=0; $i <count($a)-1 ; $i++) { 
		$k=$i;
		$min=$a[$i];
		for ($j=$i+1; $j <count($a) ; $j++) { 
			if ($a[$j]<$min) {
				$min=$a[$j];
				$k=$j;
			}
		}
		$swap=$a[$k];
		$a[$k]=$a[$i];
		$a[$i]=$swap;
	}
	for($k=0;$k<count($a);$k++){
		echo "$a[$k],";
	}
}
print_order($arr);
?>
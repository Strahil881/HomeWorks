<?php
$arr=array(2,1,4,31,2,3,5,65,5,444,76);
$arr2=array(6,7,64,54,2,7,5,9,87,1,62,65);

function print_arraies($a,$b){
	$c=array();
	if(count($a)>count($b)){
		for ($i=0; $i <count($a); $i++) { 
			$c[$i]=$a[$i]+$b[$i];
		}
		for ($i=0; $i <count($a) ; $i++) { 
			echo "$c[$i],";
		}
	}else{
		for ($i=0; $i <count($b); $i++) { 
			$c[$i]=$a[$i]+$b[$i];
		}
		for ($i=0; $i <count($b) ; $i++) { 
			echo "$c[$i],";
		}
	}
}
print_arraies($arr,$arr2);
?>
<?php
$min=60;
$sum=0;
$nn=1;
$matrix=array(array());
for ($j=0; $j <5 ; $j++) {
	for ($i=0; $i <4 ; $i++)  { 
		$matrix[$i][$j]=rand(1,100);
		if($min>$matrix[$i][$j]){
			$min=$matrix[$i][$j];
		}
	}
	$sum=$sum+$min;
	echo $min;
	echo "<br/>";
	
}
echo "Sborat na minimalnite elementi ot vsqka kolona: ". $sum."<br/>";
for ($i=0; $i <4 ; $i++) { 
	for ($j=0; $j <5 ; $j++) { 
		echo $matrix[$i][$j]."," ;
	}
	echo "<br/>";
}

?>
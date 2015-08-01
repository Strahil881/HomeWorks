<?php
$n=5;
$matrix=array(array());
for($i=0;$i<3;$i++){
	for($j=0;$j<4;$j++){
		$matrix[$i][$j]=$n;
		$n++;
	}
}
for($i=0;$i<3;$i++){
	for($j=0;$j<4;$j++){
		echo $matrix[$i][$j];
	}
	echo "<br/>";
}

?>
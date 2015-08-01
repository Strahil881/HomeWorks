<?php
$g=1;
$n=1;
$matrix=array(array());
for($i=0;$i<4;$i++){
	for($j=0;$j<4;$j++){
		$matrix[$i][$j]=$n;
		$n++;
		if($matrix[$i][$j>$g]){
			$g=$matrix[$i][$j];
		}
		
	}
	$n=$g*(-2);
	
}
echo '<table border="1"';
for($i=0;$i<4;$i++){
	echo "<tr>";
	for($j=0;$j<4;$j++){
		echo "<td>".$matrix[$i][$j]."</td>" ;
	}
	echo "<br/>";
	echo "</tr>";
}
echo "</table>";

?>
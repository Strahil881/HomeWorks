<?php
function tryy($a,$b){
	$c=$a+$b;
	echo "Vavedenite chisla sa: $a, $b<br/>";
	echo " Sborat e raven na: $c<br/>";
	if($c%2==0){
		echo "Chetno";
	}else{
		echo "Ne Chetno<br/>";
		echo "<br/>";
	}
}
tryy(3,2);
tryy(2911,2311331);

?>
<h2><?php tryy(321,96) ?> </h2>
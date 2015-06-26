<?php
$a=1;
$b=5;
$c=4;
if($a>$b &&$b>$c){
	echo $a,$b,$c;
}else if($a<$b && $b<$c){
	echo $c,$b,$a;
}else if($a<$b && $b>$c && $a>$c){
	echo $b,$a,$c;
}else if($a<$b && $b>$c && $c>$a){
	echo $b,$c,$a;
}



?>
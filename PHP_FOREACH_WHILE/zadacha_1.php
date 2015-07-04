<?php
$maxx=0;
$max=0;
$arr= array('1'=>6,'2'=>2,'3'=>7,'4'=>28,'5'=>9,'6'=>0,'7'=>22);
foreach($arr as $k => $v){
	if($v>$max){
		$max=$v;
	}
}
foreach($arr as $k => $v){
	while($maxx<=$max-1){
		if($v>$maxx){
			$maxx=$v;
		}
		$maxx++;
	}
}
echo "max1=$max <br/>";
echo "max2=$maxx <br/>";

?>
<?php
$ch=0;
$chn=0;
$sum=0;
$arr=array();
for ($i=0; $i <=10 ; $i++) { 
	$arr[$i]=rand(1,1000);
}
for ($i=0; $i <=10 ; $i++) { 
	echo $arr[$i] ."<br/>";
	$sum=$sum+$arr[$i];
	if($arr[$i]%2==0){
		$ch=$ch+$arr[$i];
	}else{
		$chn=$chn+$arr[$i];
	}
}
echo  $sum .":Obshtata suma<br/>";
echo $ch . ":Sumata na chetnite<br/>";
echo $chn .":Sumata na nechetnite<br/>";
if($ch>$chn){
	echo "Sborat na chetnite e po golqm";
}else{
	echo "Sborat na ne chetnite e po golqm";
}


?>
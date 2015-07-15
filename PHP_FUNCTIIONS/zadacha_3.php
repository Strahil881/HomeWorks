<?php
function print_array($a){
	$sum=0;
	for ($i=0; $i<count($a) ; $i++) { 
		echo "$a[$i],";
		if ($a[$i]%2==0) {
			$sum=$sum+$a[$i];
		}
	}
	echo "<br/>";
	echo "Obshtata suma na elementite s chetna stoinost e: $sum<br/>";
	echo "<br/>";
}
$arr=array(2,5,2,22,54,1,111,22,3,4,54,21,521,2323,123,);
print_array($arr);

$arr2=array();
for ($i=0; $i <14 ; $i++) { 
	$arr2[$i]=rand(1,1000);
}
print_array($arr2);
?>
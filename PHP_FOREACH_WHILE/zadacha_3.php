<?php
$text=array('In' => 1,'mathematics' => 2, 'a' => 3 , 'real' => 4 , 'is' => 5, 'a' => 6, 'value' => 7 , 'that' => 8, 'represents' => 9, 'a' => 10, 'quantity' => 11, 'along' => 12, 'a' => 13, 'continuous' => 14,'line'=>15,'.'=>16, );
foreach( $text as $k => $v){
	if($v%2==0){
		echo '<span style="color=green">'. "$k" .'</span>';
		echo " ";
	}else{
		echo '<span style="color=red">' ." $k " . '</span>';
		echo " ";

}
	}
	

?>
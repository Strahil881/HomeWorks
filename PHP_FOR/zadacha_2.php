<html>
<body>
	<form action="zadacha_2.php" method="get">
		1.Vavedi edno proizvolno chislo i proveri dali e chetno ili nechetno
		<br/>
		<input type="text" name="number"/>
		<input type="submit" name="send" value="Proveri"/>
	</form>
</body>
</html>
<?php
if(!empty($_GET)){
	$num=$_GET['number'];
	$f=0;
	$k;
	for($k=2;$k<$num;$k++){
		if($num%$k==0){
			$f=1;
			break;
		}
	}
	if($f==0){
		echo " Prosto";
	}else{
		echo "Sastavno";
	}
}else{
	echo "Popalni poleto ";
}

?>
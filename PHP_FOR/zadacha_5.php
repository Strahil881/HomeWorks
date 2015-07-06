<html>
<body>
	<form action="zadacha_5.php" method="get">
		1.Vavedete chislo po izbor:
		<input type="text" name="fibonaci"/>
		<br/>
		<input type="submit" name="send" value="Vish kakvo she stane"/>
	</form>
</body>
</html>
<?php
$a=0;
$b=1;
$c=1;
if(!empty($_GET)){
	$f=$_GET['fibonaci'];
	echo "<ol>";
	if($f<1){
		echo "Moje da se vavejdat samo polojitelni chisla";
	}else 
		{for($i=0;$i<=$f;$i++){
		$b=$a;
		$a=$c;
		$c=$a+$b;
		echo "<li>$c</li>";
	}
	echo "</ol>";
	echo "Chisloto na Fibonachi";
}
}else{
	echo "Ne zabravqite da vavedete chislo";
}


?>
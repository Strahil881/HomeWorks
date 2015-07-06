<html>
<body>
	<form action="zadacha_3.php" method="get">
		1.Zazaite stoinost za "M":
		<input type="text" name="m" />
		<br/>
		2.Zadite stoinost za "N":
		<input type"text"  name="n" />
		<br/>
		<input type="submit" name="send" value="Izprati" />
	</form>
</body>
</html>
<?php
$q=1;
$a=0;
if(!empty($_GET)){
	$n=$_GET['n'];
	$m=$_GET['m'];
	echo '<table border="1"';
for($i=0;$i<=$m;$i++){
	echo "<tr>";
	$a++;
	for($j=0;$j<=$n;$j++){
		if($q==$n+2){
			$q=1;
		}
		echo "<td>$a,$q</td>";
		$q++;
	}
	echo "</tr>";
}
	echo "</table>";
}

?>
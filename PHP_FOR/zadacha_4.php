
<?php
$m=1;
$a=1;
echo '<table border="1">';
for($i=1;$i<=10;$i++){
	echo "<tr>";
	for($j=1;$j<=10;$j++){
		$op=$i*$j;
		echo "<td>";
		echo "$i*$j=$op";
		echo "</td>";
	}
}

echo "</table>";

?>
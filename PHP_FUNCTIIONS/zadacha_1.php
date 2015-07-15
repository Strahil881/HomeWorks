<?php
function print_numbers(){
	for ($i=42; $i >=11; $i--) { 
		echo "$i,";
	}
}
print_numbers();
echo "<br/>";
?>
<h3><?php print_numbers(); ?></h3> </br>;
<textarea><?php print_numbers();?> </textarea>;

<?php
$arr=array('1'=>"Nachalo",'2'=>"Za nas",'3'=>"Galeriq",'4'=>"Za kontakti");
function ar_print($a){
	echo "<ol>";
	foreach ($a as $key => $value) {
		echo "<li>$value</li>";
	}
	echo "</ol>";
}
ar_print($arr);

?>
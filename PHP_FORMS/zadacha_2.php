<html>
<body>
<form action="zadacha_2.php" method="post">
	1.Izberi svoite interesi:
	<br>
	<input type="checkbox" name="interesi[]" value="pluvane"/>Pluvane
	<input type="checkbox" name="interesi[]" value="futbol"/>Futbol
	<input type="checkbox" name="interesi[]" value="ribolov"/>Ribolov
	<input type="checkbox" name="interesi[]" value="lageruvane"/>Lageruvane
	<input type="checkbox" name="interesi[]" value="gotvene"/>Gotvene
	<input type="checkbox" name="interesi[]" value="Pazaruvane"/>Pazaruvane
	<input type="checkbox" name="interesi[]" value="spokoistvie"/>Spokoistvie
	<br>
	2.Vavedi potrebitelsko ime:
	<br>
	<input type="text" name="user"/>
	<br>
	3.Vavedi parola:
	<br>
	<input type="text" name="pass"/>
	<br>
	4.Vavedi E-mail adres:
	<br>
	<input type="text" name="mail"/>
	<br>
	<input type="submit" name="sebd" value="Izprati"/>
</form>
</body>
</html>

<?php
if(empty($_POST)){
	echo "Popalnete formata";
}else{
	$user=$_POST['user'];
	$interesi=implode(",", $_POST['interesi']);
	$email=$_POST['mail'];
	$pass=$_POST['pass'];
	if($user==""){
		echo "Trqbva da vavedete imeto:";
	}else if($pass==""){
		echo "Trqbva da vavedete ime";
	}else if($email=="" && !strstr("$email", "@") || !strstr("$email", ".")){
		echo "Trqbva da vavedete E-mail ili vavedeniqt e ne pravilen";
	}else{
		echo "Uspeshno napravena registraciq";
		echo "<br>Predpochitaniqta na $user sa $interesi";
	}
	
}
    

?>

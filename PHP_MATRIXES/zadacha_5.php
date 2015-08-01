<?php
$films[0]=array(
	"Zaglavie"=>'Godfather',
	"Godina"=>'1972',
	"Biudjet"=>'7,000,000',
	"Janr"=>'Drama',
	"Glaven aktior"=>'Al Pacino',);
$films[1]=array(
	"Zaglavie"=>'Braveheart' ,
	"Godina"=>'1995' ,
	"Biudjet"=>'53,000,000' ,
	"Janr"=>'Drama,Ekshan' ,
	"Glaven aktior"=>'Mel Gipson');
$films[2]=array(
	"Zaglavie"=>"Devil's Advocate" ,
	"Godina"=> '1997' ,
	"Biudjet"=>'2,000,000',
	"Janr"=> 'Drama,Fentazi',
	"Glaven aktior"=>'Al Pacino');
$films[3]=array(
	"Zaglavie"=>'Oushan' ,
	"Godina"=>'2001' ,
	"Biudjet"=>'100,000,000',
	"Janr"=>'Ekshan' ,
	"Glaven aktior"=>'George Clooney',);
$films[4]=array(
	"Zaglavie"=>'Batman & Robin' ,
	"Godina"=>'1997' ,
	"Biudjet"=>'125,000,000' ,
	"Janr"=>'Ekshan,Fentazi' ,
	"Glaven aktior"=>'George Clooney',);
$actors[0]=array(
	"Ime"=>'George Clooney',
	"Nacionalnost"=>'USA',
	"Vazrast"=>'54',
	"Brai Oskari"=>'2',
	);
$actors[1]=array(
	"Ime"=>'Al Pacino',
	"Nacionalnost"=>'USA',
	"Vazrast"=>'75',
	"Brai Oskari"=>'1',
	);

$actors[2]=array(
	"Ime"=>'Russell Crowe',
	"Nacionalnost"=>'New Ziland',
	"Vazrast"=>'51',
	"Brai Oskari"=>'1',
	);

$actors[3]=array(
	"Ime"=>'Mel Gipson',
	"Nacionalnost"=>'USA',
	"Vazrast"=>'59',
	"Brai Oskari"=>'2',
	);

$actors[4]=array(
	"Ime"=>'Tom Cruise',
	"Nacionalnost"=>'USA',
	"Vazrast"=>'53',
	"Brai Oskari"=>'0',
	);
echo "FILMS:<br/>";
for($i=0;$i<count($films);$i++){
	foreach ($films[$i] as $key => $value) {
		echo "$key: $value<br/>";
	}
	echo "<br/>";
}
echo "ACTORS:<br/>";
for ($i=0; $i<count($actors) ; $i++) { 
	foreach ($actors[$i] as $key => $value) {
		echo "$key: $value<br/>";
	}
	echo "<br/>";
}
echo "<br/>";
for ($i=0; $i <count($actors) ; $i++) { 
	echo $actors[$i]['Ime'];
	echo ",";
}
$actorrn=$_GET['actorrs'];


?>
<html>
<body>
	<form action="zadacha_5.php" method="get">
		<input type="radio" name="actorrs" value="Russell Crowe" />Russell Crowe
		<input type="radio" name="actorrs" value="Tom Cruise" />Tom Cruise
		<input type="radio" name="actorrs" value="Mel Gipson" />Mel Gipson
		<input type="radio" name="actorrs" value="Al Pacino" />Al Pacino
		<input type="radio" name="actorrs" value="George Clooney" />George Clooney
		<input type="submit" name="send" value="Proveri"> 
	</form>
</body>
</html>

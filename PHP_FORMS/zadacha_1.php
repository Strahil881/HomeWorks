<?php
$_GET=['event'];
$event=$_GET['event'];
$_GET=['place'];
$place=$_GET['place'];
if($event=="films" && $place=="Lom"){
	echo "Noshta na kinoto 'Lon 2015 godina'";
}else if($event=='films' && $place=='Mezdra'){
	echo "Vecherta na mezdrenskoto kino i izkustvo 'Mezdra e po dobra ot Vraca 2015 godina'";
}else if($event=='films' && $place=='Orqhovo'){
	echo "Nqma filmovi sabitiq v tozi chast na vselenata";
}else if($event=='sport' && $place=='Lom'){
	echo "Vecherta na lomskiqt futbolen turnir 20015 godina";
}else if($event=='sport' && $place=='Mezdra'){
	echo "Futbolen sblasak 'Mezdra sreshtu Vraca'";
}else if($event=='sport' && $place=='Orqhovo'){
	echo "Nqma sportni sabitiq v tazi chast na vselenata";
}else if($event=='dance' && $place=='Lom'){
	echo "Lomska vecher na samodivite tanci 20015 godina";
}else if($event=='dance' && $place=='Mezdra'){
	echo "Sastezaniq po tantci 'Mezdra sreshu Vraca' ";
}else if($event=='dance' && $place=='Orqhovo'){
	echo "Nqma tantcovi sabitiq v tazi chast na vselenata";
}

?>
<html>
<body>
	<form action="zadacha_1.php" method="get">
		<input type="radio" name="event" value="films"/>films
		<input type="radio" name="event" value="sport"/>sport
		<input type="radio" name="event" value="dance"/>dance
		<br> 
		<select name="place">
			<option value="Lom">Lom</option>
			<option value="Mezdra">Mezdra</option>
			<option value="Orqhovo">Orqhovo</option>
		</select>
		<br>
		<input type="submit" name="send" value="Izprati"/>
	</form>
</body>
</html>

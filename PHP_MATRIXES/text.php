<html>

<body bgcolor="#CDCD32">
	<h3>MovieInfo </h3>
</body>

</html>

<?php
$movie=array(array());
$movie[0] = array('Title' =>'The Hunger Games' ,'Year' => 2012 , 'Budget' =>'$78 000 000' , 'Genre' =>' Action' , 'Main Actor' =>' Jennifer Lawrence'  );
$movie[1] = array('Title' =>'The Godfather' ,'Year' => 1972, 'Budget' =>'$6 000 000 ' , 'Genre' => 'Crime', 'Main Actor' => 'Al Pacino' );
$movie[2] = array('Title' => 'Iron Man','Year' =>2008 , 'Budget' =>'$140 000 000' , 'Genre' => ' Action ', 'Main Actor' => 'Robert Downey Jr.' );
$movie[3] = array('Title' => 'The Iron Lady','Year' => 2011 , 'Budget' => ' $13 000 000', 'Genre' => ' Biography ', 'Main Actor' => 'Meryl Streep' );
$movie[4] = array('Title' =>'The Terminator' ,'Year' =>1984 , 'Budget' => '$6 400 000', 'Genre' => ' Sci-Fi', 'Main Actor' => 'Arnold Schwarzenegger' );

$actor=array(array());
$actor[0] = array('Name: ' =>'Jennifer Lawrence' ,'Nationality: ' => 'American' , 'Age: ' =>'25' , 'Number of Oscars:' =>1);
$actor[1] = array('Name: ' => 'Al Pacino ','Nationality: ' => 'Italian-American ', 'Age: ' =>'75' , 'Number of Oscars:' =>1 );
$actor[2] = array('Name: ' => 'Robert Downey Jr.','Nationality: ' => 'American', 'Age: ' => '50', 'Number of Oscars:' =>'Nominated for 2 Oscars'  );
$actor[3] = array('Name: ' =>'Meryl Streep' ,'Nationality: ' => 'American' , 'Age:' =>66 , 'Number of Oscars:' =>3 );
$actor[4] = array('Name: ' =>'Arnold Schwarzenegger' ,'Nationality: ' =>'Austrian' , 'Age: ' =>'67' , 'Number of Oscars: ' =>0);
echo "<h4>Movie List:</h4><br/>";
for ($i=0; $i <=4 ; $i++) { 
	
	foreach ($movie[$i] as $key => $value) {
		echo "$key: $value <br/>";
	}
	echo "<br/>";
}

echo "<h4> Actor List: </h4><br/>";
for ($i=0; $i <=4 ; $i++) { 
	
	foreach ($actor[$i] as $key => $value) {
		echo "$key $value <br/>";
	} echo "<br/>";
} 
?>


<html>

<body>
 <h4> Choose actor: </h4>
	<form action="lead-roles.php" method="get">
	<select name="actors">
	
		<option value="Jennifer Lawrence" name="JL">Jennifer Lawrence</option>
		<option value="Al Pacino" name="AP">Al Pacino</option>
		<option value="Robert Downey Jr" name="RDJ">Robert Downey Jr</option>
		<option value="Meryl Streep" name="MS">Meryl Streep</option>
		<option value="Arnold Schwarzenegger" name="AS">Arnold Schwarzenegger</option>
		</select>
		<input type="Submit"  value="Send" name="Send">
	</form>
</body>
</html>
<html>
<body>
	<form action="zadacha_5.php" method="get">
		<textarea name="tx" rows="5" cols="20"> </textarea>
		<input type="submit" name="send" value="Izprati"/>
	</form>


</body>
</html>
<?php
if(!empty($_GET)){
$text=$_GET['tx'];
$find=array('a','c','@','e','z');
$replace=array('*','*','*','*','*');
$new_string= str_replace($find, $replace, $text);
echo "$new_string <br/>";
echo "$text <br/>";
}

?>

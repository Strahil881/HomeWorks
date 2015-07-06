 <html>
 <body>
 	<form action="zadacha_1.php" method="get">
 		1.Vavedete chislo "x":
 		<input type="text" name="num"/>
 		<br/>
 		2.Vavedete chislo "y":
 		<input type="text" name="numm"/>
 		<br/>
 		<input type="submit" name="send" value="Proveri"/>
 	</form>
 </body>
 </html>
 <?php
$l=0;
$k=0;
if(!empty($_GET)){
	$num1=$_GET['num'];
	$num2=$_GET['numm'];
	if($num1>$num2){
		for($l=$num2;$l<=$num1;$l++)
			if($l%3==0 || $l%7==0){
				echo "$l<br/>";
			}
	}else{
		for($k=$num1;$k<=$num2;$k++){
			if($k%3==0 || $k%7==0){
				echo "$k<br>";
			}
		}
	}
}else{
	echo "Popalnete X i Y ";
}

?>
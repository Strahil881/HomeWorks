<?php
$a=23;
$b;
$c=0;
for ($b=2; $b < $a ; $b++) { 
    if($a%$b==0){
        $c=1;
        break;
    }
}
if($c==0){
    echo "Prosto";
}else {
    echo "Sastavno";
}

?>

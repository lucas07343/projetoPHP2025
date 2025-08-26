<?php  

function titulo (){
	echo("calculando valores: <br/>");
}

$resp = $num1+$num2;
function somaValor($num1,$num2){
	$num1=10; $num2=10;
	echo("A soma de $num1 e $num2 é $resp");
}

titulo();
somaValor();
?>
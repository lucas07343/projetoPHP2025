<?php  

function titulo (){
	echo("calculando valores: <br/>");
}

function somaValor($num1,$num2){	
	return($num1+$num2);
}
$valor1=10; $valor2=20;
titulo();

$resposta = somaValor($valor1,$valor2);

echo("A soma de num1 e num2 é $resposta");

$somando = somaValor(30,40)+somaValor(50,60);

echo("<br /> $somando");

?>
<?php

 $opcao = 3;
 $valor1 = 10;
 $valor2 =5;
 $resp = 0;
 $calculo = "divisão";

if($opcao == 1){
	function soma(){
	$resp = $valor1+$valor2;
}

}

elseif ($opcao == 2) {
		function subtracao(){
	return($valor1-$valor2);
}
 
}

elseif($opcao == 3){
	function divisao(){
	return($valor1/$valor2);
}

}

elseif ($opcao == 4){
	function multiplicacao(){
	$resp = $valor1*$valor2;
}

}
$resposta = divisao($valor1,$valor2);

echo("O calculo escolhido foi $calculo<br />");
echo("Os números digitados foram $valor1 e $valor2<br />");
echo("o resultado é $resposta");
?>
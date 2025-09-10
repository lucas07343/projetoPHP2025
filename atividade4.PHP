<?php
$num1 = 12;
$num2 = 7;
$num3 = 20;

$maior = 0;
$meio = 0;
$menor = 0;


if ($num1 >= $num2 && $num1 >= $num3) {
    $maior = $num1;
    if ($num2 >= $num3) {
        $meio = $num2;
        $menor = $num3;
    } else {
        $meio = $num3;
        $menor = $num2;
    }
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $maior = $num2;
    if ($num1 >= $num3) {
        $meio = $num1;
        $menor = $num3;
    } else {
        $meio = $num3;
        $menor = $num1;
    }
} else { // $num3 é o maior
    $maior = $num3;
    if ($num1 >= $num2) {
        $meio = $num1;
        $menor = $num2;
    } else {
        $meio = $num2;
        $menor = $num1;
    }
}

echo "Números em ordem decrescente: $maior, $meio, $menor";
?>

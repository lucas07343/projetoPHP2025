<?php
// Simulação de dados para 50 pessoas
$pessoas = [];
for ($i = 0; $i < 50; $i++) {
    $pessoas[] = [
        'altura' => rand(140, 200) / 100, // altura entre 1.40 e 2.00 metros
        'idade' => rand(10, 80), // idade entre 10 e 80 anos
        'sexo' => (rand(0, 1) == 0) ? 'M' : 'F' // M para masculino, F para feminino
    ];
}

$maiorAltura = $pessoas[0]['altura'];
$menorAltura = $pessoas[0]['altura'];

$somaAlturaMulheres = 0;
$quantidadeMulheres = 0;

$idadeHomemMaisVelho = 0;
$idadeMulherMaisNova = 999;

for ($i = 0; $i < 50; $i++) {
    $pessoa = $pessoas[$i];

    // Maior e menor altura
    if ($pessoa['altura'] > $maiorAltura) {
        $maiorAltura = $pessoa['altura'];
    }
    if ($pessoa['altura'] < $menorAltura) {
        $menorAltura = $pessoa['altura'];
    }

    // Média de altura de mulheres
    if ($pessoa['sexo'] == 'F') {
        $somaAlturaMulheres += $pessoa['altura'];
        $quantidadeMulheres++;

        // Mulher mais nova
        if ($pessoa['idade'] < $idadeMulherMaisNova) {
            $idadeMulherMaisNova = $pessoa['idade'];
        }
    } else {
        // Homem mais velho
        if ($pessoa['idade'] > $idadeHomemMaisVelho) {
            $idadeHomemMaisVelho = $pessoa['idade'];
        }
    }
}

$mediaAlturaMulheres = $quantidadeMulheres > 0 ? $somaAlturaMulheres / $quantidadeMulheres : 0;

echo "Maior altura: " . number_format($maiorAltura, 2) . " m\n";
echo "Menor altura: " . number_format($menorAltura, 2) . " m\n";
echo "Média de altura das mulheres: " . number_format($mediaAlturaMulheres, 2) . " m\n";
echo "Idade do homem mais velho: " . $idadeHomemMaisVelho . " anos\n";
echo "Idade da mulher mais nova: " . $idadeMulherMaisNova . " anos\n";
?>
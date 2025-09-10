<?php

$numero = 81;

if ($numero % 10 == 0) {
    echo "$numero é divisível por 10.";
}
elseif ($numero % 5 == 0) {
    echo "$numero é divisível por 5.";
}
elseif ($numero % 2 == 0) {
    echo "$numero é divisível por 2.";
}
else {
    echo "$numero não é divisível por 10, 5 ou 2.";
}
?>
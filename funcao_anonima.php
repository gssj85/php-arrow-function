<?php

$numeros = [1, 2, 3, 4, 5];
$multiplicador = 2;

// Função anônima, sintaxe completa:
$resultado = array_map(function ($item) use ($multiplicador) {
    return $item * $multiplicador;
}, $numeros);

var_dump($resultado);

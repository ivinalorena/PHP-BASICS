<?php

$listaFrutasUm = ['banana'];//banana e laranja tem posição 0, laranja vai sumir na soma
$listaFrutasDois = [1 => 'Laranja', 2 => 'maçã', 3 => 'uva'];

//somar dois arrays com o operador: +
$listaFrutas = $listaFrutasUm + $listaFrutasDois;
print_r($listaFrutas);
echo '<br>';

//comparando arrays
// == compara os indices e  os valores
// === compara os indices, valores e se os indices estão na mesma ordem.
var_dump($listaFrutasUm == $listaFrutasDois);
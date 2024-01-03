<?php
// escrita reduzida, disponpivel desde php 5.4+:
$listaFrutas = ['laranja','uva','banana'];

//escrita padrão:
//$listaFrutas = array('laranja','uva','banana');
echo $listaFrutas[0];
echo '<br>';

echo $listaFrutas[1];
echo '<br>';

echo $listaFrutas[2];
echo '<br>';

print_r($listaFrutas);
//cria uma linha horizontal
echo '<hr>';
// nos fornece informações sobre os arrays
var_dump($listaFrutas);
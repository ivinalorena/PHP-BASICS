<?php
$listaFrutas = ['maça', 'uva'];
//contar tamanho do array:
echo count ($listaFrutas);
echo '<br>';
echo sizeof($listaFrutas);
echo '<br>';

// verificar se o array tem um elemento..
// 0 in_array vai retornar true se o item
echo in_array('uva',$listaFrutas);//1
echo in_array('banana', $listaFrutas);//0 n aparece nada no browse
echo '<br>';
$frutaEstaArray = in_array('laranja',$listaFrutas);

echo $frutaEstaArray ? 'sim esta na cesta de frutas' : 'não esta na cesta de frutas';
print '<hr>';
$carrinho = [
    'Item: Mouse'
];
print_r($carrinho);
array_push($carrinho, 'Item: teclado'); //adicionar informações no array
print_r($carrinho);
echo '<br>';
//somar itens de um array
echo '<hr>';
$precos = [19.99,20.99,5,0.50];
echo 'o resultado da soma é: '.  array_sum($precos);
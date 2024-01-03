<?php

$num = 10;
echo $num == 10 ? "sim, é igual a 10" : "não é igual a 10";
echo '<br>';
$valorRecebido = $num ==20 ? "o valor recebido é 20" : "o valor não é 20";
echo '<br>';
echo $valorRecebido;
echo '<br>';
$quantidade = 30;
$quantidadeRecebida = $quantidade ?: -1;
echo $quantidadeRecebida;
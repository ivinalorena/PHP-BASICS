<?php

/*
== igualdade (valor)
=== igualdade (valor & tipo)
!= diferente (valor)
!== Diferente (valor e tipo)
<> Diferente (valor)
< menor que
> maior que
<= menor ou igual
>= maior ou igual
<=> spaceship operator
*/
$num1 = 30;
$num2 = 30;

print $num1 == $num2;
print "<br>";

print $num1 === $num2; //compara valor e tipo
print "<br>";

$num1 = "20";

//operadores de diferença
print $num1 != $num2;//diferença valor
print $num1 <> $num2; // diferença valor
print "<br>";

// opperador de não indentico: tipo e valor
print $num1 !== $num2;
print "<br>";
//operadores de comparação:
$num1 = 10;
$num2 = 10;
print $num1 . ' não é maior que '. $num2;
print "<br>";
print $num1 > $num2;
print "<br>";
print $num1 >= $num2;
print"<br>";

// menor ou igual
$num1 = 10;
$num2 = 30;

print $num1 < $num2;
//10 não é igual a 30 mas continua sendo menor (retorna true[1])
print $num1 <= $num2;

//spaceship operator -> adicionado a partir da versão 7 do php
//ele vai testar o que tá na esquerda e na direita, se é maior
//menor ou igual

$num1 = 2;
$num2 = 1;

print $num1 <=> $num2;// 1
print $num2 <=> $num1;// -1
print $num2 <=> $num2; // 0


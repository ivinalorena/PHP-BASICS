<?php
/*
= atribuição
+= atribui e soma
-= atribui e subtrai
*= atribui e multiplica
/= atribui e divide
.= atribui e concatena (operador string)
*/

$num = 10;
$num+=5;
echo $num;//15
echo '<br>';
$num -=5;
echo $num;//10
echo '<br>';
$num *= 2;
echo $num;//20
echo '<br>';
$num /= 2;
echo $num;//10
echo '<br>';
$s = ' oi';
$num .= $s;
echo $num;// "10 oi" 
echo '<br>';
$s1 = ' meu nome é ';
$s1 .= $s;
echo $s1;
echo '<br>';
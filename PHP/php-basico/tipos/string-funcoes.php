<?php

//contar os caracteres
echo strlen("Strings");
echo "<br>";
//pegar parte da string
//pega a partir da posição 0, 7 caracteres
echo substr("testando strings", 0,7);
echo "<br>";
echo substr("testando strings", -4,2);
echo "<br>";
echo substr("testando strings",7);
echo "<br>";
//pega da posição menos 7 até o fim da string
echo substr("testando strings",-7);
echo "<br>";
//adicionar caracteres extras
echo "<br>";
echo "Adicionar caracteres extras";
echo "<br>";
echo str_pad("Teste",8, "*",STR_PAD_LEFT);//Teste***
echo "<br>";
echo str_pad("oi", 10, "+",STR_PAD_BOTH);
echo "<br>";
// maiusculo minusculo
echo "<br>";
echo strtoupper("fica maiuscula!");
echo "<br>";
echo strtolower("FICA MINUSCULA");


// encontrar uma ocorrencia de caractere
echo "<br>";
echo strstr("iamge.jpeg",".");
echo "<br>";
echo strchr("iamge.png",".");
//substituir caracteres
echo "<br>";
echo str_replace("a","x","batata");
echo "<br>";
echo str_ireplace("A","x","batata");
<?php
// o php diferencia diferença de escritas
// case sensitive

/*HEREDOC: Permite uma escrita com mais liberdade
e interpreta códigos dinâmicos no texto
*/

$nome = 'Maria';
$cargo = 'desenvolvedora';

//permite a dinamicidade de trabalhar com variáveis
echo <<< HEREDOC
olá sou $nome, atuo como $cargo <br>
tranquila e tô top aprendendo php <br>
é uma linguagem legal <br> <br>
HEREDOC;

echo <<< 'NOWDOC'
olá sou $nome, atuo como $cargo <br>
tranquila e tô top aprendendo php <br>
é uma linguagem legal
NOWDOC;
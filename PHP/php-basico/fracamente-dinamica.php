<?php

$nome = 'José'; //php entende o tipo como string
echo gettype($nome);
echo '<br>';

$nome = (string) 10; //php entende o tipo como string
echo gettype($nome);
echo '<br>';

php?>
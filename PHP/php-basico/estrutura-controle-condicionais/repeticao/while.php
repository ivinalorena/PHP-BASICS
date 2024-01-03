<?php

$i = 0;

while($i<=10){
    echo $i . '<br>';
    $i++;
}

echo '<hr>';
$i = 0;
$listaFrutas = ['uva','banana','laranja'];

while($i<count($listaFrutas)){
    echo $listaFrutas[$i] .'<br>' ;
    $i++;
}


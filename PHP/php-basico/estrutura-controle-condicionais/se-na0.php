<?php

if(true){
    echo "A condição foi satisfeita...";
}

else{
    echo "entrou não";
}
//alternativa

if (false):
    echo "";
else:
    echo "";
endif;

///////////////////////////////////////////////
// senão se
//////////////////////////////////////////////
$countString = strlen('Lorena');//6

if($countString == 5){
    echo "há 5 letras";
    echo '<br>';
}
else if($countString == 6){
    echo '<br>';
    echo "há 6 letras";
}
else{
    echo "não há 5 letras";
}
/*
if($countString == 5):
    echo "há 5 letras";
    echo '<br>';

elseif($countString == 6):
    echo '<br>';
    echo "há 6 letras";

else:
    echo "não há 5 letras";
endif;*/
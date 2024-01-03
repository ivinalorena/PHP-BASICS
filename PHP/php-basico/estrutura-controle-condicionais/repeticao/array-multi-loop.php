<?php
$usuarios = [

    [
        'nome' => 'usuário 1',
        'email' => 'email1@email.com',
        'endereco' =>[
            'cep' => '62700000'
        ]
    ],

    [
        'nome' => 'usuário 2',
        'email' => 'email2@email.com',
        'endereco' =>[
            'cep' => '1234-5645'
        ]
    ]
];

// lê estes usuários com for
for ($i=0; $i< count($usuarios); $i++){
    echo $usuarios [$i]['nome']. 
    ' , têm o e-mail ' .$usuarios[$i]['email'] .
    ' e possui o CEP: '.  $usuarios [$i]['endereco']['cep'] .'<hr>';
}
echo '<br>';
foreach ($usuarios as $usuario){
    echo $usuario['nome']. 
    ' , têm o e-mail ' .$usuario['email'] .
    ' e possui o CEP: '.  $usuario['endereco']['cep'] .'<hr>';
}
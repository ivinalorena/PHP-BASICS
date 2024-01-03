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
];/*
[
    0 => array: array associativo ('nome: string', 
                                    'email: string',
                                    'endereco': array-associativo(cep)),
    1 => array    
] */

//organização
//echo '<pre>';
//var_dump($usuarios);

echo '<br>';
echo $usuarios[0]['nome'] . ', E-Mail : '. $usuarios[0]['email'];
echo '<br>';
echo 'Endereço CEP: ' . $usuarios[0]['endereco']['cep'];
echo '<hr>';
echo '<br>';
echo $usuarios[1]['nome'] . ', E-Mail : '. $usuarios[1]['email'];
echo '<br>';
echo 'Endereço CEP: ' . $usuarios[1]['endereco']['cep'];
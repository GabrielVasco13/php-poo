<?php

use Gabriel\PhpPoo\Pessoa;

require __DIR__ . '/vendor/autoload.php';

$pessoa1 = new Pessoa(
    'Gabriel',
    "jorge@gmail.com",
    "Rua 1",
    123456789,
    25,
);

$pessoa2 = new Pessoa(
    'Jorge',
    'jorgijnhogamepenes@email.com',
    'Rua 2',
    987654321,
    30,
);


dump($pessoa1);
dump($pessoa2);

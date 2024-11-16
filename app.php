<?php

use Gabriel\PhpPoo\Pessoa;

require __DIR__ . '/vendor/autoload.php';

$pessoaFisica = new Pessoa();

$pessoaFisica->setAll(
    'Gabriel',
    "jorge@gmail.com",
    "Rua 1",
    123456789,
    25,
);


dump($pessoaFisica);

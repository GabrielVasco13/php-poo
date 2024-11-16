<?php
// tornando a tipagem obrigatoria
declare(strict_types=1);

namespace Gabriel\PhpPoo;

// criação de classe
class Pessoa
{
    private string $name;
    private string $email;
    private string $address;
    private int $phone;
    private int $age;

    public function __construct($name, $email, $address, $phone, $age) {
        $this -> setAll($name, $email, $address, $phone, $age);
    }

    private function setAll($name, $email, $address, $phone, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->age = $age;
    }
}
<?php
// namespace rispondituttogame;
namespace model;

use DevCoder\Validator\Assert\Email;
use DevCoder\Validator\Assert\NotNull;
use DevCoder\Validator\Assert\StringLength;
use DevCoder\Validator\Validation;// model/User

class User
{


    public $user_id;
    public $nome;
    public $cognome;
    public $email;
    public $password;

    public static function factoryFromArray(array $data): User
    {
        $user = new self();
        $user->user_id = trim($data['user_id']) ?: null;
        $user->nome = trim($data['nome']) ?: null;
        $user->cognome = trim($data['cognome']) ?: null;
        $user->email = trim($data['email']) ?: null;
        $user->password = trim($data['password']) ?: null;
        return $user;
    }
    public static function validateUserForRegistration($userData): Validation
    {
        $validation = new Validation([
            'nome' => [(new StringLength())->min(3)],
            'email' => [(new StringLength())->min(4), new Email()],
            'cognome' => [(new StringLength())->min(2)],
            'password' => [(new StringLength())->min(8)]
        ]);
        $validation->validateArray($userData);
        return $validation;
    }
}
<?php

namespace Acme;

class AuthController implements RespondsToUserRegistration
{
    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }

    public function register()
    {
        $this->registration->execute([],  $this);
    }

    public function userRegisteredSuccesfuly()
    {
        var_dump('Criado com sucesso. Redirecionar para algum lugar.');
    }

    public function userRegisteredFailer()
    {
        var_dump('Não foi criado. Redirecionar para algum lugar.');
    }
}

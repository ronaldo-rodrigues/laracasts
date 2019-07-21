<?php

namespace Acme;

class RegisterUser
{
    public function execute(array $data, RespondsToUserRegistration $listener)
    {
        var_dump("Registrando o usuário.");

        $listener->userRegisteredSuccesfuly();
    }
}

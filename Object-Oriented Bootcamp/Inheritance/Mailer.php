<?php

abstract class Mailer
{
    public function send($to, $from, $body)
    { }
}


class UserMailer extends Mailer
{
    public function sendWelcomeEmail(User $user)
    {
        $from = 'mario@sonic.com';
        $body = 'Its me, sonic';
        return $this->send($user->email, $from, $body);
    }
}

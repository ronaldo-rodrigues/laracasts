<?php


interface Provider
{
    public function getAuthorizationUrl();
}


abstract class AbstractProvider
{
    public function related()
    { }
}

class FacebookProvider implements Provider
{
    public function getAuthorizationUrl()
    {
        return '';
    }
}

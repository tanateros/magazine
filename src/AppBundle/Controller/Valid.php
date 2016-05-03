<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session as Session;

class Valid
{
    static public function isAdmin()
    {
        $session = new Session();
        @$session->start();
        $result = true;

        if (!($session->get('login') == 'admin' && $session->get('password') == '123')) {
            $result = false;
        }

        return $result;
    }
}
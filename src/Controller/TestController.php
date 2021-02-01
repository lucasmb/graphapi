<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController // extends AnotherClass 
{
    public function index() {
    return new Response('TestController');
    }

    /**
     * @Route("/users/{username}")
     */
    public function test($username) {
        return new Response("Test Caca $username");
    }
}



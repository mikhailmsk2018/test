<?php
/**
 * Created by PhpStorm.
 * User: D
 * Date: 25.05.2019
 * Time: 12:56
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TestController
{

    /**
     * Метод с авторизацией
     *
     * @Route("/asdf")
     */
    public function asdf(){
        return new Response("fndgfgfb");
    }

}
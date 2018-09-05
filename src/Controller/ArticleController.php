<?php
/**
 * Created by PhpStorm.
 * User: Lenin Romo
 * Date: 04/09/2018
 * Time: 14:02
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('OMG! My first page already! WOOO!');
    }

    /**
     * @Route("news/why-asteroids-taste-like-bacon")
     */
    public function show(){
        return new Response("Future page to show one space article!");
    }
}
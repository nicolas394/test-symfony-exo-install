<?php


namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

class ArticleController{
        /**
         * @Route("/article", name="Article")
         */
        public function Article(){
            var_dump("Bienvenue sur la page article"); die;
        }
}
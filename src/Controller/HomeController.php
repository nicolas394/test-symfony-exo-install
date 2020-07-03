<?php

//le namespace permet d'identifier ma classe
//pour pouvoir l'appeler dans d'autres classes
namespace App\Controller;



use Symfony\Component\Routing\Annotation\Route;


    //je crée une classe HomeController, qui correspond
    //au nom du fichier, et qui me permet de regrouper des routes
class HomeController {
    /**
     * @Route("/", name="home")
     *
     * je crée une route dans un commentaire que PHP va éxécuter
     * (c'est donc une annotation). Je sais que c'est une annotation
     * car il y a une classe avec un @ devant
     *
     */
    public function home(){
        var_dump("bienvenue sur la page d'accueill"); die;
    }

}


<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

class ContactController{
    /**
     * @route("/contact", name="Contact")
     */
    public function Contact(){
        var_dump("Bienvenue sur la page contact"); die;
    }
}
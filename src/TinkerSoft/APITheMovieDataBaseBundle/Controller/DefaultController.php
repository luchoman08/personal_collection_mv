<?php

namespace TinkerSoft\APITheMovieDataBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APITheMovieDataBaseBundle:Default:index.html.twig');
    }
    
     public function calificarAction()
    {
       
    }
}

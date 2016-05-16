<?php

namespace TinkerSoft\APITheMovieDataBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class APIController extends Controller
{
    
    private function cargarGenerosAction($codigoLenguaje){
      
        $urlAPI = "https://api.themoviedb.org/3/genre/tv/list?api_key=be961f58626a1b5bb01ccf04da21d18f&language=".$codigoLenguaje;
        $content = file_get_contents($urlAPI);
        return $content;
        
    }
    
    public function listaGenerosAction($_locale)
    {
        
        $contentJSON = (array) json_decode($this->cargarGenerosAction($_locale));
        return $this->render('APITheMovieDataBaseBundle:Default:index.html.twig', array('params' => $contentJSON));
    }
}


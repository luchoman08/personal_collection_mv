<?php

namespace TinkerSoft\APITheMovieDataBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class APIController extends Controller
{
    
    var $languaje = en;
    
    
    public function buscarPeliculaAction($consulta,$numero_pagina){
        //
        //$respuesta =  $this->get('app.default_controller')->pruebaAction();

        if(is_numeric($numero_pagina)){
            
            if($numero_pagina <= 0){
                    $numero_pagina = 1;
              }
            
        }else{
            
            $numero_pagina = 1;
            
        }
        
        //&language=" . $this->languaje  ;
        
        $urlAPI = "https://api.themoviedb.org/3/search/movie?query=" . $consulta . "&page=" . $numero_pagina . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
        
        
    }
    
    public function obtenerPeliculaAction($id){
        
        $urlAPI = "https://api.themoviedb.org/3/movie/" . $id . "?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $peliculaJSON = (array) json_decode($content);
        $urlAPI="https://api.themoviedb.org/3/movie/".$id. "/videos?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $trailersJSON = (array) json_decode($content);
        $infocompletaJSON=array_merge($peliculaJSON, $trailersJSON);
           return $this->render('mostrarPelicula.html.twig', array(
            'params' => $infocompletaJSON
        ));
       // return $infocompletaJSON;
        
        
    }
    
    public function listaGenerosAction($_locale)
    {
        $urlAPI = "https://api.themoviedb.org/3/genre/tv/list?api_key=be961f58626a1b5bb01ccf04da21d18f&language=".$codigoLenguaje;
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
    }
}


<?php

namespace TinkerSoft\APITheMovieDataBaseBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class APIController extends Controller
{
    
    var $languaje = en;
    
    
    public function buscarPeliculaAction($consulta,$numero_pagina){
        
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
    public function obtenerPeliculasTendenciaAction(Request $request){
        
        $urlAPI = "https://api.themoviedb.org/3/movie/popular?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
    
    }
    
    public function obtenerMejoresValoradasAction(Request $request){
        
        $urlAPI = "https://api.themoviedb.org/3/movie/top_rated?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
    
    }
    
    public function obtenerEstrenosAction(Request $request){
        
        $urlAPI = "https://api.themoviedb.org/3/movie/now_playing?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
    
    }
    
    public function obtenerProximamenteAction(Request $request){
        
        $urlAPI = "https://api.themoviedb.org/3/movie/upcoming?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
    
    }
    
    public function obtenerUltimasAction(Request $request){
        
        $urlAPI = "https://api.themoviedb.org/3/movie/latest?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
    }
    
    public function obtenerPeliculaAction(Request $request, $id){
         $session = $request->getSession();
        echo $session->get('name');
        $urlAPI = "https://api.themoviedb.org/3/movie/" . $id . "?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $peliculaJSON = (array) json_decode($content);
        $urlAPI="https://api.themoviedb.org/3/movie/".$id. "/videos?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $trailersJSON = (array) json_decode($content);
        $infocompletaJSON=array_merge($peliculaJSON, $trailersJSON);
        return $infocompletaJSON;
        
        
    }
    
    public function listaGenerosAction($_locale)
    {
        $urlAPI = "https://api.themoviedb.org/3/genre/tv/list?api_key=be961f58626a1b5bb01ccf04da21d18f&language=".$codigoLenguaje;
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
    }
}


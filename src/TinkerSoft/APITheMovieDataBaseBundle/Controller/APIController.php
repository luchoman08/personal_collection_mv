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
        
        $consulta = str_replace(" ", "-", $consulta);
        
        if(is_numeric($numero_pagina)){
            
            if($numero_pagina <= 0){
                    $numero_pagina = 1;
              }
            
            if($numero_pagina > 1000){
                    $numero_pagina = 1000;
              }
            
        }else{
            
            $numero_pagina = 1;
                
        }
        
        //&language=" . $this->languaje  ;
        
        $urlAPI = "https://api.themoviedb.org/3/search/movie?query=" . $consulta . "&page=" . $numero_pagina . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        
        if($numero_pagina > $contentJSON['total_pages']){
            
                    $numero_pagina = $contentJSON['total_pages'];
                    $urlAPI = "https://api.themoviedb.org/3/search/movie?query=" . $consulta . "&page=" . $numero_pagina . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
                    $content = file_get_contents($urlAPI);
                    $contentJSON = (array) json_decode($content);
                    
              }
        return $contentJSON;
    }
    
    public function buscarShowAction($consulta,$numero_pagina){
        
        $consulta = str_replace(" ", "-", $consulta);
        
        if(is_numeric($numero_pagina)){
            
            if($numero_pagina <= 0){
                    $numero_pagina = 1;
              }
            if($numero_pagina > 1000){
                    $numero_pagina = 1000;
              }
        }else{
            
            $numero_pagina = 1;
                
        }
        
        //&language=" . $this->languaje  ;
        
        $urlAPI = "https://api.themoviedb.org/3/search/tv?query=" . $consulta . "&page=" . $numero_pagina . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        
        if($numero_pagina > $contentJSON['total_pages']){
            
                    $numero_pagina = $contentJSON['total_pages'];
                    $urlAPI = "https://api.themoviedb.org/3/search/tv?query=" . $consulta . "&page=" . $numero_pagina . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
                    $content = file_get_contents($urlAPI);
                    $contentJSON = (array) json_decode($content);
                    
              }
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
    
    public function obtenerSimilaresAction($id){
        
        $urlAPI = "https://api.themoviedb.org/3/movie/" . $id . "/similar?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
    }
    
    public function obtenerSimilaresPaginadasAction($consulta,$numero_pagina){
        
        $consulta = str_replace(" ", "-", $consulta);
        
        if(is_numeric($numero_pagina)){
            
            if($numero_pagina <= 0){
                    $numero_pagina = 1;
              }
            
            if($numero_pagina > 1000){
                    $numero_pagina = 1000;
              }
            
        }else{
            
            $numero_pagina = 1;
                
        }
        
        
        $urlAPI = "https://api.themoviedb.org/3/movie/" . $consulta . "/similar?page=" . $numero_pagina . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        
        if($numero_pagina > $contentJSON['total_pages']){
            
                    $numero_pagina = $contentJSON['total_pages'];
                    $urlAPI = "https://api.themoviedb.org/3/movie/" . $consulta . "/similar?page=" . $numero_pagina . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
                    $content = file_get_contents($urlAPI);
                    $contentJSON = (array) json_decode($content);
                    
              }
        return $contentJSON;
    }
    
    
    public function descubrirGenerosPaginadasAction($generos,$numero_pagina){
        
        $generos = str_replace(" ", "-", $generos);
        
        if(is_numeric($numero_pagina)){
            
            if($numero_pagina <= 0){
                    $numero_pagina = 1;
              }
            
            if($numero_pagina > 1000){
                    $numero_pagina = 1000;
              }
            
        }else{
            
            $numero_pagina = 1;
                
        }
        
        $urlAPI = "https://api.themoviedb.org/3/discover/movie?with_genres=" . $generos . "&page=" . $numero_pagina . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        
        if($numero_pagina > $contentJSON['total_pages']){
            
                    $numero_pagina = $contentJSON['total_pages'];
                    $urlAPI = "https://api.themoviedb.org/3/discover/movie?with_genres=" . $generos . "&page=" . $numero_pagina . "&&api_key=be961f58626a1b5bb01ccf04da21d18f";
                    $content = file_get_contents($urlAPI);
                    $contentJSON = (array) json_decode($content);
                    
              }
        return $contentJSON;
        
    }
    
    
    public function obtenerPeliculasActorAction($id_actor,$numero_pagina){
        
        $id_actor = str_replace(" ", "-", $id_actor);
        
        if(is_numeric($numero_pagina)){
            
            if($numero_pagina <= 0){
                    $numero_pagina = 1;
              }
            
            if($numero_pagina > 1000){
                    $numero_pagina = 1000;
              }
            
        }else{
            
            $numero_pagina = 1;
                
        }
        
        $urlAPI = "https://api.themoviedb.org/3/discover/movie?with_people=" . $id_actor . "&page=" . $numero_pagina . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        
        if($numero_pagina > $contentJSON['total_pages']){
            
                    $numero_pagina = $contentJSON['total_pages'];
                    $urlAPI = "https://api.themoviedb.org/3/discover/movie?with_people=" . $id_actor . "&page=" . $numero_pagina . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
                    $content = file_get_contents($urlAPI);
                    $contentJSON = (array) json_decode($content);
                    
              }
        return $contentJSON;
        
    }
    
    
    private function codigosLenguaje($codigo){
        $language_codes = array(
        'en' => 'English' , 
        'aa' => 'Afar' , 
        'ab' => 'Abkhazian' , 
        'af' => 'Afrikaans' , 
        'am' => 'Amharic' , 
        'ar' => 'Arabic' , 
        'as' => 'Assamese' , 
        'ay' => 'Aymara' , 
        'az' => 'Azerbaijani' , 
        'ba' => 'Bashkir' , 
        'be' => 'Byelorussian' , 
        'bg' => 'Bulgarian' , 
        'bh' => 'Bihari' , 
        'bi' => 'Bislama' , 
        'bn' => 'Bengali/Bangla' , 
        'bo' => 'Tibetan' , 
        'br' => 'Breton' , 
        'ca' => 'Catalan' , 
        'co' => 'Corsican' , 
        'cs' => 'Czech' , 
        'cy' => 'Welsh' , 
        'da' => 'Danish' , 
        'de' => 'German' , 
        'dz' => 'Bhutani' , 
        'el' => 'Greek' , 
        'eo' => 'Esperanto' , 
        'es' => 'Spanish' , 
        'et' => 'Estonian' , 
        'eu' => 'Basque' , 
        'fa' => 'Persian' , 
        'fi' => 'Finnish' , 
        'fj' => 'Fiji' , 
        'fo' => 'Faeroese' , 
        'fr' => 'French' , 
        'fy' => 'Frisian' , 
        'ga' => 'Irish' , 
        'gd' => 'Scots/Gaelic' , 
        'gl' => 'Galician' , 
        'gn' => 'Guarani' , 
        'gu' => 'Gujarati' , 
        'ha' => 'Hausa' , 
        'hi' => 'Hindi' , 
        'hr' => 'Croatian' , 
        'hu' => 'Hungarian' , 
        'hy' => 'Armenian' , 
        'ia' => 'Interlingua' , 
        'ie' => 'Interlingue' , 
        'ik' => 'Inupiak' , 
        'in' => 'Indonesian' , 
        'is' => 'Icelandic' , 
        'it' => 'Italian' , 
        'iw' => 'Hebrew' , 
        'ja' => 'Japanese' , 
        'ji' => 'Yiddish' , 
        'jw' => 'Javanese' , 
        'ka' => 'Georgian' , 
        'kk' => 'Kazakh' , 
        'kl' => 'Greenlandic' , 
        'km' => 'Cambodian' , 
        'kn' => 'Kannada' , 
        'ko' => 'Korean' , 
        'ks' => 'Kashmiri' , 
        'ku' => 'Kurdish' , 
        'ky' => 'Kirghiz' , 
        'la' => 'Latin' , 
        'ln' => 'Lingala' , 
        'lo' => 'Laothian' , 
        'lt' => 'Lithuanian' , 
        'lv' => 'Latvian/Lettish' , 
        'mg' => 'Malagasy' , 
        'mi' => 'Maori' , 
        'mk' => 'Macedonian' , 
        'ml' => 'Malayalam' , 
        'mn' => 'Mongolian' , 
        'mo' => 'Moldavian' , 
        'mr' => 'Marathi' , 
        'ms' => 'Malay' , 
        'mt' => 'Maltese' , 
        'my' => 'Burmese' , 
        'na' => 'Nauru' , 
        'ne' => 'Nepali' , 
        'nl' => 'Dutch' , 
        'no' => 'Norwegian' , 
        'oc' => 'Occitan' , 
        'om' => '(Afan)/Oromoor/Oriya' , 
        'pa' => 'Punjabi' , 
        'pl' => 'Polish' , 
        'ps' => 'Pashto/Pushto' , 
        'pt' => 'Portuguese' , 
        'qu' => 'Quechua' , 
        'rm' => 'Rhaeto-Romance' , 
        'rn' => 'Kirundi' , 
        'ro' => 'Romanian' , 
        'ru' => 'Russian' , 
        'rw' => 'Kinyarwanda' , 
        'sa' => 'Sanskrit' , 
        'sd' => 'Sindhi' , 
        'sg' => 'Sangro' , 
        'sh' => 'Serbo-Croatian' , 
        'si' => 'Singhalese' , 
        'sk' => 'Slovak' , 
        'sl' => 'Slovenian' , 
        'sm' => 'Samoan' , 
        'sn' => 'Shona' , 
        'so' => 'Somali' , 
        'sq' => 'Albanian' , 
        'sr' => 'Serbian' , 
        'ss' => 'Siswati' , 
        'st' => 'Sesotho' , 
        'su' => 'Sundanese' , 
        'sv' => 'Swedish' , 
        'sw' => 'Swahili' , 
        'ta' => 'Tamil' , 
        'te' => 'Tegulu' , 
        'tg' => 'Tajik' , 
        'th' => 'Thai' , 
        'ti' => 'Tigrinya' , 
        'tk' => 'Turkmen' , 
        'tl' => 'Tagalog' , 
        'tn' => 'Setswana' , 
        'to' => 'Tonga' , 
        'tr' => 'Turkish' , 
        'ts' => 'Tsonga' , 
        'tt' => 'Tatar' , 
        'tw' => 'Twi' , 
        'uk' => 'Ukrainian' , 
        'ur' => 'Urdu' , 
        'uz' => 'Uzbek' , 
        'vi' => 'Vietnamese' , 
        'vo' => 'Volapuk' , 
        'wo' => 'Wolof' , 
        'xh' => 'Xhosa' , 
        'yo' => 'Yoruba' , 
        'zh' => 'Chinese' , 
        'zu' => 'Zulu' , 
        );
        
        return $language_codes[$codigo];
    }
    
    public function obtenerPeliculaAction(Request $request, $id){
        $session = $request->getSession();
        //echo $session->get('name');
        $urlAPI = "https://api.themoviedb.org/3/movie/" . $id . "?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $peliculaJSON = (array) json_decode($content);
        $urlAPI="https://api.themoviedb.org/3/movie/".$id. "/videos?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $trailersJSON = (array) json_decode($content);
        for($i = 0; $i < count($trailersJSON['results']); $i++){
            
            $trailersJSON['results'][$i]->iso_639_1 = $this->codigosLenguaje($trailersJSON['results'][$i]->iso_639_1);
        }
        //&language=
        /*$urlAPI="https://api.themoviedb.org/3/movie/".$id. "/videos?api_key=be961f58626a1b5bb01ccf04da21d18f&language=es";
        $content = file_get_contents($urlAPI);
        $trailersJSON = array_combine ($trailersJSON,(array) json_decode($content));
        for($i = 0; $i < count($trailersJSON['results']); $i++){
            
            $trailersJSON['results'][$i]->iso_639_1 = $this->codigosLenguaje($trailersJSON['results'][$i]->iso_639_1);
        }*/
        
        $imagenes= "https://api.themoviedb.org/3/movie/" . $id . "/images?api_key=be961f58626a1b5bb01ccf04da21d18f&include_image_language=en,null";
        $content = file_get_contents($imagenes);
        $imagenesJSON = (array) json_decode($content);
        
        $creditos= "https://api.themoviedb.org/3/movie/" . $id . "/credits?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($creditos);
        $creditosJSON = (array) json_decode($content);
        
        
        $infocompletaJSON=array_merge($peliculaJSON, $trailersJSON,$imagenesJSON,$creditosJSON);
        return $infocompletaJSON;
    }
    
    public function obtenerPeliculaRipeadaAction(Request $request, $id){
      
        $urlAPI = "https://api.themoviedb.org/3/movie/" . $id . "?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $peliculaJSON = (array) json_decode($content);
       
        return $peliculaJSON;
    }
    
    public function listaGenerosAction($_locale)
    {
        //&language=".$codigoLenguaje
        $urlAPI = "https://api.themoviedb.org/3/genre/movie/list?api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
    }
    
    // Funcion BETA!!!!!!!! Nombre
    public function obtenerDatosOMDbAction($consulta){
        
        $urlAPI = "http://www.omdbapi.com/?t=" . $consulta . "&y=&plot=full&r=json";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
        
    } 
    
    // Funcion BETA!!!!!!!! ID
    public function obtenerDatosOMDbIDAction($id){
        
        $urlAPI = "http://www.omdbapi.com/?i=" . $id . "&plot=full&r=json";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
        
    } 
    
    public function descubrirGenerosAction($generos){
        
        $argumentoGeneros = "";
        for($i=0; $i<count($generos); $i++){
            $argumentoGeneros = $argumentoGeneros . $generos[$i];
            if($i < (count($generos)-1) ){
                $argumentoGeneros = $argumentoGeneros . "|";
            }
        }
        
        $urlAPI = "https://api.themoviedb.org/3/discover/movie?with_genres=" . $argumentoGeneros . "&api_key=be961f58626a1b5bb01ccf04da21d18f";
        $content = file_get_contents($urlAPI);
        $contentJSON = (array) json_decode($content);
        return $contentJSON;
        
    }
    
}


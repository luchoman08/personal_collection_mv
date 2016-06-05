<?php

namespace TinkerSoft\VistaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction(){
        
        return $this->render('VistaBundle:Default:da.html.twig');
    }
    
    public function iniciarIndexAction(Request $request){
        
        $tendencia = $this->get('app.api_controller')->obtenerPeliculasTendenciaAction($request);
        $mejoresValoradas = $this->get('app.api_controller')->obtenerMejoresValoradasAction($request);
        $estrenos = $this->get('app.api_controller')->obtenerEstrenosAction($request);
        $proximamente = $this->get('app.api_controller')->obtenerProximamenteAction($request);
        $ultimas = $this->get('app.api_controller')->obtenerUltimasAction($request);
        
        $randomTendencia = rand ( 0 , count($tendencia));
        $randomMejoresValoradas = rand (  0 ,  count($mejoresValoradas));
        $randomEstrenos = rand ( 0 , count($estrenos));
        $randomProximamente = rand (  0 ,  count($proximamente));
        $arrayBanners;
        
        $peliculaTendencia = array('titulo'=>$tendencia['results'][$randomTendencia]->title, 'fondo'=> $tendencia['results'][$randomTendencia]->backdrop_path);
        $peliculaMejoresValoradas = array('fondo'=> $mejoresValoradas['results'][$randomMejoresValoradas]->backdrop_path, 'titulo'=>$mejoresValoradas['results'][$randomMejoresValoradas]->title);
        $peliculaEstrenos = array('fondo'=>$estrenos['results'][$randomEstrenos]->backdrop_path, 'titulo'=>$estrenos['results'][$randomEstrenos]->title);
        $peliculaProximamente =array('fondo'=>$proximamente['results'][$randomProximamente]->backdrop_path, 'titulo'=>$proximamente['results'][$randomProximamente]->title);
        
        $backdrops=array($peliculaTendencia, $peliculaMejoresValoradas,$peliculaEstrenos,$peliculaProximamente);
        
        $numPeliculasDivisibleTres= count($tendencia['results']) - (count($tendencia['results']) % 3);
        
        
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
        }
        
        return $this->render('VistaBundle:Default:index.html.twig', array('tendencia' => $tendencia,'mejoresValoradas' => $mejoresValoradas,'estrenos' => $estrenos,'proximamente' => $proximamente, 'ultimas' => $ultimas, 'numPeliculasDivisibleTres'=>$numPeliculasDivisibleTres, 'backdrops'=>$backdrops,'usuarioLogueado' => $usuarioLogueado, 'nickname' => $nickname));
    }
    
    public function verResultadosBusquedaShowAction(Request $request, $consulta,$numero_pagina){
        
        $datos = $this->get('app.api_controller')->buscarShowAction($consulta,$numero_pagina);
        return $this->render('VistaBundle:Default:buscar.html.twig', array('params' => $datos, 'consulta' => $consulta));
        
    }
    
    public function verResultadosBusquedaAction(Request $request, $consulta,$numero_pagina){
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
        }
        $datos = $this->get('app.api_controller')->buscarPeliculaAction($consulta,$numero_pagina);
        return $this->render('VistaBundle:Default:buscar.html.twig', array('params' => $datos, 'consulta' => $consulta,'usuarioLogueado' => $usuarioLogueado, 'nickname' => $nickname,'flag' => 'busqueda'));
        
    }
    
    public function verResultadosSimilaresAction(Request $request, $consulta,$numero_pagina){
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
        }
        $datos = $this->get('app.api_controller')->obtenerSimilaresPaginadasAction($consulta,$numero_pagina);
        return $this->render('VistaBundle:Default:buscar.html.twig', array('params' => $datos, 'consulta' => $consulta,'usuarioLogueado' => $usuarioLogueado, 'nickname' => $nickname,'flag' => 'similares'));
        
    }
    
    public function verPeliculaAction(Request $request, $id){
        
        $datos = $this->get('app.api_controller')->obtenerPeliculaAction($request, $id);
        $similares = $this->get('app.api_controller')->obtenerSimilaresAction($id);
        $em = $this->getDoctrine()->getManager();
        
        $usuarioLogueado=0;
        $nickname = "";
        if($request->getSession()->get('id')){
            $usuarioLogueado=1;
            $nickname = $request->getSession()->get('nickname');
            $calificacionPelicula = array('calificacionUsuario'=>$this->get('app.funciones_controler')->retornarCalificacionAction($request->getSession()->get('id'), $id, $em));
            $boolVista=array('vista'=>$this->get('app.funciones_controler')->preguntarPorPeliculaVistaAction($request, $id, $em));
            $boolPorVer = array('porVer'=>$this->get('app.funciones_controler')->preguntarPorPeliculaPorVerAction($request, $id, $em));
            $datos = $datos + $calificacionPelicula;
            $datos = $datos + $boolVista;
            $datos = $datos + $boolPorVer;
        }
        
        $fondos = $datos->backdrops;
        
        return $this->render('VistaBundle:Default:mostrarPelicula.html.twig', array('usuarioLogueado'=>$usuarioLogueado, 'params' => $datos, 'similares' => $similares, 'nickname' => $nickname, 'fondos' => $fondos));
    }
    
    
    public function verListaGenerosAction(){
        
        $datos = $this->get('app.api_controller')->listaGenerosAction("en");
        return $this->render('VistaBundle:Default:index.html.twig', array('params' => $datos));
        
    }
    public function mostrarLoginAction(){
         
        return $this->render('VistaBundle:Default:login.html.twig');
        
    }
    public function demoAction(){
        return $this->render('VistaBundle:Default:demo.html.twig');
    
    }
}

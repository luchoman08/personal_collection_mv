<?php

namespace TinkerSoft\VistaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VistaBundle:Default:da.html.twig');
    }
    
    public function iniciarIndexAction(Request $request){
        $tendencia = $this->get('app.api_controller')->obtenerPeliculasTendenciaAction($request);
        $mejoresValoradas = $this->get('app.api_controller')->obtenerMejoresValoradasAction($request);
        $estrenos = $this->get('app.api_controller')->obtenerEstrenosAction($request);
        $proximamente = $this->get('app.api_controller')->obtenerProximamenteAction($request);
        $ultimas = $this->get('app.api_controller')->obtenerUltimasAction($request);
        
        $numPeliculasDivisibleTres= count($tendencia['results']) - (count($tendencia['results']) % 3);
        return $this->render('VistaBundle:Default:index.html.twig', array('tendencia' => $tendencia,'mejoresValoradas' => $mejoresValoradas,'estrenos' => $estrenos,'proximamente' => $proximamente, 'ultimas' => $ultimas, 'numPeliculasDivisibleTres'=>$numPeliculasDivisibleTres));
    }
    
    public function verResultadosBusquedaShowAction(Request $request, $consulta,$numero_pagina){
        
        //$session = new Session();
        //$session = $request->getSession();
        //echo $session->get('name');
        
        $datos = $this->get('app.api_controller')->buscarShowAction($consulta,$numero_pagina);
        return $this->render('VistaBundle:Default:buscar.html.twig', array('params' => $datos, 'consulta' => $consulta));
        
    }
    
    public function verResultadosBusquedaAction(Request $request, $consulta,$numero_pagina){
        
        //$session = new Session();
        //$session = $request->getSession();
        //echo $session->get('name');
        
        $datos = $this->get('app.api_controller')->buscarPeliculaAction($consulta,$numero_pagina);
        return $this->render('VistaBundle:Default:buscar.html.twig', array('params' => $datos, 'consulta' => $consulta));
        
    }


    
    public function verPeliculaAction($id){
        $datos = $this->get('app.api_controller')->obtenerPeliculaAction($id);
        return $this->render('VistaBundle:Default:mostrarPelicula.html.twig', array('params' => $datos));
    }
    
    public function verListaGenerosAction(){
        //'en' temportalmente por defecto
        $datos = $this->get('app.api_controller')->listaGenerosAction("en");
        return $this->render('VistaBundle:Default:index.html.twig', array('params' => $datos));
    }
    
}

<?php

namespace TinkerSoft\VistaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VistaBundle:Default:da.html.twig');
    }
    
    public function verResultadosBusquedaAction($consulta,$numero_pagina){
        
        $datos = $this->get('app.api_controller')->buscarPeliculaAction($consulta,$numero_pagina);
        return $this->render('VistaBundle:Default:pelicula.html.twig', array('params' => $datos));
        
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

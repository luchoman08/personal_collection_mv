<?php

namespace TinkerSoft\FuncionesSitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
//entidades
use TinkerSoft\FuncionesSitioBundle\Entity\Usuarios;
use TinkerSoft\FuncionesSitioBundle\Entity\Coleccion;
use TinkerSoft\FuncionesSitioBundle\Entity\PeliculasColeccion;
use TinkerSoft\FuncionesSitioBundle\Entity\ValoracionPeliculas;

class FuncionesSitioController extends Controller
{
    public function indexAction()
    {
        return $this->render('FuncionesSitioBundle:Default:index.html.twig');
        
        
    }
    
    /*
    verifica si la pelicula con id dado 
    ya fue marcada como vista por el usuario
    logueado 
    */
       public function preguntarPorPeliculaEnColeccionAction(Request $request, $idPelicula, $idColeccion, $em)
    {
        if($request->getSession()->get('id')){ 
        $objeto = $em->getRepository('FuncionesSitioBundle:PeliculasColeccion')->
        findOneBy(array('idColeccion'=>$idColeccion, 'idPelicula'=>$idPelicula));
        // si hay una pelicula en colecciones del usuario en la lista 
        if($objeto){
            return 1;
        }
        else{
            return 0;
        }
    }
    }
     public function getPeliculaColeccionAction(Request $request, $idPelicula, $idColeccion, $em)
    {
        if($request->getSession()->get('id')){ 
        $objeto = $em->getRepository('FuncionesSitioBundle:PeliculasColeccion')->
        findOneBy(array('idColeccion'=>$idColeccion, 'idPelicula'=>$idPelicula));
        // si hay una pelicula en colecciones del usuario en la lista 
        if($objeto){
            return $objeto;
        }
        else{
            return NULL;
        }
    }
    else{
         return $this->render('VistaBundle:Default:login.html.twig');
    }
    }
    /*
    si le objeto existe, este se elimina y se retorna 0, en caso contrario se retorna 1
    */
    
    
    public function eliminarPeliculaColeccion(Request $request, $idPelicula, $idColeccion, $em){
        
        if($request->getSession()->get('id')){
            /* 
            
            */
            $peliculaColeccion=$this->getPeliculaColeccionAction($request, $idPelicula, $idColeccion, $em);
            if($peliculaColeccion){
             $em->remove($peliculaColeccion);
             $em->flush();
             return 0;
            }
            else{
                return 1;
            }
        }
        else{
            $this->redireccionErrorAction();
        }
        
    }
     public function preguntarPorPeliculaPorVerAction(Request $request, $idPelicula, $em)
    {
        if($request->getSession()->get('id')){
        $idColeccionVistas = $this->getIdColeccionPorVer($request, $em);
        return $this->preguntarPorPeliculaEnColeccionAction($request, $idPelicula, $idColeccionVistas, $em);
    }
    else{
         return $this->render('VistaBundle:Default:login.html.twig');
    }
    }   
    
    public function preguntarPorPeliculaVistaAction(Request $request, $idPelicula, $em)
    {
        if($request->getSession()->get('id')){
        $idColeccionVistas = $this->getIdColeccionVistas($request, $em);
        return $this->preguntarPorPeliculaEnColeccionAction($request, $idPelicula, $idColeccionVistas, $em);
    }
    else{
         return $this->render('VistaBundle:Default:login.html.twig');
    }
    }
    /*
    retorna el id de la coleccion vistas para el usuario logueado
    si no existe retorna -1
    */
    
     public function getIdColeccionPorVer(Request $request, $em)
    {
        if($request->getSession()->get('id')){
           $id = $this->getIdColeccion($request, 'Peliculas por Ver', 1, $em);
           return $id;
        }
        else{
            $this->redireccionErrorAction();
        }
    }
    
    public function getIdColeccionVistas(Request $request, $em)
    {
        if($request->getSession()->get('id')){
           $id = $this->getIdColeccion($request, 'Peliculas Vistas', 0, $em);
           return $id;
        }
        else{
            $this->redireccionErrorAction();
        }
    }
    //retorna el id de la coleccion, si no existe retorna -1
    public function getIdColeccion(Request $request, $nombreColeccion, $tipo, $em){
        if($request->getSession()->get('id')){
           $objeto = $em->getRepository('FuncionesSitioBundle:Coleccion')->
            findOneBy(array('nombre'=>$nombreColeccion, 
                            'idUsuario'=>$request->getSession()->get('id'), 
                            'tipo'=>$tipo));
            if($objeto)
            {
                return $objeto->getId();
            }
            else{
                return -1;
            }
        }
        else{
          $this->redireccionErrorAction();
        }
    }
    public function redireccionErrorAction(){
        return $this->render('VistaBundle:Default:login.html.twig');   
    }
     public function adicionarPeliculaListaPorVerAction(Request $request)
    {
        if($request->getSession()->get('id')){
          $listaPorVer=$this->crearListaPorVerAction($request);
          $em = $this->getDoctrine()->getManager();
         
          $resultado = $this->adicionarPeliculaListaAction($request, $listaPorVer, $request->query->get('idPelicula'));
          $response = new Response();
          if($resultado==1)
          {
              
          $response->setContent('Pelicula marcada como por Ver :)');
           if($this->preguntarPorPeliculaVistaAction($request, $request->query->get('idPelicula'), $em)){
              $idListaVistas=$this->getIdColeccionVistas($request, $em);
              $this->eliminarPeliculaColeccion($request, $request->query->get('idPelicula'), $idListaVistas, $em);
          }
          }
          if($resultado==0)
          {
          $response->setContent('Eliminada de la lista de peliculas por ver');
          }
          $response->setStatusCode(Response::HTTP_OK);
          $response->headers->set('Content-Type', 'text/html');
          return $response;
        }
        else{
        return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
    
    public function adicionarPeliculaListaVistasAction(Request $request)
    {
        
        if($request->getSession()->get('id')){
          $listaVistas=$this->crearListaVistasAction($request);
          $resultado = $this->adicionarPeliculaListaAction($request, $listaVistas, $request->query->get('idPelicula'));
          $response = new Response();
          if($resultado==1)
          {
             $em = $this->getDoctrine()->getManager();
          if($this->preguntarPorPeliculaPorVerAction($request, $request->query->get('idPelicula'), $em)){
              $idListaVistas=$this->getIdColeccionPorVer($request, $em);
              $this->eliminarPeliculaColeccion($request, $request->query->get('idPelicula'), $idListaVistas, $em);
          }    
          $response->setContent('Pelicula marcada como vista :)');
          }
          if($resultado==0)
          {
          $response->setContent('Eliminada de la lista de peliculas vistas');
          }
          $response->setStatusCode(Response::HTTP_OK);
          $response->headers->set('Content-Type', 'text/html');
          return $response;
        }
        else{
        return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
    
    /*
    metodo general
    salida: 0 si la pelicula ya estaba adicionada a la coleccion, esta se elimina ademas de todo
            1 si la pelicula fue adicionada a la lista
            retorno a el index si no es un usuario logueado
    */
    
     public function adicionarPeliculaListaAction($request, $idColeccion, $idPelicula)
    {
      if($request->getSession()->get('id')){   
        $em = $this->getDoctrine()->getManager();
        $objeto = $em->getRepository('FuncionesSitioBundle:PeliculasColeccion')->
            findOneBy(array('idColeccion'=>$idColeccion->getId(), 'idPelicula'=>$idPelicula));
            if($objeto)
            {
               $em->remove($objeto);
               $em->flush();
               return 0;
            }
            else{
                $peliculaColeccion = new PeliculasColeccion();
                $peliculaColeccion->setIdColeccion($idColeccion);
                $peliculaColeccion->setIdPelicula($idPelicula);
                $peliculaColeccion->setFechaAdicion(new \DateTime());
                $em->persist($peliculaColeccion);
                $em->flush();
                return 1;
            }
            }
    
    else{
                 return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
    
     /*entrada:
    {request-request-getSession()-get(id)}
    salida:
    en cualquier caso, sea si estaba ya la lista o no, este metodo 
    retorna objeto lista de peliculas vistas del usuario que indica
    el request
    */
    public function crearListaPorVerAction(Request $request)
    {
    
     if($request->getSession()->get('id')){
        $em = $this->getDoctrine()->getManager();
        $objeto = $em->getRepository('FuncionesSitioBundle:Coleccion')->
        findOneBy(array('idUsuario'=>$request->getSession()->get('id'), 'tipo'=>1));
            if($objeto)
            {
              return $objeto;
            }
            else{
                $this->crearListaAction($request->getSession()->get('id'), 'Peliculas por Ver', 1);
                $objeto = $em->getRepository('FuncionesSitioBundle:Coleccion')->
                findOneBy(array('idUsuario'=>$request->getSession()->get('id'), 'tipo'=>0));
                return $objeto;
            }
        }
        else{
                 return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
    /*entrada:
    {request-request-getSession()-get(id)}
    salida:
    en cualquier caso, sea si estaba ya la lista o no, este metodo 
    retorna objeto lista de peliculas vistas del usuario que indica
    el request
    */
    
    /*
    recibe un udusuario y retorna si la lista existe o no
    */
    public function existeListaAction(Request $request, $em, $nombre, $tipo){
        $em = $this->getDoctrine()->getManager();
        $objeto = $em->getRepository('FuncionesSitioBundle:Coleccion')->
        findOneBy(array('idUsuario'=>$request->getSession()->get('id'), 'tipo'=>$tipo, 'nombre'=>$nombre));
        if($objeto)
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function crearListaVistasAction(Request $request)
    {
     if($request->getSession()->get('id')){
        $em = $this->getDoctrine()->getManager();
        $objeto = $em->getRepository('FuncionesSitioBundle:Coleccion')->
        findOneBy(array('idUsuario'=>$request->getSession()->get('id'), 'tipo'=>0));
            if($objeto)
            {
              return $objeto;
            }
            else{
                $this->crearListaAction($request->getSession()->get('id'), 'Peliculas Vistas', 0);
                $objeto = $em->getRepository('FuncionesSitioBundle:Coleccion')->
                findOneBy(array('idUsuario'=>$request->getSession()->get('id'), 'tipo'=>0));
                return $objeto;
            }
        }
        else{
                 return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
    
    /* funcion general para crear cualquier lista */
    /* si existe el nombre de la lista para el usuario nado retorna 0, si no, crea la lista y retorna 1*/
      public function crearListaAction($idUsuario, $nombreLista, $tipo)
    {
        if($idUsuario){
        $em = $this->getDoctrine()->getManager();
        $objeto = $em->getRepository('FuncionesSitioBundle:Coleccion')->
            findOneBy(array('idUsuario'=>$idUsuario, 'nombre'=>$nombreLista));
            //si ya esta la lista
            if($objeto)
            {

               return 0;
            }
            else{
                $coleccion = new Coleccion();
                $usuarioTmp = $em->getRepository('FuncionesSitioBundle:Usuarios')->findOneBy(array('id'=>$idUsuario));
                $coleccion->setIdUsuario($usuarioTmp);
                $coleccion->setTipo($tipo);
                $coleccion->setNombre($nombreLista);
                $coleccion->setFechaCreacion(new \DateTime());
                $em->persist($coleccion);
                $em->flush();
                return 1;
            }
        }
        else{
                 return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
    /*entrada:
    {idPelicula}
    */
    public function retornarCalificacionAction($idUsuario, $idPelicula, $em)
    {
        if($idUsuario)
        {
        /*$em = $this->getDoctrine()->getManager();*/
        $objeto = $em->getRepository('FuncionesSitioBundle:ValoracionPeliculas')->
            findOneBy(array('idUsuario'=>$idUsuario, 'idPelicula'=>$idPelicula));
         if($objeto){
        return $objeto->getValoracion();
         }
         else{
             return 0;
        }
        }
        else{
            return 0;
        }
    }
    
      public function calificarPeliculaAction(Request $request)
    {
 
            $em = $this->getDoctrine()->getManager();
           
            $usuario = $em->getRepository('FuncionesSitioBundle:Usuarios')->
            findOneBy(array('id'=>$request->getSession()->get('id')));
           
            //si ya esta la calificacion por el usuario a dicha pelicula:
           if($em->getRepository('FuncionesSitioBundle:ValoracionPeliculas')->
            findOneBy(array('idPelicula'=>$request->query->get('idPelicula'), 
                            'idUsuario'=>$request->getSession()->get('id'))))
            {
                $qb = $em->createQueryBuilder();
                $q = $qb->update('FuncionesSitioBundle:ValoracionPeliculas', 'v')
                ->set('v.valoracion', '?1')
                ->set('v.fechaValoracion', '?2')
               ->where(
                $qb->expr()->andX(
                    $qb->expr()->eq('v.idUsuario', '?3'),
                    $qb->expr()->eq('v.idPelicula', '?4')
                ))
                ->setParameter(1,$request->query->get('calificacion'))
                ->setParameter(2,new \DateTime())
                ->setParameter(3, $request->getSession()->get('id'))
                ->setParameter(4, $request->query->get('idPelicula'))
                ->getQuery();
                $p = $q->execute();
                $response = new Response();
                $response->setContent('Calificacion Registrada');
                $response->setStatusCode(Response::HTTP_OK);
                $response->headers->set('Content-Type', 'text/html');
                
                // prints the HTTP headers followed by the content
                return $response;       
            }
            else{
            
            //si el usuario es valido y la calificacion es a una nueva pelicula
            if($usuario){
            $valoracion = new ValoracionPeliculas();
            $valoracion->setIdUsuario($usuario);
            $valoracion->setIdPelicula($request->query->get('idPelicula'));
            $valoracion->setValoracion($request->query->get('calificacion'));
            $fechaValoracion = new \DateTime();
            $valoracion->setFechaValoracion($fechaValoracion);
            $em = $this->getDoctrine()->getManager();
            $em->persist($valoracion);
            $em->flush();
            $response = new Response();

            $response->setContent('Calificaci&oacute;n Registrada');
            $response->setStatusCode(Response::HTTP_OK);
            $response->headers->set('Content-Type', 'text/html');

            // prints the HTTP headers followed by the content
            return $response;
        }
             else{
           $response = new Response();
            $response->setContent('No se pudo registrar la calificaci&oacute;n');
            $response->setStatusCode(Response::HTTP_OK);
            $response->headers->set('Content-Type', 'text/html');
            
            // prints the HTTP headers followed by the content
            return $response;
        }
            }
    }
}

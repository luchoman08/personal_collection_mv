<?php

namespace TinkerSoft\FuncionesSitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use TinkerSoft\FuncionesSitioBundle\Entity\Usuarios;
use TinkerSoft\FuncionesSitioBundle\Entity\ValoracionPeliculas;
class FuncionesSitioController extends Controller
{
    public function indexAction()
    {
        return $this->render('FuncionesSitioBundle:Default:index.html.twig');
    }
    
    public function mostrarCalificacion(Request $request, $idPelicula)
    {
        
        
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

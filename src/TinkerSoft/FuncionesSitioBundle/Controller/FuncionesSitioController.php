<?php

namespace TinkerSoft\FuncionesSitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
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
    
      public function calificarPeliculaAction(Request $request)
    {
       if (true) {
            $valoracion = new ValoracionPeliculas();
            $valoracion->setIdPelicula($request->query->get('idPelicula'));
            $valoracion->setIdUsuario($request->query->get('idUsuario'));
            $valoracion->setValoracion($request->query->get('calificacion'));
            echo $valoracion->getValoracion();
            $fechaValoracion = date("Y-m-d H:i:s");
            $valoracion->setFechaValoracion($fechaValoracion);
            $em = $this->getDoctrine()->getManager();
            $em->persist($valoracion);
            $em->flush();

            return $this->redirectToRoute('usuarios_show', array('id' => $usuario->getId()));
        }

    }
}

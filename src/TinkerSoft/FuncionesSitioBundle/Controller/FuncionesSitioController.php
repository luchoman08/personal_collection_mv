<?php

namespace TinkerSoft\FuncionesSitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FuncionesSitioController extends Controller
{
    public function indexAction()
    {
        return $this->render('FuncionesSitioBundle:Default:index.html.twig');
    }
    
      public function calificarPeliculaAction(Request $request, $calificacion, $idUsuario, $idPelicula)
    {
       
    }
}

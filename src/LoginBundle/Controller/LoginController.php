<?php

namespace LoginBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('LoginBundle:Default:index.html.twig');
    }
    
     public function loginAction(Request $request)
    {
        
       die($request->query->get("email"));
        if($request->getMethod()=="POST")
        {
            $em = $this->getDoctrine()->getManager();

            $usuario = $em->getRepository('TinkerSoftUsuariosBundle:Usuarios')->findOneBy(array('correoElectronico'=>$request->get('email')));
            
            
        }
        return $this->render('LoginBundle:Default:index.html.twig');
    }
}

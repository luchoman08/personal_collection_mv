<?php

namespace LoginBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('LoginBundle:Default:index.html.twig');
    }
    
     public function loginAction(Request $request)
    {
        
        $session = new Session();
        //$session->start();

        $session->set('name', 'Drak');
        echo $session->get('name');

        
        
        if($request->getMethod()=="POST")
        {
            $em = $this->getDoctrine()->getManager();
              
            $usuario = $em->getRepository('TinkerSoftUsuariosBundle:Usuarios')->
            findOneBy(array('correoElectronico'=>$request->request->get('email'), 'password'=>$request->request->get('password')));
           
            
            if($usuario){
                
                $session = $request->getSession();
                $session->set('name', $usuario->getNombre());
                $session->set('id', $usuario->getId());
                echo $usuario->getNombre();
            
            
            }
            else{
                echo "nel prro";
            
            }
        }
        return $this->render('LoginBundle:Default:index.html.twig');
    }
}

<?php

namespace LoginBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{

    public function loginOutAction(Request $request){
        $request->getSession()->invalidate(1);
        return $this->redirectToRoute('vista_homepage');
    }
    
     public function loginAction(Request $request)
    {
      
        
        if($request->getMethod()=="POST")
        {
            $em = $this->getDoctrine()->getManager();
              
            $usuario = $em->getRepository('TinkerSoftUsuariosBundle:Usuarios')->
            findOneBy(array('correoElectronico'=>$request->request->get('email'), 'password'=>$request->request->get('password')));
           
            
            if($usuario){
                $session = $request->getSession();
                $session->set('name', $usuario->getNombres());
                $session->set('nickname', $usuario->getNickname());
                $session->set('id', $usuario->getId());
            
                return $this->redirectToRoute('vista_homepage');
            }
            else{
                 return $this->render('VistaBundle:Default:login.html.twig', array('error'=>1));
            }
        }
       
    }
}

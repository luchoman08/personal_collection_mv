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
        
      
        if($request->getMethod()=="POST")
        {
            $em = $this->getDoctrine()->getManager();
         
              
            $usfr = $em->getRepository('TinkerSoftUsuariosBundle:Usuarios')->findOneBy(array('correoElectronico'=>$request->request->get('email')));
            echo $usfr->getNickname();
            
        }
        return $this->render('LoginBundle:Default:index.html.twig');
    }
}

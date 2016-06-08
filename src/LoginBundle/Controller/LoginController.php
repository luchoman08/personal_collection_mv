<?php

namespace LoginBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

use TinkerSoft\FuncionesSitioBundle\Entity\RegistroGustos;
use TinkerSoft\FuncionesSitioBundle\Entity\Usuarios;

class LoginController extends Controller
{

    public function loginOutAction(Request $request){
        $request->getSession()->invalidate(1);
        return $this->redirectToRoute('login');
    }
    
     public function loginAction(Request $request){
      
        
        if($request->getMethod()=="POST"){
            $em = $this->getDoctrine()->getManager();
              
            $usuario = $em->getRepository('TinkerSoftUsuariosBundle:Usuarios')->
            findOneBy(array('correoElectronico'=>$request->request->get('email'), 'password'=>$request->request->get('password')));
           
            
            if($usuario){
                $session = $request->getSession();
                $session->set('name', $usuario->getNombres());
                $session->set('nickname', $usuario->getNickname());
                $session->set('id', $usuario->getId());
                
                $gustos = $em->getRepository('FuncionesSitioBundle:RegistroGustos')->
                findOneBy(array('idUsuario'=>$usuario->getId()));
                
                if($gustos){
                    return $this->redirectToRoute('vista_homepage');
                }else{
                    return $this->redirectToRoute('generos_barra');
                }
                
            }
            else{
                 return $this->render('VistaBundle:Default:login.html.twig', array('error'=>1));
            }
        }
       
    }
    /*
    
        ...NOTA!!!!!!: Pendiente para mover a FuncionesSitioBundle.
        ...NOTA!!!!!!: Pendiente para mover a FuncionesSitioBundle.
        ...NOTA!!!!!!: Pendiente para mover a FuncionesSitioBundle.
        ...NOTA!!!!!!: Pendiente para mover a FuncionesSitioBundle.
        ...NOTA!!!!!!: Pendiente para mover a FuncionesSitioBundle.
        ...NOTA!!!!!!: Pendiente para mover a FuncionesSitioBundle.
        ...NOTA!!!!!!: Pendiente para mover a FuncionesSitioBundle.
        ...NOTA!!!!!!: Pendiente para mover a FuncionesSitioBundle.
        ...NOTA!!!!!!: Pendiente para mover a FuncionesSitioBundle.
        
    
    */
    public function registrarGustosAction(Request $request){
        
        if($request->getMethod()=="POST"){
            
            if($request->getSession()->get('id')){
                
                $generos = $this->get('app.api_controller')->listaGenerosAction("en");
                
                $contadorGenerosSeleccionados = 0;
                $em = $this->getDoctrine()->getManager();
                $usuario = $em->getRepository('FuncionesSitioBundle:Usuarios')->findOneBy(array('id'=>$request->getSession()->get('id')));
                for($i = 0; $i < count($generos['genres']) ; $i++){
                    
                    if($request->request->get('genero_' . $i) != ""){
                        $contadorGenerosSeleccionados++;
                        
                        $gusto = $em->getRepository('FuncionesSitioBundle:RegistroGustos')->
                        findOneBy(array('idUsuario'=>$usuario->getId(),'generoid'=>$request->request->get('genero_' . $i)));
                        
                        if(!$gusto){
                            $gusto = new RegistroGustos();
                            $gusto->setIdUsuario($usuario);
                            $gusto->setGeneroid($request->request->get('genero_' . $i));
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($gusto);
                            $em->flush();
                        }
                        
                    }
                }
                if($contadorGenerosSeleccionados == 0){
                    return $this->render('VistaBundle:Default:elegirGenero.html.twig', array('error'=>1,'params' => $generos));
                }else{
                    return $this->redirectToRoute('vista_homepage');
                }
            }else{
                 return $this->render('VistaBundle:Default:login.html.twig', array('error'=>2));
            }
            
        }else{
                return $this->render('VistaBundle:Default:login.html.twig', array('error'=>3));
        }
    }
    
}

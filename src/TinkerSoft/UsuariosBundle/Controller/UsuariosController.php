<?php

namespace TinkerSoft\UsuariosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TinkerSoft\UsuariosBundle\Entity\Usuarios;
use TinkerSoft\UsuariosBundle\Form\UsuariosType;

/**
 * Usuarios controller.
 *
 */
class UsuariosController extends Controller
{
    /**
     * Lists all Usuarios entities.
     *
     */
    public function indexAction(Request $request)
    {
        if($request->getSession()->get('rol')==2 ){
            
            
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository('TinkerSoftUsuariosBundle:Usuarios')->findAll();

        return $this->render('usuarios/index.html.twig', array(
            'usuarios' => $usuarios,
        ));
        }
        else{
             return $this->render('VistaBundle:Default:login.html.twig');
        }
    }

    /**
     * Creates a new Usuarios entity.
     *
     */
    public function newAction(Request $request)
    {
        if($request->getSession()->get('rol')==2 ){
        $usuario = new Usuarios();
        $form = $this->createForm('TinkerSoft\UsuariosBundle\Form\UsuariosType', $usuario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objeto = $em->getRepository('FuncionesSitioBundle:Usuarios')->
            findOneBy(array('nickname'=>$usuario->getNickname()));
            
            if($objeto){
             return $this->render('usuarios/new.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
            'error'=> 1,
        ));
            }
            $objeto = null;
            
             $objeto = $em->getRepository('FuncionesSitioBundle:Usuarios')->
            findOneBy(array('correoElectronico'=>$usuario->getCorreoElectronico()));
            
            if($objeto){
             return $this->render('usuarios/new.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
            'error'=> 2,
        ));
            }
            
            else{
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('usuarios_show', array('id' => $usuario->getId()));
            }
        }

        return $this->render('usuarios/new.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));
    }
    else{
             return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
    
/*registro por parte de los usuarios estandard*/
    public function registroAction(Request $request)
    {

        $usuario = new Usuarios();
        $form = $this->createForm('TinkerSoft\UsuariosBundle\Form\UsuariosEstandarType', $usuario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $objeto = $em->getRepository('FuncionesSitioBundle:Usuarios')->
            findOneBy(array('nickname'=>$usuario->getNickname()));
            
            if($objeto){
             return $this->render('usuarios/newEstandar.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
            'error'=> 1,
        ));
            }
            $objeto = null;
            
             $objeto = $em->getRepository('FuncionesSitioBundle:Usuarios')->
            findOneBy(array('correoElectronico'=>$usuario->getCorreoElectronico()));
            
            if($objeto){
             return $this->render('usuarios/newEstandar.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
            'error'=> 2,
        ));
            }
            
            else{
            $em->persist($usuario);
            $em->flush();

            return $this->render('VistaBundle:Default:login.html.twig', array('new'=>1));
            }
        }

        return $this->render('usuarios/newEstandar.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));


            return $this->render('VistaBundle:Default:login.html.twig', array('new'=>1));
        
        }
        
        
/*
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

               return $this->redirect($this->generateUrl('login'));    
        }
*/

    /**
     * Finds and displays a Usuarios entity.
     *
     */
    public function showAction(Request $request, Usuarios $usuario)
    {
           if($request->getSession()->get('rol')==2){
            
       
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuarios/show.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
           }
        else{
             return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
    
    public function showEstandarAction(Request $request, Usuarios $usuario)
    {
           if($request->getSession()->get('rol')==2 or $request->getSession()->get('id') == $usuario->getId()){
            
       
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuarios/showEstandar.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
           }
        else{
             return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
    /**
     * Displays a form to edit an existing Usuarios entity.
     *
     */
    public function editAction(Request $request, Usuarios $usuario)
    {
                 if($request->getSession()->get('rol')==2 ){
       
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('TinkerSoft\UsuariosBundle\Form\UsuariosType', $usuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($usuario);
            $em->flush();
            

             return $this->render('usuarios/edit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'accion'=>1,
            'delete_form' => $deleteForm->createView(),
        ));

            return $this->redirectToRoute('usuarios_edit', array('id' => $usuario->getId()));
        }

        return $this->render('usuarios/edit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
          }
        else{
             return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
   public function editEstandarAction(Request $request, Usuarios $usuario)
    {
         if($request->getSession()->get('id')==$usuario->getId()){   
       
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('TinkerSoft\UsuariosBundle\Form\UsuariosEstandarType', $usuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->render('usuarios/editEstandar.html.twig', array('id' => $usuario->getId(),
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'accion'=>1,
            ));
        }

        return $this->render('usuarios/editEstandar.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
          }
        else{
             return $this->render('VistaBundle:Default:login.html.twig');
        }
    }
    /**
     * Deletes a Usuarios entity.
     *
     */
    public function deleteAction(Request $request, Usuarios $usuario)
    {
          if($request->getSession()->get('rol')==2 ){
        
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush();
        }

        return $this->redirectToRoute('usuarios_index');
        
          }
        else{
             return $this->render('VistaBundle:Default:login.html.twig');
        }
    }

    /**
     * Creates a form to delete a Usuarios entity.
     *
     * @param Usuarios $usuario The Usuarios entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Usuarios $usuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuarios_delete', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

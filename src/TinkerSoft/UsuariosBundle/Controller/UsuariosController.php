<?php

namespace TinkerSoft\UsuariosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
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
    public function indexAction()
    {
    $session = new Session();    
    //$session->start();

    // set and get session attributes
    $session->set('name', 'Drak');
    $session->get('name');
    
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository('TinkerSoftUsuariosBundle:Usuarios')->findAll();

        return $this->render('usuarios/index.html.twig', array(
            'usuarios' => $usuarios, 'usuario'=>$session->get('name'),
        ));
        

    }

    /**
     * Creates a new Usuarios entity.
     *
     */
    public function newAction(Request $request)
    {
        $usuario = new Usuarios();
        $form = $this->createForm('TinkerSoft\UsuariosBundle\Form\UsuariosType', $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('usuarios_show', array('id' => $usuario->getId()));
        }

        return $this->render('usuarios/new.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Usuarios entity.
     *
     */
    public function showAction(Usuarios $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuarios/show.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Usuarios entity.
     *
     */
    public function editAction(Request $request, Usuarios $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('TinkerSoft\UsuariosBundle\Form\UsuariosType', $usuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('usuarios_edit', array('id' => $usuario->getId()));
        }

        return $this->render('usuarios/edit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Usuarios entity.
     *
     */
    public function deleteAction(Request $request, Usuarios $usuario)
    {
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush();
        }

        return $this->redirectToRoute('usuarios_index');
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

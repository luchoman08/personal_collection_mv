<?php

namespace TinkerSoft\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TinkerSoftUsuariosBundle:Default:index.html.twig');
    }
}

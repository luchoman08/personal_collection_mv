<?php

namespace TinkerSoft\VistaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VistaController extends Controller
{
    public function indexAction()
    {
        return $this->render('VistaBundle:Default:index.html.twig');
    }
}

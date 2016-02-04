<?php

namespace CursoSymfony\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CursoSymfonyMainBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace CursoSymfony\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class InfoController extends Controller {
    public function nosotrosAction($nombre, $apellidos, $nacimiento)
    {
       return new Response("<html><body>Info: ".$nombre.", ".$apellidos.". Fecha de nacimiento:".$nacimiento."</body></html>");
    }
}

/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 06/02/2016
 * Time: 14:07
 */
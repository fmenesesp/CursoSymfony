<?php
/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 08/02/2016
 * Time: 19:54
 */

namespace CursoSymfony\MainBundle\Controller;
use CursoSymfony\MainBundle\Form\ProductoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProductoController extends Controller {
    public function nuevoProductoAction()
    {
        $form = $this->createForm(new ProductoType());
        return $this->render("CursoSymfonyMainBundle:Default:formulario.html.twig", array("form"=>$form->createView()));
    }
}

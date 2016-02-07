<?php
/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 07/02/2016
 * Time: 13:48
 */

namespace CursoSymfony\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 *
 */


class Producto {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     *
     * @ORM\Column(type="string", length=100)
     *
     */
    protected $nombre;
    /**
     *
     * @ORM\Column(type="integer")
     *
     */
    protected $precio;

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function  setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function  setPrecio($precio){
        $this->precio = $precio;
    }


}


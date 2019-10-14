<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity\FormularioB;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CategoriaFinal
 *
 * @ORM\Table(name="CategoriaFinal")
 * 
 * @ORM\Entity
 */
class CategoriaFinal {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     *
     * @var int
     */
    private $categoriaAsignada;
    
    function getId() {
        return $this->id;
    }

    function getCategoriaAsignada() {
        return $this->categoriaAsignada;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCategoriaAsignada($categoriaAsignada) {
        $this->categoriaAsignada = $categoriaAsignada;
    }


}

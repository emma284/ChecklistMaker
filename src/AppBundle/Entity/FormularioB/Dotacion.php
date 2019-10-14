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
 * Dotacion
 *
 * @ORM\Table(name="Dotacion")
 * 
 * @ORM\Entity
 */
class Dotacion {
    
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
     * @var string 
     */
    private $dotacionDePersonal;
    
    
    /**
     *
     * @var string 
     */
    private $potenciaInstalada;
    
    
    /**
     *
     * @var string
     */
    private $superficieCubierta;

    function getId() {
        return $this->id;
    }

    function getDotacionDePersonal() {
        return $this->dotacionDePersonal;
    }

    function getPotenciaInstalada() {
        return $this->potenciaInstalada;
    }

    function getSuperficieCubierta() {
        return $this->superficieCubierta;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDotacionDePersonal($dotacionDePersonal) {
        $this->dotacionDePersonal = $dotacionDePersonal;
    }

    function setPotenciaInstalada($potenciaInstalada) {
        $this->potenciaInstalada = $potenciaInstalada;
    }

    function setSuperficieCubierta($superficieCubierta) {
        $this->superficieCubierta = $superficieCubierta;
    }


}

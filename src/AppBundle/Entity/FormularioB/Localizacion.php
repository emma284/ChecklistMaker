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
 * Localizacion
 *
 * @ORM\Table(name="Localizacion")
 * 
 * @ORM\Entity
 */
class Localizacion {
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
    private $zonificacion;
    
    /**
     *
     * @var bool
     */
    private $aguaDeRed;
    
    /**
     *
     * @var bool
     */
    private $redCloacal;
    
    /**
     *
     * @var bool
     */
    private $energiaElectrica;
    
    /**
     *
     * @var bool
     */
    private $gas;
    
    
    function getId() {
        return $this->id;
    }

    function getZonificacion() {
        return $this->zonificacion;
    }

    function getAguaDeRed() {
        return $this->aguaDeRed;
    }

    function getRedCloacal() {
        return $this->redCloacal;
    }

    function getEnergiaElectrica() {
        return $this->energiaElectrica;
    }

    function getGas() {
        return $this->gas;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setZonificacion($zonificacion) {
        $this->zonificacion = $zonificacion;
    }

    function setAguaDeRed($aguaDeRed) {
        $this->aguaDeRed = $aguaDeRed;
    }

    function setRedCloacal($redCloacal) {
        $this->redCloacal = $redCloacal;
    }

    function setEnergiaElectrica($energiaElectrica) {
        $this->energiaElectrica = $energiaElectrica;
    }

    function setGas($gas) {
        $this->gas = $gas;
    }

    
    
}

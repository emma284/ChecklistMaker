<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity\FormularioA;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * UsoConformeSuelo
 *
 * @ORM\Table(name="UsoConformeSuelo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsoConformeSueloRepository")
 */
class UsoConformeSuelo {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     */
    private $usoConformeSuelo2;

    /**
     * @var int
     */
    private $fojaN;

    /**
     * @var bool
     */
    private $presentaHabilitacion;
       
    /**
     * @var \DateTime
     */
    private $fechaInicioHabilitacion;
       
    /**
     * @var \DateTime
     */
    private $fechaVencimiento;
    
    /**
     * @var bool
     */
    private $verActividad;

    /**
     * @var bool
     */
    private $verLocalizacion;
    
    
    function getId() {
        return $this->id;
    }

    function getFojaN() {
        return $this->fojaN;
    }

    function getPresentaHabilitacion() {
        return $this->presentaHabilitacion;
    }

    function getFechaInicioHabilitacion(): \DateTime {
        return $this->fechaInicioHabilitacion;
    }

    function getFechaVencimiento(): \DateTime {
        return $this->fechaVencimiento;
    }

    function getVerActividad() {
        return $this->verActividad;
    }

    function getVerLocalizacion() {
        return $this->verLocalizacion;
    }

    function setId($id) {
        $this->id = $id;
    }


    function setFojaN($fojaN) {
        $this->fojaN = $fojaN;
    }

    function setPresentaHabilitacion($presentaHabilitacion) {
        $this->presentaHabilitacion = $presentaHabilitacion;
    }

    function setFechaInicioHabilitacion(\DateTime $fechaInicioHabilitacion) {
        $this->fechaInicioHabilitacion = $fechaInicioHabilitacion;
    }

    function setFechaVencimiento(\DateTime $fechaVencimiento) {
        $this->fechaVencimiento = $fechaVencimiento;
    }

    function setVerActividad($verActividad) {
        $this->verActividad = $verActividad;
    }

    function setVerLocalizacion($verLocalizacion) {
        $this->verLocalizacion = $verLocalizacion;
    }
    function getUsoConformeSuelo2() {
        return $this->usoConformeSuelo2;
    }

    function setUsoConformeSuelo2($usoConformeSuelo) {
        $this->usoConformeSuelo2 = $usoConformeSuelo;
    }



}

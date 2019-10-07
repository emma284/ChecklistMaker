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
 * Riesgos
 *
 * @ORM\Table(name="riesgos")
 * @ORM\Entity
 */
class Riesgos {
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
     * @var bool
     */
    private $riesgosPresuntos;
    
    /**
     *
     * @var bool
     */
    private $acustico;
    
    /**
     *
     * @var bool
     */
    private $aparatosSometidosAPresion;
    
    /**
     *
     * @var bool
     */
    private $sustanciasQuimicas;
    
    /**
     *
     * @var bool
     */
    private $explosion;
    
    /**
     *
     * @var bool
     */
    private $incendio;
    
    /**
     *
     * @var bool
     */
    private $otrosBool;
    
    /**
     *
     * @var string
     */
    private $otrosListado;
    
    
    function getId() {
        return $this->id;
    }

    function getRiesgosPresuntos() {
        return $this->riesgosPresuntos;
    }

    function getAcustico() {
        return $this->acustico;
    }

    function getAparatosSometidosAPresion() {
        return $this->aparatosSometidosAPresion;
    }

    function getSustanciasQuimicas() {
        return $this->sustanciasQuimicas;
    }

    function getExplosion() {
        return $this->explosion;
    }

    function getIncendio() {
        return $this->incendio;
    }

    function getOtrosBool() {
        return $this->otrosBool;
    }

    function getOtrosListado() {
        return $this->otrosListado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRiesgosPresuntos($riesgosPresuntos) {
        $this->riesgosPresuntos = $riesgosPresuntos;
    }

    function setAcustico($acustico) {
        $this->acustico = $acustico;
    }

    function setAparatosSometidosAPresion($aparatosSometidosAPresion) {
        $this->aparatosSometidosAPresion = $aparatosSometidosAPresion;
    }

    function setSustanciasQuimicas($sustanciasQuimicas) {
        $this->sustanciasQuimicas = $sustanciasQuimicas;
    }

    function setExplosion($explosion) {
        $this->explosion = $explosion;
    }

    function setIncendio($incendio) {
        $this->incendio = $incendio;
    }

    function setOtrosBool($otrosBool) {
        $this->otrosBool = $otrosBool;
    }

    function setOtrosListado($otrosListado) {
        $this->otrosListado = $otrosListado;
    }


}

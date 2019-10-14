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
 * EmisionDeResiduos
 *
 * @ORM\Table(name="EmisionDeResiduos")
 * 
 * @ORM\Entity
 */
class EmisionDeResiduos {
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
    private $residuosSolidosSemisolidos;
    
    /**
     *
     * @var bool
     */
    private $rsu;
    
    /**
     *
     * @var bool
     */
    private $rnp;
    
    /**
     *
     * @var string
     */
    private $tipoDeResiduo;
    
    /**
     *
     * @var bool
     */
    private $rp;
    
    /**
     *
     * @var string
     */
    private $definirCorrientesDeRP;
    
    /**
     *
     * @var double
     */
    private $valorResiduo;
    
    /**
     *
     * @var bool
     */
    private $efluentesYResiduosLiquidos;
    
    /**
     *
     * @var bool
     */
    private $aguaATemperaturaAmbiente;
    
    /**
     *
     * @var bool
     */
    private $efluentesSinRP;
    
    /**
     *
     * @var bool
     */
    private $efluentesConRP;
    
    /**
     *
     * @var double
     */
    private $valorEfluente;
    
    /**
     *
     * @var bool
     */
    private $emisionesGaseosas;
    
    /**
     *
     * @var bool
     */
    private $componentesNaturalesDelAire;
    
    /**
     *
     * @var bool
     */
    private $combustionDeCombustiblesLiquidos;
    
    /**
     *
     * @var bool
     */
    private $noContempladosBool;
    
    /**
     *
     * @var string
     */
    private $noContempledosListado;
    
    /**
     *
     * @var double
     */
    private $valorEmisiones;
    

//Getters and setters
    function getId() {
        return $this->id;
    }

    function getResiduosSolidosSemisolidos() {
        return $this->residuosSolidosSemisolidos;
    }

    function getRsu() {
        return $this->rsu;
    }

    function getRnp() {
        return $this->rnp;
    }

    function getTipoDeResiduo() {
        return $this->tipoDeResiduo;
    }

    function getRp() {
        return $this->rp;
    }

    function getDefinirCorrientesDeRP() {
        return $this->definirCorrientesDeRP;
    }

    function getValorResiduo() {
        return $this->valorResiduo;
    }

    function getEfluentesYResiduosLiquidos() {
        return $this->efluentesYResiduosLiquidos;
    }

    function getAguaATemperaturaAmbiente() {
        return $this->aguaATemperaturaAmbiente;
    }

    function getEfluentesSinRP() {
        return $this->efluentesSinRP;
    }

    function getEfluentesConRP() {
        return $this->efluentesConRP;
    }

    function getValorEfluente() {
        return $this->valorEfluente;
    }

    function getEmisionesGaseosas() {
        return $this->emisionesGaseosas;
    }

    function getComponentesNaturalesDelAire() {
        return $this->componentesNaturalesDelAire;
    }

    function getCombustionDeCombustiblesLiquidos() {
        return $this->combustionDeCombustiblesLiquidos;
    }

    function getNoContempladosBool() {
        return $this->noContempladosBool;
    }

    function getNoContempledosListado() {
        return $this->noContempledosListado;
    }

    function getValorEmisiones() {
        return $this->valorEmisiones;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setResiduosSolidosSemisolidos($residuosSolidosSemisolidos) {
        $this->residuosSolidosSemisolidos = $residuosSolidosSemisolidos;
    }

    function setRsu($rsu) {
        $this->rsu = $rsu;
    }

    function setRnp($rnp) {
        $this->rnp = $rnp;
    }

    function setTipoDeResiduo($tipoDeResiduo) {
        $this->tipoDeResiduo = $tipoDeResiduo;
    }

    function setRp($rp) {
        $this->rp = $rp;
    }

    function setDefinirCorrientesDeRP($definirCorrientesDeRP) {
        $this->definirCorrientesDeRP = $definirCorrientesDeRP;
    }

    function setValorResiduo($valorResiduo) {
        $this->valorResiduo = $valorResiduo;
    }

    function setEfluentesYResiduosLiquidos($efluentesYResiduosLiquidos) {
        $this->efluentesYResiduosLiquidos = $efluentesYResiduosLiquidos;
    }

    function setAguaATemperaturaAmbiente($aguaATemperaturaAmbiente) {
        $this->aguaATemperaturaAmbiente = $aguaATemperaturaAmbiente;
    }

    function setEfluentesSinRP($efluentesSinRP) {
        $this->efluentesSinRP = $efluentesSinRP;
    }

    function setEfluentesConRP($efluentesConRP) {
        $this->efluentesConRP = $efluentesConRP;
    }

    function setValorEfluente($valorEfluente) {
        $this->valorEfluente = $valorEfluente;
    }

    function setEmisionesGaseosas($emisionesGaseosas) {
        $this->emisionesGaseosas = $emisionesGaseosas;
    }

    function setComponentesNaturalesDelAire($componentesNaturalesDelAire) {
        $this->componentesNaturalesDelAire = $componentesNaturalesDelAire;
    }

    function setCombustionDeCombustiblesLiquidos($combustionDeCombustiblesLiquidos) {
        $this->combustionDeCombustiblesLiquidos = $combustionDeCombustiblesLiquidos;
    }

    function setNoContempladosBool($noContempladosBool) {
        $this->noContempladosBool = $noContempladosBool;
    }

    function setNoContempledosListado($noContempledosListado) {
        $this->noContempledosListado = $noContempledosListado;
    }

    function setValorEmisiones($valorEmisiones) {
        $this->valorEmisiones = $valorEmisiones;
    }

    
}

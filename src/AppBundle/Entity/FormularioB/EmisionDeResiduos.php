<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity\FormularioB;

/**
 * Description of EmisionDeResiduos
 *
 * @author Admin
 */
class EmisionDeResiduos {
    
    private $residuosSolidosSemisolidos;
    
    private $rsu;
    
    private $rnp;
    
    private $tipoDeResiduo;
    
    private $rp;
    
    private $definirCorrientesDeRP;
    
    private $valorResiduo;
    
    private $efluentesYResiduosLiquidos;
    
    private $aguaATemperaturaAmbiente;
    
    private $efluentesSinRP;
    
    private $efluentesConRP;
    
    private $valorEfluente;
    
    private $emisionesGaseosas;
    
    private $componentesNaturalesDelAire;
    
    private $combustionDeCombustiblesLiquidos;
    
    private $noContempladosBool;
    
    private $noContempledosListado;
    
    private $valorEmisiones;
    

//Getters and setters
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

<?php

namespace AppBundle\Entity\FormularioB;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormularioB
 *
 * @ORM\Table(name="FormularioB")
 * 
 * @ORM\Entity
 */
class FormularioB
{
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
     * @ORM\Column(name="estadoSoporteDigital", type="string")
     */
    private $estadoSoporteDigital;
    
    /**
     * @ORM\Column(name="observacionSoporteDigital", type="string")
     */
    private $observacionSoporteDigital;
    /**
     *
     * @ORM\Column(name="codigoExcel", type="string")
     */
    private $ingresarCodigoExcel;
    
    /**
     * @ORM\OneToOne(targetEntity="EmisionDeResiduos", cascade={"persist"})
     * @ORM\JoinColumn(name="emisionDeResiduos_id",referencedColumnName="id")
     */
    private $emisionDeResiduos;
    
    /**
     * @ORM\OneToOne(targetEntity="Riesgos", cascade={"persist"})
     * @ORM\JoinColumn(name="riesgos_id",referencedColumnName="id")
     */
    private $riesgos;
    
    /**
     * @ORM\OneToOne(targetEntity="Dotacion", cascade={"persist"})
     * @ORM\JoinColumn(name="dotacion_id",referencedColumnName="id")
     */
    private $dotacion;
    
    /**
     * @ORM\OneToOne(targetEntity="Localizacion", cascade={"persist"})
     * @ORM\JoinColumn(name="localizacion_id",referencedColumnName="id")
     */
    private $localización;
    
    /**
     * @ORM\OneToOne(targetEntity="CategoriaFinal", cascade={"persist"})
     * @ORM\JoinColumn(name="categoriaFinal_id",referencedColumnName="id")
     */
    private $categoriaFinal;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Plantilla", cascade={"persist"}, inversedBy="formularioB")
     */
    private $plantilla;
    
    
    
    function getId() {
        return $this->id;
    }

    function getEstadoSoporteDigital() {
        return $this->estadoSoporteDigital;
    }

    function getIngresarCodigoExcel() {
        return $this->ingresarCodigoExcel;
    }

    function getEmisionDeResiduos() {
        return $this->emisionDeResiduos;
    }

    function getRiesgos() {
        return $this->riesgos;
    }

    function getDotacion() {
        return $this->dotacion;
    }

    function getLocalización() {
        return $this->localización;
    }

    function getCategoriaFinal() {
        return $this->categoriaFinal;
    }

    function getPlantilla() {
        return $this->plantilla;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEstadoSoporteDigital($estadoSoporteDigital) {
        $this->estadoSoporteDigital = $estadoSoporteDigital;
    }

    function setIngresarCodigoExcel($ingresarCodigoExcel) {
        $this->ingresarCodigoExcel = $ingresarCodigoExcel;
    }

    function setEmisionDeResiduos($emisionDeResiduos) {
        $this->emisionDeResiduos = $emisionDeResiduos;
    }

    function setRiesgos($riesgos) {
        $this->riesgos = $riesgos;
    }

    function setDotacion($dotacion) {
        $this->dotacion = $dotacion;
    }

    function setLocalización($localización) {
        $this->localización = $localización;
    }

    function setCategoriaFinal($categoriaFinal) {
        $this->categoriaFinal = $categoriaFinal;
    }

    function setPlantilla($plantilla) {
        $this->plantilla = $plantilla;
    }


}

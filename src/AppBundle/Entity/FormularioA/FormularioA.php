<?php

namespace AppBundle\Entity\FormularioA;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FormularioA
 *
 * @ORM\Table(name="FormularioA")
 * 
 * @ORM\Entity
 */
class FormularioA
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
     * @ORM\OneToOne(targetEntity="DomicilioLegal", cascade={"persist"})
     * @ORM\JoinColumn(name="domicilioLegal_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\DomicilioLegal")
     * @Assert\Valid
     */
   private $domicilioLegal;

       
    /**
     * @ORM\OneToOne(targetEntity="DomicilioReal", cascade={"persist"})
     * @ORM\JoinColumn(name="DomicilioReal_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\DomicilioReal")
     * @Assert\Valid
     */
    private $domicilioReal;

    /**
     * @ORM\OneToOne(targetEntity="ContratoSocial", cascade={"persist"})
     * @ORM\JoinColumn(name="contratoSocial_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\ContratoSocial")
     * @Assert\Valid
     */
    private $contratoSocial;

    /**
     * @ORM\OneToOne(targetEntity="ActaSocietaria", cascade={"persist"})
     * @ORM\JoinColumn(name="actaSocietaria_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\ActaSocietaria")
     * @Assert\Valid
     */
    private $actaSocietaria;

    /**
     * @ORM\OneToOne(targetEntity="Dni", cascade={"persist"})
     * @ORM\JoinColumn(name="dni_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\Dni")
     * @Assert\Valid
     */
    private $dni;
    
    /**
     * @ORM\OneToOne(targetEntity="AFIP", cascade={"persist"})
     * @ORM\JoinColumn(name="afip_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\AFIP")
     * @Assert\Valid
     */
    private $afip;
        /**
     * @ORM\OneToOne(targetEntity="API", cascade={"persist"})
     * @ORM\JoinColumn(name="api_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\API")
     * @Assert\Valid
     */
    private $api;
    /**
     * @ORM\OneToOne(targetEntity="UsoConformeSuelo", cascade={"persist"})
     * @ORM\JoinColumn(name="usoConformeSuelo_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\UsoConformeSuelo")
     * @Assert\Valid
     */
    private $usoConformeSuelo;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Plantilla", cascade={"persist"}, inversedBy="formularioA")
     */
    private $plantilla;
    
    //Getters and setters
    function getId() {
        return $this->id;
    }

    function getDomicilioLegal() {
        return $this->domicilioLegal;
    }

    function getDomicilioReal() {
        return $this->domicilioReal;
    }

    function getContratoSocial() {
        return $this->contratoSocial;
    }

    function getActaSocietaria() {
        return $this->actaSocietaria;
    }

    function getDni() {
        return $this->dni;
    }

    function getAfip() {
        return $this->afip;
    }

    function getApi() {
        return $this->api;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setDomicilioLegal($domicilioLegal) {
        $this->domicilioLegal = $domicilioLegal;
    }

    function setDomicilioReal($domicilioReal) {
        $this->domicilioReal = $domicilioReal;
    }

    function setContratoSocial($contratoSocial) {
        $this->contratoSocial = $contratoSocial;
    }

    function setActaSocietaria($actaSocietaria) {
        $this->actaSocietaria = $actaSocietaria;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setAfip($afip) {
        $this->afip = $afip;
    }

    function setApi($api) {
        $this->api = $api;
    }

    function getPlantilla() {
        return $this->plantilla;
    }

    function setPlantilla($plantilla) {
        $this->plantilla = $plantilla;
    }
    function getUsoConformeSuelo() {
        return $this->usoConformeSuelo;
    }

    function setUsoConformeSuelo($usoConformeSuelo) {
        $this->usoConformeSuelo = $usoConformeSuelo;
    }


    
}

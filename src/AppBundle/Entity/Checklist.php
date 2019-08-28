<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Checklist
 *
 * @ORM\Table(name="Checklist")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChecklistRepository")
 */
class Checklist
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     * @Assert\NotBlank(message="No puede dejar el nombre del Checklist en blanco")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El nombre no puede dejarse en blanco.", maxMessage = "El nombre es demasiado largo.")
     */
    private $nombre;

    
    /**
     * @var string
     *
     * @ORM\Column(name="iniciador", type="string", length=100)
     * @Assert\NotBlank(message="No puede dejar el nombre de iniciador en blanco.")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El nombre de iniciador no puede dejarse en blanco.", maxMessage = "El nombre de iniciador es demasiado largo.")
     */
    private $iniciador;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="numeroExpediente", type="string", length=100)
     * @Assert\NotBlank(message="El checklist debe estar vinculado a un expediente.")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El número de expediente no puede dejarse en blanco.", maxMessage = "El número de expediente es demasiado largo.")
     */
    private $numeroExpediente;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="evaluador", type="string", length=100)
     * @Assert\NotBlank(message="No puede dejar el nombre de evaluador en blanco.")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El nombre de evaluador no puede dejarse en blanco.", maxMessage = "El nombre de evaluador es demasiado largo.")
     */
    private $evaluador;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=100)
     * @Assert\NotBlank(message="No puede dejar la version en blanco.")
     */
    private $version;
    
    
     /**
     *
     * @ORM\Column(type="datetime", nullable=true)
     * @Assert\NotBlank(message="Debe ingresar una fecha de comienzo de evaluación.")
     * 
     */
    private $fechaInicioEvaluacion;
    
    
     /**
     *
     * @ORM\Column(type="datetime", nullable=true)
     * 
     */
    private $fechaFinEvaluacion;
    
        
    /**
     * @ORM\OneToMany(targetEntity="Seccion", cascade={"persist"})
     * @ORM\JoinColumn(name="seccion_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\Seccion")
     * @Assert\Valid
     */
    private $secciones;
    
    /**
     * @var string
     *
     * @ORM\Column(name="comentarioDeEvaluador", type="date")
     */
    private $comentarioDeEvaluador;
    
    //Getters and setters
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getIniciador() {
        return $this->iniciador;
    }

    function getNumeroExpediente() {
        return $this->numeroExpediente;
    }

    function getEvaluador() {
        return $this->evaluador;
    }

    function getVersion() {
        return $this->version;
    }

    function getFechaInicioEvaluacion() {
        return $this->fechaInicioEvaluacion;
    }

    function getFechaFinEvaluacion() {
        return $this->fechaFinEvaluacion;
    }

    function getSecciones() {
        return $this->secciones;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setIniciador($iniciador) {
        $this->iniciador = $iniciador;
    }

    function setNumeroExpediente($numeroExpediente) {
        $this->numeroExpediente = $numeroExpediente;
    }

    function setEvaluador($evaluador) {
        $this->evaluador = $evaluador;
    }

    function setVersion($version) {
        $this->version = $version;
    }

    function setFechaInicioEvaluacion($fechaInicioEvaluacion) {
        $this->fechaInicioEvaluacion = $fechaInicioEvaluacion;
    }

    function setFechaFinEvaluacion($fechaFinEvaluacion) {
        $this->fechaFinEvaluacion = $fechaFinEvaluacion;
    }

    function setSecciones($secciones) {
        $this->secciones = $secciones;
    }    
    
    
    public function __construct()
    {
        $this->seccion = new ArrayCollection();
    }
    
    function getComentarioDeEvaluador() {
        return $this->comentarioDeEvaluador;
    }

    function setComentarioDeEvaluador($comentarioDeEvaluador) {
        $this->comentarioDeEvaluador = $comentarioDeEvaluador;
    }


}
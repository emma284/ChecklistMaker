<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Plantilla
 *
 * @ORM\Table(name="Plantilla")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlantillaRepository")
 */

class Plantilla
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
     * @Assert\NotBlank(message="No puede dejar el nombre del Plantilla en blanco")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El nombre no puede dejarse en blanco.", maxMessage = "El nombre es demasiado largo.")
     */
    private $nombre;
    
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Caratula", cascade={"persist"}, mappedBy="caratula")
     */
    private $caratula;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\SubRutina", cascade={"persist"}, mappedBy="subRutina")
     */
    private $subRutina;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Estandar", cascade={"persist"}, mappedBy="estandar")
     */
    private $estandar;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\FormularioA\FormularioA", cascade={"persist"}, mappedBy="plantilla")
     */
    private $formularioA;
    
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\FormularioB\FormularioB", cascade={"persist"}, mappedBy="plantilla")
     */
    private $formularioB;
    
    
    //Getters and setter
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getFormularioA() {
        return $this->formularioA;
    }

    function getFormularioB() {
        return $this->formularioB;
    }

    function setFormularioA($formularioA) {
        $this->formularioA = $formularioA;
    }

    function setFormularioB($formularioB) {
        $this->formularioB = $formularioB;
    }



    /**
     * Get the value of caratula
     */ 
    public function getCaratula()
    {
        return $this->caratula;
    }

    /**
     * Set the value of caratula
     *
     * @return  self
     */ 
    public function setCaratula($caratula)
    {
        $this->caratula = $caratula;

        return $this;
    }

    /**
     * Get the value of subRutina
     */ 
    public function getSubRutina()
    {
        return $this->subRutina;
    }

    /**
     * Set the value of subRutina
     *
     * @return  self
     */ 
    public function setSubRutina($subRutina)
    {
        $this->subRutina = $subRutina;

        return $this;
    }

    /**
     * Get the value of estandar
     */ 
    public function getEstandar()
    {
        return $this->estandar;
    }

    /**
     * Set the value of estandar
     *
     * @return  self
     */ 
    public function setEstandar($estandar)
    {
        $this->estandar = $estandar;

        return $this;
    }
}

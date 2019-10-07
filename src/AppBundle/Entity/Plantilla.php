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
     *  @ORM\OneToMany(targetEntity="AppBundle\Entity\Checklist", mappedBy="plantilla")
     */
    private $checklists;
    
    /**
     *
     * @var type FormularioA
     */
    private $formularioA;
    
    /**
     *
     * @var type FormularioB
     */
    private $formularioB;
    
    
    //Getters and setter
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getChecklists() {
        return $this->checklists;
    }

    function getFormularioA(): type {
        return $this->formularioA;
    }

    function getFormularioB(): type {
        return $this->formularioB;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setChecklists($checklists) {
        $this->checklists = $checklists;
    }

    function setFormularioA(type $formularioA) {
        $this->formularioA = $formularioA;
    }

    function setFormularioB(type $formularioB) {
        $this->formularioB = $formularioB;
    }


}

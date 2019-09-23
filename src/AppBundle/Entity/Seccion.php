<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Seccion
 *
 * @ORM\Table(name="Seccion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SeccionRepository")
 */
class Seccion
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
     * @ORM\OneToMany(targetEntity="Tarea", cascade={"persist"})
     * @ORM\JoinColumn(name="tarea_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\Tarea")
     * @Assert\Valid
     */
    private $tareas;
    
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Plantilla", mappedBy="secciones")
     * @ORM\JoinColumn(name="plantilla_id", referencedColumnName="id")
     */
    private $plantilla;
    
    //Getters and setters
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

    function getTareas() {
        return $this->tareas;
    }

    function setTareas($tareas) {
        $this->tareas = $tareas;
    }
    
    function getPlantilla() {
        return $this->plantilla;
    }

    function setPlantilla($plantilla) {
        $this->plantilla = $plantilla;
    }

        
    public function __construct()
    {
        $this->tareas = new ArrayCollection();
    }
    
}

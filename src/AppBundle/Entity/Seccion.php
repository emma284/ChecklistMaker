<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Tarea;

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
     * @ORM\OneToMany(targetEntity="Tarea", mappedBy="idSeccion")
     */
    protected $tareas;
  
    /**
     * @var \AppBundle\Entity\Plantilla
     *
     * @ORM\ManyToOne(targetEntity="Plantilla", inversedBy="secciones")
     * @ORM\JoinColumn(name="plantilla_id", referencedColumnName="id")
     */
    private $idPlantilla;
    
    //Getters and setters
    function getId() {
        return $this->id;
    }

    

    /**
     * Get the value of nombre
     *
     * @return  string
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  string  $nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of idPlantilla
     *
     * @return  \AppBundle\Entity\Plantilla
     */ 
    public function getIdPlantilla()
    {
        return $this->idPlantilla;
    }

    /**
     * Set the value of idPlantilla
     *
     * @param  \AppBundle\Entity\Plantilla  $idPlantilla
     *
     * @return  self
     */ 
    public function setIdPlantilla(\AppBundle\Entity\Plantilla $idPlantilla)
    {
        $this->idPlantilla = $idPlantilla;

        return $this;
    }

    /**
     * Get the value of tareas
     */ 
    public function getTareas()
    {
        return $this->tareas;
    }

    /**
     * Set the value of tareas
     *
     * @return  self
     */ 
    public function setTareas($tareas)
    {
        $this->tareas = $tareas;

        return $this;
    }

    public function addTareas(Tarea $tarea)
    {
        
        $tareas->setIdSeccion($this);

        $this->tareas->add($tarea);
        
    }

    public function removeTareas(Tarea $tarea)
    {
        $this->tareas->removeElement($tarea);
    }
    
    /**
    * Constructor
    */
    public function __construct()
    {
        $this->tareas = new ArrayCollection();
    }
}

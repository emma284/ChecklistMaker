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
     * 
     * @ORM\Column(name="fechaBaja", type="date")
     * @Assert\Date
     */
    private $fechaBaja;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Seccion", cascade={"persist"})
     * @ORM\JoinColumn(name="seccion_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\Seccion")
     * @Assert\Valid
     */
    private $secciones;
    
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
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

    function setSecciones($secciones) {
        $this->secciones = $secciones;
    }

    
    //Constructor. It's sets seccion into an ArrayCollection
    public function __construct()
    {
        $this->seccion = new ArrayCollection();
    }
    


}

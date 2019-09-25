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
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\Seccion", mappedBy="idPlantilla")
    */
    protected $secciones;
    
    
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

    function getSecciones() {
        return $this->secciones;
    }

    function setSecciones($secciones) {
        $this->secciones = $secciones;
    }

    
    public function addSecciones(Seccion $representante)
    {
        
        $secciones->setIdPlantilla($this);

        $this->secciones->add($secciones);
        
    }

    public function removeRepresentante(Representante $representante)
    {
        $this->representantes->removeElement($representante);
    }
    
    /**
    * Constructor
    */
    public function __construct()
    {
        $this->secciones = new ArrayCollection();
    }

}

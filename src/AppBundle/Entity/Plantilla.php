<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    
    /**
     * @ORM\Column(name="nombre", type="string", length=100)
     * 
     */
    private $nombre;
    
    
    /**
     * 
     * @ORM\Column(name="fechaBaja", type="date")
     * @Assert\Date
     */
    private $fechaBaja;
    
    
    /**
     *  @ORM\Column(name"version", type="integer")
     */
    private $version;
    
    
    /**
     *  @ORM\OneToMany(targetEntity="AppBundle\Entity\Checklist", mappedBy="plantilla")
     */
    private $checklists;
        
    
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Seccion", mappedBy="plantilla")
     * 
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

    function getVersion() {
        return $this->version;
    }

    function setVersion($version) {
        $this->version = $version;
    }
    
    
    function getFechaBaja() {
        return $this->fechaBaja;
    }

    function setFechaBaja($fechaBaja) {
        $this->fechaBaja = $fechaBaja;
    }

    
    /**
     * 
     * @return Collection|Checklist[]
     */
    function getChecklists(): Collection {//: Collection se refiere una interface de collection
        return $this->checklists;
    }

        
    //Constructor. It's sets seccion into an ArrayCollection
    public function __construct()
    {
        $this->checklists = new ArrayCollection();
        $this->seccion = new ArrayCollection();
    }
    


}

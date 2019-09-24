<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tarea
 *
 * @ORM\Table(name="Tarea")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TareaRepository")
 */
class Tarea {
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
     * @ORM\Column(name="nombre", type="string", length=150)
     * @Assert\NotBlank(message="La tarea debe tener un nombre")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El nombre no puede dejarse en blanco.", maxMessage = "El nombre es demasiado largo.")
     */
    private $nombre;
    
      
    /**
     * @var \AppBundle\Entity\Seccion
     *
     * @ORM\ManyToOne(targetEntity="Seccion",  inversedBy="tarea")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idSeccion;


    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=100)
     * @Assert\NotBlank
     */
    private $valor;
    

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=100)
     * @Assert\NotBlank
     */
    private $tipo;


    /**
     * @var string
     *
     * @ORM\Column(name="avisos", type="string", length=100)
     * @Assert\NotBlank
     */
    private $avisos;
    
    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=1000)
     */
    private $observaciones;
    
    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=100)
     * @Assert\NotBlank
     */
    private $autoredaccion;
    

    /**
     * Get the value of tipo
     *
     * @return  string
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @param  string  $tipo
     *
     * @return  self
     */ 
    public function setTipo(string $tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }


    /**
     * Get the value of idSeccion
     *
     * @return  \AppBundle\Entity\Seccion
     */ 
    public function getIdSeccion()
    {
        return $this->idSeccion;
    }

    /**
     * Set the value of idSeccion
     *
     * @param  \AppBundle\Entity\Seccion  $idSeccion
     *
     * @return  self
     */ 
    public function setIdSeccion(\AppBundle\Entity\Seccion $idSeccion)
    {
        $this->idSeccion = $idSeccion;

        return $this;
    }
}

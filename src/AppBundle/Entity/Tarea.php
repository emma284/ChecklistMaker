<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

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
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=100)
     * @Assert\NotBlank
     */
    private $valor;
    
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
     * @ORM\ManyToOne(targetEntity="ValorTarea", cascade={"persist"})
     * @ORM\JoinColumn(name="valorTarea_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\ValorTarea")
     * @Assert\Valid
     */
    private $valorTarea;
    
    
}

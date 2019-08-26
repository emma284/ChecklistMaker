<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * ValorTarea
 *
 * @ORM\Table(name="ValorTarea")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ValorTareaRepository")
 */
class ValorTarea {
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
     * @ORM\Column(name="nombre", type="string", length=150)
     * @Assert\NotBlank(message="La tarea debe tener un nombre")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El nombre no puede dejarse en blanco.", maxMessage = "El nombre es demasiado largo.")
     */
    private $nombres;
}

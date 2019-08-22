<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Checklist
 *
 * @ORM\Table(name="Checklist")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChecklistRepository")
 */
class Checklist
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
     * @var string
     *
     * @ORM\Column(name="iniciador", type="string", length=100)
     * @Assert\NotBlank(message="No puede dejar el nombre de iniciador en blanco.")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El nombre de iniciador no puede dejarse en blanco.", maxMessage = "El nombre de iniciador es demasiado largo.")
     */
    private $iniciador;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="numeroExpediente", type="string", length=100)
     * @Assert\NotBlank(message="El checklist debe estar vinculado a un expediente.")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El número de expediente no puede dejarse en blanco.", maxMessage = "El número de expediente es demasiado largo.")
     */
    private $numeroExpediente;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="evaluador", type="string", length=100)
     * @Assert\NotBlank(message="No puede dejar el nombre de evaluador en blanco.")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El nombre de evaluador no puede dejarse en blanco.", maxMessage = "El nombre de evaluador es demasiado largo.")
     */
    private $evaluador;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=100)
     * @Assert\NotBlank(message="No puede dejar el nombre de evaluador en blanco.")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El nombre de evaluador no puede dejarse en blanco.", maxMessage = "El nombre de evaluador es demasiado largo.")
     */
    private $version;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="fechaInicioEvaluacion", type="date")
     * @Assert\NotBlank(message="Debe ingresar la fecha en que inició la evaluación.")
     */
    private $fechaInicioEvaluacion;
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="fechaFinEvaluacion", type="date")
     */
    private $fechaFinEvaluacion;
    
        
    /**
     * @ORM\OneToOne(targetEntity="Domicilio", cascade={"persist"})
     * @ORM\JoinColumn(name="domicilio_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\Domicilio")
     * @Assert\Valid
     */
    private $domicilio;

}

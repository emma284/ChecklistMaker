<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FormularioA
 *
 * @ORM\Table(name="formularioA")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormularioARepository")
 */
class FormularioA
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
     * @ORM\OneToOne(targetEntity="Domicilio", cascade={"persist"})
     * @ORM\JoinColumn(name="domicilio_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\Domicilio")
     * @Assert\Valid
     */
    private $domicilio;



    /**
     * @var string
     * @ORM\Column(name="resumenEjecutivo", type="string", length=3000)
     * @Assert\NotBlank(message="No puede dejar el resumen ejecutivo en blanco")
     * @Assert\Length(min = 1, max = 3000, minMessage = "El resumen ejecutivo no puede dejarse en blanco.", maxMessage = "El resumen ejecutivo no puede exceder los 3000 caracteres.")
     */
    private $resumenEjecutivo;


    /**
     * Get the value of resumenEjecutivo
     *
     * @return  string
     */ 
    public function getResumenEjecutivo()
    {
        return $this->resumenEjecutivo;
    }

    /**
     * Set the value of resumenEjecutivo
     *
     * @param  string  $resumenEjecutivo
     *
     * @return  self    
     */ 
    public function setResumenEjecutivo(string $resumenEjecutivo)
    {
        $this->resumenEjecutivo = $resumenEjecutivo;

        return $this;
    }

    /**
     * Get the value of domicilio
     */ 
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set the value of domicilio
     *
     * @return  self
     */ 
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
}

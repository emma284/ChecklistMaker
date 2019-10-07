<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Resumen
 *
 * @ORM\Table(name="resumen")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResumenRepository")
 */
class Resumen
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

//    /**
 //    * @ORM\OneToOne(targetEntity="Categorizacion", cascade={"persist"})
//     * @ORM\JoinColumn(name="categorizacion_id",referencedColumnName="id")
//     * @Assert\Type(type="AppBundle\Entity\Categorizacion")
//     * @Assert\Valid
//     */
   private $categorizacion;


    


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

    /**
     * Get the value of categorizacion
     */ 
    public function getCategorizacion()
    {
        return $this->categorizacion;
    }

    /**
     * Set the value of categorizacion
     *
     * @return  self
     */ 
    public function setCategorizacion($categorizacion)
    {
        $this->categorizacion = $categorizacion;

        return $this;
    }
}

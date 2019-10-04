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
     *  @ORM\OneToMany(targetEntity="AppBundle\Entity\Checklist", mappedBy="plantilla")
     */
    private $checklists;
    
    
    /**
     * @ORM\OneToOne(targetEntity="DomicilioLegal", cascade={"persist"})
     * @ORM\JoinColumn(name="domicilioLegal_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\DomicilioLegal")
     * @Assert\Valid
     */
   private $domicilioLegal;

       
    /**
     * @ORM\OneToOne(targetEntity="DomicilioReal", cascade={"persist"})
     * @ORM\JoinColumn(name="DomicilioReal_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\DomicilioReal")
     * @Assert\Valid
     */
    private $domicilioReal;

    /**
     * @ORM\OneToOne(targetEntity="ContratoSocial", cascade={"persist"})
     * @ORM\JoinColumn(name="contratoSocial_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\ContratoSocial")
     * @Assert\Valid
     */
    private $contratoSocial;

    /**
     * @ORM\OneToOne(targetEntity="ActaSocietaria", cascade={"persist"})
     * @ORM\JoinColumn(name="actaSocietaria_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\ActaSocietaria")
     * @Assert\Valid
     */
    private $actaSocietaria;

    /**
     * @ORM\OneToOne(targetEntity="Dni", cascade={"persist"})
     * @ORM\JoinColumn(name="dni_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\Dni")
     * @Assert\Valid
     */
    private $dni;
    
    /**
     * @ORM\OneToOne(targetEntity="AFIP", cascade={"persist"})
     * @ORM\JoinColumn(name="afip_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\AFIP")
     * @Assert\Valid
     */
    private $afip;
        /**
     * @ORM\OneToOne(targetEntity="API", cascade={"persist"})
     * @ORM\JoinColumn(name="api_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\API")
     * @Assert\Valid
     */
    private $api;
        /**
     * @ORM\OneToOne(targetEntity="UsoConformeDeSuelo", cascade={"persist"})
     * @ORM\JoinColumn(name="usoConformeDeSuelo_id",referencedColumnName="id")
     * @Assert\Type(type="AppBundle\Entity\FormularioA\UsoConformeDeSuelo")
     * @Assert\Valid
     */
    private $usoConformeDeSuelo;
    
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
    * Get the value of domicilioLegal
    */ 
   public function getDomicilioLegal()
   {
      return $this->domicilioLegal;
   }

   /**
    * Set the value of domicilioLegal
    *
    * @return  self
    */ 
   public function setDomicilioLegal($domicilioLegal)
   {
      $this->domicilioLegal = $domicilioLegal;

      return $this;
   }

    /**
     * Get the value of domicilioReal
     */ 
    public function getDomicilioReal()
    {
        return $this->domicilioReal;
    }

    /**
     * Set the value of domicilioReal
     *
     * @return  self
     */ 
    public function setDomicilioReal($domicilioReal)
    {
        $this->domicilioReal = $domicilioReal;

        return $this;
    }

    /**
     * Get the value of contratoSocial
     */ 
    public function getContratoSocial()
    {
        return $this->contratoSocial;
    }

    /**
     * Set the value of contratoSocial
     *
     * @return  self
     */ 
    public function setContratoSocial($contratoSocial)
    {
        $this->contratoSocial = $contratoSocial;

        return $this;
    }

    /**
     * Get the value of actaSocietaria
     */ 
    public function getActaSocietaria()
    {
        return $this->actaSocietaria;
    }

    /**
     * Set the value of actaSocietaria
     *
     * @return  self
     */ 
    public function setActaSocietaria($actaSocietaria)
    {
        $this->actaSocietaria = $actaSocietaria;

        return $this;
    }

    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get the value of afip
     */ 
    public function getAfip()
    {
        return $this->afip;
    }

    /**
     * Set the value of afip
     *
     * @return  self
     */ 
    public function setAfip($afip)
    {
        $this->afip = $afip;

        return $this;
    }

    /**
     * Get the value of api
     */ 
    public function getApi()
    {
        return $this->api;
    }

    /**
     * Set the value of api
     *
     * @return  self
     */ 
    public function setApi($api)
    {
        $this->api = $api;

        return $this;
    }

    /**
     * Get the value of usoConformeDeSuelo
     */ 
    public function getUsoConformeDeSuelo()
    {
        return $this->usoConformeDeSuelo;
    }

    /**
     * Set the value of usoConformeDeSuelo
     *
     * @return  self
     */ 
    public function setUsoConformeDeSuelo($usoConformeDeSuelo)
    {
        $this->usoConformeDeSuelo = $usoConformeDeSuelo;

        return $this;
    }
}

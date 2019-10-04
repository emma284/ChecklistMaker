<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity\FormularioA;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * DomicilioLegal
 *
 * @ORM\Table(name="DomicilioLegal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DomicilioLegalRepository")
 */
class DomicilioLegal {
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
     */
    private $calle;
    
    /**
     * @var string
     * 
     */
    private $provincia;

    /**
     * @var string
     * 
     */
    private $departamento;

    /**
     * @var string
     * 
     */
    private $localidad;

    /**
     * @var string
     * 
     */
    private $cp;

    /**
     * @var string
     * 
     */
    private $email;

    /**
     * @var bool
     * 
     */
    private $acepEmail;
    

    /**
     * Get the value of calle
     *
     * @return  string
     */ 
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set the value of calle
     *
     * @param  string  $calle
     *
     * @return  self
     */ 
    public function setCalle(string $calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get the value of provincia
     *
     * @return  string
     */ 
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set the value of provincia
     *
     * @param  string  $provincia
     *
     * @return  self
     */ 
    public function setProvincia(string $provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get the value of departamento
     *
     * @return  string
     */ 
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set the value of departamento
     *
     * @param  string  $departamento
     *
     * @return  self
     */ 
    public function setDepartamento(string $departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get the value of localidad
     *
     * @return  string
     */ 
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set the value of localidad
     *
     * @param  string  $localidad
     *
     * @return  self
     */ 
    public function setLocalidad(string $localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get the value of cp
     *
     * @return  string
     */ 
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set the value of cp
     *
     * @param  string  $cp
     *
     * @return  self
     */ 
    public function setCp(string $cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string  $email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

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

    /**
     * Get the value of verEmail
     *
     * @return  string
     */ 
    public function getVerEmail()
    {
        return $this->verEmail;
    }

    /**
     * Set the value of verEmail
     *
     * @param  string  $verEmail
     *
     * @return  self
     */ 
    public function setVerEmail(string $verEmail)
    {
        $this->verEmail = $verEmail;

        return $this;
    }
}

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
 * AFIP
 *
 * @ORM\Table(name="AFIP")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AFIPRepository")
 */
class AFIP {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     */
    private $constancia;

    /**
     * @var string
     */
    private $fojaN;

    /**
     * @var bool
     */
    private $verFechIni;
    
    /**
     * @var bool
     */
    private $verRazonSocial;

    /**
     * @var bool
     */
    private $verCUIT;

    /**
     * @var bool
     */
    private $verAct;

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
     * Get the value of constancia
     *
     * @return  bool
     */ 
    public function getConstancia()
    {
        return $this->constancia;
    }

    /**
     * Set the value of constancia
     *
     * @param  bool  $constancia
     *
     * @return  self
     */ 
    public function setConstancia(bool $constancia)
    {
        $this->constancia = $constancia;

        return $this;
    }

    /**
     * Get the value of fojaN
     *
     * @return  string
     */ 
    public function getFojaN()
    {
        return $this->fojaN;
    }

    /**
     * Set the value of fojaN
     *
     * @param  string  $fojaN
     *
     * @return  self
     */ 
    public function setFojaN(string $fojaN)
    {
        $this->fojaN = $fojaN;

        return $this;
    }

    /**
     * Get the value of verFechIni
     *
     * @return  bool
     */ 
    public function getVerFechIni()
    {
        return $this->verFechIni;
    }

    /**
     * Set the value of verFechIni
     *
     * @param  bool  $verFechIni
     *
     * @return  self
     */ 
    public function setVerFechIni(bool $verFechIni)
    {
        $this->verFechIni = $verFechIni;

        return $this;
    }

    /**
     * Get the value of verRazonSocial
     *
     * @return  bool
     */ 
    public function getVerRazonSocial()
    {
        return $this->verRazonSocial;
    }

    /**
     * Set the value of verRazonSocial
     *
     * @param  bool  $verRazonSocial
     *
     * @return  self
     */ 
    public function setVerRazonSocial(bool $verRazonSocial)
    {
        $this->verRazonSocial = $verRazonSocial;

        return $this;
    }

    /**
     * Get the value of verCUIT
     *
     * @return  bool
     */ 
    public function getVerCUIT()
    {
        return $this->verCUIT;
    }

    /**
     * Set the value of verCUIT
     *
     * @param  bool  $verCUIT
     *
     * @return  self
     */ 
    public function setVerCUIT(bool $verCUIT)
    {
        $this->verCUIT = $verCUIT;

        return $this;
    }

    /**
     * Get the value of verAct
     *
     * @return  bool
     */ 
    public function getVerAct()
    {
        return $this->verAct;
    }

    /**
     * Set the value of verAct
     *
     * @param  bool  $verAct
     *
     * @return  self
     */ 
    public function setVerAct(bool $verAct)
    {
        $this->verAct = $verAct;

        return $this;
    }
}

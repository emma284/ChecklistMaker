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
 * ContratoSocial
 *
 * @ORM\Table(name="ContratoSocial")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContratoSocialRepository")
 */
class ContratoSocial {
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
    private $poseeContrato;

    /**
     * @var string
     */
    private $fojaN;

    /**
     * @var bool
     */
    private $unipersonal;
    
    /**
     * @var bool
     */
    private $titulares;

    /**
     * @var bool
     */
    private $vencido;
    /**
     * @var bool
     */
    private $verObjSoc;



    /**
     * Get the value of verObjSoc
     *
     * @return  bool
     */ 
    public function getVerObjSoc()
    {
        return $this->verObjSoc;
    }

    /**
     * Set the value of verObjSoc
     *
     * @param  bool  $verObjSoc
     *
     * @return  self
     */ 
    public function setVerObjSoc(bool $verObjSoc)
    {
        $this->verObjSoc = $verObjSoc;

        return $this;
    }

    /**
     * Get the value of vencido
     *
     * @return  bool
     */ 
    public function getVencido()
    {
        return $this->vencido;
    }

    /**
     * Set the value of vencido
     *
     * @param  bool  $vencido
     *
     * @return  self
     */ 
    public function setVencido(bool $vencido)
    {
        $this->vencido = $vencido;

        return $this;
    }

    /**
     * Get the value of titulares
     *
     * @return  bool
     */ 
    public function getTitulares()
    {
        return $this->titulares;
    }

    /**
     * Set the value of titulares
     *
     * @param  bool  $titulares
     *
     * @return  self
     */ 
    public function setTitulares(bool $titulares)
    {
        $this->titulares = $titulares;

        return $this;
    }

    /**
     * Get the value of unipersonal
     *
     * @return  bool
     */ 
    public function getUnipersonal()
    {
        return $this->unipersonal;
    }

    /**
     * Set the value of unipersonal
     *
     * @param  bool  $unipersonal
     *
     * @return  self
     */ 
    public function setUnipersonal(bool $unipersonal)
    {
        $this->unipersonal = $unipersonal;

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
     * Get the value of poseeContrato
     *
     * @return  bool
     */ 
    public function getPoseeContrato()
    {
        return $this->poseeContrato;
    }

    /**
     * Set the value of poseeContrato
     *
     * @param  bool  $poseeContrato
     *
     * @return  self
     */ 
    public function setPoseeContrato(bool $poseeContrato)
    {
        $this->poseeContrato = $poseeContrato;

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

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
 * DomicilioReal
 *
 * @ORM\Table(name="DomicilioReal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DomicilioRealRepository")
 */
class DomicilioReal {
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
     */
    private $localidad;


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

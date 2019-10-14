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
 * API
 *
 * @ORM\Table(name="API")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\APIRepository")
 */
class API {
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
    private $preImpInmobiliario;

    /**
     * @var string
     */
    private $fojaN;

    /**
     * @var bool
     */
    private $formPartida;
    
    /**
     * @var bool
     */
    private $verNumPartida;

    /**
     * @var bool
     */
    private $verPartidaCatastro;

    /**
     * @var bool
     */
    private $verTitularBoleta;
    
    /**
     * @var bool
     */
    private $verIndTitular;
    
    /**
     * @var bool
     */
    private $AcreDocUsoInmueble;


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
     * Get the value of AcreDocUsoInmueble
     *
     * @return  bool
     */ 
    public function getAcreDocUsoInmueble()
    {
        return $this->AcreDocUsoInmueble;
    }

    /**
     * Set the value of AcreDocUsoInmueble
     *
     * @param  bool  $AcreDocUsoInmueble
     *
     * @return  self
     */ 
    public function setAcreDocUsoInmueble(bool $AcreDocUsoInmueble)
    {
        $this->AcreDocUsoInmueble = $AcreDocUsoInmueble;

        return $this;
    }

    /**
     * Get the value of verIndTitular
     *
     * @return  bool
     */ 
    public function getVerIndTitular()
    {
        return $this->verIndTitular;
    }

    /**
     * Set the value of verIndTitular
     *
     * @param  bool  $verIndTitular
     *
     * @return  self
     */ 
    public function setVerIndTitular(bool $verIndTitular)
    {
        $this->verIndTitular = $verIndTitular;

        return $this;
    }

    /**
     * Get the value of verTitularBoleta
     *
     * @return  bool
     */ 
    public function getVerTitularBoleta()
    {
        return $this->verTitularBoleta;
    }

    /**
     * Set the value of verTitularBoleta
     *
     * @param  bool  $verTitularBoleta
     *
     * @return  self
     */ 
    public function setVerTitularBoleta(bool $verTitularBoleta)
    {
        $this->verTitularBoleta = $verTitularBoleta;

        return $this;
    }

    /**
     * Get the value of verPartidaCatastro
     *
     * @return  bool
     */ 
    public function getVerPartidaCatastro()
    {
        return $this->verPartidaCatastro;
    }

    /**
     * Set the value of verPartidaCatastro
     *
     * @param  bool  $verPartidaCatastro
     *
     * @return  self
     */ 
    public function setVerPartidaCatastro(bool $verPartidaCatastro)
    {
        $this->verPartidaCatastro = $verPartidaCatastro;

        return $this;
    }

    /**
     * Get the value of verNumPartida
     *
     * @return  bool
     */ 
    public function getVerNumPartida()
    {
        return $this->verNumPartida;
    }

    /**
     * Set the value of verNumPartida
     *
     * @param  bool  $verNumPartida
     *
     * @return  self
     */ 
    public function setVerNumPartida(bool $verNumPartida)
    {
        $this->verNumPartida = $verNumPartida;

        return $this;
    }

    /**
     * Get the value of formPartida
     *
     * @return  bool
     */ 
    public function getFormPartida()
    {
        return $this->formPartida;
    }

    /**
     * Set the value of formPartida
     *
     * @param  bool  $formPartida
     *
     * @return  self
     */ 
    public function setFormPartida(bool $formPartida)
    {
        $this->formPartida = $formPartida;

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
     * Get the value of preImpInmobiliario
     *
     * @return  bool
     */ 
    public function getPreImpInmobiliario()
    {
        return $this->preImpInmobiliario;
    }

    /**
     * Set the value of preImpInmobiliario
     *
     * @param  bool  $preImpInmobiliario
     *
     * @return  self
     */ 
    public function setPreImpInmobiliario(bool $preImpInmobiliario)
    {
        $this->preImpInmobiliario = $preImpInmobiliario;

        return $this;
    }

    
}

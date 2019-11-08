<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caratula
 *
 * @ORM\Table(name="caratula")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CaratulaRepository")
 */
class Caratula
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
     * @ORM\Column(name="razonSocial", type="string", length=100)
     * @var string
     */
    private $razonSocial;

    /**
     * @var string
     */
    private $expediente;

    /**
     * @var  \DateTime
     */
    private $fechaIniExp;
    
    /**
     * @var string
     */
    private $version;

    /**
     * @var  \DateTime
     */
    private $finEval;

    /**
     * @var string
     *
     * 
     */
    private $evaluador;
    
    /**
     * @var  \DateTime
     */
    private $iniEvaluacion;

    
    /**
     * @var string
     */
    private $diasEvaluacion;


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
     * Get the value of razonSocial
     *
     * @return  string
     */ 
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set the value of razonSocial
     *
     * @param  string  $razonSocial
     *
     * @return  self
     */ 
    public function setRazonSocial(string $razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get the value of expediente
     *
     * @return  string
     */ 
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set the value of expediente
     *
     * @param  string  $expediente
     *
     * @return  self
     */ 
    public function setExpediente(string $expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get the value of fechaIniExp
     *
     * @return  \DateTime
     */ 
    public function getFechaIniExp()
    {
        return $this->fechaIniExp;
    }

    /**
     * Set the value of fechaIniExp
     *
     * @param  \DateTime  $fechaIniExp
     *
     * @return  self
     */ 
    public function setFechaIniExp(\DateTime $fechaIniExp)
    {
        $this->fechaIniExp = $fechaIniExp;

        return $this;
    }

    /**
     * Get the value of version
     *
     * @return  string
     */ 
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set the value of version
     *
     * @param  string  $version
     *
     * @return  self
     */ 
    public function setVersion(string $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get the value of finEval
     *
     * @return  \DateTime
     */ 
    public function getFinEval()
    {
        return $this->finEval;
    }

    /**
     * Set the value of finEval
     *
     * @param  \DateTime  $finEval
     *
     * @return  self
     */ 
    public function setFinEval(\DateTime $finEval)
    {
        $this->finEval = $finEval;

        return $this;
    }

    /**
     * Get the value of evaluador
     *
     * @return  string
     */ 
    public function getEvaluador()
    {
        return $this->evaluador;
    }

    /**
     * Set the value of evaluador
     *
     * @param  string  $evaluador
     *
     * @return  self
     */ 
    public function setEvaluador(string $evaluador)
    {
        $this->evaluador = $evaluador;

        return $this;
    }

    /**
     * Get the value of iniEvaluacion
     *
     * @return  \DateTime
     */ 
    public function getIniEvaluacion()
    {
        return $this->iniEvaluacion;
    }

    /**
     * Set the value of iniEvaluacion
     *
     * @param  \DateTime  $iniEvaluacion
     *
     * @return  self
     */ 
    public function setIniEvaluacion(\DateTime $iniEvaluacion)
    {
        $this->iniEvaluacion = $iniEvaluacion;

        return $this;
    }

    /**
     * Get the value of diasEvaluacion
     *
     * @return  string
     */ 
    public function getDiasEvaluacion()
    {
        return $this->diasEvaluacion;
    }

    /**
     * Set the value of diasEvaluacion
     *
     * @param  string  $diasEvaluacion
     *
     * @return  self
     */ 
    public function setDiasEvaluacion(string $diasEvaluacion)
    {
        $this->diasEvaluacion = $diasEvaluacion;

        return $this;
    }
}
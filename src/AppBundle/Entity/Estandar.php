<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estandar
 *
 * @ORM\Table(name="estandar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstandarRepository")
 */
class Estandar
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
     */
    private $presentacion;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $declaraActividad;

    /**
     * @var string
     */
    private $cuacm;

    /**
     * @var string
     */
    private $numeroCuacm;

    /**
     * @var string
     */
    private $nombreCuacm;
    
    /**
     * @var string
     */
    private $estandar;

    /**
     * Get the value of presentacion
     *
     * @return  string
     */ 
    public function getPresentacion()
    {
        return $this->presentacion;
    }

    /**
     * Set the value of presentacion
     *
     * @param  string  $presentacion
     *
     * @return  self
     */ 
    public function setPresentacion(string $presentacion)
    {
        $this->presentacion = $presentacion;

        return $this;
    }

    /**
     * Get the value of estado
     *
     * @return  string
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @param  string  $estado
     *
     * @return  self
     */ 
    public function setEstado(string $estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of declaraActividad
     *
     * @return  string
     */ 
    public function getDeclaraActividad()
    {
        return $this->declaraActividad;
    }

    /**
     * Set the value of declaraActividad
     *
     * @param  string  $declaraActividad
     *
     * @return  self
     */ 
    public function setDeclaraActividad(string $declaraActividad)
    {
        $this->declaraActividad = $declaraActividad;

        return $this;
    }

    /**
     * Get the value of cuacm
     *
     * @return  string
     */ 
    public function getCuacm()
    {
        return $this->cuacm;
    }

    /**
     * Set the value of cuacm
     *
     * @param  string  $cuacm
     *
     * @return  self
     */ 
    public function setCuacm(string $cuacm)
    {
        $this->cuacm = $cuacm;

        return $this;
    }

    /**
     * Get the value of estandar
     *
     * @return  string
     */ 
    public function getEstandar()
    {
        return $this->estandar;
    }

    /**
     * Set the value of estandar
     *
     * @param  string  $estandar
     *
     * @return  self
     */ 
    public function setEstandar(string $estandar)
    {
        $this->estandar = $estandar;

        return $this;
    }

    /**
     * Get the value of numeroCuacm
     *
     * @return  string
     */ 
    public function getNumeroCuacm()
    {
        return $this->numeroCuacm;
    }

    /**
     * Set the value of numeroCuacm
     *
     * @param  string  $numeroCuacm
     *
     * @return  self
     */ 
    public function setNumeroCuacm(string $numeroCuacm)
    {
        $this->numeroCuacm = $numeroCuacm;

        return $this;
    }

    /**
     * Get the value of nombreCuacm
     *
     * @return  string
     */ 
    public function getNombreCuacm()
    {
        return $this->nombreCuacm;
    }

    /**
     * Set the value of nombreCuacm
     *
     * @param  string  $nombreCuacm
     *
     * @return  self
     */ 
    public function setNombreCuacm(string $nombreCuacm)
    {
        $this->nombreCuacm = $nombreCuacm;

        return $this;
    }
}
<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubRutina
 *
 * @ORM\Table(name="subRutina")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubRutinaRepository")
 */
class SubRutina
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
    private $investigar;

    /**
     * @var string
     */
    private $existe;

    /**
     * @var string
     */
    private $estaEnPlazos;

    /**
     * @var string
     */
    private $relocalizo;

    /**
     * @var string
     */
    private $desestima;


    /**
     * Get the value of investigar
     *
     * @return  string
     */ 
    public function getInvestigar()
    {
        return $this->investigar;
    }

    /**
     * Set the value of investigar
     *
     * @param  string  $investigar
     *
     * @return  self
     */ 
    public function setInvestigar(string $investigar)
    {
        $this->investigar = $investigar;

        return $this;
    }

    /**
     * Get the value of existe
     *
     * @return  string
     */ 
    public function getExiste()
    {
        return $this->existe;
    }

    /**
     * Set the value of existe
     *
     * @param  string  $existe
     *
     * @return  self
     */ 
    public function setExiste(string $existe)
    {
        $this->existe = $existe;

        return $this;
    }

    /**
     * Get the value of estaEnPlazos
     *
     * @return  string
     */ 
    public function getEstaEnPlazos()
    {
        return $this->estaEnPlazos;
    }

    /**
     * Set the value of estaEnPlazos
     *
     * @param  string  $estaEnPlazos
     *
     * @return  self
     */ 
    public function setEstaEnPlazos(string $estaEnPlazos)
    {
        $this->estaEnPlazos = $estaEnPlazos;

        return $this;
    }

    /**
     * Get the value of relocalizo
     *
     * @return  string
     */ 
    public function getRelocalizo()
    {
        return $this->relocalizo;
    }

    /**
     * Set the value of relocalizo
     *
     * @param  string  $relocalizo
     *
     * @return  self
     */ 
    public function setRelocalizo(string $relocalizo)
    {
        $this->relocalizo = $relocalizo;

        return $this;
    }

    /**
     * Get the value of desestima
     *
     * @return  string
     */ 
    public function getDesestima()
    {
        return $this->desestima;
    }

    /**
     * Set the value of desestima
     *
     * @param  string  $desestima
     *
     * @return  self
     */ 
    public function setDesestima(string $desestima)
    {
        $this->desestima = $desestima;

        return $this;
    }
}
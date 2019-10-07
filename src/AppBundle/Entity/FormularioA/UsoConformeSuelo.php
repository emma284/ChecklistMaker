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
 * UsoConformeSuelo
 *
 * @ORM\Table(name="UsoConformeSuelo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsoConformeSueloRepository")
 */
class UsoConformeSuelo {
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
    private $usoConformeSuelo;

    /**
     * @var int
     */
    private $fojaN;

    /**
     * @var bool
     */
    private $presentaHabilitacion;
       
    /**
     * @var \DateTime
     */
    private $fechaInicioHabilitacion;
       
    /**
     * @var \DateTime
     */
    private $fechaVencimiento;
    
    /**
     * @var bool
     */
    private $verActividad;

    /**
     * @var bool
     */
    private $verLocalizacion;
}
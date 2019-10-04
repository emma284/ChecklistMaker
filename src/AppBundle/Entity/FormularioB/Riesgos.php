<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity\FormularioB;

/**
 * Riesgos
 *
 * @ORM\Table(name="riesgos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormularioB\RiesgosRepository")
 */
class Riesgos {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    private $riesgosPresuntos;
    
    private $acustico;
    
    private $aparatosSometidosAPresion;
    
    private $sustanciasQuimicas;
    
    private $explosion;
    
    private $incendio;
    
    private $otrosBool;
    
    private $otrosListado;
    
    
    
}

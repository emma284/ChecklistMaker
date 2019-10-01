<?php

namespace AppBundle\Entity\FormularioB;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * FormularioB
 *
 * @ORM\Table(name="formularioB")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FormularioBRepository")
 */
class FormularioB
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    private $estadoSoporteDigital;
    
    private $ingresarCodigoExcel;
    
    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\FormularioB\EmisionDeResiduos", mappedBy="formularioB")
     */
    private $emisionDeResiduos;
    
    
    private $riesgos;
    
    
    private $dotacion;
    
    
    private $localización;
    
    
    private $categoriaFinal;
    
    
}

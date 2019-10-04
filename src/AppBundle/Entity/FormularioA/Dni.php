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
 * Dni
 *
 * @ORM\Table(name="Dni")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DniRepository")
 */
class Dni {
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
    private $dni;

    /**
     * @var bool
     */
    private $verDni;   
    
    /**
     * @var bool
     */
    private $apoderado;
    
    /**
     * @var bool
     */
    private $verApoderado;

}

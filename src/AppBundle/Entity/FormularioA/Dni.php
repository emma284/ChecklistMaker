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
    
    
    function getId() {
        return $this->id;
    }

    function getDni() {
        return $this->dni;
    }

    function getVerDni() {
        return $this->verDni;
    }

    function getApoderado() {
        return $this->apoderado;
    }

    function getVerApoderado() {
        return $this->verApoderado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setVerDni($verDni) {
        $this->verDni = $verDni;
    }

    function setApoderado($apoderado) {
        $this->apoderado = $apoderado;
    }

    function setVerApoderado($verApoderado) {
        $this->verApoderado = $verApoderado;
    }


}

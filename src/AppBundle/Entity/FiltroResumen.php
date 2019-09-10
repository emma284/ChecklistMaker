<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiltroResumen
 *
 * @ORM\Table(name="filtroResumen")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FiltroResumenRepository")
 */
class FiltroResumen
{
/**
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue(strategy="AUTO")
 */
protected $id;

/**
 * @ORM\Column(type="string")
 */
protected $razonSocial;

}

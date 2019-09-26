<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Description of Respuesta
 *
 * @author Admin
 */

/**
 * Respuesta
 *
 * @ORM\Table(name="Respuesta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RespuestaRepository")
 */
class Respuesta {
    
    /**
     * @var string
     */
    private $respuesta;
    
    /**
     * @var boolean
     */
    private $elegida;
    
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tarea", inversedBy="respuestas")
     * @ORM\JoinColumn(name="tarea_id", referencedColumnName="id")
     * @ORM\Id
     */
    private $tarea;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Checklist", inversedBy="respuesta")
     * @ORM\JoinColumn(name="checklist_id", referencedColumnName="id")
     * @ORM\Id
     */
    private $checklist;
    
    
}
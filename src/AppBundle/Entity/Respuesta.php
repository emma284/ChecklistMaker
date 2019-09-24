<?php


namespace AppBundle\Entity;

/**
 * Description of Respuesta
 *
 * @author Admin
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tarea", inversedBy="respuesta")
     * @ORM\JoinColumn(name="tarea_id", referencedColumnName="id")
     */
    private $tarea;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Checklist", inversedBy="respuesta")
     * @ORM\JoinColumn(name="checklist_id", referencedColumnName="id")
     *  
     */
    private $checklist;
    
    
}

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
     *
     * @Assert\Type(type="AppBundle\Entity\Tarea")
     * @Assert\Valid
     *  
     */
    private $tarea;
    
    /**
     *
     * @Assert\Type(type="AppBundle\Entity\Checklist")
     * @Assert\Valid
     *  
     */
    private $checklist;
    
    
}

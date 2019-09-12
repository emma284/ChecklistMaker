<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of SeccionController
 *
 * @author Emma
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Seccion;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\SeccionType;

class SeccionController extends Controller{
    
    /**
     * @Route("/seccion/new/")
     */
    public function createAction()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: createAction(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $seccion = new Seccion();
        
     

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($seccion);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
    }
}

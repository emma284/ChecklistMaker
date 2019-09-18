<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Checklist;
use AppBundle\Entity\Plantilla;
use AppBundle\Form\ChecklistType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of ChecklistController
 *
 * @author Emma
 */

 class ChecklistController extends AbstractController
 {
     
    //Crear un nuevo checklist debería consistir en otener la plantilla y 
    //asociar los componentes de la misma a dicho checklist. Esta función,
    //entonces, cumplirá la función de alta de checklist y consulta de
    //la plantilla.
    /**
     * @Route("/checklist/new/", name="new_checklist")
     */
    public function checklistNewAction(Request $request)
    {
        $plantilla= new Plantilla();
        $checklist= new Checklist();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(ChecklistType::class, $checklist);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $checklist = $form->getData();
            
            $entityManager->persist($checklist);
            $entityManager->flush();
            
            //return $this->redirectToRoute('listar_formularios');

        }
        return $this->render('checklist/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }
}
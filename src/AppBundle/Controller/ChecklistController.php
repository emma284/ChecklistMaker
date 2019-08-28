<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Checklist;
use AppBundle\Form\ChecklistType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of ChecklistController
 *
 * @author Emma
 */

 class ChecklistController extends Controller
 {
    /**
     * @Route("/checklist/new/", name="new_checklist")
     */
    public function checklistNewAction(Request $request)
    {
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
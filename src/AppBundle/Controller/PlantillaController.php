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
use AppBundle\Entity\Plantilla;
use AppBundle\Form\PlantillaType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of PlantillaController
 *
 * @author Emma
 */

 class PlantillaController extends Controller
 {
    /**
     * @Route("/plantilla/new/", name="new_plantilla")
     */
    public function plantillaNewAction(Request $request)
    {
        $plantilla= new Plantilla();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(PlantillaType::class, $plantilla);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $plantilla = $form->getData();
            
            $entityManager->persist($plantilla);
            $entityManager->flush();
            
            //return $this->redirectToRoute('listar_formularios');

        }
        return $this->render('plantilla/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }
}
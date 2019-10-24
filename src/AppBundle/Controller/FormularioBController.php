<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\FormularioB\FormularioB;
use AppBundle\Form\FormularioB\FormularioBType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of FormularioAController
 *
 * @author Emma
 */

 class FormularioBController extends Controller
 {
    /**
     * @Route("/formularioB/new/", name="formularioB_new")
     */
    public function formularioANuevoAction(Request $request)
    {
        $formularioB = new FormularioB();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(FormularioBType::class, $formularioB);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $formularioB = $form->getData();
            
            $entityManager->persist($formularioB);
            $entityManager->flush();
            
          //  return $this->redirectToRoute('listar_formularios');

        }
        return $this->render('plantilla/new-formularioB.html.twig',[
            'form' => $form->createView(),
        ]);
    }
}
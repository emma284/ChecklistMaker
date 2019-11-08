<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\FormularioA\FormularioA;
use AppBundle\Form\FormularioA\FormularioAType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of FormularioAController
 *
 * @author Emma
 */

 class FormularioAController extends Controller
 {
    /**
     * @Route("/formularioA/new/", name="formularioA_new")
     */
    public function formularioANuevoAction(Request $request)
    {
        $formularioA = new FormularioA();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(FormularioAType::class, $formularioA);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $formularioA = $form->getData();
            
            $entityManager->persist($formularioA);
            $entityManager->flush();
            
           // return $this->redirectToRoute('plantilla/listado.html.twig');

        }
        return $this->render('plantilla/new-formularioA.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/formulario/listado/", name="listar_formularios")
     */
    public function formularioAListarAction(Request $request){
        
        $entityManager = $this->getDoctrine()->getManager();

        $formularios = $entityManager
                    ->getRepository(FormularioA::class)
                    ->findAll();
        
        return $this->render('formularioA/listar.html.twig', array(
            'formularios' => $formularios));
    }

    /**
     * @Route("/formulario/ver/{id}", name="formulario_ver")
     */
    public function formularioAVerAction(Request $request, $id){
        $entityManager = $this->getDoctrine()->getManager();

        $formulario = $entityManager
                    ->getRepository(FormularioA::class)
                    ->find($id);
        
        return $this->render('formularioA/ver.html.twig', array(
            'formulario' => $formulario));
    }

    /**
     * @Route("/formulario/modificar/{id}", name="formulario_modificar")
     */
    public function formularioAModificarAction(Request $request, $id){
        $entityManager = $this->getDoctrine()->getManager();

        $formulario = $entityManager
                    ->getRepository(FormularioA::class)
                    ->find($id);

        if(!$formulario) {
            throw $this->createNotFoundException(
                "No se ha encontrado el formulario de id: " . $id
            );
        }
        
        return $this->render('formularioA/modificar.html.twig', array(
            'formulario' => $formulario));
    }

}
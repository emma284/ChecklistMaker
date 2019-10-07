<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Plantilla;
use AppBundle\Form\PlantillaType;
use AppBundle\Entity\Seccion;
use Symfony\Component\HttpFoundation\Request;

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


        return $this->render('plantilla/new.html.twig', array(
            'form' => $form->createView()
        ));


    }

    /**
    * @Route("/plantilla/ver/{id}", name="ver_plantilla")
    */
    public function plantillaVer(Request $request, $id)
    {

        $entityManager = $this->getDoctrine()->getManager();

        $plantilla = $entityManager
                    ->getRepository(Plantilla::class)
                    ->find($id);


        if(!$plantilla) {
            throw $this->createNotFoundException(
                "No se ha encontrado la plantilla: " . $id
            );
        }

        $secciones = $entityManager
            ->getRepository(Seccion::class)
            ->findBy(['idPlantilla' => $id]);

        return $this->render('plantilla/ver.html.twig', array(
            'form' => $plantilla,
            'secciones' => $secciones));


    }


    /**
     * @Route("/plantilla/ver_2/", name="ver2_plantilla")
     */
    public function plantillaVerAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();


        return $this->render('plantilla/ver.html.twig', array());

    }

}
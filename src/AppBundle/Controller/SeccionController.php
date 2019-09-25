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
     * @Route("/seccion/nuevo/")
     *
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

// HEAD:src/AppBundle/Controller/SeccionController.php
        return new Response('Saved new product with id '.$seccion->getId());
    }

    // if you have multiple entity managers, use the registry to fetch them
//    public function editAction()
//    {
//        $doctrine = $this->getDoctrine();
//        $entityManager = $doctrine->getManager();
//        $otherEntityManager = $doctrine->getManager('other_connection');
//    }
     //   return new Response('Saved new product with id '.$domicilio->getId());
 //   }
 
    /**
     * @Route("/seccion/mostrar/{id}/")
     */
    public function showAction($id)
    {
        $seccion = $this->getDoctrine()->getRepository(Seccion::class)->find($id);
        
        if (!$seccion) {
            throw $this->createNotFoundException('No se encontró seccion que tiene este id '.$id);
        }
        else{
            return new Response('Se encontró el seccion con id: '.$seccion->getId().'. Está ubicado en calle: '.$seccion->getCalle().' al '.$seccion->getNumero());
        }
    }

    /**
     * @Route("/seccion/form/", name="laRutaVieja")
     */
    //Formularios con seteo de datos por defecto
    public function new2(Request $request)
    {

        // creates a seccion and gives it some dummy data for this example
        $seccion = new Seccion();
        $form = $this->createForm(SeccionType::class, $seccion);

        // catch all data
        $form->handleRequest($request);

        
        // validate all data and if it success save them
        if ($form->isSubmitted() && $form->isValid()) {
            
            $task = $form->getData();


            return $this->redirectToRoute('laRuta');
        }
        
        return $this->render('seccion/new.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/seccion/nuevoSeccion/" ,name="laRuta")
     */
    //Formularios con petición de datos por pantalla
   public function new(Request $request)
    {
        // creates a seccion and gives it some dummy data for this example
        $seccion = new Seccion();

        // creates the form 
        $form = $this->createFormBuilder($seccion)
            ->add('calle', TextType::class, ['label' => 'Calle: '])
            ->add('numero', IntegerType::class, ['label' => 'Número: '])
            ->add('piso', IntegerType::class, ['label' => 'Piso: '])
            ->add('dpto', TextType::class, ['label' => 'Departamento: '])
            ->add('telefono', TextType::class, ['label' => 'Teléfono: '])
            ->add('email', EmailType::class, ['label' => 'Email: '])
            ->add('save', SubmitType::class, ['label' => 'Create Seccion'])
            ->getForm();


        // catch all data
        $form->handleRequest($request);

        
        // validate all data and if it success save them
        if ($form->isSubmitted() && $form->isValid()) {
            
            $task = $form->getData();


            return $this->redirectToRoute('laRutaVieja');
        }
        
        return $this->render('seccion/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

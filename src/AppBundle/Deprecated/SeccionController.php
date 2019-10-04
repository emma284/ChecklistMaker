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
use AppBundle\Entity\Tarea;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\SeccionType;
use Doctrine\Common\Collections\ArrayCollection;



class SeccionController extends Controller{
    
    /**
     * @Route("/seccion/mostrar/{id}/")
     */
    public function showAction(Request $request, $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $seccion = $entityManager->getRepository(Seccion::class)->find($id);

       // $seccion = $this->getDoctrine()->getRepository(Seccion::class)->find($id);
       
        if (!$seccion) {
         
            throw $this->createNotFoundException('No se encontró seccion que tiene este id '.$id);
    
        }

        $tareas = new ArrayCollection();

        foreach ($seccion->getTareas() as $tarea) {
            $tareas->add($tarea);
        }
 //
 //       $tareas = $entityManager
 //           ->getRepository(Tarea::class)
//           ->findBy(['idSeccion' => $id]);
        $form = $this->createForm(SeccionType::class,$seccion); 

        if ($form->isSubmitted()) {

            foreach ($tareas as $tarea) {

                if ($seccion->getTareas()->contains($tarea) === false) {
                    $entityManager->remove($tarea);
                }
            }
        }

        $entityManager->persist($seccion);
        $entityManager->flush();
        return $this->render('seccion/mostrar.html.twig',[

            'form' => $form->createView(),
            'tareas' =>$tareas
        ]);
    }

}

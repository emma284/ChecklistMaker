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
    public function checklistNewAction(Request $request, $id_plantilla)
    {
        
        //La plantilla se busca por su ID pero podría buscarse por su nombre
        $plantilla= $this->getDoctrine()->getRepository(Plantilla::class)
                ->findOneBy([
                    'id' => $id_plantilla,
                    'fechaBaja' => NULL
                        ]);
        
        if(!$plantilla){
            throw $this->createNotFoundException(
                    'No se ha encontrado la plantilla para este checklist'
                    //Se debería mostrar el nombre de la plantilla
                    );
        }
        $checklist= new Checklist();
        //Asocio al checklist la información ya conocida
        $checklist->setPlantilla($plantilla);
        $checklist->setNombre($plantilla->getNombre());
        $checklist->setVersion($plantilla->getVersion());
        
        
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
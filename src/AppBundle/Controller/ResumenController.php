<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Categorizacion;
use AppBundle\Entity\Resumen;
use AppBundle\Form\ResumenType;

class ResumenController extends Controller
{
    /**
     * @Route("/resumen-evaluacion/", name="resumen_evaluacion")
     */
    public function resumen(Request $request)
    {        
        $entityManager = $this->getDoctrine()->getManager();

        $resumenes = $entityManager
                    ->getRepository(Resumen::class)
                    ->findAll();
        
        return $this->render('resumen/listado.html.twig', array(
            'resumenes' => $resumenes));
    }

    /**
     * @Route("/nueva-hoja/",name="Nueva-hoja")
     */

    public function nuevaHoja(Request $request)
    {
        $resumen = new Resumen();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(ResumenType::class, $resumen);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $resumen = $form->getData();
            
            $entityManager->persist($resumen);
            $entityManager->flush();
            
            return $this->redirectToRoute('resumen_evaluacion');

        }
        return $this->render('categorizacion/new.html.twig',[
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/buscar/{rason}",name="buscar_rason_social")
     */
    public function buscar(Request $request, $rason){

        $entityManager = $this->getDoctrine()->getManager();

        $resumen = $entityManager
                    ->getRepository(Resumen::class)
                    ->find($rason);
        
        return $this->render('resumen/listado.html.twig', array(
            'resumenes' => $resumen));
    }


    
    /**
     * @Route("/resumen/ver/{id}", name="ver-hoja")
     */
    public function HojaAVerAction(Request $request, $id){
        $entityManager = $this->getDoctrine()->getManager();

        $formulario = $entityManager
                    ->getRepository(Resumen::class)
                    ->find($id);
        
        return $this->render('Resumen/ver.html.twig', array(
            'formulario' => $formulario));
    }
    
    /**
     * @Route("/resumen/modificar/{id}", name="modificar-hoja")
     */
    public function ModificarAVerAction(Request $request, $id){
        $entityManager = $this->getDoctrine()->getManager();

        $formulario = $entityManager
                    ->getRepository(Resumen::class)
                    ->find($id);
        
        return $this->render('Resumen/ver.html.twig', array(
            'formulario' => $formulario));
    }
    
}

<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\FiltroResumen;
use AppBundle\Form\FiltroResumenType;
use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;

class DefaultController extends Controller
{

    /**
     * @Route("/homepage/", name="homepage")
     */
    public function testFilterAction(Request $request)
    {
        $form = $this->get('form.factory')->create(FiltroResumenType::class);

        if ($request->query->has($form->getName())) {
            // manually bind values from the request
            $form->submit($request->query->get($form->getName()));

            // initialize a query builder
            $filterBuilder = $this->get('doctrine.orm.entity_manager')
                ->getRepository(FiltroResumen::class)
                ->createQueryBuilder('e');

            // build the query from the given form object
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($form, $filterBuilder);

            // now look at the DQL =)
            var_dump($filterBuilder->getDql());
        }

        return $this->render('resumen/testFilter.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/login/",name="login")
     */
    public function login(Request $request){

        $usuario = new Usuario();

        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(UsuarioType::class, $usuario);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $usuario = $form->getData();

            $entityManager->persist($usuario);
            $entityManager->flush();

            //return $this->redirectToRoute('listar_formularios');

        }

        return $this->render('Checklist/login.html.twig', array(
        ));
    }



    /**
     * @Route("/accion-user/",name="accion")
     */
    public function acciones(){

        return $this->render('Checklist/AccionUser.html.twig', array(
        ));
    }

}

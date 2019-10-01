<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\FiltroResumen;
use AppBundle\Form\FiltroResumenType;

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


}

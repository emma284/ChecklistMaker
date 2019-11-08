<?php
namespace AppBundle\Form\FormularioA;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Form\FormularioA\DomicilioLegalType;
use AppBundle\Form\FormularioA\DomicilioRealType;
use AppBundle\Form\FormularioA\ContratoSocialType;
use AppBundle\Form\FormularioA\ActaSocietariaType;
use AppBundle\Form\FormularioA\APIType;
use AppBundle\Form\FormularioA\UsoConformeSueloType;
use AppBundle\Form\FormularioA\DNIType;
use AppBundle\Form\FormularioA\AfipType;
use AppBundle\Entity\FormularioA\FormularioA;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class FormularioAType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('domicilioLegal', DomicilioLegalType::class)
            ->add('domicilioReal', DomicilioRealType::class)
            ->add('contratoSocial', ContratoSocialType::class)
            ->add('actaSocietaria', ActaSocietariaType::class)
            ->add('dni', DNIType::class)
            ->add('afip', AfipType::class)
            ->add('api', APIType::class)
            ->add('usoConformeSuelo', UsoConformeSueloType::class)
            ->add('save', SubmitType::class, ['label' => 'Guardar'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormularioA::class,
        ]);
    }

}
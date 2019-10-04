<?php
namespace AppBundle\Form\FormularioA;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioA\DomicilioLegal;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class ContratoSocialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fojaN', TextType::class, ['label' => 'Foja N°: '])
            ->add('poseeContrato', Choicetype::class, [
                'choices'  => [
                    'Si' => true,
                    'No' => false,
                    'SOCIEDAD DE HECHO' => null,
                ],
                'label' => 'Indicar si tiene contrato social'
                ])
            ->add('unipersonal', Choicetype::class, [
                'label' => 'Verificar que sea unipersonal ',
                'choices'  => [
                    'Si' => true,
                    'No' => false,
                    '' => null,
                ],
                ])
            ->add('titulares', Choicetype::class, [
                'label' => 'Verificar titulares',
                'choices'  => [
                    'COINCIDE' => true,
                    'NO COINCIDE' => false,
                    '' => null,
                ],
                ])
            ->add('vencido', Choicetype::class, [
                'label' => 'Indicar si está vencido',
                'choices'  => [
                    'Si' => true,
                    'No' => false,
                    '' => null,
                ],
                ])
            ->add('verObjSoc', Choicetype::class, [
                'label' => 'Verificar objeto de la sociedad',
                'choices'  => [
                'COINCIDE' => true,
                'NO COINCIDE' => false,
                '' => null,
               ],
                ])
           ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DomicilioLegal::class,
        ]);
    }

}
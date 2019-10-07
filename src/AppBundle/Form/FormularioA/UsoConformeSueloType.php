<?php
namespace AppBundle\Form\FormularioA;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioA\UsoConformeSuelo;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class UsoConformeSueloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usoConformeSuelo2', Choicetype::class, [
                'choices'  => [
                    'Si' => true,
                    'No' => false,
                    '' => null,
                ],
                'label' => 'Uso conforme de suelo'
                ])
            ->add('fojaN', TextType::class,['label' => 'Foja N°'])
            ->add('presentaHabilitacion', Choicetype::class, [
                'label' => 'Presenta habilitación municipal y/o comunal',
                'choices'  => [
                    'Si' => true,
                    'No' => false,
                    '' => null,
                ],
                ])
            ->add('fechaInicioHabilitacion', DateType::class, ['label' => 'Verificar Nº de partida'])
            ->add('fechaVencimiento', DateType::class, ['label' => 'Verificar N° de partida con catastro'])
            ->add('verActividad', Choicetype::class, [
                'label' => 'Verificar actividad',
                'choices'  => [
                'COINCIDE' => true,
                'NO COINCIDE' => false,
                '' => null,
                ],
                ])
                
            ->add('verLocalizacion', Choicetype::class, [
                'label' => 'Verificar localización',
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
            'data_class' => UsoConformeSuelo::class,
        ]);
    }

}
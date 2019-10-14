<?php
namespace AppBundle\Form\FormularioB;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioB\Dotacion;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class DotacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dotacionDePersonal', ChoiceType::class, ['label' => 'Dotación de Personal:',
                'choices' => [ '' => null,
                    '<15' => '<15',
                    '16-50' => '16-50',
                    '51-150' => '51-150',
                    '151-500' => '151-500',
                    '>500' => '>500',
                    ],])
            ->add('potenciaInstalada', ChoiceType::class, ['label' => 'Potencia instalada:',
                'choices' => [ '' => null,
                    '<25' => '<25',
                    '26-100' => '26-100',
                    '101-500' => '101-500',
                    '>500' => '>500',
                    ],])
            ->add('superficieCubierta', ChoiceType::class, ['label' => 'Superficie cubierta/superficie total:',
                'choices' => [ '' => null,
                    '<0.20' => '<0.20',
                    '0.21-0.50' => '0.21-0.50',
                    '0.51-0.80' => '0.51-0.80',
                    '0.81-1.00' => '0.81-1.00',
                    ],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dotacion::class,
        ]);
    }

}
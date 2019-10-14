<?php
namespace AppBundle\Form\FormularioB;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioB\Localizacion;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class LocalizacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('zonificacion', ChoiceType::class, ['label' => 'Zonificación:',
                'choices' => [ '' => null,
                    'Parque industrial' => 'Parque industrial',
                    'Industrial y rural' => 'Industrial y rural',
                    'Otros' => 'Otros',
                    'Urbana' => 'Urbana',
                    ],])
            ->add('aguaDeRed', ChoiceType::class, ['label' => 'Agua de red:',
                'choices' => [ '' => null,
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('redCloacal', ChoiceType::class, ['label' => 'Red cloacal:',
                'choices' => [ '' => null,
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('energiaElectrica', ChoiceType::class, ['label' => 'Energía electríca:',
                'choices' => [ '' => null,
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('gas', ChoiceType::class, ['label' => 'Gas:',
                'choices' => [ '' => null,
                    'Si' => true,
                    'No' => false,
                    ],
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Localizacion::class,
        ]);
    }

}
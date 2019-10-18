<?php
namespace AppBundle\Form\FormularioB;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioB\Riesgos;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;




class RiesgosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('riesgosPresuntos', ChoiceType::class, ['label' => 'Riesgos presuntos:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('acustico', ChoiceType::class, ['label' => 'Acústico:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('aparatosSometidosAPresion', ChoiceType::class, ['label' => 'Aparatos sometidos a presión:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('sustanciasQuimicas', ChoiceType::class, ['label' => 'Sustancias químicas:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('explosion', ChoiceType::class, ['label' => 'Explosión:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('incendio', ChoiceType::class, ['label' => 'Incendio:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('otrosBool', ChoiceType::class, ['label' => 'Otros:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('otrosListado', TextType::class, ['label' => 'Indicar cuales:',
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Riesgos::class,
        ]);
    }

}
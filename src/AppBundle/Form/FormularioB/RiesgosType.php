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
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('acustico', ChoiceType::class, ['label' => 'Acústico:',
                'choices' => [ '' => null,
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('aparatosSometidosAPresion', ChoiceType::class, ['label' => 'Aparatos sometidos a presión:',
                'choices' => [ '' => null,
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('sustanciasQuimicas', ChoiceType::class, ['label' => 'Sustancias químicas:',
                'choices' => [ '' => null,
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('explosion', ChoiceType::class, ['label' => 'Explosión:',
                'choices' => [ '' => null,
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('incendio', ChoiceType::class, ['label' => 'Incendio:',
                'choices' => [ '' => null,
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('otrosBool', ChoiceType::class, ['label' => 'Otros:',
                'choices' => [ '' => null,
                    'Si' => true,
                    'No' => false,
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
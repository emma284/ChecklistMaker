<?php
namespace AppBundle\Form\FormularioB;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioB\EmisionDeResiduos;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;




class EmisionDeResiduosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('residuosSolidosSemisolidos', ChoiceType::class, ['label' => 'Residuos solidos y/o semisolidos:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('rsu', ChoiceType::class, ['label' => 'RSU:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('rnp', ChoiceType::class, ['label' => 'RNP:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('tipoDeResiduo', TextType::class, ['label' => 'Tipo de residuo:',
                    ])//ver de hacer choice con los códigos
            ->add('rp', ChoiceType::class, ['label' => 'RP:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('definirCorrientesDeRP', TextType::class, ['label' => 'Definir corrientes de RP:',
                    ])//ver de hacer choice con los códigos  
            ->add('valorResiduo', NumberType::class, ['label' => 'Valor:',
                    ])
            ->add('efluentesYResiduosLiquidos', ChoiceType::class, ['label' => 'Efluentes y/o residuos líquidos:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('aguaATemperaturaAmbiente', ChoiceType::class, ['label' => 'Agua a temperatura ambiente:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('efluentesSinRP', ChoiceType::class, ['label' => 'Efluentes sin RP:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('efluentesConRP', ChoiceType::class, ['label' => 'Efluentes con RP:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('valorEfluente', TextType::class, ['label' => 'Valor:',
                    ])
            ->add('emisionesGaseosas', ChoiceType::class, ['label' => 'Emisiones gaseosas:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('componentesNaturalesDelAire', ChoiceType::class, ['label' => 'Componentes naturales del aire:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('combustionDeCombustiblesLiquidos', ChoiceType::class, ['label' => 'Combustión de combustibles líquidos:',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('noContempladosBool', ChoiceType::class, ['label' => '¿No contemplados anteriormente?',
                'choices' => [ '' => null,
                    'SI' => true,
                    'NO' => false,
                    ],])
            ->add('noContempladosListado', TextareaType::class, ['label' => 'Indique cuales:',
                    ])
            ->add('valorEmisiones', NumberType::class, ['label' => 'Valor:',
                    ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EmisionDeResiduos::class,
        ]);
    }

}
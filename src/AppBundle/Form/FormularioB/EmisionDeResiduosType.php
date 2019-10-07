<?php
namespace AppBundle\Form\FormularioB;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioB\EmisionDeResiduos;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;




class EmisionDeResiduosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('residuosSolidosSemisolidos', ChoiceType::class, ['label' => 'Residuos solidos y/o semisolidos:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('rsu', ChoiceType::class, ['label' => 'RSU:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('rnp', ChoiceType::class, ['label' => 'RNP:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('tipoDeResiduo', TextType::class, ['label' => 'Tipo de residuo:',
                    ])//ver de hacer choice con los códigos
            ->add('rp', ChoiceType::class, ['label' => 'RP:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('definirCorrientesDeRP', TextType::class, ['label' => 'Definir corrientes de RP:',
                    ])//ver de hacer choice con los códigos  
            ->add('valorResiduo', NumberType::class, ['label' => 'Valor:',
                    ])
            ->add('efluentesYResiduosLiquidos', ChoiceType::class, ['label' => 'Efluentes y/o residuos líquidos:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('aguaATemperaturaAmbiente', ChoiceType::class, ['label' => 'Agua a temperatura ambiente:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('efluentesSinRP', ChoiceType::class, ['label' => 'Efluentes sin RP:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('efluentesConRP', ChoiceType::class, ['label' => 'Efluentes con RP:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('valorEfluente', TextType::class, ['label' => 'Valor:',
                    ])
            ->add('emisionesGaseosas', ChoiceType::class, ['label' => 'Emisiones gaseosas:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('componentesNaturalesDelAire', ChoiceType::class, ['label' => 'Componentes naturales del aire:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('combustionDeCombustiblesLiquidos', ChoiceType::class, ['label' => 'Combustión de combustibles líquidos:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('noContempladosBool', ChoiceType::class, ['label' => 'Los no contemplados anteriormente:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('noContempladosListado', TextType::class, ['label' => 'Indique cuales:',
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
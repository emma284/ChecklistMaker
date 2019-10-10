<?php
namespace AppBundle\Form\FormularioB;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioB\FormularioB;
use AppBundle\Form\FormularioB\EmisionDeResiduosType;
use AppBundle\Form\FormularioB\CategoriaFinalType;
use AppBundle\Form\FormularioB\DotacionType;
use AppBundle\Form\FormularioB\LocalizacionType;
use AppBundle\Form\FormularioB\RiesgosType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class FormularioBType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estadoSoporteDigital', ChoiceType::class, ['label' => 'Estado de soporte digital:',
                'choices' => [ '' => null,
                    'COMPLETO' => 'COMPLETO',
                    'INCOMPLETO' => 'INCOMPLETO',
                    'EN BLANCO' => 'EN BLANCO',
                    'NO PRESENTA' => 'NO PRESENTA',
                    ],])
            ->add('ingresarCodigoExcel', ChoiceType::class, ['label' => 'Ingresar código en excel:',
                'choices' => [ '' => null,
                    'HECHO' => 'HECHO',
                    'NO HECHO' => 'NO HECHO',
                    ],])
            ->add('emisionDeResiduos', EmisionDeResiduosType::class)
            ->add('riesgos', RiesgosType::class)
            ->add('dotacion', DotacionType::class)
            ->add('localizacion', LocalizacionType::class)
            ->add('categoriaFinal', CategoriaFinalType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormularioB::class,
        ]);
    }

}
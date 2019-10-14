<?php
namespace AppBundle\Form\FormularioB;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioB\CategoriaFinal;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class CategoriaFinalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categoriaAsignada', ChoiceType::class, ['label' => 'Categoría asignada: ',
                'choices' => [ '' => null,
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    ],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CategoriaFinal::class,
        ]);
    }

}
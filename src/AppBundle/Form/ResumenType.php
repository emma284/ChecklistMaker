<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Resumen;
use AppBundle\Entity\Categorizacion;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Form\CategorizacionType;

class ResumenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorizacion', CategorizacionType::class, ['label' => 'Categorizacion: '])
            ->add('save', SubmitType::class, ['label' => 'Guardar'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Resumen::class,
        ]);
    }

}
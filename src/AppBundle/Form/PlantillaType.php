<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Form\FormularioB\FormularioBType;
use AppBundle\Form\FormularioA\FormularioAType;
use AppBundle\Entity\Plantilla;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PlantillaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('formularioA', FormularioAType::class)
            ->add('formularioB', FormularioBType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Plantilla::class,
        ]);
    }

}
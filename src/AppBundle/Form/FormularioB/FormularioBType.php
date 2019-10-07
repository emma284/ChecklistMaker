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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class FormularioBType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estadoSoporteDigital', TextType::class, ['label' => 'Estado de soporte digital:'])
            ->add('ingresarCodigoExcel', TextType::class, ['label' => 'Ingresar código en excel:'])
            ->add('$emisionDeResiduos', EmisionDeResiduosType::class)
            ->add('riesgos', RiesgosType::class)
            ->add('dotacion', DotacionType::class)
            ->add('localización', LocalizacionType::class)
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
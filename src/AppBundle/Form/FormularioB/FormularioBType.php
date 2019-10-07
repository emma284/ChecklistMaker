<?php
namespace AppBundle\Form\FormularioB;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioB\FormularioB;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class FormularioBType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estadoSoporteDigital', TextType::class, ['label' => 'Estado de soporte digital:'])
            ->add('ingresarCodigoExcel', TextType::class, ['label' => 'Ingresar código en excel:'])
            ->add('$emisionDeResiduos', EmisionDeResiduosType::class, ['label' => false])
            ->add('riesgos', riesgosType::class, ['label' => false])
            ->add('dotacion', dotacionType::class, ['label' => false])
            ->add('localización', localizaciónType::class, ['label' => false])
            ->add('categoriaFinal', categoriaFinalType::class, ['label' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dotacion::class,
        ]);
    }

}
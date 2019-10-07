<?php
namespace AppBundle\Form;

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
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('acustico', ChoiceType::class, ['label' => 'Acústico:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('aparatosSometidosAPresion', ChoiceType::class, ['label' => 'Aparatos sometidos a presión:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('sustanciasQuimicas', ChoiceType::class, ['label' => 'Sustancias químicas:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('explosion', ChoiceType::class, ['label' => 'Explosión:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('incendio', ChoiceType::class, ['label' => 'Incendio:',
                'choices' => [
                    'Si' => true,
                    'No' => false,
                    ],])
            ->add('otrosBool', ChoiceType::class, ['label' => 'Otros:',
                'choices' => [
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
<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use AppBundle\Entity\SubRutina;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class SubRutinaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('investigar', Choicetype::class, [
                'choices'  => [
                    'NO HECHO' => 'NO HECHO',
                    'HECHO' => 'HECHO',
                    '' => null,
                ],
                'label' => 'Inverstigar empresa:'
                ])
            ->add('existe', Choicetype::class, [
                'label' => 'Indicar si la empresa existe:',
                'choices'  => [
                    'Si' => 'Si',
                    'No' => 'No',
                    '' => null,
                ],
                ])
            ->add('estaEnPlazos', Choicetype::class, [
                'label' => 'Indicar si respondió en plazo:',
                'choices'  => [
                    'Si' => 'Si',
                    'No' => 'No',
                    '' => null,
                ],
                ])
            ->add('relocalizo', Choicetype::class, [
                'label' => 'Indicar si se relocalizó:',
                'choices'  => [
                    'Si' => 'Si',
                    'No' => 'No',
                    '' => null,
               ],
                ])
            ->add('desestima', Choicetype::class, [
                'label' => 'Se desestima por otros motivos:',
                'choices'  => [
                    'Si' => 'Si',
                    'No' => 'No',
                    '' => null,
                ],
                ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SubRutina::class,
        ]);
    }

}
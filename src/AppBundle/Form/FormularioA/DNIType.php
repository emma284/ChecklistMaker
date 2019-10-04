<?php
namespace AppBundle\Form\FormularioA;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\FormularioA\DomicilioLegal;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class DNIType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dni', Choicetype::class, [
                'choices'  => [
                    'Si' => true,
                    'No' => false,
                    '' => null,
                ],
                'label' => 'Presenta DNI titulares y/o socios'
                ])
            ->add('verDni', Choicetype::class, [
                'label' => 'Verificar DNI titulares y/o socios',
                'choices'  => [
                    'COINCIDE' => true,
                    'NO COINCIDE' => false,
                    '' => null,
                ],
                ])
            ->add('apoderado', Choicetype::class, [
                'label' => 'Indicar si tiene apoderado/s',
                'choices'  => [
                    'Si' => true,
                    'No' => false,
                    '' => null,
                ],
                ])
            ->add('verApoderado', Choicetype::class, [
                'label' => 'Verificar documentación apoderado/s',
                'choices'  => [
                'COINCIDE' => true,
                'NO COINCIDE' => false,
                '' => null,
               ],
                ])
           ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DomicilioLegal::class,
        ]);
    }

}
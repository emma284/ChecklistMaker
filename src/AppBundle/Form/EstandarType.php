<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Estandar;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class EstandarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('presentacion', Choicetype::class, [
                'choices'  => [
                    'NUEVO' => 'NUEVO',
                    'VIEJO' => 'VIEJO',
                    '' => null,
                ],
                'label' => 'Forma de presentación:'
                ])
            ->add('estado', Choicetype::class, [
                'choices'  => [
                    'ABIERTO' => 'ABIERTO',
                    'CERRADO' => 'CERRADO',
                    '' => null,
                ],
                'label' => 'Estado formulario:'
                ])
            ->add('declaraActividad', Choicetype::class, [
                'choices'  => [
                    'Si' => 'Si',
                    'No' => 'No',
                    '' => null,
                ],
                'label' => 'Indicar si declara actividad:'
                ])
            ->add('cuacm', TextType::class, ['label' => 'Definir actividad: '])
            ->add('numeroCuacm', TextType::class, ['label' => 'N° de CUACM: '])
            ->add('nombreCuacm', TextType::class, ['label' => 'Nombre de CUACM: '])
            ->add('estandar', Choicetype::class, [
                'choices'  => [
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '' => null,
                ],
                'label' => 'Estándar al que pertenece:'
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Estandar::class,
        ]);
    }

}
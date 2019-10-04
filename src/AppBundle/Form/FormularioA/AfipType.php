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



class AfipType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('constancia', Choicetype::class, [
                'choices'  => [
                    'Si' => true,
                    'No' => false,
                    '' => null,
                ],
                'label' => 'Presenta constancia de AFIP'
                ])
            ->add('fojaN', TextType::class,['label' => 'Foja N°'])
            ->add('verFechIni', Choicetype::class, [
                'label' => 'Verificar fecha de inicio',
                'choices'  => [
                    'COINCIDE' => true,
                    'NO COINCIDE' => false,
                    '' => null,
                ],
                ])
            ->add('verRazonSocial', Choicetype::class, [
                'label' => 'Verificar nombre de la razón social',
                'choices'  => [
                    'COINCIDE' => true,
                    'NO COINCIDE' => false,
                    '' => null,
                ],
                ])
            ->add('verCUIT', Choicetype::class, [
                'label' => 'Verificar N° de CUIT',
                'choices'  => [
                'COINCIDE' => true,
                'NO COINCIDE' => false,
                '' => null,
               ],
                ])
            ->add('verAct', Choicetype::class, [
                'label' => 'Verificar actividades',
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
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



class APIType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('preImpInmobiliario', Choicetype::class, [
                'choices'  => [
                    'Si' => true,
                    'No' => false,
                    '' => null,
                ],
                'label' => 'Presenta impuesto inmobiliario'
                ])
            ->add('fojaN', TextType::class,['label' => 'Foja N°'])
            ->add('formPartida', Choicetype::class, [
                'label' => 'Indicar si corresponde a un formato de N° de partida',
                'choices'  => [
                    'Si' => true,
                    'No' => false,
                    '' => null,
                ],
                ])
            ->add('verNumPartida', Choicetype::class, [
                'label' => 'Verificar Nº de partida',
                'choices'  => [
                    'COINCIDE' => true,
                    'NO COINCIDE' => false,
                    'DOMICILIO INCOMPLETO' => null,
                ],
                ])
            ->add('verPartidaCatastro', Choicetype::class, [
                'label' => 'Verificar N° de partida con catastro',
                'choices'  => [
                'COINCIDE' => true,
                'NO COINCIDE' => false,
                '' => null,
               ],
                ])
            ->add('verTitularBoleta', Choicetype::class, [
                'label' => 'Indicar si figura titular en la boleta',
                'choices'  => [
                'Si' => true,
                'No' => false,
                '' => null,
                ],
                ])
                
            ->add('verIndTitular', Choicetype::class, [
                'label' => 'Verificar iniciador con titular',
                'choices'  => [
                'COINCIDE' => true,
                'NO COINCIDE' => false,
                '' => null,
                ],
                ])
            ->add('AcreDocUsoInmueble', Choicetype::class, [
                'label' => 'Acreditar documentación de uso de inmueble',
                'choices'  => [
                'Si' => true,
                'No' => false,
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
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



class DomicilioLegalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('calle', TextType::class, ['label' => 'Calle: '])
            ->add('provincia', TextType::class, ['label' => 'Provincia: '])
            ->add('departamento', TextType::class, ['label' => 'Departamento: '])
            ->add('localidad', TextType::class, ['label' => 'Localidad: '])
            ->add('cp', TextType::class, ['label' => 'Codigo Postal: '])
            ->add('email', TextType::class, ['label' => 'Dirección email: '])
            ->add('acepEmail', ChoiceType::class, [
                'choices'  => [
                    '' => null,
                    'Si' => true,
                    'No' => false,
                ],
                'label' => 'Acepta recibir correo legal en el email'
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
<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Caratula;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class CaratulaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('expediente', TextType::class, ['label' => 'Número Expediente: '])
            ->add('razonSocial', TextType::class, ['label' => 'Razón Social: '])
            ->add('fechaIniExp', DateType::class, ['widget' => 'single_text', 'label' => 'Fecha Inicio Expediente: '])
            ->add('evaluador', TextType::class, ['label' => 'Evaluador: '])
            ->add('version', TextType::class, ['label' => 'Versión: '])
            ->add('finEval', DateType::class, ['widget' => 'single_text', 'label' => 'Fin Evaluación: '])
            ->add('iniEvaluacion', DateType::class, ['widget' => 'single_text', 'label' => 'Inicio Evaluación: '])
            ->add('diasEvaluacion', IntegerType::class, ['label' => 'Días de evaluación: '])
        //    ->add('fechaInicioExp', DateType::class, ['widget' => 'single_text', 'label' => 'Fecha Inicio Expediente: '])
        //    ->add('avance', IntegerType::class, ['label' => 'Avance: '])
        //    ->add('diasEv', TextType::class, ['label' => 'Días de Evaluación: '])
        //    ->add('comentario', TextType::class, ['label' => 'Comentarios: '])
        //    ->add('observaciones', TextType::class, ['label' => 'Observaciones: '])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Caratula::class,
        ]);
    }

}
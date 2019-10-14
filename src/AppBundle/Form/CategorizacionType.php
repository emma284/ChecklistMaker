<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Categorizacion;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class CategorizacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroExpediente', TextType::class, ['label' => 'Número Expediente: '])
            ->add('razonSocial', TextType::class, ['label' => 'Razón Social: '])
            ->add('categoria', IntegerType::class, ['label' => 'Categoria: '])
            ->add('evaluador', TextType::class, ['label' => 'Evaluador: '])
            ->add('estado', TextType::class, ['label' => 'Estado: '])
            ->add('notificacion', TextType::class, ['label' => 'Notificacion: '])
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
            'data_class' => Categorizacion::class,
        ]);
    }

}
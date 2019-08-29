<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
//use AppBundle\Entity\Seccion;
use AppBundle\Form\SeccionType;
use AppBundle\Entity\Checklist;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
//use Symfony\Component\Form\Extension\Core\Type\IntegerType;
//use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ChecklistType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, ['label' => 'Nombre del checklist: '])
            ->add('iniciador', TextType::class, ['label' => 'Iniciador: '])
            ->add('numeroExpediente', TextType::class, ['label' => 'Número de expediente: '])
            ->add('fechaInicioExpediente', DateType::class, ['label' => 'Fecha de inicio de expediente: '])
            ->add('evaluador', TextType::class, ['label' => 'Evaluador: '])
            ->add('version', TextType::class, ['label' => 'Versión: '])
            ->add('fechaInicioEvaluacion', DateType::class, ['label' => 'Fecha de inicio de evaluación: '])
            ->add('fechaFinEvaluacion', DateType::class, ['label' => 'Fecha de fin de evaluación: '])
            ->add('secciones',CollectionType::class, [
                'entry_type' => SeccionType::class,
                'entry_options' => ['label' => 'Agregue las secciones: '],
                ])
            ->add('comentarioDeEvaluador', TextAreaType::class, ['label' => 'Comentario del evaluador: '])
            ->add('save', SubmitType::class, ['label' => 'Guardar'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Checklist::class,
        ]);
    }

}
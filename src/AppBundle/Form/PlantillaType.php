<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Form\SeccionType;
use AppBundle\Entity\Plantilla;
use AppBundle\Entity\Seccion;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
//use Symfony\Component\Form\Extension\Core\Type\TextareaType;
//use Symfony\Component\Form\Extension\Core\Type\IntegerType;
//use Symfony\Component\Form\Extension\Core\Type\EmailType;

class PlantillaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('nombre', TextType::class, ['label' => 'Nombre del checklist: '])
            ->add('secciones',CollectionType::class, [
                'entry_type' => SeccionType::class,
                'entry_options' => ['label' => 'Secciones: '],
                ])
            ->add('save', SubmitType::class, ['label' => 'Guardar'])
        ;
    
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Plantilla::class,
        ]);
    }

}
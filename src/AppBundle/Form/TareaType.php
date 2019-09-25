<?php
namespace AppBundle\Form;

//Del tuto
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Tarea;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
//No del tuto
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TareaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        $builder
        ->add('nombre', TextType::class, ['label' => 'Nombre de la tarea: '])
                        
        ;        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tarea::class,
        ]);
    }
    
}
<?php
namespace AppBundle\Form;

//Del tuto
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\Seccion;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
//No del tuto
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SeccionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, ['label' => 'Nombre de sección: '])
            ->add('tareas', ChoiceType::class, ['label' => 'Tareas: '])
                        
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Seccion::class,
        ]);
    }
    
    public function tareas() : array
    {
        $items = array();
        
        //ver como agregar los elementos recuperados de la base de datos
        
        return $items;
    }

}
<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Form\SeccionType;
use AppBundle\Form\FormularioA\DomicilioLegalType;
use AppBundle\Form\FormularioA\DomicilioRealType;
use AppBundle\Form\FormularioA\ContratoSocialType;
use AppBundle\Form\FormularioA\ActaSocietariaType;
use AppBundle\Form\FormularioA\APIType;
use AppBundle\Form\FormularioA\UsoConformeDeSueloType;
use AppBundle\Form\FormularioA\DNIType;
use AppBundle\Form\FormularioA\AfipType;
use AppBundle\Entity\Plantilla;
use AppBundle\Entity\Seccion;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class PlantillaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('nombre', TextType::class, ['label' => 'Nombre del checklist: '])
            ->add('domicilioLegal', DomicilioLegalType::class)
            ->add('domicilioReal', DomicilioRealType::class)
            ->add('contratoSocial', ContratoSocialType::class)
            ->add('actaSocietaria', ActaSocietariaType::class)
            ->add('dni', DNIType::class)
            ->add('afip', AfipType::class)
            ->add('api', APIType::class)
            ->add('usoConformeDeSuelo', UsoConformeDeSueloType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Plantilla::class,
        ]);
    }

}
<?php

namespace App\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MantenimientoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nroMantenimiento')
            //->add('fechaReg')
            //->add('fechaSolucion')
            //->add('solucion')
            ->add('problema')
            ->add('tecnico')
            ->add('afiliacion')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\Mantenimiento'
        ));
    }

    public function getName()
    {
        return 'app_adminbundle_mantenimientotype';
    }
}

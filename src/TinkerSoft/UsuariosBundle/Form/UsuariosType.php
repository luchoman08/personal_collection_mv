<?php

namespace TinkerSoft\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
class UsuariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidos')
            ->add('nickname')
            ->add('correoElectronico',EmailType::class, array('label' => 'Correo Electronico: ', 'attr' => array('class' => 'form-control', 'placeholder' =>'Ej: alguien@dominio.com')))
            ->add('password')
            ->add('password')
            ->add('rol')
            ->add('estado')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TinkerSoft\UsuariosBundle\Entity\Usuarios'
        ));
    }
}

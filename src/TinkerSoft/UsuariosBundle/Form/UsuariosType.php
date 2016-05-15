<?php

namespace TinkerSoft\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
class UsuariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',TextType::class, array('label' => 'Nombres: ', 'attr' => array('class' => 'form-control')
            ->add('apellidos',TextType::class, array('label' => 'Apellidos: ', 'attr' => array('class' => 'form-control')
            ->add('nickname',TextType::class, array('label' => 'Nombre de usuario: ', 'attr' => array('class' => 'form-control')
            ->add('correoElectronico',EmailType::class, array('label' => 'Correo Electronico: ', 'attr' => array('class' => 'form-control', 'placeholder' =>'Ej: alguien@dominio.com')))
            ->add('password',PasswordType::class, array('label' => 'Contraseña: ', 'attr' => array('class' => 'form-control')))
            ->add('rol', array('label' => 'Rol: ', 'attr' => array('class' => 'form-control')
            
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

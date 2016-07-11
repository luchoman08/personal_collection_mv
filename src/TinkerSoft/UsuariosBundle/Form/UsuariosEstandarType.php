<?php

namespace TinkerSoft\UsuariosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class UsuariosEstandarType extends AbstractType
{
 /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombres', TextType::class, array('label' => 'Nombres', 'attr' =>array('class'=> 'form-control') ))
            ->add('apellidos', TextType::class, array('label' => 'Apellidos', 'attr' =>array('class'=> 'form-control') ))
            ->add('nickname', TextType::class, array('label' => 'NickName', 'attr' =>array('class'=> 'form-control') ))
            ->add('correoElectronico', EmailType::class, array('label' => 'Correo electronico', 'attr' =>array('class'=> 'form-control') ))
            ->add('password', TextType::class, array('label' => 'Contraseña', 'attr' =>array('class'=> 'form-control', 'type'=>'password') ))
           
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

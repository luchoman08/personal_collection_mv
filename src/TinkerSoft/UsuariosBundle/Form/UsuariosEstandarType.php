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
            ->add('nombres', TextType::class, array('label' => 'Nombres', 'attr' =>array('class'=> 'form-control',  'pattern' => "[a-zA-Z]+[ ]*[a-zA-Z]+", 'oninvalid'=>"setCustomValidity('Este campo solo puede contener letras')",'oninput'=>"setCustomValidity('')" ) ))
            ->add('apellidos', TextType::class, array('label' => 'Apellidos', 'attr' =>array('class'=> 'form-control',  'pattern' => "[a-zA-Z]+[ ]*[a-zA-Z]+", 'oninvalid'=>"setCustomValidity('Este campo solo puede contener letras')",'oninput'=>"setCustomValidity('')" )))
            ->add('nickname', TextType::class, array('label' => 'NickName', 'attr' =>array('class'=> 'form-control',  'pattern' => "[a-zA-Z0-9-]+" , 'oninvalid'=>"setCustomValidity('Este campo solo puede contener letras o números sin espacios')",'oninput'=>"setCustomValidity('')")))
            ->add('correoElectronico', EmailType::class, array('label' => 'Correo electronico',  'attr' =>array('class'=> 'form-control') ))
            ->add('password', PasswordType::class, array('label' => 'Contraseña', 'attr' =>array('class'=> 'form-control','type'=>'password',  'pattern' => "[a-zA-Z0-9-]+", 'oninvalid'=>"setCustomValidity('Este campo solo puede contener letras o números')",'oninput'=>"setCustomValidity('')")) )
           
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

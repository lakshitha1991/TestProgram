<?php

namespace Lak\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LoginType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username', 'text', array(
                    'attr' => array('name' => '_username',
                        'placeholder' => 'Enter user name')
                ))
                ->add('password', 'password', array(
                    'attr' => array('name' => '_password',
                        'placeholder' => 'Enter password')
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array());
    }

    /**
     * @return string
     */
    public function getName() {
        return 'login';
    }

}

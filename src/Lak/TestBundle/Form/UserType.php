<?php

namespace Lak\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lak\TestBundle\Form\BookType;

class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name')
                ->add('age')
                ->add('telephone')
                ->add('validity')
//                ->add('book', 'collection', array(
//                    'type' => new BookType(),
//                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Lak\TestBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'lak_testbundle_user';
    }

}

<?php

namespace AppBundle\Form;

/**
 * Generated by Symfonian Indonesia Admin Bundle
 * Url: https://github.com/symfonyid/adminbundle
 */

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IdNameType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', null, array(
                'attr' => array(
                    'class' => 'form-control',
                ),
            ));
    }
        /**
    * @param OptionsResolver $resolver
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\IdName'
        ));
    }
}

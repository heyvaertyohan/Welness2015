<?php

namespace WellnessCoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryServiceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('attr' => array('class' => 'form-control')))
            ->add('description', 'textarea', array('attr' => array('class' => 'form-control')))
            ->add('forward', 'checkbox', array('required' => false))
            ->add('validated','checkbox', array('required' => false))
            ->add('image', 'entity', array(
                'class' => 'WellnessCoreBundle\Entity\Image',
                'required' => false, //permet d'avoir le premier champ à vide
                'expanded' => true,
                'multiple' => true,
                'label' => 'Image',
                'property' => 'path'))
            /*->add('image', 'entity', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'label' => 'Image',
                'class' => 'WellnessCoreBundle\Entity\Image',
                'property' => 'name'))*/
            ->add('Provider')
        ;

        /*->add('image', 'entity', array(
        'class' => 'WellnessCoreBundle\Entity\Image',
        'required' => false, //permet d'avoir le premier champ à vide
        'expanded' => true, //permet d'avoir le premier champ à vide
        'multiple' => true, //permet d'avoir le premier champ à vide
        'label' => 'Image',
        'property' => 'path'))*/
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WellnessCoreBundle\Entity\CategoryService'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wellnesscorebundle_categoryservice';
    }
}

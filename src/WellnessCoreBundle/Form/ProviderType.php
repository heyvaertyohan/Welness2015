<?php

namespace WellnessCoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProviderType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('website')
            ->add('tvanumber')
            ->add('slug')
            ->add('name')
            ->add('telnumber')
            ->add('addressstreet')
            ->add('addressnumber')
            ->add('inscriptioncf')
            ->add('usertype')
            ->add('tryingnumber')
            ->add('bamed')
            ->add('password')
            ->add('email')
            ->add('categoryservice')
            ->add('favoris')
            ->add('postcode')
            ->add('locality')
            ->add('town')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WellnessCoreBundle\Entity\Provider'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wellnesscorebundle_provider';
    }
}

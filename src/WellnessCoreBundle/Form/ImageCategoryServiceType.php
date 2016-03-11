<?php

namespace WellnessCoreBundle\Form;

use Proxies\__CG__\WellnessCoreBundle\Entity\CategoryService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImageCategoryServiceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('name', 'entity',
            array('class' => 'WellnessCoreBundle\Entity\CategoryService',
                'property' => 'name','read_only' => true));
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

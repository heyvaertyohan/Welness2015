<?php

namespace WellnessCoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use WellnessCoreBundle\Entity\CategoryService;
use WellnessCoreBundle\Entity\Image;

class ImageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('position', 'choice', array(
                'choices'  => array(
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                    )))
            ->add('type', 'choice', array(
                'choices'  => array(
                    Image::TYPE_MAINSLIDER => 'mainslider',
                    Image::TYPE_IMG_PROVIDER => 'img_provider',
                    Image::TYPE_LOGO_PROVIDER => 'logo_provider',
                    Image::TYPE_SURFER => 'surfer',
                    Image::TYPE_LOGO_SERVICE => 'logo_service',
                    Image::TYPE_IMG_SERVICE => 'img_service'
                )))
            ->add('path','file', array('required' => false))
            ->add('description')
            /*->add('user')
            ->add('categoryService', new ImageCategoryServiceType())*/
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WellnessCoreBundle\Entity\Image'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wellnesscorebundle_image';
    }
}

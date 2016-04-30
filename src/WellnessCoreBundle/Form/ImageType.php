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
            ->add('name', 'text', array(
                'label' => 'Nom',
                'translation_domain' => 'messages'
            ))
            ->add('type', 'choice', array(
                'choices'  => array(
                    Image::TYPE_MAINSLIDER => 'mainslider',
                    Image::TYPE_IMG_PROVIDER => 'img_provider',
                    Image::TYPE_LOGO_PROVIDER => 'logo_provider',
                    Image::TYPE_SURFER => 'surfer',
                    Image::TYPE_LOGO_SERVICE => 'logo_service',
                    Image::TYPE_IMG_SERVICE => 'img_service'
                ),
                'translation_domain' => 'messages'
            ))
            ->add('file','file', array(
                'required' => false,
                'label' => 'Chemin acces',
                'translation_domain' => 'messages'
            ))
            ->add('alt', 'textarea', array(
                'label' => 'Description',
                'translation_domain' => 'messages'
            ))
            ->add('user', 'entity', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'translation_domain' => 'messages',
                'class' => 'WellnessCoreBundle\Entity\User',
                'property' => 'name',
                'label'=>'Utilisateur',
                'translation_domain' => 'messages'
            ))
            ->add('categoryService', 'entity', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'label' => 'Service',
                'translation_domain' => 'messages',
                'class' => 'WellnessCoreBundle\Entity\CategoryService',
                'property' => 'name'

           /* ->add('categoryService', new ImageCategoryServiceType(), array(
                'label' => false*/

            ))
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

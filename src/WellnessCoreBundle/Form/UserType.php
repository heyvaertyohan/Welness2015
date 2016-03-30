<?php

namespace WellnessCoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use WellnessCoreBundle\Entity\User;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('telnumber')
            ->add('usertype', 'choice', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'choices'  => array(
                    User::TYPE_SURFER => 'surfer',
                    User::TYPE_PROVIDER => 'provider',
                    User::TYPE_ADMIN => 'admin'
                ),
                'translation_domain' => 'messages'
            ))
            ->add('email')
            ->add('password', 'password')
            ->add('tryingnumber')
            ->add('bamed')
            ->add('addressstreet')
            ->add('addressnumber')
            ->add('postcode', 'entity', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'translation_domain' => 'Code postal',
                'class' => 'WellnessCoreBundle\Entity\Postcode',
                'property' => 'postcode',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->orderBy('p.postcode', 'ASC'); }
            ))
            ->add('town', 'entity', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'translation_domain' => 'Commune',
                'class' => 'WellnessCoreBundle\Entity\Town',
                'property' => 'town',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.town', 'ASC'); }
            ))
            ->add('locality', 'entity', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'translation_domain' => 'Localité',
                'class' => 'WellnessCoreBundle\Entity\Locality',
                'property' => 'locality',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->orderBy('l.locality', 'ASC'); }
            ))
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WellnessCoreBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wellnesscorebundle_user';
    }
}

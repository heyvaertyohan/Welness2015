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
            ->add('username', 'text', array(
                'label' => 'Nom utilisateur',
                'translation_domain' => 'messages'
            ))
            ->add('telnumber', 'text', array(
                'label' => 'Numéro téléphone',
                'translation_domain' => 'messages'
            ))
            ->add('usertype', 'choice', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'choices'  => array(
                    User::TYPE_SURFER => 'surfer',
                    User::TYPE_PROVIDER => 'provider',
                    User::TYPE_ADMIN => 'admin'
                ),
                'translation_domain' => 'messages',
                'label' => 'Type utilisateur'
            ))
            ->add('email', 'text', array(
                'label' => 'Email',
                'translation_domain' => 'messages'
            ))
            ->add('password', 'repeated', array(
                'required' => false,
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('addressstreet', 'text', array(
                'label' => 'Rue',
                'translation_domain' => 'messages'
            ))
            ->add('addressnumber', 'integer', array(
                'label' => 'Numéro',
                'translation_domain' => 'messages'
            ))
            ->add('postcode', 'entity', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'label' => "Code postal",
                'translation_domain' => 'messages',
                'class' => 'WellnessCoreBundle\Entity\Postcode',
                'property' => 'postcode',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->orderBy('p.postcode', 'ASC'); }
            ))
            ->add('town', 'entity', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'translation_domain' => 'messages',
                'label' => 'Commune',
                'class' => 'WellnessCoreBundle\Entity\Town',
                'property' => 'town',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.town', 'ASC'); }
            ))
            ->add('locality', 'entity', array(
                'required' => false, //permet d'avoir le premier champ à vide
                'translation_domain' => 'messages',
                'label' => 'Localité',
                'class' => 'WellnessCoreBundle\Entity\Locality',
                'property' => 'locality',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('l')
                        ->orderBy('l.locality', 'ASC'); }
            ))
            /*->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) {
                $user = $event->getData();
                if($user->getId()){
                    $form = $event->getForm();
                    switch($user->getType()){
                        case 'ROLE_USER' :
                        case 'ROLE_SURFER' :
                            $formProperty = 'surfer';
                            $formType = new SurferType();
                            break;
                        case 'ROLE_PROVIDER':
                            $formProperty = 'provider';
                            $formType = new ProviderType();
                            break;
                    }
                    $form->add($formProperty, $formType);
                }
            });*/
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

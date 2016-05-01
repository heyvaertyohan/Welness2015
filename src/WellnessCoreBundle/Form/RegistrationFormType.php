<?php

namespace WellnessCoreBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use WellnessCoreBundle\Entity\User;

class RegistrationFormType extends BaseType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		// add your custom field
		$builder->add('usertype', 'choice', array(
		'choices'  => array(
			User::TYPE_PROVIDER => User::TYPE_PROVIDER,
			User::TYPE_SURFER => User::TYPE_SURFER
		)));

		parent::buildForm($builder, $options);
	}

	public function getName()
	{
		return 'my_user_registration';
	}
}
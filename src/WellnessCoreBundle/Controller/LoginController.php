<?php

namespace WellnessCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function signinAction()
    {
        return $this->render('WellnessCoreBundle:Login:signin.html.twig');
    }

    public function signupAction()
    {
        return $this->render('WellnessCoreBundle:Login:signup.html.twig');
    }
}

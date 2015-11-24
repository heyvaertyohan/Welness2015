<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function listAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/User:list.html.twig');
    }

    public function showAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/User:show.html.twig');
    }

    public function disableAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/User:disable.html.twig');
    }
}

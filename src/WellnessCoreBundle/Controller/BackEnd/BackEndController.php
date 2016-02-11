<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackEndController extends Controller
{
    public function indexAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd:index.html.twig');
    }
}

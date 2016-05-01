<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackEndController extends Controller
{
    public function indexAction()
    {
        $currentuser = $this->get('security.context')->getToken()->getUser();
        return $this->render('WellnessCoreBundle:BackEnd:index.html.twig', array(
            'currentuser' => $currentuser
        ));
    }
}

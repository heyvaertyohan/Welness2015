<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use WellnessCoreBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function listAction()
    {
        $listUsers = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:User')->findAll();

        if ($listUsers == null) {
            throw $this->createNotFoundException("Pas d'utilisateur trouv� !");
        }

        return $this->render('WellnessCoreBundle:BackEnd/User:list.html.twig', array(
            'listUsers' => $listUsers
        ));
    }

    public function showAction(User $user)
    {
        $myuser = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:User')->find($user->getId());

        if ($myuser->getUsertype() == "surfer")
        {
            $fileName = 'WellnessCoreBundle:BackEnd/User:showSurfer.html.twig';
        }
        else{
            $fileName = 'WellnessCoreBundle:BackEnd/User:showProvider.html.twig';
        }

        return $this->render($fileName, array(
            'user' => $user
        ));
    }

    public function createAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/User:create.html.twig');
    }

    public function disableAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/User:disable.html.twig');
    }
}

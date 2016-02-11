<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserProfileController extends Controller
{
    public function showProfilAction()
    {
        return $this->render('WellnessCoreBundle:FrontEnd/UserProfile:showprofil.html.twig');
    }

    public function addtofavoriteAction()
    {
        return $this->render('WellnessCoreBundle:FrontEnd/UserProfile:addtofavorite.html.twig');
    }

    public function editAction()
    {
        return $this->render('WellnessCoreBundle:FrontEnd/UserProfile:edit.html.twig');
    }

    public function publishcommentAction()
    {
        return $this->render('WellnessCoreBundle:FrontEnd/UserProfile:publishcomment.html.twig');
    }

    public function updateAction()
    {
        return $this->render('WellnessCoreBundle:FrontEnd/UserProfile:update.html.twig');
    }
}

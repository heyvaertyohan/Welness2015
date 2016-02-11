<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommentController extends Controller
{
    public function listAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Comment:list.html.twig');
    }

    public function showAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Comment:show.html.twig');
    }

    public function createAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Comment:create.html.twig');
    }

    public function updateAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Comment:update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Comment:delete.html.twig');
    }
}

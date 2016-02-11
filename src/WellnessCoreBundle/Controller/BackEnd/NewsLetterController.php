<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsLetterController extends Controller
{
    public function listAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/NewsLetter:list.html.twig');
    }

    public function showAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/NewsLetter:show.html.twig');
    }

    public function createAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/NewsLetter:create.html.twig');
    }

    public function updateAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/NewsLetter:update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/NewsLetter:delete.html.twig');
    }
}

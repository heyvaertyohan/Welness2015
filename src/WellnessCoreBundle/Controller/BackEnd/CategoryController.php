<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function listAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:list.html.twig');
    }

    public function showAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:show.html.twig');
    }

    public function createAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:create.html.twig');
    }

    public function updateAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:delete.html.twig');
    }
}

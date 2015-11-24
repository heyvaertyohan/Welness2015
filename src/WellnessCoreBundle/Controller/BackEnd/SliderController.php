<?php

namespace WellnessCoreBundle\Controller\BackEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SliderController extends Controller
{
    public function listAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Slider:list.html.twig');
    }

    public function showAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Slider:show.html.twig');
    }

    public function createAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Slider:create.html.twig');
    }

    public function updateAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Slider:update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Slider:delete.html.twig');
    }

    public function uploadAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Slider:upload.html.twig');
    }
}

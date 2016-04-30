<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WellnessCoreBundle\Entity\Training;

class TrainingController extends FrontEndController
{
    public function indexAction()
    {
        parent::initFrontEnd();

        $listTrainings = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:Training')->findAll();

        /*$listTrainings = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:Training')->findBy([], ['name' => 'DESC']);*/

        if ($listTrainings == null) {
            throw $this->createNotFoundException("Pas de stage trouvé !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/Training:index.html.twig', array(
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'listImagesSlider' => $this->getListImageSlider(),
            'listTrainings' => $listTrainings,

        ));
    }

    public function showAction(Training $training)
    {
        parent::initFrontEnd();

        $CurrentTraining = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:Training')->findOneBy(array('id' => $training->getId()));

        if ($CurrentTraining == null) {
            throw $this->createNotFoundException("Pas de stage trouvé !");
        }

        dump($CurrentTraining);

        return $this->render('WellnessCoreBundle:FrontEnd/Training:show.html.twig', array(
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'listImagesSlider' => $this->getListImageSlider(),
            'CurrentTraining' => $CurrentTraining
        ));
    }
}

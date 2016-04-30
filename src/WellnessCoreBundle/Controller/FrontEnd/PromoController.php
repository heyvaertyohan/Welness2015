<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WellnessCoreBundle\Entity\Promotion;

class PromoController extends FrontEndController
{
    public function indexAction()
    {
        parent::initFrontEnd();

        $listPromotions = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:Promotion')->findAll();

        if ($listPromotions == null) {
            throw $this->createNotFoundException("Pas de stage trouvé !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/Promotion:index.html.twig', array(
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'listImagesSlider' => $this->getListImageSlider(),
            'listPromotions' => $listPromotions

        ));
    }

    public function showAction(Promotion $promotion)
    {
        parent::initFrontEnd();

        $CurrentPromotion= $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:Promotion')->findOneBy(array('id' => $promotion->getId()));

        if ($CurrentPromotion == null) {
            throw $this->createNotFoundException("Pas de promotion trouvée !");
        }

        dump($CurrentPromotion);

        return $this->render('WellnessCoreBundle:FrontEnd/Promotion:show.html.twig', array(
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'listImagesSlider' => $this->getListImageSlider(),
            'CurrentPromotion' => $CurrentPromotion
        ));
    }
}

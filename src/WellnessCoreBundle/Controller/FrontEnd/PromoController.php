<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PromoController extends Controller
{
    public function listAction()
    {
        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $listImagesSlider = $rep_img->findBy(array('type' => 'mainSlider'));
        $listPromotions = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:Promotion')->findAll();

        $listCategories = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:CategoryService')->findAll();

        if ($listImagesSlider == null) {
            throw $this->createNotFoundException("Pas d'image trouvée !");
        }

        if ($listCategories == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        if ($listPromotions == null) {
            throw $this->createNotFoundException("Pas de stage trouvé !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd:promo.html.twig', array(
            'listPromotions' => $listPromotions,
            'listCategories' => $listCategories,
            'listImagesSlider' => $listImagesSlider
        ));
    }
}

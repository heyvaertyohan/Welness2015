<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WellnessCoreBundle\Entity\CategoryService;
use WellnessCoreBundle\Entity\Image;

class HomeController extends FrontEndController
{
    public function indexAction()
    {
        parent::initFrontEnd();

        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');

        $repo_service = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:CategoryService');
        $monthService = $repo_service->findOneBy(
            array("forward" => "1")
        );

        $imgMonthService = $rep_img->findOneBy(array('categoryService' =>$monthService->getId()));

        $listLastNews = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:News')->getListNews(2);
        $listLastTraining = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:Training')->getLastListTrainings(4);
        $listLastPromotions = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:Promotion')->getLastListPromotions(4);

        if ($monthService == null) {
            throw $this->createNotFoundException("Pas de service du mois trouvé !");
        }

        if ($imgMonthService == null) {
            throw $this->createNotFoundException("Pas de service du mois trouvé !");
        }

        if ($listLastNews == null) {
            throw $this->createNotFoundException("Pas de news trouvée !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/Home:index.html.twig', array(
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'listImagesSlider' => $this->getListImageSlider(),
            'listProvidersWithLogo' => $this->getListProviderWithLogo(),
            'imgMonthService' => $imgMonthService,
            'monthService' => $monthService,
            'listLastNews' => $listLastNews,
            'listLastTraining' => $listLastTraining,
            'listLastPromotions' => $listLastPromotions
        ));
    }

}

<?php

namespace WellnessCoreBundle\Controller\FrontEnd;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WellnessCoreBundle\Entity\News;

class NewsController extends FrontEndController
{
    public function indexAction()
    {
        parent::initFrontEnd();

        $listLastNews = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:News')->getListNews(2);

        if ($listLastNews == null){
            throw $this->createNotFoundException("Pas de news trouvée!");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/News:index.html.twig', array(
            'listImagesSlider' => $this->getListImageSlider(),
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'entities' => $listLastNews
        ));
    }

    /**
     * Finds and displays a News entity.
     *
     */
    public function showAction(News $news)
    {
        parent::initFrontEnd();

        $em = $this->getDoctrine()->getManager();

        $CurrentNews = $em->getRepository('WellnessCoreBundle:News')->find($news->getId());

        if (!$CurrentNews) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        return $this->render('WellnessCoreBundle:FrontEnd/News:show.html.twig', array(
            'listImagesSlider' => $this->getListImageSlider(),
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'CurrentNews'      => $CurrentNews
        ));
    }
}

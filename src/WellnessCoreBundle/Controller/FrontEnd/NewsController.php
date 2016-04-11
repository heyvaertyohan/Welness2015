<?php

namespace WellnessCoreBundle\Controller\FrontEnd;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WellnessCoreBundle\Entity\News;

class NewsController extends FrontEndController
{
    public function indexAction()
    {
        $listLastNews = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:News')->getListNews(2);

        if ($listLastNews == null){
            throw $this->createNotFoundException("Pas de news trouvée!");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/News:index.html.twig', array(
            'listLastNews' => $listLastNews,
        ));
    }

    /**
     * Finds and displays a News entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WellnessCoreBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        return $this->render('WellnessCoreBundle:FrontEnd/News:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}

<?php

namespace WellnessCoreBundle\Controller\FrontEnd;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use WellnessCoreBundle\Entity\News;

/**
 * News controller.
 *
 */
class NewsController extends Controller
{

    /**
     * Lists all News entities.
     *
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WellnessCoreBundle:News')->findAll();

        return $this->render('WellnessCoreBundle:FrontEnd/News:list.html.twig', array(
            'entities' => $entities,
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

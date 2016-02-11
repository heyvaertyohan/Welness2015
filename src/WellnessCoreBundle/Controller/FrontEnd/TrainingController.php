<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WellnessCoreBundle\Entity\Training;

class TrainingController extends Controller
{
    public function listAction()
    {
        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $listImagesSlider = $rep_img->findBy(array('type' => 'mainSlider'));
        $listTrainings = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:Training')->findAll();

        $listCategories = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:CategoryService')->findAll();

        if ($listImagesSlider == null) {
            throw $this->createNotFoundException("Pas d'image trouvée !");
        }

        if ($listCategories == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        if ($listTrainings == null) {
            throw $this->createNotFoundException("Pas de stage trouvé !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd:training.html.twig', array(
            'listTrainings' => $listTrainings,
            'listCategories' => $listCategories,
            'listImagesSlider' => $listImagesSlider
        ));
    }

    public function showAction(Training $training)
    {
        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $listImagesSlider = $rep_img->findBy(array('type' => 'mainSlider'));
        $listCategories = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:CategoryService')->findAll();

        $CurrentCategory = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:CategoryService')->find($training->getId());
        $ListImgProviderCurrentCateg = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Provider')->find($training->getId());

        $CurrentLogoCategory = $rep_img->findOneBy(array('categoryService' => $training->getId()));

        if ($listImagesSlider == null) {
            throw $this->createNotFoundException("Pas d'image trouvée !");
        }

        if ($listCategories == null) {
            throw $this->createNotFoundException("Pas de liste de categories trouvée !");
        }

        if ($CurrentCategory == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        if ($CurrentLogoCategory == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/Category:show.html.twig', array(
            'listCategories' => $listCategories,
            'listImagesSlider' => $listImagesSlider,
            'monthService' => null,
            'CurrentCategory' => $CurrentCategory,
            'CurrentLogoCategory' => $CurrentLogoCategory
        ));
    }
}

<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WellnessCoreBundle\Entity\CategoryService;
use WellnessCoreBundle\Entity\Image;

class CategoryController extends FrontEndController
{
    public function indexAction()
    {
        parent::initFrontEnd();

        return $this->render('WellnessCoreBundle:FrontEnd/Category:index.html.twig', array(
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'listImagesSlider' => $this->getListImageSlider()
        ));
    }

    public function showAction(CategoryService $categoryService)
    {
        parent::initFrontEnd();

        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $CurrentLogoCategory = $rep_img->findOneBy(array('categoryService' => $categoryService->getId()));

        if ($CurrentLogoCategory == null) {
            throw $this->createNotFoundException("Pas de logo categorie trouvé !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/Category:show.html.twig', array(
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'listImagesSlider' => $this->getListImageSlider(),
            'CurrentLogoCategory' => $CurrentLogoCategory
        ));
    }

    public function searchAction()
    {
        return $this->render('WellnessCoreBundle:FrontEnd/Category:search.html.twig');
    }
}

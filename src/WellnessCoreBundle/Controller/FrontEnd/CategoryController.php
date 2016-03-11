<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WellnessCoreBundle\Entity\CategoryService;
use WellnessCoreBundle\Entity\Image;

class CategoryController extends Controller
{
    public function listAction()
    {
        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $listImagesSlider = $rep_img->findBy(array('type' => 'mainSlider'));
        $listCategoryWithLogo = $rep_img->getListImages(5, Image::TYPE_LOGO_SERVICE, null);

        $listCategories = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:CategoryService')->findAll();

        if ($listImagesSlider == null) {
            throw $this->createNotFoundException("Pas d'image trouvée !");
        }

        if ($listCategories == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        if ($listCategoryWithLogo == null) {
            throw $this->createNotFoundException("Pas de logo prestataire trouvé !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/Category:list.html.twig', array(
            'listCategoryWithLogo' => $listCategoryWithLogo,
            'listCategories' => $listCategories,
            'listImagesSlider' => $listImagesSlider
        ));
    }

    public function showAction(CategoryService $categoryService)
    {
        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $listImagesSlider = $rep_img->findBy(array('type' => 'mainSlider'));
        $listCategories = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:CategoryService')->findAll();

        $CurrentCategory = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:CategoryService')->find($categoryService->getId());

        $ListImgProviderCurrentCateg = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Provider')->find($categoryService->getId());

        $CurrentLogoCategory = $rep_img->findOneBy(array('categoryService' => $categoryService->getId()));

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

    public function searchAction()
    {
        return $this->render('WellnessCoreBundle:FrontEnd/Category:search.html.twig');
    }
}

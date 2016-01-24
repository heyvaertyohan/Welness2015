<?php

namespace WellnessCoreBundle\Controller\BackEnd;

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

        return $this->render('WellnessCoreBundle:BackEnd/Category:list.html.twig', array(
            'listCategoryWithLogo' => $listCategoryWithLogo,
            'listCategories' => $listCategories,
            'listImagesSlider' => $listImagesSlider
        ));
    }

    public function showAction(CategoryService $categoryService)
    {
        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $CategoryWithLogo = $rep_img->getImage($categoryService->getId());
        $CurrentCategory = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:CategoryService')->find($categoryService->getId());

        if ($CurrentCategory == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        if ($CategoryWithLogo == null) {
            throw $this->createNotFoundException("Pas de logo service trouvé !");
        }

        return $this->render('WellnessCoreBundle:BackEnd/Category:show.html.twig', array(
            'CategoryWithLogo' => $CategoryWithLogo,
            'CurrentCategory' => $CurrentCategory
        ));
    }

    public function createAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:create.html.twig');
    }

    public function updateAction(CategoryService $categoryService)
    {
        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $CategoryWithLogo = $rep_img->getImage($categoryService->getId());
        $CurrentCategory = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:CategoryService')->find($categoryService->getId());

        if ($CurrentCategory == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        if ($CategoryWithLogo == null) {
            throw $this->createNotFoundException("Pas de logo service trouvé !");
        }

        return $this->render('WellnessCoreBundle:BackEnd/Category:update.html.twig', array(
            'CategoryWithLogo' => $CategoryWithLogo,
            'CurrentCategory' => $CurrentCategory
        ));
    }

    public function deleteAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:delete.html.twig');
    }
}

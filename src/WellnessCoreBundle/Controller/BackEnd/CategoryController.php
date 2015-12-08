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

    public function showAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:show.html.twig');
    }

    public function createAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:create.html.twig');
    }

    public function updateAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:update.html.twig');
    }

    public function deleteAction()
    {
        return $this->render('WellnessCoreBundle:BackEnd/Category:delete.html.twig');
    }
}

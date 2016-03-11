<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WellnessCoreBundle\Entity\Image;

class FrontEndController extends Controller
{
    public function indexAction()
    {
        $repo_service = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:CategoryService');
        $listCategories = $repo_service->findAll();
        $monthService = $repo_service->findOneBy(
            array("forward" => "1")
        );

        $repo_img = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:Image');
        $listImagesSlider = $repo_img->findBy(array('type' => 'mainSlider'));
        $imgMonthService = $repo_img->findOneBy(array('categoryService' =>$monthService->getId()));
        $listProvidersWithLogo = $repo_img->getListImages(4, Image::TYPE_LOGO_PROVIDER, null);

        if ($listImagesSlider == null) {
            throw $this->createNotFoundException("Pas d'image trouvée !");
        }

        if ($listCategories == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        if ($monthService == null) {
            throw $this->createNotFoundException("Pas de service du mois trouvé !");
        }

        if ($listProvidersWithLogo == null) {
            throw $this->createNotFoundException("Pas d'image prestataire trouvée !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd:index.html.twig', array(
            'listProvidersWithLogo' => $listProvidersWithLogo,
            'listCategories' => $listCategories,
            'listImagesSlider' => $listImagesSlider,
            'monthService' => $monthService,
            'imgMonthService' => $imgMonthService
        ));
    }

    public function aboutAction()
    {
        return $this->render('WellnessCoreBundle:FrontEnd:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('WellnessCoreBundle:FrontEnd:contact.html.twig');
    }

    public function redirectAction()
    {
        $prefLang = $this->getRequest()->getPreferredLanguage(array("fr", "en"));
        return $this->redirect($this->generateUrl("public_homepage", array("_locale" => $prefLang ? $prefLang : "en")));
    }

    public function translationAction()
    {
        return $this->render('WellnessCoreBundle:FrontEnd:translation.html.twig');
    }
}

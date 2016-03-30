<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WellnessCoreBundle\Entity\Provider;
use WellnessCoreBundle\Entity\Image;
use WellnessCoreBundle\Form\ProviderType;

class ProviderController extends FrontEndController
{
    public function listAction()
    {
        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $listImagesSlider = $rep_img->findBy(array('type' => 'mainSlider'));
        $listProvidersWithLogo = $rep_img->getListImages(5, Image::TYPE_LOGO_PROVIDER, null);

        $listCategories = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:CategoryService')->findAll();

        if ($listImagesSlider == null) {
            throw $this->createNotFoundException("Pas d'image trouvée !");
        }

        if ($listCategories == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        if ($listProvidersWithLogo == null) {
            throw $this->createNotFoundException("Pas de logo prestataire trouvé !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/Provider:list.html.twig', array(
            'listProvidersWithLogo' => $listProvidersWithLogo,
            'listCategories' => $listCategories,
            'listImagesSlider' => $listImagesSlider
        ));
    }

    public function showAction(Provider $provider)
    {
        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $listImagesSlider = $rep_img->findBy(array('type' => 'mainSlider'));
        $listProvidersWithLogo = $rep_img->getListImages(5, Image::TYPE_LOGO_PROVIDER, null);
        $listProvidersWithImg = $rep_img->getListImages(0, Image::TYPE_IMG_PROVIDER, null);
        dump($listProvidersWithImg);
        $listCategories = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:CategoryService')->findAll();

        $CurrentImgProvider = $rep_img->findBy(array('user' => $provider->getId()));
        $rep_training = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Training');
        $CurrentTrainingProvider = $rep_training->findBy(array('provider' => $provider->getId()));
        $CurrentPromotionProvider = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Promotion')->findBy(array('provider' => $provider->getId()));
        $CurrentCommentProvider = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Comment')->findBy(array('provider' => $provider->getId()));
        $CurrentProvider = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Provider')->find($provider->getId());

        if ($listImagesSlider == null) {
            throw $this->createNotFoundException("Pas d'image trouvée !");
        }

        if ($listCategories == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        if ($listProvidersWithLogo == null) {
            throw $this->createNotFoundException("Pas de logo prestataire trouvé !");
        }

        if ($listProvidersWithImg == null) {
            throw $this->createNotFoundException("Pas d'image prestataire trouvée !");
        }


        if($CurrentProvider == null){
            throw $this->createNotFoundException("Pas de fournisseur trouvé!!");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/Provider:show.html.twig', array(
            'listProvidersWithLogo' => $listProvidersWithLogo,
            'listProvidersWithImg' =>$listProvidersWithImg,
            'listCategories' => $listCategories,
            'listImagesSlider' => $listImagesSlider,
            'CurrentProvider' => $CurrentProvider,
            'CurrentImgProvider' => $CurrentImgProvider,

            'CurrentTrainingProvider' => $CurrentTrainingProvider,
            'CurrentPromotionProvider' => $CurrentPromotionProvider,
            'CurrentCommentProvider' => $CurrentCommentProvider,
            'monthService' => null
        ));
    }

    public function searchAction()
    {
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {

            $expression = $request->get('search');
            $services = $this->getDoctrine()
                ->getManager()
                ->getRepository('WellnessCoreBundle:CategoryService')
                ->getServiceByExpression($expression);
        }
        return $this->render('WellnessAnnuaireBundle:Search:show.html.twig', array(
            'expression' => $expression,
            'services' => $services,
        ));
    }
}

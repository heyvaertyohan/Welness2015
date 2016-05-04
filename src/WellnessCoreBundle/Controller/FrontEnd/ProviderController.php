<?php

namespace WellnessCoreBundle\Controller\FrontEnd;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WellnessCoreBundle\Entity\Provider;
use WellnessCoreBundle\Entity\Image;
use WellnessCoreBundle\Form\ProviderType;

class ProviderController extends FrontEndController
{
    public function indexAction()
    {
        parent::initFrontEnd();

        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $listProvidersWithLogo = $rep_img->getListImages(5, Image::TYPE_LOGO_PROVIDER, null);

        if ($listProvidersWithLogo == null) {
            throw $this->createNotFoundException("Pas de logo prestataire trouvé !");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/Provider:index.html.twig', array(
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'listImagesSlider' => $this->getListImageSlider(),
            'listProvidersWithLogo' => $listProvidersWithLogo
        ));
    }

    public function showAction(Provider $provider)
    {
        parent::initFrontEnd();

        $rep_img = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Image');
        $listImagesSlider = $rep_img->findBy(array('type' => 'mainSlider'));
        $listProvidersPave = $rep_img->getListImages(5, Image::TYPE_LOGO_PROVIDER, null);
        $listCategories = $this->getDoctrine()->getEntityManager()->getRepository('WellnessCoreBundle:CategoryService')->findAll();

        $CurrentImgProvider = $rep_img->findBy(array('user' => $provider->getId()));
        $rep_training = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Training');
        $CurrentTrainingProvider = $rep_training->findBy(array('provider' => $provider->getId()));
        $CurrentPromotionProvider = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Promotion')->findBy(array('provider' => $provider->getId()));
        $CurrentCommentProvider = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Comment')->findBy(array('provider' => $provider->getId()));
        $CurrentProvider = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Provider')->find($provider->getId());

        $ListImgSliderCurrentProvider = $rep_img->findBy(array('user' => $provider->getId(), 'type' => Image::TYPE_IMG_PROVIDER));

        if ($listImagesSlider == null) {
            throw $this->createNotFoundException("Pas d'image trouvée !");
        }

        if ($listCategories == null) {
            throw $this->createNotFoundException("Pas de categorie trouvée !");
        }

        if ($listProvidersPave == null) {
            throw $this->createNotFoundException("Pas de logo prestataire trouvé !");
        }

        if($CurrentProvider == null){
            throw $this->createNotFoundException("Pas de fournisseur trouvé!!");
        }

        return $this->render('WellnessCoreBundle:FrontEnd/Provider:show.html.twig', array(
            'listCategoryWithLogo' => $this->getListCategoryWithLogo(),
            'listImagesSlider' => $this->getListImageSlider(),

            'listProvidersPave' => $listProvidersPave,
            'ListImgSliderCurrentProvider' =>$ListImgSliderCurrentProvider,

            'CurrentProvider' => $CurrentProvider,
            'CurrentImgProvider' => $CurrentImgProvider,
            'CurrentTrainingProvider' => $CurrentTrainingProvider,
            'CurrentPromotionProvider' => $CurrentPromotionProvider,
            'CurrentCommentProvider' => $CurrentCommentProvider,
        ));
    }

    /*public function searchAction()
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
    }*/

    public function searchAction()
    {
        parent::initFrontEnd();

        $rep_provider = $this->getDoctrine()->getManager()->getRepository('WellnessCoreBundle:Provider');

        dump($_REQUEST['searchCategory']);
        $ListProvider =
            $rep_provider->SearchProvider
            (
                $_REQUEST['searchName'],
                $_REQUEST['searchCategory'],
                $_REQUEST['searchLocality']
            );

        return $this->render('WellnessCoreBundle:FrontEnd/Provider:search.html.twig', array(
            'listProvider' => $ListProvider,
            'listImagesSlider' => $this->getListImageSlider()
        ));
    }
}

<?php
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WellnessCoreBundle\Entity\Image;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
/**
 * Description of Image
 *
 * @author jHeyvaert
 */
class Images extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $tab_Images = array(
            array(
                "position" => "1",
                "type" => Image::TYPE_MAINSLIDER,
                "description" => "Sante bien être image 1",
                "path" => "bundles/wellnesscore/img/slider_therme_01.jpg",
                "user" => null,
                "service" => null,
            ),
            array(
                "position" => "2",
                "type" => Image::TYPE_MAINSLIDER,
                "description" => "Sante bien être image 2",
                "path" => "bundles/wellnesscore/img/slider_therme_02.jpg",
                "user" => null,
                "service" => null,
            ),
            array(
                "position" => "3",
                "type" => Image::TYPE_MAINSLIDER,
                "description" => "Sante bien être image 3",
                "path" => "bundles/wellnesscore/img/slider_therme_03.jpg",
                "user" => null,
                "service" => null,
            ),
            array(
                "position" => "1",
                "type" => Image::TYPE_LOGO_PROVIDER,
                "description" => "logo Vague à Lame",
                "path" => "bundles/wellnesscore/img/logoVagueLame.jpg",
                "user" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Vague à Lame')),
                "service" => null,
            ),
            array(
                "position" => "1",
                "type" => Image::TYPE_LOGO_PROVIDER,
                "description" => "logo Audrey Bio Beauté",
                "path" => "bundles/wellnesscore/img/logoAudreyBioBeauté.jpg",
                "user" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Audrey Bio Beauté')),
                "service" => null,
            ),
            array(
                "position" => "1",
                "type" => Image::TYPE_LOGO_PROVIDER,
                "description" => "logo therme de spa",
                "path" => "bundles/wellnesscore/img/logo_spa.jpg",
                "user" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
                "service" => null,
            ),
            array(
                "position" => "1",
                "type" => Image::TYPE_LOGO_PROVIDER,
                "description" => "logo Instant Beauté",
                "path" => "bundles/wellnesscore/img/logoInstantBeauté.jpg",
                "user" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Instant Beauté')),
                "service" => null,
            ),
            array(
                "position" => "1",
                "type" => Image::TYPE_LOGO_PROVIDER,
                "description" => "logo Institut Viviane",
                "path" => "bundles/wellnesscore/img/logoInstitutViviane.png",
                "user" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "service" => null,
            ),
            array(
                "position" => "0",
                "type" => Image::TYPE_LOGO_SERVICE,
                "description" => "Service solarium logo",
                "path" => "bundles/wellnesscore/img/logo_solarium.jpg",
                "user" => null,
                "service" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Solarium'))
            ),
            array(
                "position" => "0",
                "type" => Image::TYPE_LOGO_SERVICE,
                "description" => "Service solarium logo",
                "path" => "bundles/wellnesscore/img/logo_pedicure.jpg",
                "user" => null,
                "service" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Pedicure'))
            ),
            array(
                "position" => "0",
                "type" => Image::TYPE_LOGO_SERVICE,
                "description" => "Service solarium logo",
                "path" => "bundles/wellnesscore/img/logo_epilation.jpg",
                "user" => null,
                "service" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Epilation'))
            ),
            array(
                "position" => "0",
                "type" => Image::TYPE_LOGO_SERVICE,
                "description" => "Service solarium logo",
                "path" => "bundles/wellnesscore/img/logo_sauna.jpg",
                "user" => null,
                "service" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Sauna'))
            ),
            array(
                "position" => "0",
                "type" => Image::TYPE_LOGO_SERVICE,
                "description" => "Service solarium logo",
                "path" => "bundles/wellnesscore/img/logo_hammam.jpg",
                "user" => null,
                "service" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Hammam'))
            ),
            array(
                "position" => "1",
                "type" => Image::TYPE_IMG_PROVIDER,
                "description" => "Institut Viviane image 1",
                "path" => "bundles/wellnesscore/img/institutViviane_01.jpg",
                "user" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "service" => null
            ),
            array(
                "position" => "2",
                "type" => Image::TYPE_IMG_PROVIDER,
                "description" => "Institut Viviane image 2",
                "path" => "bundles/wellnesscore/img/institutViviane_02.jpg",
                "user" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "service" => null
            ),
            array(
                "position" => "3",
                "type" => Image::TYPE_IMG_PROVIDER,
                "description" => "Institut Viviane image 3",
                "path" => "bundles/wellnesscore/img/institutViviane_03.jpg",
                "user" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "service" => null
            ),
        );

        for($i=0; $i< sizeof($tab_Images); $i++ ){
            $image = new Image();
            $image->setDescription($tab_Images[$i]['description']);
            $image->setPath($tab_Images[$i]['path']);
            $image->setPosition($tab_Images[$i]['position']);
            $image->setType($tab_Images[$i]['type']);
            $image->setUser($tab_Images[$i]['user']);
            $image->setCategoryService($tab_Images[$i]['service']);

            $manager->persist($image);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 8;
    }
    
}

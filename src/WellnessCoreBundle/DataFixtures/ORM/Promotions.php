<?php
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WellnessCoreBundle\Entity\Promotion;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

/**
 * Description of Categoryservices
 *
 * @author jHeyvaert
 */
class Promotions extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tab_Promotion = array(
            array(
                'name' => 'promotion 1',
                'description' => 'description promotion 1',
                'pdf' => 'pdf promotion 18',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Solarium')),
            ),
            array(
                'name' => 'promotion 2',
                'description' => 'description promotion 2',
                'pdf' => 'pdf promotion 2',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Pedicure')),
            ),
            array(
                'name' => 'promotion 3',
                'description' => 'description promotion 3',
                'pdf' => 'pdf promotion 3',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Epilation')),
            ),
            array(
                'name' => 'promotion 4',
                'description' => 'description promotion 4',
                'pdf' => 'pdf promotion 4',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Sauna')),
            ),
            array(
                'name' => 'promotion 5',
                'description' => 'description promotion 5',
                'pdf' => 'pdf promotion 5',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Hammam')),
            ),
            array(
                'name' => 'promotion 6',
                'description' => 'description promotion 6',
                'pdf' => 'pdf promotion 6',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Instant Beauté')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Solarium'))
            ),
            array(
                'name' => 'promotion 7',
                'description' => 'description promotion 7',
                'pdf' => 'pdf promotion 7',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Instant Beauté')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Pedicure')),
            ),
            array(
                'name' => 'promotion 8',
                'description' => 'description promotion 8',
                'pdf' => 'pdf promotion 8',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Instant Beauté')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Epilation')),
            ),
            array(
                'name' => 'promotion 9',
                'description' => 'description promotion 9',
                'pdf' => 'pdf promotion 9',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Sauna')),
            ),
            array(
                'name' => 'promotion 10',
                'description' => 'description promotion 10',
                'pdf' => 'pdf promotion 10',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Hammam')),
            ),
            array(
                'name' => 'promotion 11',
                'description' => 'description promotion 11',
                'pdf' => 'pdf promotion 11',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Solarium')),
            ),
            array(
                'name' => 'promotion 12',
                'description' => 'description promotion 12',
                'pdf' => 'pdf promotion 12',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Pedicure')),
            ),
            array(
                'name' => 'promotion 13',
                'description' => 'description promotion 13',
                'pdf' => 'pdf promotion 13',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Epilation')),
            ),
            array(
                'name' => 'promotion 14',
                'description' => 'description promotion 14',
                'pdf' => 'pdf promotion 14',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Sauna')),
            ),
            array(
                'name' => 'promotion 15',
                'description' => 'description promotion 15',
                'pdf' => 'pdf promotion 15',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Hammam')),
            ),
            array(
                'name' => 'promotion 16',
                'description' => 'description promotion 16',
                'pdf' => 'pdf promotion 16',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Solarium')),
            ),
            array(
                'name' => 'promotion 17',
                'description' => 'description promotion 17',
                'pdf' => 'pdf promotion 17',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Pedicure')),
            ),
            array(
                'name' => 'promotion 18',
                'description' => 'description promotion 18',
                'pdf' => 'pdf promotion 18',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Epilation')),
            ),
            array(
                'name' => 'promotion 19',
                'description' => 'description promotion 19',
                'pdf' => 'pdf promotion 19',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Sauna')),
            ),
            array(
                'name' => 'promotion 20',
                'description' => 'description promotion 20',
                'pdf' => 'pdf promotion 20',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "categservice" => $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Hammam')),
            )
        );

        for ($i = 0; $i < sizeof($tab_Promotion); $i++) {
            $promotion = new WellnessCoreBundle\Entity\Promotion();
            $promotion->setName($tab_Promotion[$i]['name']);
            $promotion->setDescription($tab_Promotion[$i]['description']);
            $promotion->setPDFdocument($tab_Promotion[$i]['pdf']);
            $promotion->setBegin($tab_Promotion[$i]['begin']);
            $promotion->setEnd($tab_Promotion[$i]['end']);
            $promotion->setDisplayfrom($tab_Promotion[$i]['displayfrom']);
            $promotion->setDisplayto($tab_Promotion[$i]['displayto']);

            $promotion->setProvider($tab_Promotion[$i]['provider']);
            $promotion->setCategoryService($tab_Promotion[$i]['categservice']);

            $manager->persist($promotion);
            $manager->flush();
        }
    }

    public function getOrder()
    {
        return 10;
    }

}

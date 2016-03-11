<?php
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WellnessCoreBundle\Entity\Training;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
/**
 * Description of Categoryservices
 *
 * @author jHeyvaert
 */
class Trainings extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $tab_Training = array(
            array(
                'name' => 'stage 1',
                'description' => 'description stage 1',
                'rate' => '40 euro / mois',
                'info' => 'info stage 1',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Vague à Lame')),
            ),
            array(
                'name' => 'stage 2',
                'description' => 'description stage 2',
                'rate' => '30 euro / mois',
                'info' => 'info stage 2',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Audrey Bio Beauté')),
            ),
            array(
                'name' => 'stage 3',
                'description' => 'description stage 3',
                'rate' => '60 euro / mois',
                'info' => 'info stage 3',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
            ),
            array(
                'name' => 'stage 4',
                'description' => 'description stage 4',
                'rate' => '40 euro / mois',
                'info' => 'info stage 4',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Instant Beauté')),
            ),
            array(
                'name' => 'stage 5',
                'description' => 'description stage 5',
                'rate' => '400 euro / mois',
                'info' => 'info stage 5',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 6',
                'description' => 'description stage 6',
                'rate' => '400 euro / mois',
                'info' => 'info stage 6',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 7',
                'description' => 'description stage 7',
                'rate' => '400 euro / mois',
                'info' => 'info stage 7',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 8',
                'description' => 'description stage 8',
                'rate' => '400 euro / mois',
                'info' => 'info stage 8',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 9',
                'description' => 'description stage 9',
                'rate' => '400 euro / mois',
                'info' => 'info stage 9',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 10',
                'description' => 'description stage 10',
                'rate' => '400 euro / mois',
                'info' => 'info stage 10',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 11',
                'description' => 'description stage 11',
                'rate' => '400 euro / mois',
                'info' => 'info stage 11',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 12',
                'description' => 'description stage 12',
                'rate' => '400 euro / mois',
                'info' => 'info stage 12',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 13',
                'description' => 'description stage 13',
                'rate' => '400 euro / mois',
                'info' => 'info stage 13',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 14',
                'description' => 'description stage 14',
                'rate' => '400 euro / mois',
                'info' => 'info stage 14',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 15',
                'description' => 'description stage 15',
                'rate' => '400 euro / mois',
                'info' => 'info stage 15',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            ),
            array(
                'name' => 'stage 16',
                'description' => 'description stage 16',
                'rate' => '400 euro / mois',
                'info' => 'info stage 16',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
            )
        );

        for($i=0; $i<sizeof($tab_Training);$i++){
            $training = new WellnessCoreBundle\Entity\Training();
            $training->setName($tab_Training[$i]['name']);
            $training->setDescription($tab_Training[$i]['description']);
            $training->setRate($tab_Training[$i]['rate']);
            $training->setInfo($tab_Training[$i]['info']);
            $training->setBegin($tab_Training[$i]['begin']);
            $training->setEnd($tab_Training[$i]['end']);
            $training->setDisplayfrom($tab_Training[$i]['displayfrom']);
            $training->setDisplayto($tab_Training[$i]['displayto']);

            $training->setProvider($tab_Training[$i]['provider']);

            $manager->persist($training);

            $manager->flush();
        }
    }

    public function getOrder()
    {
        return 10;
    }
    
}

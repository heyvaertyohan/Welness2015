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
        $description = " Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lectus urna, posuere sed sollicitudin quis, pulvinar id eros. Morbi hendrerit viverra ipsum sagittis placerat. Curabitur feugiat lobortis magna, nec tincidunt dui. Fusce elementum posuere enim, ut tincidunt velit feugiat vel. Suspendisse suscipit nulla sit amet velit volutpat sodales. Nullam in metus nec orci pharetra dapibus vel nec augue. Fusce ullamcorper ullamcorper purus in lacinia. Integer at tortor ut magna feugiat sollicitudin. Vivamus facilisis eu diam id placerat. Praesent nibh nisi, accumsan in leo eget, elementum volutpat magna.
Morbi congue, tortor at facilisis vulputate, justo quam cursus leo, in varius dui dui id massa. Etiam elementum ipsum vel dui consectetur tincidunt. Suspendisse potenti. Pellentesque suscipit et erat id feugiat. Quisque consequat felis sit amet est mattis suscipit. Vivamus vel risus a sapien porta consequat in id neque. Pellentesque finibus, nulla nec dictum commodo, libero dolor consectetur urna, a dignissim ipsum sapien eu elit. Fusce vitae tincidunt risus. Nullam erat nunc, interdum quis ex vel, vestibulum tristique purus. Nullam rutrum molestie quam.
Mauris laoreet, neque eget pretium dapibus, odio turpis sollicitudin felis, sed mollis mi leo tristique ante. Phasellus nisi urna, congue vel velit ac, lobortis euismod dui. Morbi ut lorem mattis, pellentesque turpis vel, hendrerit neque. Fusce ac turpis arcu. Praesent convallis maximus egestas. Proin malesuada lacinia nunc semper suscipit. Praesent maximus accumsan purus in dignissim.
Donec blandit ligula id lacinia finibus. Duis porttitor hendrerit lacus a suscipit. Pellentesque turpis tellus, finibus sit amet mi nec, consectetur auctor dui. Vivamus eget ornare sapien, sed dictum sem. Etiam vel nibh ante. Vivamus augue nisl, feugiat nec accumsan vitae, ultricies quis ipsum. Ut luctus lorem et vulputate dictum. Sed quam lectus, viverra at libero vel, condimentum facilisis massa. Mauris tempor volutpat lectus, in iaculis ligula dapibus ut. Ut quis hendrerit elit. Etiam nec purus a purus bibendum mollis imperdiet at augue. ";
        $tab_Training = array(
            array(
                'name' => 'stage 1',
                'description' => 'description stage 1' .$description,
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
                'description' => 'description stage 2' .$description,
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
                'description' => 'description stage 3' .$description,
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
                'description' => 'description stage 4' .$description,
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
                'description' => 'description stage 5' .$description,
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
                'description' => 'description stage 6' .$description,
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
                'description' => 'description stage 7' .$description,
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
                'description' => 'description stage 8' .$description,
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
                'description' => 'description stage 9' .$description,
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
                'description' => 'description stage 10' .$description,
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
                'description' => 'description stage 11' .$description,
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
                'description' => 'description stage 12' .$description,
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
                'description' => 'description stage 13' .$description,
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
                'description' => 'description stage 14' .$description,
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
                'description' => 'description stage 15' .$description,
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
                'description' => 'description stage 16' .$description,
                'rate' => '400 euro / mois',
                'info' => 'info stage 16',
                'begin' => new \DateTime(),
                'end' => new \DateTime(),
                'displayfrom' => new \DateTime(),
                'displayto' => new \DateTime(),
                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
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

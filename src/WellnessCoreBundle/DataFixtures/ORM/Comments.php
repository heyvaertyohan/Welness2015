<?php
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WellnessCoreBundle\Entity\Comment;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
/**
 * Description of Categoryservices
 *
 * @author jHeyvaert
 */
class Comments extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $tab_Comment = array(
            array(
                'date' => new \DateTime(),
                'title' => 'comment 1',
                'contain' => 'contain title 1',
                'cote' => 'cote title 1',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Heyvaert', 'firstname' => 'Yohan')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 2',
                'contain' => 'contain title 2',
                'cote' => 'cote title 2',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Tilkin', 'firstname' => 'Marie')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 3',
                'contain' => 'contain title 3',
                'cote' => 'cote title 3',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Lega', 'firstname' => 'Dany')),
            ), array(
                'date' => new \DateTime(),
                'title' => 'comment 4',
                'contain' => 'contain title 4',
                'cote' => 'cote title 4',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Vague à Lame')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Heyvaert', 'firstname' => 'Yohan')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 5',
                'contain' => 'contain title 5',
                'cote' => 'cote title 5',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Vague à Lame')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Tilkin', 'firstname' => 'Marie')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 6',
                'contain' => 'contain title 6',
                'cote' => 'cote title 6',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Audrey Bio Beauté')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Lega', 'firstname' => 'Dany')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 7',
                'contain' => 'contain title 7',
                'cote' => 'cote title 7',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Audrey Bio Beauté')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Heyvaert', 'firstname' => 'Yohan')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 8',
                'contain' => 'contain title 8',
                'cote' => 'cote title 8',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Tilkin', 'firstname' => 'Marie')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 9',
                'contain' => 'contain title 9',
                'cote' => 'cote title 9',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Lega', 'firstname' => 'Dany')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 10',
                'contain' => 'contain title 10',
                'cote' => 'cote title 10',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Instant Beauté')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Heyvaert', 'firstname' => 'Yohan')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 11',
                'contain' => 'contain title 11',
                'cote' => 'cote title 11',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Instant Beauté')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Tilkin', 'firstname' => 'Marie')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 12',
                'contain' => 'contain title 12',
                'cote' => 'cote title 12',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Instant Beauté')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Lega', 'firstname' => 'Dany')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 13',
                'contain' => 'contain title 13',
                'cote' => 'cote title 13',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Instant Beauté')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Tilkin', 'firstname' => 'Marie')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 14',
                'contain' => 'contain title 14',
                'cote' => 'cote title 14',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Lega', 'firstname' => 'Dany')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 15',
                'contain' => 'contain title 15',
                'cote' => 'cote title 15',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Tilkin', 'firstname' => 'Marie')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 16',
                'contain' => 'contain title 16',
                'cote' => 'cote title 16',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Heyvaert', 'firstname' => 'Yohan')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 17',
                'contain' => 'contain title 17',
                'cote' => 'cote title 17',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Tilkin', 'firstname' => 'Marie')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 18',
                'contain' => 'contain title 18',
                'cote' => 'cote title 18',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Thermes de Spa')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Heyvaert', 'firstname' => 'Yohan')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 19',
                'contain' => 'contain title 19',
                'cote' => 'cote title 19',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Lega', 'firstname' => 'Dany')),
            ),
            array(
                'date' => new \DateTime(),
                'title' => 'comment 20',
                'contain' => 'contain title 20',
                'cote' => 'cote title 20',

                "provider" => $manager->getRepository('WellnessCoreBundle:Provider')->findOneBy(array('name' => 'Institut Viviane')),
                "user" => $manager->getRepository('WellnessCoreBundle:Surfer')->findOneBy(array('name' => 'Tilkin', 'firstname' => 'Marie')),
            )
        );

        for($i=0; $i<sizeof($tab_Comment);$i++){
            $comment = new WellnessCoreBundle\Entity\Comment();
            $comment->setEncoding($tab_Comment[$i]['date']);
            $comment->setTitle($tab_Comment[$i]['title']);
            $comment->setContain($tab_Comment[$i]['contain']);
            $comment->setCote($tab_Comment[$i]['cote']);

            $comment->setProvider($tab_Comment[$i]['provider']);
            $comment->setUser($tab_Comment[$i]['user']);

            $manager->persist($comment);

            $manager->flush();
        }
    }

    public function getOrder()
    {
        return 12;
    }
    
}

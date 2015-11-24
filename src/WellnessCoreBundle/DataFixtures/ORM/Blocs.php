<?php
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WellnessCoreBundle\Entity\Bloc;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
/**
 * Description of Blocs
 *
 * @author jHeyvaert
 */
class Blocs extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $tab_Bloc = array(
            array(
                "name" => "bloc1",
                "description" => "description bloc 1"
            ),
            array(
                "name" => "bloc2",
                "description" => "description bloc 2"
            )
        );

        for($i=0; $i< sizeof($tab_Bloc); $i++ ){
            $bloc = new Bloc();
            $bloc->setName($tab_Bloc[$i]['name']);
            $bloc->setDescription($tab_Bloc[$i]['description']);
            $manager->persist($bloc);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 8;
    }
    
}

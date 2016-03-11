<?php
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WellnessCoreBundle\Entity\CategoryService;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
/**
 * Description of CategoryservicesProviders
 *
 * @author jHeyvaert
 */
class CategoryservicesProviders extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $tab_Categ = $manager->getRepository('WellnessCoreBundle:CategoryService')->findAll();
        $tab_Provider = $manager->getRepository('WellnessCoreBundle:Provider')->findAll();

        for($i=0; $i< sizeof($tab_Categ); $i++ ){
            $categservice = $tab_Categ[$i];
            for($j=0; $j< sizeof($tab_Provider); $j+=2 ){
                $categservice->addProvider($tab_Provider[$j]);
                $manager->persist($categservice);
            }
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 7;
    }
    
}

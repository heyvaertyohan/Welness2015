<?php
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WellnessCoreBundle\Entity\CategoryService;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
/**
 * Description of Categoryservices
 *
 * @author jHeyvaert
 */
class Categoryservices extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $tab_Categ = array(
            array(
                "name" => "Solarium",
                "description" => "Tous les soins concernant les solariums",
                "forward" => "1",
                "validated" => "0"
            ),
            array(
                "name" => "Pedicure",
                "description" => "Tous les soins des pieds",
                "forward" => "0",
                "validated" => "0"
            ),
            array(
                "name" => "Epilation",
                "description" => "Enlevez vos poils",
                "forward" => "0",
                "validated" => "0"
            ),
            array(
                "name" => "Sauna",
                "description" => "bain de chaleur sèche qui peut varier de 70 °C à 100 °C, pour le bien-être. La pratique du sauna est une tradition sociale et familiale qui semble exister depuis plus de 2 000 ans dans les pays nordiques, notamment en Finlande",
                "forward" => "0",
                "validated" => "0"
            ),
            array(
                "name" => "Hammam",
                "description" => "La définition du hammam est simple : c'est un bain de vapeur chaude et humide. La température de la vapeur atteint environ 50 °C.
Le taux d'humidité est de 100 %, ce qui rend la chaleur tout à fait supportable",
                "forward" => "0",
                "validated" => "0"
            )
        );

        for($i=0; $i< sizeof($tab_Categ); $i++ ){
            $categservice = new CategoryService();
            $categservice->setName($tab_Categ[$i]['name']);
            $categservice->setDescription($tab_Categ[$i]['description']);
            $categservice->setForward($tab_Categ[$i]['forward']);
            $categservice->setValidated($tab_Categ[$i]['validated']);
            $manager->persist($categservice);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 5;
    }
    
}

<?php
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WellnessCoreBundle\Entity\Comment;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
/**
 * Description of News
 *
 * @author jHeyvaert
 */
class News extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $tab_Comment = array(
            array(
                'title' => "titre1",
                'description' => "description1",
                'createat' => new \DateTime()
                ),
            array(
                'title' => "titre2",
                'description' => "description2",
                'createat' => new \DateTime()
            ),
            array(
                'title' => "titre3",
                'description' => "description3",
                'createat' => new \DateTime()
            ),
            array(
                'title' => "titre4",
                'description' => "description4",
                'createat' => new \DateTime()
            ),
            array(
                'title' => "Therme de spa: Nouvelles implémentations",
                'description' => "Venez découvrir de nouvelles implémentation au therme de spa! La construction de nos nouveaux Sauna, hammam et espace détente supplémentaire viennent d'être terminées. Détente à la clé!",
                'createat' => new \DateTime()
            ),
            array(
                'title' => "Détente printanière à bon compte",
                'description' => "Venez découvrir nos nouvelles promotions printanières ! Nous vous proposons deux forfaits intéressants : le Spécial Printemps ou le Spécial Printemps Deluxe. Le premier comprend l'accès aux thermes toute la journée, l'emploi de sandales et de textiles de bains, la possibilité de participer aux différentes séances de versement, un bienfaisant massage ainsi qu'un délicat soin du visage. Le second est une promo de deux jours, baptisée Spécial Printemps Deluxe. Vous séjournez en chambre Classic à Thermae Boetfort Hotel (ou en chambre Superior si vous vous rendez à Thermae Grimbergen), accédez aux thermes durant deux journées consécutives, avec emploi de textiles et sandales de bain. Cerise sur le gâteau : vous recevez un massage Body Relax !",
                'createat' => new \DateTime()
            )
        );

        for($i=0; $i<sizeof($tab_Comment);$i++){
            $comment = new WellnessCoreBundle\Entity\News();
            $comment->setTitle($tab_Comment[$i]['title']);
            $comment->setDescription($tab_Comment[$i]['description']);
            $comment->setCreateat($tab_Comment[$i]['createat']);
            $manager->persist($comment);
            $manager->flush();
        }
    }

    public function getOrder()
    {
        return 13;
    }
    
}

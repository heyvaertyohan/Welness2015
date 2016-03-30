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
                'title' => "titre5",
                'description' => "description5",
                'createat' => new \DateTime()
            ),
            array(
                'title' => "titre6",
                'description' => "description6",
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
        return 12;
    }
    
}

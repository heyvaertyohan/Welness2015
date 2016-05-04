<?php
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use WellnessCoreBundle\Entity\Provider;
/**
 * Description of CategoryServices
 *
 * @author jHeyvaert
 */
class Providers extends AbstractFixture implements ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager){
        $tab_Provider = array(
            array(
                "postcode" => $manager->getRepository('WellnessCoreBundle:Postcode')->findOneBy(array('postcode' => '4000')),
                "localite" => $manager->getRepository('WellnessCoreBundle:Locality')->findOneBy(array('locality' => 'Liege')),
                "town" => $manager->getRepository('WellnessCoreBundle:Town')->findOneBy(array('town' => 'Liege')),
                "name" => "Vague à Lame",
                "username" => "vague",
                "enabled" => 1,
                "web" => "http://www.aveda.be/?q=fr/website_admin/event",
                "email" => "vague-a-lame@test.be",
                "tel" => "+32 (0) 4 23 70 980",
                "addressstreet" => "Rue de la Casquette",
                "addressnumber" => "33",
                "usertype" => "provider",
                "password" => "vague",
                "role" => "ROLE_PROVIDER",
                "tryingnumber" => "4",
                "bamed" => "0",
                "inscriptioncf" => "0",
                "inscription" => "0",
                "tva" => "123456789",
                "service" => array(
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Solarium')),
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Pedicure')),
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Epilation'))
                ),
                "description" => "<p>Salon exclusif ne proposant une gamme de service choisis.</p>"
            ),
            array(
                "postcode" => $manager->getRepository('WellnessCoreBundle:Postcode')->findOneBy(array('postcode' => '4000')),
                "localite" => $manager->getRepository('WellnessCoreBundle:Locality')->findOneBy(array('locality' => 'Liege')),
                "town" => $manager->getRepository('WellnessCoreBundle:Town')->findOneBy(array('town' => 'Liege')),
                "name" => "Audrey Bio Beauté",
                "username" => "audrey",
                "enabled" => 1,
                "web" => "http://www.audrey-biobeauty.be/",
                "email" => "audrey@test.be ",
                "tel" => "+32 (0) 4 367.27.27",
                "addressstreet" => "Place Willem",
                "addressnumber" => "5",
                "usertype" => "provider",
                "password" => "audrey",
                "role" => "ROLE_PROVIDER",
                "tryingnumber" => "4",
                "bamed" => "0",
                "inscriptioncf" => "0",
                "inscription" => "0",
                "tva" => "123456789",
                "service" => array(
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Solarium')),
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Pedicure')),
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Epilation'))
                ),
                "description" => "<p>Audrey, ce sont 4 instituts, parfumeries, solariums et wellness pr&egrave;s de Li&egrave;ge</p>"
            ),
            array(
                "postcode" => $manager->getRepository('WellnessCoreBundle:Postcode')->findOneBy(array('postcode' => '4900')),
                "localite" => $manager->getRepository('WellnessCoreBundle:Locality')->findOneBy(array('locality' => 'Spa')),
                "town" => $manager->getRepository('WellnessCoreBundle:Town')->findOneBy(array('town' => 'Spa')),
                "name" => "Thermes de Spa",
                "username" => "spa",
                "enabled" => 1,
                "web" => "http://www.thermesdespa.com/",
                "email" => "info@thermesdespa.com",
                "tel" => "+32(0)87 77 25 60",
                "addressstreet" => "Colline d'Annette et Lubin ",
                "addressnumber" => "1",
                "usertype" => "provider",
                "password" => "spa",
                "role" => "ROLE_PROVIDER",
                "tryingnumber" => "4",
                "bamed" => "0",
                "inscriptioncf" => "0",
                "inscription" => "0",
                "tva" => "123456789",
                "service" => array(
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Pedicure')),
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Epilation'))
                ),
                "description" => "<p>L&rsquo;histoire des Thermes de Spa est li&eacute;e &agrave; l&rsquo;histoire de la ville, du pays, du thermalisme et de son &eacute;volution.</p><p>Elle s&rsquo;inscrit dans l&rsquo;histoire de l&lsquo;&eacute;volution du thermalisme spadois gr&acirc;ce au d&eacute;veloppement de la baln&eacute;oth&eacute;rapie qui compl&egrave;te les cures &laquo;classiques&raquo;.</p><p>A l&rsquo;&eacute;poque de &laquo;Spa, le caf&eacute; de l&rsquo;Europe&raquo;, la ville est une destination pris&eacute;e par l&rsquo;aristocratie ou la bourgeoisie du pays et de ses voisins.</p><p>Pendant la seconde moiti&eacute; du 19&egrave;me si&egrave;cle, Spa se dote d&rsquo;une infrastructure thermale encore visible aujourd&rsquo;hui.</p><p>C&rsquo;est &agrave; cette &eacute;poque qu&rsquo;est construit l&rsquo;&eacute;tablissement des Thermes de Spa dot&eacute; de 54 baignoires &eacute;quip&eacute;es, pour ouvrir en 1868. Il sera compl&egrave;tement repens&eacute; et r&eacute;nov&eacute; en 2003</p>"
            ),
            array(
                "postcode" => $manager->getRepository('WellnessCoreBundle:Postcode')->findOneBy(array('postcode' => '4050')),
                "localite" => $manager->getRepository('WellnessCoreBundle:Locality')->findOneBy(array('locality' => 'Chaudfontaine')),
                "town" => $manager->getRepository('WellnessCoreBundle:Town')->findOneBy(array('town' => 'Chaudfontaine')),
                "name" => "Thermes de Chaudfontaine",
                "username" => "Chaudfontaine",
                "enabled" => 1,
                "web" => "http://www.chateaudesthermes.be/",
                "email" => "info@chateaudesthermes.be",
                "tel" => "+32(0)4 367 80 67",
                "addressstreet" => "Rue Hauster ",
                "addressnumber" => "9",
                "usertype" => "provider",
                "password" => "testpwd",
                "role" => "ROLE_PROVIDER",
                "tryingnumber" => "4",
                "bamed" => "0",
                "inscriptioncf" => "0",
                "inscription" => "0",
                "tva" => "123456789",
                "service" => array(
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Pedicure')),
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Epilation'))
                ),
                "description" => "<p>L&rsquo;histoire des Thermes de Spa est li&eacute;e &agrave; l&rsquo;histoire de la ville, du pays, du thermalisme et de son &eacute;volution.</p><p>Elle s&rsquo;inscrit dans l&rsquo;histoire de l&lsquo;&eacute;volution du thermalisme spadois gr&acirc;ce au d&eacute;veloppement de la baln&eacute;oth&eacute;rapie qui compl&egrave;te les cures &laquo;classiques&raquo;.</p><p>A l&rsquo;&eacute;poque de &laquo;Spa, le caf&eacute; de l&rsquo;Europe&raquo;, la ville est une destination pris&eacute;e par l&rsquo;aristocratie ou la bourgeoisie du pays et de ses voisins.</p><p>Pendant la seconde moiti&eacute; du 19&egrave;me si&egrave;cle, Spa se dote d&rsquo;une infrastructure thermale encore visible aujourd&rsquo;hui.</p><p>C&rsquo;est &agrave; cette &eacute;poque qu&rsquo;est construit l&rsquo;&eacute;tablissement des Thermes de Spa dot&eacute; de 54 baignoires &eacute;quip&eacute;es, pour ouvrir en 1868. Il sera compl&egrave;tement repens&eacute; et r&eacute;nov&eacute; en 2003</p>"
            ),
            array(
                "postcode" => $manager->getRepository('WellnessCoreBundle:Postcode')->findOneBy(array('postcode' => '1070')),
                "localite" => $manager->getRepository('WellnessCoreBundle:Locality')->findOneBy(array('locality' => 'Bruxelles')),
                "town" => $manager->getRepository('WellnessCoreBundle:Town')->findOneBy(array('town' => 'Anderlecht')),
                "name" => "Instant Beauté",
                "username" => "Instant",
                "enabled" => 1,
                "web" => "http://www.instantbeaute.be/ ",
                "email" => "info@instantbeaute.be",
                "tel" => "04 457 45 54",
                "addressstreet" => "Rue Sylvain Denayer",
                "addressnumber" => "44",
                "usertype" => "provider",
                "password" => "testpwd",
                "role" => "ROLE_PROVIDER",
                "tryingnumber" => "4",
                "bamed" => "0",
                "inscriptioncf" => "0",
                "inscription" => "0",
                "tva" => "123456789",
                "service" => array(
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Solarium')),
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Pedicure')),
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Sauna'))
                ),
                "description" => "<p><em><strong>Instant Beauté, la beauté sans rendez-vous...</em></strong><br />
Les esthéticiennes expérimentées et attentionnées d'Instant Beauté vous accueillent dans un cadre agréable et
chaleureux.<br/>
<em><strong>Soins classiques de beauté</em></strong> (épilations de qualité sur Bruxelles, soins du visage, massages et soins du corps en
instituts,...), soins à thèmes ou séances d'amincissement, pour femmes et hommes, vous sont proposés dans des
cabines climatisées afin de vous apporter le bien-être nécessaire au corps et à lesprit et vous aider à retrouver
un visage frais et rajeuni, une peau douce et veloutée ou une silhouette raffermie. Instant Beauté propose également
l'épilation définitive à Bruxelles et en Brabant wallon</p>"
            ),
            array(
                "postcode" => $manager->getRepository('WellnessCoreBundle:Postcode')->findOneBy(array('postcode' => '6690')),
                "localite" => $manager->getRepository('WellnessCoreBundle:Locality')->findOneBy(array('locality' => 'Vielsalm')),
                "town" => $manager->getRepository('WellnessCoreBundle:Town')->findOneBy(array('town' => 'Vielsalm')),
                "name" => "Institut Viviane",
                "username" => "Viviane",
                "enabled" => 1,
                "web" => "http://www.institut-viviane.be/",
                "email" => "info@viviane.be",
                "tel" => "080/21.52.91",
                "addressstreet" => "Rue du Parc",
                "addressnumber" => "13",
                "usertype" => "provider",
                "password" => "testpwd",
                "role" => "ROLE_PROVIDER",
                "tryingnumber" => "4",
                "bamed" => "0",
                "inscriptioncf" => "0",
                "inscription" => "0",
                "tva" => "123456789",
                "service" => array(
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Solarium')),
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Hammam')),
                    $manager->getRepository('WellnessCoreBundle:CategoryService')->findOneBy(array('name' => 'Sauna'))
                ),
                "description" => "C’est dans un cadre agréable, chaleureux et verdoyant que l’institut Viviane et Magali vous propose ses nombreux soins visage, corps et notre nouveau concept Wellness.
Soucieuses de répondre davantage à vos attentes, nous avons décidé depuis quelques mois, d’unir nos qualités humaines et professionnelles toujours à votre écoute et au service de votre beauté, de votre bien-être.
Ecoute : pour mieux répondre à vos attentes
Professionnalisme : 40 années d’expérience au service de votre beauté
Disponibilité : ouverture 6 jours sur 7
Discrétion : respect de chaque cliente et client
Parking privé : parking aisé face à l’institut et à l’abri des regards
Cadre agréable : entièrement relooké dans un esprit zen, actuel avec un petit brin d’histoire"
            )
        );

        for($i=0; $i<sizeof($tab_Provider);$i++){
            $provider = new WellnessCoreBundle\Entity\Provider();
            $provider->setName($tab_Provider[$i]['name']);
            $provider->setWebsite($tab_Provider[$i]['web']);
            $provider->setEmail($tab_Provider[$i]['email']);
            $provider->setUsername($tab_Provider[$i]['username']);
            $provider->setEnabled($tab_Provider[$i]['enabled']);
            /*$provider->setPlainPassword($tab_Provider[$i]['password']);*/
            $provider->setPassword($this->container->get('security.encoder_factory')->getEncoder($provider)->encodePassword($tab_Provider[$i]['password'], $provider->getSalt()));

            $provider->setRoles(array($tab_Provider[$i]['role']));
            $provider->setTelnumber($tab_Provider[$i]['tel']);
            $provider->setTvanumber($tab_Provider[$i]['tva']);
            $provider->setInscriptioncf($tab_Provider[$i]['inscription']);
            $provider->setDescription($tab_Provider[$i]['description']);
            $provider->setUsertype($tab_Provider[$i]['usertype']);
            $provider->setTryingnumber($tab_Provider[$i]["tryingnumber"]);
            $provider->setBamed($tab_Provider[$i]["bamed"]);
            $provider->setInscriptioncf($tab_Provider[$i]["inscriptioncf"]);
            $provider->setPostcode($tab_Provider[$i]['postcode']);
            $provider->setLocality($tab_Provider[$i]['localite']);
            $provider->setTown($tab_Provider[$i]['town']);
            $provider->setAddressstreet($tab_Provider[$i]['addressstreet']);
            $provider->setAddressnumber($tab_Provider[$i]['addressnumber']);

            $tab_Service = $tab_Provider[$i]['service'];
            for($j=0; $j<sizeof($tab_Service);$j++){
                $provider->addCategoryService($tab_Service[$j]);
            }

            $manager->persist($provider);

            $manager->flush();
        }
    }

    public function getOrder()
    {
        return 6;
    }
    
}

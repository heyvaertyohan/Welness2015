<?php


namespace WellnessCoreBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WellnessCoreBundle\Entity\UserRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "surfer" = "Surfer", "provider" = "Provider"})
 */
class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Postcode")
     */
    protected $postcode;

    /**
     * @ORM\ManyToOne(targetEntity="Locality")
     */
    protected $locality;

    /**
     * @ORM\ManyToOne(targetEntity="Town")
     */
    protected $town;

    /**
     *
     * @var type String
     * @Gedmo\Slug(fields={"id","name"})
     * @ORM\Column(length=128, unique=true)
     */
    protected $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="telnumber", type="string", length=255, nullable=true)
     */
    protected $telnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="addressstreet", type="string", length=255, nullable=true)
     */
    protected $addressstreet;

    /**
     * @var string
     *
     * @ORM\Column(name="addressnumber", type="string", length=255, nullable=true)
     */
    protected $addressnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="inscriptioncf", type="string", length=255, nullable=true)
     */
    protected $inscriptioncf;

    /**
     * @var string
     *
     * @ORM\Column(name="usertype", type="string", length=255, nullable=true)
     */
    protected $usertype;

    /**
     * @var integer
     *
     * @ORM\Column(name="tryingnumber", type="integer", nullable=true)
     */
    protected $tryingnumber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bamed", type="boolean", nullable=true)
     */
    protected $bamed;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set telnumber
     *
     * @param string $telnumber
     *
     * @return User
     */
    public function setTelnumber($telnumber)
    {
        $this->telnumber = $telnumber;

        return $this;
    }

    /**
     * Get telnumber
     *
     * @return string
     */
    public function getTelnumber()
    {
        return $this->telnumber;
    }

    /**
     * Set addressstreet
     *
     * @param string $addressstreet
     *
     * @return User
     */
    public function setAddressstreet($addressstreet)
    {
        $this->addressstreet = $addressstreet;

        return $this;
    }

    /**
     * Get addressstreet
     *
     * @return string
     */
    public function getAddressstreet()
    {
        return $this->addressstreet;
    }

    /**
     * Set addressnumber
     *
     * @param string $addressnumber
     *
     * @return User
     */
    public function setAddressnumber($addressnumber)
    {
        $this->addressnumber = $addressnumber;

        return $this;
    }

    /**
     * Get addressnumber
     *
     * @return string
     */
    public function getAddressnumber()
    {
        return $this->addressnumber;
    }

    /**
     * Set usertype
     *
     * @param string $usertype
     *
     * @return User
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;

        return $this;
    }

    /**
     * Get usertype
     *
     * @return string
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set tryingnumber
     *
     * @param integer $tryingnumber
     *
     * @return User
     */
    public function setTryingnumber($tryingnumber)
    {
        $this->tryingnumber = $tryingnumber;

        return $this;
    }

    /**
     * Get tryingnumber
     *
     * @return integer
     */
    public function getTryingnumber()
    {
        return $this->tryingnumber;
    }

    /**
     * Set bamed
     *
     * @param boolean $bamed
     *
     * @return User
     */
    public function setBamed($bamed)
    {
        $this->bamed = $bamed;

        return $this;
    }

    /**
     * Get bamed
     *
     * @return boolean
     */
    public function getBamed()
    {
        return $this->bamed;
    }

    /**
     * Set inscriptioncf
     *
     * @param boolean $inscriptioncf
     *
     * @return User
     */
    public function setInscriptioncf($inscriptioncf)
    {
        $this->inscriptioncf = $inscriptioncf;

        return $this;
    }

    /**
     * Get inscriptioncf
     *
     * @return boolean
     */
    public function getInscriptioncf()
    {
        return $this->inscriptioncf;
    }

    /**
     * Set postcode
     *
     * @param \WellnessCoreBundle\Entity\Postcode $postcode
     *
     * @return User
     */
    public function setPostcode(\WellnessCoreBundle\Entity\Postcode $postcode = null)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * Get postcode
     *
     * @return \WellnessCoreBundle\Entity\Postcode
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set locality
     *
     * @param \WellnessCoreBundle\Entity\Locality $locality
     *
     * @return User
     */
    public function setLocality(\WellnessCoreBundle\Entity\Locality $locality = null)
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Get locality
     *
     * @return \WellnessCoreBundle\Entity\Locality
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Set town
     *
     * @param \WellnessCoreBundle\Entity\Town $town
     *
     * @return User
     */
    public function setTown(\WellnessCoreBundle\Entity\Town $town = null)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return \WellnessCoreBundle\Entity\Town
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Provider
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}

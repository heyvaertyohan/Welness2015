<?php

namespace WellnessCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Surfer
 *
 * @ORM\Table("surfer")
 * @ORM\Entity(repositoryClass="WellnessCoreBundle\Entity\SurferRepository")
 */
class Surfer extends User
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;


    /**
     * @var boolean
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=true)
     */
    private $newsletter;


    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Surfer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return Surfer
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set bloc
     *
     * @param \WellnessCoreBundle\Entity\Bloc $bloc
     *
     * @return Surfer
     */
    public function setBloc(\WellnessCoreBundle\Entity\Bloc $bloc = null)
    {
        $this->bloc = $bloc;

        return $this;
    }

    /**
     * Get bloc
     *
     * @return \WellnessCoreBundle\Entity\Bloc
     */
    public function getBloc()
    {
        return $this->bloc;
    }
}

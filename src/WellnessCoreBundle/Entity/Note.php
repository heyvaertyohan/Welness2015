<?php

namespace WellnessCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table("note")
 * @ORM\Entity
 */
class Note
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Provider")
     */
    private $provider;

    /**
     * @ORM\ManyToOne(targetEntity="Surfer")
     */
    private $surfer;

    /**
     * @var integer
     *
     * @ORM\Column(name="cote", type="integer")
     */
    private $cote;


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
     * Set cote
     *
     * @param integer $cote
     *
     * @return Note
     */
    public function setCote($cote)
    {
        $this->cote = $cote;

        return $this;
    }

    /**
     * Get cote
     *
     * @return integer
     */
    public function getCote()
    {
        return $this->cote;
    }

    /**
     * Set provider
     *
     * @param \WellnessCoreBundle\Entity\Provider $provider
     *
     * @return Note
     */
    public function setProvider(\WellnessCoreBundle\Entity\Provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return \WellnessCoreBundle\Entity\Provider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set surfer
     *
     * @param \WellnessCoreBundle\Entity\Surfer $surfer
     *
     * @return Note
     */
    public function setSurfer(\WellnessCoreBundle\Entity\Surfer $surfer = null)
    {
        $this->surfer = $surfer;

        return $this;
    }

    /**
     * Get surfer
     *
     * @return \WellnessCoreBundle\Entity\Surfer
     */
    public function getSurfer()
    {
        return $this->surfer;
    }
}

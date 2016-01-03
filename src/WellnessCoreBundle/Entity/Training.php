<?php

namespace WellnessCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Training
 *
 * @ORM\Table("training")
 * @ORM\Entity
 */
class Training
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="string", length=255)
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=255)
     */
    private $info;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin", type="date")
     */
    private $begin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="date")
     */
    private $end;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="displayfrom", type="date")
     */
    private $displayfrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="displayto", type="date")
     */
    private $displayto;


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
     * @return Training
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
     * Set description
     *
     * @param string $description
     *
     * @return Training
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set rate
     *
     * @param string $rate
     *
     * @return Training
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return Training
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set begin
     *
     * @param \DateTime $begin
     *
     * @return Training
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get begin
     *
     * @return \DateTime
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Training
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set displayfrom
     *
     * @param \DateTime $displayfrom
     *
     * @return Training
     */
    public function setDisplayfrom($displayfrom)
    {
        $this->displayfrom = $displayfrom;

        return $this;
    }

    /**
     * Get displayfrom
     *
     * @return \DateTime
     */
    public function getDisplayfrom()
    {
        return $this->displayfrom;
    }

    /**
     * Set displayto
     *
     * @param \DateTime $displayto
     *
     * @return Training
     */
    public function setDisplayto($displayto)
    {
        $this->displayto = $displayto;

        return $this;
    }

    /**
     * Get displayto
     *
     * @return \DateTime
     */
    public function getDisplayto()
    {
        return $this->displayto;
    }

    /**
     * Set provider
     *
     * @param \WellnessCoreBundle\Entity\Provider $provider
     *
     * @return Training
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
}

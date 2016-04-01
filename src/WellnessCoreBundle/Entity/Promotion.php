<?php

namespace WellnessCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table("promotion")
 * @ORM\Entity(repositoryClass="WellnessCoreBundle\Repository\PromotionRepository")
 */
class Promotion
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
     * @ORM\ManyToOne(targetEntity="CategoryService")
     */
    private $categoryservice;

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
     * @ORM\Column(name="PDFdocument", type="string", length=255)
     */
    private $pDFdocument;

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
     * @return Promotion
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
     * @return Promotion
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
     * Set pDFdocument
     *
     * @param string $pDFdocument
     *
     * @return Promotion
     */
    public function setPDFdocument($pDFdocument)
    {
        $this->pDFdocument = $pDFdocument;

        return $this;
    }

    /**
     * Get pDFdocument
     *
     * @return string
     */
    public function getPDFdocument()
    {
        return $this->pDFdocument;
    }

    /**
     * Set begin
     *
     * @param \DateTime $begin
     *
     * @return Promotion
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
     * @return Promotion
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
     * @return Promotion
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
     * @return Promotion
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
     * @return Promotion
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
     * Set categoryservice
     *
     * @param \WellnessCoreBundle\Entity\CategoryService $categoryservice
     *
     * @return Promotion
     */
    public function setCategoryService(\WellnessCoreBundle\Entity\CategoryService $categoryservice = null)
    {
        $this->categoryservice = $categoryservice;

        return $this;
    }

    /**
     * Get categoryservice
     *
     * @return \WellnessCoreBundle\Entity\CategoryService
     */
    public function getCategoryService()
    {
        return $this->categoryservice;
    }
}

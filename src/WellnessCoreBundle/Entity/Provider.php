<?php

namespace WellnessCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provider
 *
 * @ORM\Table("provider")
 * @ORM\Entity(repositoryClass="WellnessCoreBundle\Repository\ProviderRepository")
 */
class Provider extends User
{

    /**
     * @ORM\ManyToMany(targetEntity="CategoryService")
     */
    private $CategoryService;


    /**
     * @ORM\ManyToMany(targetEntity="Surfer")
     */
    private $favoris;


    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="tvanumber", type="string", length=255)
     */
    private $tvanumber;

    /**
     * @var text
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->CategoryService = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Provider
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set tvanumber
     *
     * @param string $tvanumber
     *
     * @return Provider
     */
    public function setTvanumber($tvanumber)
    {
        $this->tvanumber = $tvanumber;

        return $this;
    }

    /**
     * Get tvanumber
     *
     * @return string
     */
    public function getTvanumber()
    {
        return $this->tvanumber;
    }

    /**
     * Add CategoryService
     *
     * @param \WellnessCoreBundle\Entity\CategoryService $CategoryService
     *
     * @return Provider
     */
    public function addCategoryService(\WellnessCoreBundle\Entity\CategoryService $CategoryService)
    {
        $this->CategoryService[] = $CategoryService;

        return $this;
    }

    /**
     * Remove CategoryService
     *
     * @param \WellnessCoreBundle\Entity\CategoryService $CategoryService
     */
    public function removeCategoryService(\WellnessCoreBundle\Entity\CategoryService $CategoryService)
    {
        $this->CategoryService->removeElement($CategoryService);
    }

    /**
     * Get CategoryService
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategoryService()
    {
        return $this->CategoryService;
    }

    /**
     * Add favori
     *
     * @param \WellnessCoreBundle\Entity\Surfer $favori
     *
     * @return Provider
     */
    public function addFavori(\WellnessCoreBundle\Entity\Surfer $favori)
    {
        $this->favoris[] = $favori;

        return $this;
    }

    /**
     * Remove favori
     *
     * @param \WellnessCoreBundle\Entity\Surfer $favori
     */
    public function removeFavori(\WellnessCoreBundle\Entity\Surfer $favori)
    {
        $this->favoris->removeElement($favori);
    }

    /**
     * Get favoris
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFavoris()
    {
        return $this->favoris;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Provider
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
}

<?php

namespace WellnessCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * CategoryService
 *
 * @ORM\Table("categoryservice")
 * @ORM\Entity
 */
class CategoryService
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
     *
     * @var type String
     * @Gedmo\Slug(fields={"id","name"})
     * @ORM\Column(length=128, unique=true)
     */
    protected $slug;


    /**
     * @ORM\ManyToMany(targetEntity="Provider")
     */
    private $Provider;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="forward", type="boolean")
     */
    private $forward;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validated", type="boolean")
     */
    private $validated;


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
     * @return CategoryService
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
     * Set forward
     *
     * @param boolean $forward
     *
     * @return CategoryService
     */
    public function setForward($forward)
    {
        $this->forward = $forward;

        return $this;
    }

    /**
     * Get forward
     *
     * @return boolean
     */
    public function getForward()
    {
        return $this->forward;
    }

    /**
     * Set validated
     *
     * @param boolean $validated
     *
     * @return CategoryService
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return boolean
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return CategoryService
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
     * Set slug
     *
     * @param string $slug
     *
     * @return CategoryService
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->provider = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add provider
     *
     * @param \WellnessCoreBundle\Entity\Provider $provider
     *
     * @return CategoryService
     */
    public function addProvider(\WellnessCoreBundle\Entity\Provider $provider)
    {
        $this->Provider[] = $provider;

        return $this;
    }

    /**
     * Remove provider
     *
     * @param \WellnessCoreBundle\Entity\Provider $provider
     */
    public function removeProvider(\WellnessCoreBundle\Entity\Provider $provider)
    {
        $this->Provider->removeElement($provider);
    }

    /**
     * Get provider
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProvider()
    {
        return $this->Provider;
    }
}

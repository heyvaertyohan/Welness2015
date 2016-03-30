<?php

namespace WellnessCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table("Image")
 * @ORM\Entity(repositoryClass="WellnessCoreBundle\Entity\ImageRepository")
 */
class Image
{
    const TYPE_MAINSLIDER = 'mainslider';
    const TYPE_IMG_PROVIDER = 'img_provider';
    const TYPE_LOGO_PROVIDER = 'logo_provider';
    const TYPE_SURFER = 'surfer';
    const TYPE_LOGO_SERVICE = 'logo_service';
    const TYPE_IMG_SERVICE = 'img_service';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="CategoryService", cascade={"persist"})
     */
    private $categoryService;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    private $file;





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
     * Set position
     *
     * @param integer $position
     *
     * @return Image
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Image
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Image
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
     * Set user
     *
     * @param \WellnessCoreBundle\Entity\User $user
     *
     * @return Image
     */
    public function setUser(\WellnessCoreBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \WellnessCoreBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set categoryService
     *
     * @param \WellnessCoreBundle\Entity\CategoryService $categoryService
     *
     * @return Image
     */
    public function setCategoryService(\WellnessCoreBundle\Entity\CategoryService $categoryService = null)
    {
        $this->categoryService = $categoryService;

        return $this;
    }

    /**
     * Get categoryService
     *
     * @return \WellnessCoreBundle\Entity\CategoryService
     */
    public function getCategoryService()
    {
        return $this->categoryService;
    }
}

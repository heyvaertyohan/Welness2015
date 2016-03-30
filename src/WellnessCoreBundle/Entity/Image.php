<?php

namespace WellnessCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\validator\Constraints as Assert;

/**
 * Image
 *
 * @ORM\Table("image")
 * @ORM\Entity(repositoryClass="WellnessCoreBundle\Repository\ImageRepository")
 * @ORM\HasLifecycleCallbacks
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
     * @ORM\ManyToOne(targetEntity="CategoryService")
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
     * @var \DateTime
     *
     * @ORM\COlumn(name="updated_at",type="datetime", nullable=true)
     */
    private $updateAt;

    /**
     * @ORM\PostLoad()
     */
    public function postLoad()
    {
        $this->updateAt = new \DateTime();
    }

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=125)
     */
    private $alt;

    private $file;

    public function getUploadRootDir()
    {
        return __dir__.'/../../../../web/uploads';
    }

    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getAssetPath()
    {
        return 'uploads/'.$this->path;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getPath();
        $this->updateAt = new \DateTime();

        if (null !== $this->file)
            $this->path = sha1(uniqid(mt_rand(),true)).'.'.$this->file->guessExtension();
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null !== $this->file) {
            $this->file->move($this->getUploadRootDir(),$this->path);
            unset($this->file);

            if ($this->oldFile != null) unlink($this->tempFile);
        }
    }

    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if (file_exists($this->tempFile)) unlink($this->tempFile);
    }

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
     * Set path
     *
     * @param string $path
     * @return Media
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
     * Set file
     *
     * @param string $file
     * @return Media
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return Media
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Media
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return Media
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
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

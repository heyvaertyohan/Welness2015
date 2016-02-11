<?php

namespace WellnessCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table("Comment")
 * @ORM\Entity
 */
class Comment
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
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="cote", type="integer")
     */
    private $cote;

    /**
     * @var integer
     *
     * @ORM\Column(name="title", type="integer")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="contain", type="string", length=255)
     */
    private $contain;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="encoding", type="date")
     */
    private $encoding;


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
     * @return Comment
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
     * Set title
     *
     * @param integer $title
     *
     * @return Comment
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return integer
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set contain
     *
     * @param string $contain
     *
     * @return Comment
     */
    public function setContain($contain)
    {
        $this->contain = $contain;

        return $this;
    }

    /**
     * Get contain
     *
     * @return string
     */
    public function getContain()
    {
        return $this->contain;
    }

    /**
     * Set encoding
     *
     * @param \DateTime $encoding
     *
     * @return Comment
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * Get encoding
     *
     * @return \DateTime
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Set provider
     *
     * @param \WellnessCoreBundle\Entity\Provider $provider
     *
     * @return Comment
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
     * Set user
     *
     * @param \WellnessCoreBundle\Entity\User $user
     *
     * @return Comment
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
}

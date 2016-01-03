<?php

namespace WellnessCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abuse
 *
 * @ORM\Table("abuse")
 * @ORM\Entity
 */
class Abuse
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
     * @ORM\ManyToOne(targetEntity="Surfer")
     */
    private $surfer;

    /**
     * @ORM\ManyToOne(targetEntity="Comment")
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

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
     * Set description
     *
     * @param string $description
     *
     * @return Abuse
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
     * Set encoding
     *
     * @param \DateTime $encoding
     *
     * @return Abuse
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
     * Set surfer
     *
     * @param \WellnessCoreBundle\Entity\Surfer $surfer
     *
     * @return Abuse
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

    /**
     * Set comment
     *
     * @param \WellnessCoreBundle\Entity\Comment $comment
     *
     * @return Abuse
     */
    public function setComment(\WellnessCoreBundle\Entity\Comment $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \WellnessCoreBundle\Entity\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }
}

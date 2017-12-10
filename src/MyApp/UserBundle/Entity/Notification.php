<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="activeUserId", columns={"activeUserId"}), @ORM\Index(name="passiveUserId", columns={"passiveUserId"}), @ORM\Index(name="applicationId", columns={"applicationId"}), @ORM\Index(name="articleId", columns={"articleId"})})
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="notificationId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notificationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20, nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activeUserId", referencedColumnName="userId")
     * })
     */
    private $activeuserid;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="passiveUserId", referencedColumnName="userId")
     * })
     */
    private $passiveuserid;

    /**
     * @var \MyApp\UserBundle\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="articleId", referencedColumnName="articleId")
     * })
     */
    private $articleid;

    /**
     * @var \MyApp\UserBundle\Entity\Application
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\Application")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="applicationId", referencedColumnName="applicationId")
     * })
     */
    private $applicationid;


}


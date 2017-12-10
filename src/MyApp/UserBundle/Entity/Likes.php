<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Likes
 *
 * @ORM\Table(name="likes", indexes={@ORM\Index(name="articleId", columns={"articleId"})})
 * @ORM\Entity
 */
class Likes
{
    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50, nullable=false)
     */
    private $date;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\OneToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="userId", unique=true)
     * })
     */
    private $userid;

    /**
     * @var \MyApp\UserBundle\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="articleId", referencedColumnName="articleId")
     * })
     */
    private $articleid;


}


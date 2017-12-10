<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="userId", columns={"userId"}), @ORM\Index(name="articleId", columns={"articleId"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="commentId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentid;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag", type="integer", nullable=false)
     */
    private $flag;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50, nullable=false)
     */
    private $date;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="userId")
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


<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="articleCreatorId", columns={"articleCreatorId"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="articleId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $articleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="image", type="integer", nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

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
     *   @ORM\JoinColumn(name="articleCreatorId", referencedColumnName="userId")
     * })
     */
    private $articlecreatorid;


}


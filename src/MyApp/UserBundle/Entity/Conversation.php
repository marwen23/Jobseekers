<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conversation
 *
 * @ORM\Table(name="conversation", indexes={@ORM\Index(name="userTwoId", columns={"userTwoId"}), @ORM\Index(name="userOneId", columns={"userOneId"})})
 * @ORM\Entity
 */
class Conversation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="conversationId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $conversationid;

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
     *   @ORM\JoinColumn(name="userOneId", referencedColumnName="userId")
     * })
     */
    private $useroneid;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userTwoId", referencedColumnName="userId")
     * })
     */
    private $usertwoid;


}


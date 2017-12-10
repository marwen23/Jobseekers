<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="conversationId", columns={"conversationId"}), @ORM\Index(name="senderId", columns={"senderId"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="messageId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $messageid;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

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
     *   @ORM\JoinColumn(name="senderId", referencedColumnName="userId")
     * })
     */
    private $senderid;

    /**
     * @var \MyApp\UserBundle\Entity\Conversation
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\Conversation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="conversationId", referencedColumnName="conversationId")
     * })
     */
    private $conversationid;


}


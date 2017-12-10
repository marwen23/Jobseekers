<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group
 *
 * @ORM\Table(name="group", indexes={@ORM\Index(name="groupCreatorId", columns={"groupCreatorId"})})
 * @ORM\Entity
 */
class Group
{
    /**
     * @var integer
     *
     * @ORM\Column(name="groupId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="groupName", type="string", length=20, nullable=false)
     */
    private $groupname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=20, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="topic", type="string", length=20, nullable=false)
     */
    private $topic;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="groupCreatorId", referencedColumnName="id")
     * })
     */
    private $groupcreatorid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MyApp\UserBundle\Entity\User", mappedBy="groupid")
     */
    private $userid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userid = new \Doctrine\Common\Collections\ArrayCollection();
    }

}


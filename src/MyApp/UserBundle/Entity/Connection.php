<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MyApp\UserBundle\Entity\User;

/**
 * Connection
 *
 * @ORM\Table(name="connection", indexes={@ORM\Index(name="userOneId", columns={"activeUserId"}), @ORM\Index(name="userTwoId", columns={"passiveUserId"})})
 * @ORM\Entity
 */
class Connection
{
    /**
     * @var integer
     *
     * @ORM\Column(name="connectionId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $connectionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activeUserId", referencedColumnName="id")
     * })
     */
    private $activeuserid;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="passiveUserId", referencedColumnName="id")
     * })
     */
    private $passiveuserid;

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \User
     */
    public function getActiveuserid()
    {
        return $this->activeuserid;
    }

    /**
     * @return int
     */
    public function getConnectionid()
    {
        return $this->connectionid;
    }

    /**
     * @return \User
     */
    public function getPassiveuserid()
    {
        return $this->passiveuserid;
    }

    /**
     * @param \User $activeuserid
     */
    public function setActiveuserid($activeuserid)
    {
        $this->activeuserid = $activeuserid;
    }

    /**
     * @param int $connectionid
     */
    public function setConnectionid($connectionid)
    {
        $this->connectionid = $connectionid;
    }

    /**
     * @param \User $passiveuserid
     */
    public function setPassiveuserid($passiveuserid)
    {
        $this->passiveuserid = $passiveuserid;
    }



}


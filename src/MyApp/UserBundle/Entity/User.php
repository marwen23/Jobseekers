<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;



/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    protected $password;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=50, nullable=false)
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=50, nullable=false)
     */
    protected $lastname;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="paypalAddress", type="string", length=50, nullable=false)
     */
    protected $paypaladdress;

    /**
     * @var string
     *
     * @ORM\Column(name="birthdate", type="string", length=50, nullable=false)
     */
    protected $birthdate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MyApp\UserBundle\Entity\Group", inversedBy="id")
     * @ORM\JoinTable(name="membership",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="groupId", referencedColumnName="groupId")
     *   }
     * )
     */
    protected $groupid;




    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->groupid = new \Doctrine\Common\Collections\ArrayCollection();
    }








    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set paypaladdress
     *
     * @param string $paypaladdress
     *
     * @return User
     */
    public function setPaypaladdress($paypaladdress)
    {
        $this->paypaladdress = $paypaladdress;

        return $this;
    }

    /**
     * Get paypaladdress
     *
     * @return string
     */
    public function getPaypaladdress()
    {
        return $this->paypaladdress;
    }

    /**
     * Set birthdate
     *
     * @param string $birthdate
     *
     * @return User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return string
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Add groupid
     *
     * @param \MyApp\UserBundle\Entity\Group $groupid
     *
     * @return User
     */
    public function addGroupid(\MyApp\UserBundle\Entity\Group $groupid)
    {
        $this->groupid[] = $groupid;

        return $this;
    }

    /**
     * Remove groupid
     *
     * @param \MyApp\UserBundle\Entity\Group $groupid
     */
    public function removeGroupid(\MyApp\UserBundle\Entity\Group $groupid)
    {
        $this->groupid->removeElement($groupid);
    }

    /**
     * Get groupid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupid()
    {
        return $this->groupid;
    }
}

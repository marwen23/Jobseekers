<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table(name="skill", indexes={@ORM\Index(name="userId", columns={"userId"})})
 * @ORM\Entity(repositoryClass="MyApp\UserBundle\Entity\SkillRepository")
 */
class Skill
{
    /**
     * @var integer
     *
     * @ORM\Column(name="skillId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skillid;

    /**
     * @var string
     *
     * @ORM\Column(name="skillName", type="string", length=20, nullable=false)
     */
    private $skillname;

    /**
     * @var integer
     *
     * @ORM\Column(name="skillPoints", type="integer", nullable=false)
     */
    private $skillpoints;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="id")
     * })
     */
    private $userid;



    /**
     * Get skillid
     *
     * @return integer
     */
    public function getSkillid()
    {
        return $this->skillid;
    }

    /**
     * Set skillname
     *
     * @param string $skillname
     *
     * @return Skill
     */
    public function setSkillname($skillname)
    {
        $this->skillname = $skillname;

        return $this;
    }

    /**
     * Get skillname
     *
     * @return string
     */
    public function getSkillname()
    {
        return $this->skillname;
    }

    /**
     * Set skillpoints
     *
     * @param integer $skillpoints
     *
     * @return Skill
     */
    public function setSkillpoints($skillpoints)
    {
        $this->skillpoints = $skillpoints;

        return $this;
    }

    /**
     * Get skillpoints
     *
     * @return integer
     */
    public function getSkillpoints()
    {
        return $this->skillpoints;
    }

    /**
     * Set userid
     *
     * @param \MyApp\UserBundle\Entity\User $userid
     *
     * @return Skill
     */
    public function setUserid(\MyApp\UserBundle\Entity\User $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \MyApp\UserBundle\Entity\User
     */
    public function getUserid()
    {
        return $this->userid;
    }

}

<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table(name="application", indexes={@ORM\Index(name="jobId", columns={"jobId"}), @ORM\Index(name="userId", columns={"userId"})})
 * @ORM\Entity
 */
class Application
{
    /**
     * @var integer
     *
     * @ORM\Column(name="applicationId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $applicationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50, nullable=false)
     */
    private $date;

    /**
     * @var \MyApp\UserBundle\Entity\Job
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\Job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobId", referencedColumnName="jobId")
     * })
     */
    private $jobid;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="userId")
     * })
     */
    private $userid;


}


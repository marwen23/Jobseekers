<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table(name="job", indexes={@ORM\Index(name="jobCreatorId", columns={"jobCreatorId"})})
 * @ORM\Entity
 */
class Job
{
    /**
     * @var integer
     *
     * @ORM\Column(name="jobId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $jobid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=50, nullable=false)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=50, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=50, nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=50, nullable=false)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="jobDescription", type="text", length=65535, nullable=false)
     */
    private $jobdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="JobRequirements", type="text", length=65535, nullable=false)
     */
    private $jobrequirements;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50, nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag", type="integer", nullable=false)
     */
    private $flag;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobCreatorId", referencedColumnName="userId")
     * })
     */
    private $jobcreatorid;


}


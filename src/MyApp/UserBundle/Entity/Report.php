<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Report
 *
 * @ORM\Table(name="report", indexes={@ORM\Index(name="reportedArticleId", columns={"reportedArticleId"}), @ORM\Index(name="reportedCommentId", columns={"reportedCommentId"}), @ORM\Index(name="reportedProfileId", columns={"reportedProfileId"}), @ORM\Index(name="reportedJobId", columns={"reportedJobId"}), @ORM\Index(name="reporterId", columns={"reporterId"})})
 * @ORM\Entity
 */
class Report
{
    /**
     * @var integer
     *
     * @ORM\Column(name="reportId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportid;

    /**
     * @var string
     *
     * @ORM\Column(name="reportType", type="string", length=2000, nullable=false)
     */
    private $reporttype;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=2000, nullable=false)
     */
    private $date;

    /**
     * @var \MyApp\UserBundle\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reportedArticleId", referencedColumnName="articleId")
     * })
     */
    private $reportedarticleid;

    /**
     * @var \MyApp\UserBundle\Entity\Comment
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\Comment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reportedCommentId", referencedColumnName="commentId")
     * })
     */
    private $reportedcommentid;

    /**
     * @var \MyApp\UserBundle\Entity\Profile
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\Profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reportedProfileId", referencedColumnName="profileId")
     * })
     */
    private $reportedprofileid;

    /**
     * @var \MyApp\UserBundle\Entity\Job
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\Job")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reportedJobId", referencedColumnName="jobId")
     * })
     */
    private $reportedjobid;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reporterId", referencedColumnName="userId")
     * })
     */
    private $reporterid;


}


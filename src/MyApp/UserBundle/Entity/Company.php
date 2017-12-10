<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company", indexes={@ORM\Index(name="companyCreatorId", columns={"companyCreatorId"})})
 * @ORM\Entity
 */
class Company
{
    /**
     * @var integer
     *
     * @ORM\Column(name="companyId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $companyid;

    /**
     * @var string
     *
     * @ORM\Column(name="companyName", type="string", length=20, nullable=false)
     */
    private $companyname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=20, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=50, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="mainCompanyIndustry", type="string", length=50, nullable=false)
     */
    private $maincompanyindustry;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=20, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=20, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=256, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="blob", length=65535, nullable=false)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="companySpecialities", type="integer", nullable=false)
     */
    private $companyspecialities;

    /**
     * @var \MyApp\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="MyApp\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="companyCreatorId", referencedColumnName="userId")
     * })
     */
    private $companycreatorid;


}


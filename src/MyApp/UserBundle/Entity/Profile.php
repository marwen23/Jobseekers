<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 *
 * @ORM\Table(name="profile")
 * @ORM\Entity
 */
class Profile
{

    /**
     * @var string
     *
     * @ORM\Column(name="professionalField", type="string", length=20, nullable=true)
     */
    private $professionalfield;

    /**
     * @var string
     *
     * @ORM\Column(name="currentJob", type="string", length=20, nullable=true)
     */
    private $currentjob;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", length=65535, nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=50, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=50, nullable=true)
     */
    private $cv;

    /**
     * @var string
     *
     * @ORM\Column(name="interests", type="text", length=65535, nullable=true)
     */
    private $interests;

    /**
     * @var integer
     *
     * @ORM\Column(name="profilePoints", type="integer", nullable=true)
     */
    private $profilepoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="flag", type="integer", nullable=true)
     */
    private $flag;

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="text", length=65535, nullable=true)
     */
    private $education;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="text", length=65535, nullable=true)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", length=65535, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="contactEmail", type="string", length=50, nullable=true)
     */
    private $contactemail;

    /**
     * @var integer
     *
     * @ORM\Column(name="profileId", type="integer", nullable=true)
     * @ORM\Id
     */
    private $profileid;

    /**
     * @Assert\File(maxSize="6000k")
     */
    private $file;

    /**
     * Set profileid
     *
     * @param integer $profileid
     *
     * @return Profile
     */
    public function setProfileid($profileid)
    {
        $this->profileid = $profileid;

        return $this;
    }


    /**
     * Get profileid
     *
     * @return integer
     */
    public function getProfileid()
    {
        return $this->profileid;
    }

    /**
     * Set professionalfield
     *
     * @param string $professionalfield
     *
     * @return Profile
     */
    public function setProfessionalfield($professionalfield)
    {
        $this->professionalfield = $professionalfield;

        return $this;
    }

    /**
     * Get professionalfield
     *
     * @return string
     */
    public function getProfessionalfield()
    {
        return $this->professionalfield;
    }

    /**
     * Set currentjob
     *
     * @param string $currentjob
     *
     * @return Profile
     */
    public function setCurrentjob($currentjob)
    {
        $this->currentjob = $currentjob;

        return $this;
    }

    /**
     * Get currentjob
     *
     * @return string
     */
    public function getCurrentjob()
    {
        return $this->currentjob;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Profile
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set summary
     *
     * @param string $summary
     *
     * @return Profile
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Profile
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set cv
     *
     * @param string $cv
     *
     * @return Profile
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return string
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set interests
     *
     * @param string $interests
     *
     * @return Profile
     */
    public function setInterests($interests)
    {
        $this->interests = $interests;

        return $this;
    }

    /**
     * Get interests
     *
     * @return string
     */
    public function getInterests()
    {
        return $this->interests;
    }

    /**
     * Set profilepoints
     *
     * @param integer $profilepoints
     *
     * @return Profile
     */
    public function setProfilepoints($profilepoints)
    {
        $this->profilepoints = $profilepoints;

        return $this;
    }

    /**
     * Get profilepoints
     *
     * @return integer
     */
    public function getProfilepoints()
    {
        return $this->profilepoints;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     *
     * @return Profile
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return integer
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set education
     *
     * @param string $education
     *
     * @return Profile
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return Profile
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Profile
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set contactemail
     *
     * @param string $contactemail
     *
     * @return Profile
     */
    public function setContactemail($contactemail)
    {
        $this->contactemail = $contactemail;

        return $this;
    }

    /**
     * Get contactemail
     *
     * @return string
     */
    public function getContactemail()
    {
        return $this->contactemail;
    }
}

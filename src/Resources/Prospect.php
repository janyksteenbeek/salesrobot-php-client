<?php

namespace Janyksteenbeek\Salesrobot\Resources;

class Prospect implements \JsonSerializable
{
    public function __construct(
        private string $campaignName, 
        private string $profileUrl, 
        private ?string $firstName = null,
        private ?string $lastName = null,
        private ?string $salesNavUrl = null,
        private ?string $companyName = null,
        private ?string $jobTitle = null,
        private ?string $isPremium = null,
        private ?string $connectionLevel = null,
        private ?string $personalWebsite = null,
        private ?string $phoneNumber = null,
        private ?string $emailId = null,
        private ?string $mostRecentEducation = null,
        private ?string $topVolunteerExperience = null,
        private ?string $topCertification = null,
        private ?string $topRecommender = null,
        private ?string $topSkill = null,
        private ?string $location = null) {
    }

    /**
     * @return string
     */
    public function getCampaignName(): string
    {
        return $this->campaignName;
    }

    /**
     * @param string $campaignName
     */
    public function setCampaignName(string $campaignName): void
    {
        $this->campaignName = $campaignName;
    }

    /**
     * @return string
     */
    public function getProfileUrl(): string
    {
        return $this->profileUrl;
    }

    /**
     * @param string $profileUrl
     */
    public function setProfileUrl(string $profileUrl): void
    {
        $this->profileUrl = $profileUrl;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getSalesNavUrl(): ?string
    {
        return $this->salesNavUrl;
    }

    /**
     * @param string|null $salesNavUrl
     */
    public function setSalesNavUrl(?string $salesNavUrl): void
    {
        $this->salesNavUrl = $salesNavUrl;
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @param string|null $companyName
     */
    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return string|null
     */
    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    /**
     * @param string|null $jobTitle
     */
    public function setJobTitle(?string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * @return string|null
     */
    public function getIsPremium(): ?string
    {
        return $this->isPremium;
    }

    /**
     * @param string|null $isPremium
     */
    public function setIsPremium(?string $isPremium): void
    {
        $this->isPremium = $isPremium;
    }

    /**
     * @return string|null
     */
    public function getConnectionLevel(): ?string
    {
        return $this->connectionLevel;
    }

    /**
     * @param string|null $connectionLevel
     */
    public function setConnectionLevel(?string $connectionLevel): void
    {
        $this->connectionLevel = $connectionLevel;
    }

    /**
     * @return string|null
     */
    public function getPersonalWebsite(): ?string
    {
        return $this->personalWebsite;
    }

    /**
     * @param string|null $personalWebsite
     */
    public function setPersonalWebsite(?string $personalWebsite): void
    {
        $this->personalWebsite = $personalWebsite;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getEmailId(): ?string
    {
        return $this->emailId;
    }

    public function setEmailId(?string $emailId): void
    {
        $this->emailId = $emailId;
    }

    public function getMostRecentEducation(): ?string
    {
        return $this->mostRecentEducation;
    }

    public function setMostRecentEducation(?string $mostRecentEducation): void
    {
        $this->mostRecentEducation = $mostRecentEducation;
    }

    public function getTopVolunteerExperience(): ?string
    {
        return $this->topVolunteerExperience;
    }

    public function setTopVolunteerExperience(?string $topVolunteerExperience): void
    {
        $this->topVolunteerExperience = $topVolunteerExperience;
    }

    public function getTopCertification(): ?string
    {
        return $this->topCertification;
    }

    public function setTopCertification(?string $topCertification): void
    {
        $this->topCertification = $topCertification;
    }

    public function getTopRecommender(): ?string
    {
        return $this->topRecommender;
    }

    public function setTopRecommender(?string $topRecommender): void
    {
        $this->topRecommender = $topRecommender;
    }

    public function getTopSkill(): ?string
    {
        return $this->topSkill;
    }

    public function setTopSkill(?string $topSkill): void
    {
        $this->topSkill = $topSkill;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): void
    {
        $this->location = $location;
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}
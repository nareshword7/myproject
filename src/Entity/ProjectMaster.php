<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectMasterRepository")
 */
class ProjectMaster
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ProjectName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $StartingDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CompletionDate;

    /**
     * @ORM\Column(type="string", length=510, nullable=true)
     */
    private $Remarks;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjectName(): ?string
    {
        return $this->ProjectName;
    }

    public function setProjectName(string $ProjectName): self
    {
        $this->ProjectName = $ProjectName;

        return $this;
    }

    public function getStartingDate(): ?\DateTimeInterface
    {
        return $this->StartingDate;
    }

    public function setStartingDate(\DateTimeInterface $StartingDate): self
    {
        $this->StartingDate = $StartingDate;

        return $this;
    }

    public function getCompletionDate(): ?\DateTimeInterface
    {
        return $this->CompletionDate;
    }

    public function setCompletionDate(\DateTimeInterface $CompletionDate): self
    {
        $this->CompletionDate = $CompletionDate;

        return $this;
    }

    public function getRemarks(): ?string
    {
        return $this->Remarks;
    }

    public function setRemarks(?string $Remarks): self
    {
        $this->Remarks = $Remarks;

        return $this;
    }
}

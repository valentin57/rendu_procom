<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProdTimeRepository")
 */
class ProdTime
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $time;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projects", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, name="project_id")
     */
    private $project;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Employees", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, name="employee_id")
     */
    private $employee;

    /**
     * @ORM\Column(type="float")
     */
    private $cost;

    public function __construct()
    {
      $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTime(): ?int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getProject(): ?Projects
    {
        return $this->project;
    }

    public function setProject(Projects $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getEmployee(): ?Employees
    {
        return $this->employee;
    }

    public function setEmployee(Employees $employee): self
    {
        $this->employee = $employee;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }
}

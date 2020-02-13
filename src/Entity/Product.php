<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *     minMessage = "Too short, {{ limit }} characters long",
     *     maxMessage = "The name cannot be longer than {{ limit }} characters"
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *     minMessage = "Too short, {{ limit }} characters long",
     *     maxMessage = "The family cannot be longer than {{ limit }} characters"
     * )
     */
    private $family;

    /**
     * @ORM\Column(type="string")
     ** @Assert\Length(
     *      min = 3,
     *      max = 50,
     *     minMessage = "Too short, {{ limit }} characters long",
     *     maxMessage = "The type cannot be longer than {{ limit }} characters"
     * )
     */
    private $type;

    /**
     * @ORM\Column(type="date")
     */
    private $expireAt;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_open;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="Product_buy")
     * @ORM\JoinColumn(nullable=false)
     */
    private $RegisterBy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFamily(): ?string
    {
        return $this->family;
    }

    public function setFamily(string $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getExpireAt(): ?\DateTimeInterface
    {
        return $this->expireAt;
    }

    public function setExpireAt(\DateTimeInterface $expireAt): self
    {
        $this->expireAt = $expireAt;

        return $this;
    }

    public function getDateOpen(): ?\DateTimeInterface
    {
        return $this->Date_open;
    }

    public function setDateOpen(\DateTimeInterface $Date_open): self
    {
        $this->Date_open = $Date_open;

        return $this;
    }

    public function getRegisterBy(): ?User
    {
        return $this->RegisterBy;
    }

    public function setRegisterBy(?User $RegisterBy): self
    {
        $this->RegisterBy = $RegisterBy;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Product", mappedBy="RegisterBy")
     */
    private $Product_buy;

    public function __construct()
    {
        $this->Product_buy = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->Name;
        // to show the id of the Category in the select
        // return $this->id;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProductBuy(): Collection
    {
        return $this->Product_buy;
    }

    public function addProductBuy(Product $productBuy): self
    {
        if (!$this->Product_buy->contains($productBuy)) {
            $this->Product_buy[] = $productBuy;
            $productBuy->setRegisterBy($this);
        }

        return $this;
    }

    public function removeProductBuy(Product $productBuy): self
    {
        if ($this->Product_buy->contains($productBuy)) {
            $this->Product_buy->removeElement($productBuy);
            // set the owning side to null (unless already changed)
            if ($productBuy->getRegisterBy() === $this) {
                $productBuy->setRegisterBy(null);
            }
        }

        return $this;
    }
}

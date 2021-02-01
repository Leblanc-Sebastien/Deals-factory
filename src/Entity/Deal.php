<?php

namespace App\Entity;

use App\Repository\DealRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DealRepository::class)
 */
class Deal implements FormTypeInterface
{
  
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Url
     */
    private $link;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=2)
     * @Assert\NotBlank
     */
    private $newPrice;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=2)
     * @Assert\NotBlank
     * @Assert\GreaterThan(propertyPath= "newPrice", message = "L'ancien prix doit être superieur au nouveau prix !")
     */
    private $oldPrice;

    /**
     * @ORM\Column(type="decimal", precision=7, scale=2)
     */
    private $shippingCost;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $description;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\GreaterThan("today")
     */
    private $startDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\GreaterThan(propertyPath= "startDate", message="La date de fin ne peut être avant la date de début ;)")
     */
    private $endDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="deals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="deals")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank
     */
    private $categorie;

    /**
     * @ORM\Column(type="decimal", precision=3, scale=0)
     */
    private $percent;

    /**
     * @ORM\OneToMany(targetEntity=Comments::class, mappedBy="deal", orphanRemoval=true)
     */
    private $comments;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getNewPrice(): ?string
    {
        return $this->newPrice;
    }

    public function setNewPrice(string $newPrice): self
    {
        $this->newPrice = $newPrice;

        return $this;
    }

    public function getOldPrice(): ?string
    {
        return $this->oldPrice;
    }

    public function setOldPrice(string $oldPrice): self
    {
        $this->oldPrice = $oldPrice;

        return $this;
    }

    public function getShippingCost(): ?string
    {
        return $this->shippingCost;
    }

    public function setShippingCost(string $shippingCost): self
    {
        $this->shippingCost = $shippingCost;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getPercent(): ?string
    {
        return $this->percent;
    }

    public function setPercent(string $percent): self
    {
        $this->percent = $percent;

        return $this;
    }

    public function buildForm(FormBuilderInterface $builder, array $options){}
    public function buildView(FormView $view, FormInterface $form, array $options){}
    public function finishView(FormView $view, FormInterface $form, array $options){}
    public function configureOptions(OptionsResolver $resolver){}
    public function getBlockPrefix(){}
    public function getParent(){}

    /**
     * @return Collection|Comments[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comments $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setDeal($this);
        }

        return $this;
    }

    public function removeComment(Comments $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getDeal() === $this) {
                $comment->setDeal(null);
            }
        }

        return $this;
    }

    
}

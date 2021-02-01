<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(
 *  fields = {"email"}, 
 *  message = "Cet email est déja utilisé !"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min = 3, max = 20, minMessage = "Votre pseudo doit faire minimum 3 caractères", maxMessage = "Votre message doit faire maximum 20 caractères")
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Email(message = " Votre email n'est pas valide")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(min = 8, minMessage = "Votre mot de passe est trop court => 8 caractères minimum !")
     * @Assert\EqualTo(propertyPath= "confirmPassword", message = "Vos mots de passe doivent correspondre !")
     */
    private $password;

     /**
     * @Assert\NotBlank
     * @Assert\Length(min = 8, minMessage = "Votre mot de passe est trop court => 8 caractères minimum !")
     */
    private $confirmPassword;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\Type("\DateTime")
     */
    private $createdAt;

    /**
     * @ORM\OneToMany(targetEntity=Deal::class, mappedBy="user")
     */
    private $deals;

    /**
     * @ORM\OneToMany(targetEntity=Comments::class, mappedBy="user", orphanRemoval=true)
     */
    private $comments;

    public function __construct()
    {
        $this->deals = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirmPassword;
    }

    public function setConfirmPassword(string $confirmPassword): self
    {
        $this->confirmPassword = $confirmPassword;

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

    /**
     * @return Collection|Deal[]
     */
    public function getDeals(): Collection
    {
        return $this->deals;
    }

    public function addDeal(Deal $deal): self
    {
        if (!$this->deals->contains($deal)) {
            $this->deals[] = $deal;
            $deal->setUser($this);
        }

        return $this;
    }

    public function removeDeal(Deal $deal): self
    {
        if ($this->deals->removeElement($deal)) {
            // set the owning side to null (unless already changed)
            if ($deal->getUser() === $this) {
                $deal->setUser(null);
            }
        }

        return $this;
    }
    public function getRoles(){
        return ['ROLE_USER'];
    }
    public function getSalt(){}
    
    public function getUsername(): ?string
    {
        return $this->pseudo;
    }

    public function eraseCredentials()
    {
        
    }

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
            $comment->setUser($this);
        }

        return $this;
    }

    public function removeComment(Comments $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getUser() === $this) {
                $comment->setUser(null);
            }
        }

        return $this;
    }

}

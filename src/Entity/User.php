<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 * fields={"username"},
 * message="Ce pseudo est déjà utilisé."
 * )
 * @UniqueEntity(
 *  fields={"email"},
 *  message="Cet email est déjà utilisé"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=2, max=50,
     * minMessage="Votre pseudo doit contenir au moins 2 caractères.",
     * maxMessage="Votre pseudo doit contenir moins de 50 caractères.")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5,
     * minMessage="Votre mot de passe doit contenir au moins 5 caractères.")
     */
    private $password;

    /**
     * @Assert\Length(min=5,
     * minMessage="Votre mot de passe doit contenir au moins 5 caractères.")
     * @Assert\EqualTo(propertyPath="password",
     * message="Les mots de passe saisies sont différents")
     */
    private $passwordVerification;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="Cette adresse email n'est pas valide.")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profile_picture;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $activation_token;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $reset_token;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="user", orphanRemoval=true)
     */
    private $comments;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->created_at = new DateTime();
        $this->comments   = new ArrayCollection();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return $this
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPasswordVerification(): ?string
    {
        return $this->passwordVerification;
    }

    /**
     * @param string $passwordVerification
     *
     * @return $this
     */
    public function setPasswordVerification(string $passwordVerification): self
    {
        $this->passwordVerification = $passwordVerification;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRoles(): array
    {
        return ['ROLE_USER'];
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->created_at;
    }

    /**
     * @param DateTimeInterface $created_at
     *
     * @return $this
     */
    public function setCreatedAt(DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProfilePicture(): ?string
    {
        return $this->profile_picture;
    }

    /**
     * @param string|null $profile_picture
     *
     * @return $this
     */
    public function setProfilePicture(?string $profile_picture): self
    {
        $this->profile_picture = $profile_picture;

        return $this;
    }

    /**
     * @return void
     */
    public function eraseCredentials(): void
    {

    }

    /**
     * @return string|void|null
     */
    public function getSalt(): void
    {

    }

    /**
     * @return string|null
     */
    public function getActivationToken(): ?string
    {
        return $this->activation_token;
    }

    /**
     * @param string|null $activation_token
     *
     * @return $this
     */
    public function setActivationToken(?string $activation_token): self
    {
        $this->activation_token = $activation_token;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getResetToken(): ?string
    {
        return $this->reset_token;
    }

    /**
     * @param string|null $reset_token
     *
     * @return $this
     */
    public function setResetToken(?string $reset_token): self
    {
        $this->reset_token = $reset_token;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    /**
     * @param Comment $comment
     *
     * @return $this
     */
    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setUser($this);
        }

        return $this;
    }

    /**
     * @param Comment $comment
     *
     * @return $this
     */
    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getUser() === $this) {
                $comment->setUser(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\PictureRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Picture
 *
 * @ORM\Table(name="picture", indexes={@ORM\Index(name="IDX_16DB4F89A674A03E", columns={"tricks_id_id"}), @ORM\Index(name="IDX_16DB4F899D86650F", columns={"user_id_id"})})
 * @ORM\Entity
 */
class Picture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=30, nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=100, nullable=false)
     */
    private $path;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $userId;

    /**
     * @var Tricks
     *
     * @ORM\ManyToOne(targetEntity="Tricks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tricks_id_id", referencedColumnName="id", nullable=false)
     * })
     */
    private $tricksId;

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
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param string $author
     *
     * @return $this
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTimeInterface $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return User|null
     */
    public function getUserId(): ?User
    {
        return $this->userId;
    }

    /**
     * @param User|null $userId
     *
     * @return $this
     */
    public function setUserId(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return Tricks|null
     */
    public function getTricksId(): ?Tricks
    {
        return $this->tricksId;
    }

    /**
     * @param Tricks|null $tricksId
     *
     * @return $this
     */
    public function setTricksId(?Tricks $tricksId): self
    {
        $this->tricksId = $tricksId;

        return $this;
    }
}

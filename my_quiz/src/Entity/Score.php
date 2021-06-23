<?php

namespace App\Entity;

use App\Repository\ScoreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScoreRepository::class)
 */
class Score
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="scores")
     */
    private $joueur;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $score;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $quiz_id;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJoueur(): ?user
    {
        return $this->joueur;
    }

    public function setJoueur(?int $joueur): self
    {
        $this->joueur = $joueur;

        return $this;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }


    public function getQuizId(): ?int
    {
        return $this->quiz_id;
    }

    public function setQuizId(int $quiz_id): self
    {
        $this->quiz_id = $quiz_id;

        return $this;
    }

}

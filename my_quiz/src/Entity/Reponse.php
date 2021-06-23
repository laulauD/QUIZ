<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponseRepository::class)
 */
class Reponse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=questions::class, inversedBy="reponses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_question;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $reponse_expected;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdQuestion(): ?questions
    {
        return $this->id_question;
    }

    public function setIdQuestion(?questions $id_question): self
    {
        $this->id_question = $id_question;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getReponseExpected(): ?bool
    {
        return $this->reponse_expected;
    }

    public function setReponseExpected(bool $reponse_expected): self
    {
        $this->reponse_expected = $reponse_expected;

        return $this;
    }
}

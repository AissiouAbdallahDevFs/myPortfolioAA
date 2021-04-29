<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SkillRepository::class)
 */
class Skill
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Langage;

    /**
     * @ORM\Column(type="integer")
     */
    private $Level;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangage(): ?string
    {
        return $this->Langage;
    }

    public function setLangage(string $Langage): self
    {
        $this->Langage = $Langage;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->Level;
    }

    public function setLevel(int $Level): self
    {
        $this->Level = $Level;

        return $this;
    }
}

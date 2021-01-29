<?php

namespace App\Entity;

use App\Repository\ConeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConeRepository::class)
 */
class Cone
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $rayon;

    /**
     * @ORM\Column(type="integer")
     */
    private $hauteur;
    private $volume;

    public function __construct($rayon, $hauteur){
        $this->rayon = $rayon;
        $this->hauteur = $hauteur;
    }

    public function getRayon(): ?int
    {
        return $this->rayon;
    }

    public function setRayon(int $rayon): self
    {
        $this->rayon = $rayon;

        return $this;
    }

    public function getHauteur(): ?int
    {
        return $this->hauteur;
    }

    public function setHauteur(int $hauteur): self
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    public function getVolume(){
        $volume = (($this->rayon**2) * $this->hauteur * pi())/3;
        return $volume;
    }

}

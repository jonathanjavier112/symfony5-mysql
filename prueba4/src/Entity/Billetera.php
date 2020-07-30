<?php

namespace App\Entity;

use App\Repository\BilleteraRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BilleteraRepository::class)
 */
class Billetera
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $saldo;

    /**
    * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="billetera")
    */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        return $this->$id;
    }

    public function getSaldo(): ?float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function getDocumento(): ?string
    {
        return $this->documento;
    }
    
}

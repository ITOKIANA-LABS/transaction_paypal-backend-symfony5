<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TransactionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=TransactionRepository::class)
 */
class Transaction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $order_paypal_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $order_origin_app;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderPaypalId(): ?string
    {
        return $this->order_paypal_id;
    }

    public function setOrderPaypalId(?string $order_paypal_id): self
    {
        $this->order_paypal_id = $order_paypal_id;

        return $this;
    }

    public function getOrderOriginApp(): ?string
    {
        return $this->order_origin_app;
    }

    public function setOrderOriginApp(?string $order_origin_app): self
    {
        $this->order_origin_app = $order_origin_app;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}

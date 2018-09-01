<?php

namespace FilipSedivy\DropshippingCz\Entity\Services;

use FilipSedivy\DropshippingCz\Entity\IEntity;

class Delivery implements IEntity
{
    /** @var */
    private $id;

    /** @var */
    private $name;

    /** @var */
    private $price;

    /** @var */
    private $price_vat;

    /** @var */
    private $vat;

    /** @var */
    private $has_place;

    /** @var */
    private $permitted_payment;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * @return mixed
     */
    public function getPriceVat()
    {
        return $this->price_vat;
    }


    /**
     * @return mixed
     */
    public function getVat()
    {
        return $this->vat;
    }


    /**
     * @return mixed
     */
    public function getHasPlace()
    {
        return $this->has_place;
    }


    /**
     * @return mixed
     */
    public function getPermittedPayment()
    {
        return $this->permitted_payment;
    }

    public function toArray(): array
    {
        // TODO: Implement toArray() method.
    }
}
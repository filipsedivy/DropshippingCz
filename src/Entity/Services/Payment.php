<?php

namespace FilipSedivy\DropshippingCz\Entity\Services;

use FilipSedivy\DropshippingCz\Entity\IEntity;

class Payment implements IEntity
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
    private $permitted_delivery;


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
    public function getPermittedDelivery()
    {
        return $this->permitted_delivery;
    }




    public function toArray(): array
    {
        // TODO: Implement toArray() method.
    }
}
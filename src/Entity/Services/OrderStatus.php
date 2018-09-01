<?php

namespace FilipSedivy\DropshippingCz\Entity\Services;

use FilipSedivy\DropshippingCz\Entity\IEntity;

class OrderStatus implements IEntity
{
    /** @var */
    private $id;

    /** @var */
    private $name;

    /** @var */
    private $active;


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
    public function getActive()
    {
        return $this->active;
    }


    public function toArray(): array
    {
        return [];
    }
}
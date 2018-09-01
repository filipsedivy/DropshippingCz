<?php

namespace FilipSedivy\DropshippingCz\Entity\Services;

use FilipSedivy\DropshippingCz\Entity\IEntity;

class ProductCategory implements IEntity
{
    /** @var */
    private $id;

    /** @var */
    private $parent;

    /** @var */
    private $name;


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
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



    public function toArray(): array
    {
        // TODO: Implement toArray() method.
    }
}
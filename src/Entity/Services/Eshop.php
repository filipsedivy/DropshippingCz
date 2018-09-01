<?php

namespace FilipSedivy\DropshippingCz\Entity\Services;

use FilipSedivy\DropshippingCz\Entity\IEntity;

class Eshop implements IEntity
{
    /** @var string */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $www;

    /** @var string */
    private $product_xml;


    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


    /**
     * @return string
     */
    public function getWww(): string
    {
        return $this->www;
    }


    /**
     * @return string
     */
    public function getProductXml(): string
    {
        return $this->product_xml;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id'          => $this->getId(),
            'name'        => $this->getName(),
            'www'         => $this->getWww(),
            'product_xml' => $this->getProductXml()
        ];
    }
}
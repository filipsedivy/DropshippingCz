<?php

namespace FilipSedivy\DropshippingCz\Entity\Services;

use FilipSedivy\DropshippingCz\Entity\IEntity;

class Product implements IEntity
{
    /** @var */
    private $id;

    /** @var */
    private $group_id;

    /** @var */
    private $manufacturer_id;

    /** @var */
    private $name;

    /** @var */
    private $product_name;

    /** @var */
    private $variant_name;

    /** @var */
    private $description;

    /** @var */
    private $description_html;

    /** @var */
    private $code;

    /** @var */
    private $ext_code;

    /** @var */
    private $ean;

    /** @var */
    private $price_retail;

    /** @var */
    private $price_retail_vat;

    /** @var */
    private $price_wholesale;

    /** @var */
    private $price_wholesale_vat;

    /** @var */
    private $vat;

    /** @var */
    private $warehouse_quantity;

    /** @var */
    private $delivery_date;

    /** @var */
    private $preview_image;

    /** @var */
    private $categories;

    /** @var */
    private $images;

    /** @var */
    private $parameters;


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
    public function getGroupId()
    {
        return $this->group_id;
    }


    /**
     * @return mixed
     */
    public function getManufacturerId()
    {
        return $this->manufacturer_id;
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
    public function getProductName()
    {
        return $this->product_name;
    }


    /**
     * @return mixed
     */
    public function getVariantName()
    {
        return $this->variant_name;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * @return mixed
     */
    public function getDescriptionHtml()
    {
        return $this->description_html;
    }


    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }


    /**
     * @return mixed
     */
    public function getExtCode()
    {
        return $this->ext_code;
    }


    /**
     * @return mixed
     */
    public function getEan()
    {
        return $this->ean;
    }


    /**
     * @return mixed
     */
    public function getPriceRetail()
    {
        return $this->price_retail;
    }


    /**
     * @return mixed
     */
    public function getPriceRetailVat()
    {
        return $this->price_retail_vat;
    }


    /**
     * @return mixed
     */
    public function getPriceWholesale()
    {
        return $this->price_wholesale;
    }


    /**
     * @return mixed
     */
    public function getPriceWholesaleVat()
    {
        return $this->price_wholesale_vat;
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
    public function getWarehouseQuantity()
    {
        return $this->warehouse_quantity;
    }


    /**
     * @return mixed
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }


    /**
     * @return mixed
     */
    public function getPreviewImage()
    {
        return $this->preview_image;
    }


    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }


    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }


    /**
     * @return mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }



    public function toArray(): array
    {
        return array();
    }
}
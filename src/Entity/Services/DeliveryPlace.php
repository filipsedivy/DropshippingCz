<?php

namespace FilipSedivy\DropshippingCz\Entity\Services;

use FilipSedivy\DropshippingCz\Entity\IEntity;

class DeliveryPlace implements IEntity
{
    /** @var */
    private $id;

    /** @var */
    private $country_id;

    /** @var */
    private $ext_id;

    /** @var */
    private $place;

    /** @var */
    private $street;

    /** @var */
    private $city;

    /** @var */
    private $zipcode;

    /** @var */
    private $name_street;

    /** @var */
    private $lat;

    /** @var */
    private $lon;

    /** @var */
    private $url;

    /** @var */
    private $label_routing;

    /** @var */
    private $note;

    /** @var */
    private $direction;

    /** @var */
    private $direction_car;

    /** @var */
    private $direction_public;

    /** @var */
    private $opening_hour_short_html;

    /** @var */
    private $opening_hour_table_html;

    /** @var */
    private $region_name;


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
    public function getCountryId()
    {
        return $this->country_id;
    }


    /**
     * @return mixed
     */
    public function getExtId()
    {
        return $this->ext_id;
    }


    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }


    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }


    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }


    /**
     * @return mixed
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }


    /**
     * @return mixed
     */
    public function getNameStreet()
    {
        return $this->name_street;
    }


    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }


    /**
     * @return mixed
     */
    public function getLon()
    {
        return $this->lon;
    }


    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * @return mixed
     */
    public function getLabelRouting()
    {
        return $this->label_routing;
    }


    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }


    /**
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }


    /**
     * @return mixed
     */
    public function getDirectionCar()
    {
        return $this->direction_car;
    }


    /**
     * @return mixed
     */
    public function getDirectionPublic()
    {
        return $this->direction_public;
    }


    /**
     * @return mixed
     */
    public function getOpeningHourShortHtml()
    {
        return $this->opening_hour_short_html;
    }


    /**
     * @return mixed
     */
    public function getOpeningHourTableHtml()
    {
        return $this->opening_hour_table_html;
    }


    /**
     * @return mixed
     */
    public function getRegionName()
    {
        return $this->region_name;
    }


    /**
     * @return array
     */
    public function toArray(): array
    {
        return [];
    }
}
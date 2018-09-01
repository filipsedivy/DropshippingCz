<?php

namespace FilipSedivy\DropshippingCz\Entity;

class CreateOrder
{
    //<editor-fold desc="Properties">

    /** @var int */
    private $eshop_id;

    /** @var string */
    private $email;

    /** @var string */
    private $phone;

    /** @var string */
    private $invoice_firstname;

    /** @var string */
    private $invoice_surname;

    /** @var string */
    private $invoice_street;

    /** @var string */
    private $invoice_city;

    /** @var string */
    private $invoice_zipcode;

    /** @var string */
    private $invoice_company;

    /** @var string */
    private $invoice_ico;

    /** @var string */
    private $invoice_dic;

    /** @var int */
    private $contact_like_invoice;

    /** @var string */
    private $contact_firstname;

    /** @var string */
    private $contact_surname;

    /** @var string */
    private $contact_street;

    /** @var string */
    private $contact_city;

    /** @var string */
    private $contact_zipcode;

    /** @var string */
    private $contact_company;

    /** @var string */
    private $contact_ico;

    /** @var string */
    private $contact_dic;

    /** @var string */
    private $note;

    /** @var int */
    private $payment_id;

    /** @var float */
    private $payment_price_vat;

    /** @var int */
    private $delivery_id;

    /** @var float */
    private $delivery_price_vat;

    /** @var int|null */
    private $delivery_place_id;

    /** @var float */
    private $delivery_place_ext_id;

    /** @var array */
    private $basket = [];

    /** @var int */
    private $test = 0;

    //</editor-fold>

    //<editor-fold desc="Getters & Setters">

    /**
     * @return int
     */
    public function getEshopId(): int
    {
        return $this->eshop_id;
    }

    /**
     * @param int $eshop_id
     *
     * @return CreateOrder
     */
    public function setEshopId(int $eshop_id): CreateOrder
    {
        $this->eshop_id = $eshop_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return CreateOrder
     */
    public function setEmail(string $email): CreateOrder
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return CreateOrder
     */
    public function setPhone(string $phone): CreateOrder
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceFirstname(): string
    {
        return $this->invoice_firstname;
    }

    /**
     * @param string $invoice_firstname
     *
     * @return CreateOrder
     */
    public function setInvoiceFirstname(string $invoice_firstname): CreateOrder
    {
        $this->invoice_firstname = $invoice_firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceSurname(): string
    {
        return $this->invoice_surname;
    }

    /**
     * @param string $invoice_surname
     *
     * @return CreateOrder
     */
    public function setInvoiceSurname(string $invoice_surname): CreateOrder
    {
        $this->invoice_surname = $invoice_surname;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceStreet(): string
    {
        return $this->invoice_street;
    }

    /**
     * @param string $invoice_street
     *
     * @return CreateOrder
     */
    public function setInvoiceStreet(string $invoice_street): CreateOrder
    {
        $this->invoice_street = $invoice_street;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceCity(): string
    {
        return $this->invoice_city;
    }

    /**
     * @param string $invoice_city
     *
     * @return CreateOrder
     */
    public function setInvoiceCity(string $invoice_city): CreateOrder
    {
        $this->invoice_city = $invoice_city;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceZipcode(): string
    {
        return $this->invoice_zipcode;
    }

    /**
     * @param string $invoice_zipcode
     *
     * @return CreateOrder
     */
    public function setInvoiceZipcode(string $invoice_zipcode): CreateOrder
    {
        $this->invoice_zipcode = $invoice_zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceCompany(): string
    {
        return $this->invoice_company;
    }

    /**
     * @param string $invoice_company
     *
     * @return CreateOrder
     */
    public function setInvoiceCompany(string $invoice_company): CreateOrder
    {
        $this->invoice_company = $invoice_company;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceIco(): string
    {
        return $this->invoice_ico;
    }

    /**
     * @param string $invoice_ico
     *
     * @return CreateOrder
     */
    public function setInvoiceIco(string $invoice_ico): CreateOrder
    {
        $this->invoice_ico = $invoice_ico;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDic(): string
    {
        return $this->invoice_dic;
    }

    /**
     * @param string $invoice_dic
     *
     * @return CreateOrder
     */
    public function setInvoiceDic(string $invoice_dic): CreateOrder
    {
        $this->invoice_dic = $invoice_dic;
        return $this;
    }

    /**
     * @return int
     */
    public function getContactLikeInvoice(): int
    {
        return $this->contact_like_invoice;
    }

    /**
     * @param int $contact_like_invoice
     *
     * @return CreateOrder
     */
    public function setContactLikeInvoice(int $contact_like_invoice): CreateOrder
    {
        $this->contact_like_invoice = $contact_like_invoice;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactFirstname(): string
    {
        return $this->contact_firstname;
    }

    /**
     * @param string $contact_firstname
     *
     * @return CreateOrder
     */
    public function setContactFirstname(string $contact_firstname): CreateOrder
    {
        $this->contact_firstname = $contact_firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactSurname(): string
    {
        return $this->contact_surname;
    }

    /**
     * @param string $contact_surname
     *
     * @return CreateOrder
     */
    public function setContactSurname(string $contact_surname): CreateOrder
    {
        $this->contact_surname = $contact_surname;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactStreet(): string
    {
        return $this->contact_street;
    }

    /**
     * @param string $contact_street
     *
     * @return CreateOrder
     */
    public function setContactStreet(string $contact_street): CreateOrder
    {
        $this->contact_street = $contact_street;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactCity(): string
    {
        return $this->contact_city;
    }

    /**
     * @param string $contact_city
     *
     * @return CreateOrder
     */
    public function setContactCity(string $contact_city): CreateOrder
    {
        $this->contact_city = $contact_city;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactZipcode(): string
    {
        return $this->contact_zipcode;
    }

    /**
     * @param string $contact_zipcode
     *
     * @return CreateOrder
     */
    public function setContactZipcode(string $contact_zipcode): CreateOrder
    {
        $this->contact_zipcode = $contact_zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactCompany(): string
    {
        return $this->contact_company;
    }

    /**
     * @param string $contact_company
     *
     * @return CreateOrder
     */
    public function setContactCompany(string $contact_company): CreateOrder
    {
        $this->contact_company = $contact_company;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactIco(): string
    {
        return $this->contact_ico;
    }

    /**
     * @param string $contact_ico
     *
     * @return CreateOrder
     */
    public function setContactIco(string $contact_ico): CreateOrder
    {
        $this->contact_ico = $contact_ico;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactDic(): string
    {
        return $this->contact_dic;
    }

    /**
     * @param string $contact_dic
     *
     * @return CreateOrder
     */
    public function setContactDic(string $contact_dic): CreateOrder
    {
        $this->contact_dic = $contact_dic;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     *
     * @return CreateOrder
     */
    public function setNote(string $note): CreateOrder
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }

    /**
     * @param mixed $payment_id
     *
     * @return CreateOrder
     */
    public function setPaymentId($payment_id)
    {
        $this->payment_id = $payment_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentPriceVat()
    {
        return $this->payment_price_vat;
    }

    /**
     * @param mixed $payment_price_vat
     *
     * @return CreateOrder
     */
    public function setPaymentPriceVat($payment_price_vat)
    {
        $this->payment_price_vat = $payment_price_vat;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryId(): int
    {
        return $this->delivery_id;
    }

    /**
     * @param int $delivery_id
     *
     * @return CreateOrder
     */
    public function setDeliveryId(int $delivery_id): CreateOrder
    {
        $this->delivery_id = $delivery_id;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryPriceVat(): float
    {
        return $this->delivery_price_vat;
    }

    /**
     * @param float $delivery_price_vat
     *
     * @return CreateOrder
     */
    public function setDeliveryPriceVat(float $delivery_price_vat): CreateOrder
    {
        $this->delivery_price_vat = $delivery_price_vat;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDeliveryPlaceId(): int
    {
        return $this->delivery_place_id;
    }

    /**
     * @param int|null $delivery_place_id
     *
     * @return CreateOrder
     */
    public function setDeliveryPlaceId(int $delivery_place_id): CreateOrder
    {
        $this->delivery_place_id = $delivery_place_id;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryPlaceExtId(): float
    {
        return $this->delivery_place_ext_id;
    }

    /**
     * @param float $delivery_place_ext_id
     *
     * @return CreateOrder
     */
    public function setDeliveryPlaceExtId(float $delivery_place_ext_id): CreateOrder
    {
        $this->delivery_place_ext_id = $delivery_place_ext_id;
        return $this;
    }

    /**
     * @return array
     */
    public function getBasket(): array
    {
        return $this->basket;
    }

    /**
     * @param array $basket
     *
     * @return CreateOrder
     */
    public function setBasket(array $basket): CreateOrder
    {
        $this->basket = $basket;
        return $this;
    }

    /**
     * @return int
     */
    public function getTest(): int
    {
        return $this->test;
    }

    /**
     * @param int $test
     *
     * @return CreateOrder
     */
    public function setTest(int $test): CreateOrder
    {
        $this->test = $test;
        return $this;
    }

    //</editor-fold>

    //<editor-fold desc="Helpers">

    /**
     * @return array
     */
    public function toArray(): array
    {
        $output = array();

        return $output;
    }

    //</editor-fold>

}

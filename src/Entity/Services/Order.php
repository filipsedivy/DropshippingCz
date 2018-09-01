<?php

namespace FilipSedivy\DropshippingCz\Entity\Services;

use FilipSedivy\DropshippingCz\Entity\IEntity;

class Order implements IEntity
{
    /** @var */
    private $id;

    /** @var */
    private $eshop_id;

    /** @var */
    private $status_id;

    /** @var */
    private $serial_number;

    /** @var */
    private $variable_symbol;

    /** @var */
    private $email;

    /** @var */
    private $phone;

    /** @var */
    private $invoice_firstname;

    /** @var */
    private $invoice_surname;

    /** @var */
    private $invoice_street;

    /** @var */
    private $invoice_city;

    /** @var */
    private $invoice_zipcode;

    /** @var */
    private $invoice_company;

    /** @var */
    private $invoice_ico;

    /** @var */
    private $invoice_dic;

    /** @var */
    private $contact_like_invoice;

    /** @var */
    private $contact_firstname;

    /** @var */
    private $contact_surname;

    /** @var */
    private $contact_street;

    /** @var */
    private $contact_city;

    /** @var */
    private $contact_zipcode;

    /** @var */
    private $contact_company;

    /** @var */
    private $contact_ico;

    /** @var */
    private $contact_dic;

    /** @var */
    private $note;

    /** @var */
    private $paid;

    /** @var */
    private $payment;

    /** @var */
    private $delivery;

    /** @var */
    private $tracking;

    /** @var */
    private $invoice;

    /** @var */
    private $basket;

    /** @var */
    private $commision_status;

    /** @var */
    private $commision;

    /** @var */
    private $created;


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
    public function getEshopId()
    {
        return $this->eshop_id;
    }


    /**
     * @return mixed
     */
    public function getStatusId()
    {
        return $this->status_id;
    }


    /**
     * @return mixed
     */
    public function getSerialNumber()
    {
        return $this->serial_number;
    }


    /**
     * @return mixed
     */
    public function getVariableSymbol()
    {
        return $this->variable_symbol;
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }


    /**
     * @return mixed
     */
    public function getInvoiceFirstname()
    {
        return $this->invoice_firstname;
    }


    /**
     * @return mixed
     */
    public function getInvoiceSurname()
    {
        return $this->invoice_surname;
    }


    /**
     * @return mixed
     */
    public function getInvoiceStreet()
    {
        return $this->invoice_street;
    }


    /**
     * @return mixed
     */
    public function getInvoiceCity()
    {
        return $this->invoice_city;
    }


    /**
     * @return mixed
     */
    public function getInvoiceZipcode()
    {
        return $this->invoice_zipcode;
    }


    /**
     * @return mixed
     */
    public function getInvoiceCompany()
    {
        return $this->invoice_company;
    }


    /**
     * @return mixed
     */
    public function getInvoiceIco()
    {
        return $this->invoice_ico;
    }


    /**
     * @return mixed
     */
    public function getInvoiceDic()
    {
        return $this->invoice_dic;
    }


    /**
     * @return mixed
     */
    public function getContactLikeInvoice()
    {
        return $this->contact_like_invoice;
    }


    /**
     * @return mixed
     */
    public function getContactFirstname()
    {
        return $this->contact_firstname;
    }


    /**
     * @return mixed
     */
    public function getContactSurname()
    {
        return $this->contact_surname;
    }


    /**
     * @return mixed
     */
    public function getContactStreet()
    {
        return $this->contact_street;
    }


    /**
     * @return mixed
     */
    public function getContactCity()
    {
        return $this->contact_city;
    }


    /**
     * @return mixed
     */
    public function getContactZipcode()
    {
        return $this->contact_zipcode;
    }


    /**
     * @return mixed
     */
    public function getContactCompany()
    {
        return $this->contact_company;
    }


    /**
     * @return mixed
     */
    public function getContactIco()
    {
        return $this->contact_ico;
    }


    /**
     * @return mixed
     */
    public function getContactDic()
    {
        return $this->contact_dic;
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
    public function getPaid()
    {
        return $this->paid;
    }


    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }


    /**
     * @return mixed
     */
    public function getDelivery()
    {
        return $this->delivery;
    }


    /**
     * @return mixed
     */
    public function getTracking()
    {
        return $this->tracking;
    }


    /**
     * @return mixed
     */
    public function getInvoice()
    {
        return $this->invoice;
    }


    /**
     * @return mixed
     */
    public function getBasket()
    {
        return $this->basket;
    }


    /**
     * @return mixed
     */
    public function getCommisionStatus()
    {
        return $this->commision_status;
    }


    /**
     * @return mixed
     */
    public function getCommision()
    {
        return $this->commision;
    }


    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }


    public function toArray(): array
    {
        // TODO: Implement toArray() method.
    }
}
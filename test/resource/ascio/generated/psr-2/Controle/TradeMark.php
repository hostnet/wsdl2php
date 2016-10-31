<?php

namespace Controle;

class TradeMark
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $country;
    /**
     * @var dateTime
     */
    public $date;
    /**
     * @var string
     */
    public $number;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $contact;
    /**
     * @var string
     */
    public $contactlanguage;
    /**
     * @var string
     */
    public $documentationlanguage;
    /**
     * @var string
     */
    public $secondcontact;
    /**
     * @var string
     */
    public $thirdcontact;
    /**
     * @var dateTime
     */
    public $regdate;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->name = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCountry($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Country');
        }
        $this->country = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDate($val)
    {
        $this->date = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Number');
        }
        $this->number = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Type');
        }
        $this->type = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setContact($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Contact');
        }
        $this->contact = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setContactLanguage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ContactLanguage');
        }
        $this->contactlanguage = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDocumentationLanguage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DocumentationLanguage');
        }
        $this->documentationlanguage = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSecondContact($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SecondContact');
        }
        $this->secondcontact = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setThirdContact($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ThirdContact');
        }
        $this->thirdcontact = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRegDate($val)
    {
        $this->regdate = (int)$val;
    }
}

<?php

namespace Controle;

class TradeMark
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Name;
    /**
     * @var string
     */
    public $Country;
    /**
     * @var dateTime
     */
    public $Date;
    /**
     * @var string
     */
    public $Number;
    /**
     * @var string
     */
    public $Type;
    /**
     * @var string
     */
    public $Contact;
    /**
     * @var string
     */
    public $ContactLanguage;
    /**
     * @var string
     */
    public $DocumentationLanguage;
    /**
     * @var string
     */
    public $SecondContact;
    /**
     * @var string
     */
    public $ThirdContact;
    /**
     * @var dateTime
     */
    public $RegDate;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = ()$val;
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
        $this->Country = ()$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDate($val)
    {
        $this->Date = ()$val;
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
        $this->Number = ()$val;
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
        $this->Type = ()$val;
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
        $this->Contact = ()$val;
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
        $this->ContactLanguage = ()$val;
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
        $this->DocumentationLanguage = ()$val;
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
        $this->SecondContact = ()$val;
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
        $this->ThirdContact = ()$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRegDate($val)
    {
        $this->RegDate = ()$val;
    }
}

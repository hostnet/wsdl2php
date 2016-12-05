<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

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
        $this->Name = (string)$val;
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
        $this->Country = (string)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setDate($val)
    {
        $this->Date = (dateTime)$val;
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
        $this->Number = (string)$val;
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
        $this->Type = (string)$val;
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
        $this->Contact = (string)$val;
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
        $this->ContactLanguage = (string)$val;
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
        $this->DocumentationLanguage = (string)$val;
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
        $this->SecondContact = (string)$val;
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
        $this->ThirdContact = (string)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRegDate($val)
    {
        $this->RegDate = (dateTime)$val;
    }
}

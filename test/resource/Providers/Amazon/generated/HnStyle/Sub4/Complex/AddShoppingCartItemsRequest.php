<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddShoppingCartItemsRequest
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $devtag;
    /**
     * @var string
     */
    public $CartId;
    /**
     * @var string
     */
    public $HMAC;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddItemArray
     */
    public $Items;
    /**
     * @var string
     */
    public $locale;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTag($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for tag');
        }
        $this->tag = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDevtag($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCartId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CartId');
        }
        $this->CartId = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setHMAC($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HMAC');
        }
        $this->HMAC = (string)$val;
    }

    /**
     * @param AddItemArray $val
     * @throws Exception
     */
    public function setItems($val)
    {
        $this->Items = (AddItemArray)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLocale($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for locale');
        }
        $this->locale = (string)$val;
    }
}

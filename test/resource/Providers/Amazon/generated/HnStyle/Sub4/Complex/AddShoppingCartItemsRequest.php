<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AddShoppingCartItemsRequest
{
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
    public $cartid;
    /**
     * @var string
     */
    public $hmac;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AddItemArray
     */
    public $items;
    /**
     * @var string
     */
    public $locale;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setTag($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for tag');
        }
        $this->tag = (int)$val;
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
        $this->devtag = (int)$val;
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
        $this->cartid = (int)$val;
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
        $this->hmac = (int)$val;
    }

    /**
     * @param AddItemArray $val
     * @throws Exception
     */
    public function setItems($val)
    {
        $this->items = (int)$val;
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
        $this->locale = (int)$val;
    }
}

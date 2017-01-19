<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ModifyShoppingCartItemsRequest
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
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemQuantityArray
     */
    public $Items;
    /**
     * @var string
     */
    public $locale;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setTag($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDevtag($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setCartId($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CartId');
        }
        $this->CartId = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setHMAC($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HMAC');
        }
        $this->HMAC = $val;
    }

    /**
     * @param ItemQuantityArray $val
     * @throws \Exception
     */
    public function setItems($val)
    {
        $this->Items = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setLocale($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
    }
}

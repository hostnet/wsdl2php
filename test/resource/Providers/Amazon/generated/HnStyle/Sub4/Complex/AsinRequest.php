<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AsinRequest
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $asin;
    /**
     * @var string
     */
    public $tag;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $devtag;
    /**
     * @var string
     */
    public $offer;
    /**
     * @var string
     */
    public $offerpage;
    /**
     * @var string
     */
    public $locale;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAsin($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for asin');
        }
        $this->asin = (string)$val;
    }

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
    public function setType($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for type');
        }
        $this->type = (string)$val;
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
    public function setOffer($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for offer');
        }
        $this->offer = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOfferpage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for offerpage');
        }
        $this->offerpage = (string)$val;
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

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
     * @throws \Exception
     */
    public function setAsin($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for asin');
        }
        $this->asin = $val;
    }

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
    public function setType($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
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
    public function setOffer($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for offer');
        }
        $this->offer = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setOfferpage($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for offerpage');
        }
        $this->offerpage = $val;
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

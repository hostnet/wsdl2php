<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SellerRequest
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $seller_id;
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
    public $offerstatus;
    /**
     * @var string
     */
    public $page;
    /**
     * @var string
     */
    public $seller_browse_id;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var string
     */
    public $locale;
    /**
     * @var string
     */
    public $index;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerid($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for seller_id');
        }
        $this->seller_id = (string)$val;
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
    public function setOfferstatus($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for offerstatus');
        }
        $this->offerstatus = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for page');
        }
        $this->page = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSellerbrowseid($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for seller_browse_id');
        }
        $this->seller_browse_id = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setKeyword($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for keyword');
        }
        $this->keyword = (string)$val;
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

    /**
     * @param string $val
     * @throws Exception
     */
    public function setIndex($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for index');
        }
        $this->index = (string)$val;
    }
}

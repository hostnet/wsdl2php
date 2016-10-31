<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class MarketplaceRequest
{
    /**
     * @var string
     */
    public $marketplace_search;
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
    public $page;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var string
     */
    public $keyword_search;
    /**
     * @var string
     */
    public $browse_id;
    /**
     * @var string
     */
    public $zipcode;
    /**
     * @var string
     */
    public $area_id;
    /**
     * @var string
     */
    public $geo;
    /**
     * @var string
     */
    public $sort;
    /**
     * @var string
     */
    public $listing_id;
    /**
     * @var string
     */
    public $locale;
    /**
     * @var string
     */
    public $index;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setMarketplacesearch($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for marketplace_search');
        }
        $this->marketplace_search = (int)$val;
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
        $this->tag = (int)$val;
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
        $this->type = (int)$val;
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
    public function setPage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for page');
        }
        $this->page = (int)$val;
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
        $this->keyword = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setKeywordsearch($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for keyword_search');
        }
        $this->keyword_search = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBrowseid($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for browse_id');
        }
        $this->browse_id = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setZipcode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for zipcode');
        }
        $this->zipcode = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAreaid($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for area_id');
        }
        $this->area_id = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setGeo($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for geo');
        }
        $this->geo = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSort($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sort');
        }
        $this->sort = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setListingid($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for listing_id');
        }
        $this->listing_id = (int)$val;
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

    /**
     * @param string $val
     * @throws Exception
     */
    public function setIndex($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for index');
        }
        $this->index = (int)$val;
    }
}

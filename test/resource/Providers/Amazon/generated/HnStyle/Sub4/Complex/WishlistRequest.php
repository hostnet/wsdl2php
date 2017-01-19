<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class WishlistRequest
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $wishlist_id;
    /**
     * @var string
     */
    public $page;
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
    public $locale;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setWishlistid($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for wishlist_id');
        }
        $this->wishlist_id = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setPage($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
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
    public function setLocale($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
    }
}

<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ActorRequest
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $actor;
    /**
     * @var string
     */
    public $page;
    /**
     * @var string
     */
    public $mode;
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
    public $sort;
    /**
     * @var string
     */
    public $variations;
    /**
     * @var string
     */
    public $locale;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setActor($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for actor');
        }
        $this->actor = (string)$val;
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
    public function setMode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for mode');
        }
        $this->mode = (string)$val;
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
    public function setSort($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sort');
        }
        $this->sort = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setVariations($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for variations');
        }
        $this->variations = (string)$val;
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

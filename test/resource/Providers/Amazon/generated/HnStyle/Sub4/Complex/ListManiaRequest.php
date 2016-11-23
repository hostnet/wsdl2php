<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class ListManiaRequest
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $lm_id;
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
     * @throws Exception
     */
    public function setLmid($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for lm_id');
        }
        $this->lm_id = (int)$val;
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
    public function setLocale($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for locale');
        }
        $this->locale = (int)$val;
    }
}

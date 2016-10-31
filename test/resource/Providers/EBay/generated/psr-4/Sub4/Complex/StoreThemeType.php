<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreThemeType
 * Store theme.
 */
class StoreThemeType
{
    /**
     * @var int | Unique identifier for each theme in this group. There is at least one theme in a theme
     * group.
     */
    public $themeid;
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $name;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StoreColorSchemeType | Theme color scheme.
     */
    public $colorscheme;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setThemeID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->themeid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->name = (int)$val;
    }

    /**
     * @param StoreColorSchemeType $val
     * @throws Exception
     */
    public function setColorScheme($val)
    {
        $this->colorscheme = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}

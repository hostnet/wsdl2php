<?php

namespace Controle;

/**
 * StoreColorSchemeType
 * Store color scheme.
 */
class StoreColorSchemeType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | Store color scheme ID. (use GetStoreOptions to get the list of valid theme color scheme
     * IDs).
     */
    public $ColorSchemeID;
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var \Controle\StoreColorType | Store color set.
     */
    public $Color;
    /**
     * @var \Controle\StoreFontType | Store font set.
     */
    public $Font;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setColorSchemeID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ColorSchemeID = (int)$val;
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
        $this->Name = (int)$val;
    }

    /**
     * @param StoreColorType $val
     * @throws Exception
     */
    public function setColor($val)
    {
        $this->Color = (int)$val;
    }

    /**
     * @param StoreFontType $val
     * @throws Exception
     */
    public function setFont($val)
    {
        $this->Font = (int)$val;
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

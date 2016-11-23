<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class EbxOptInPreferenceType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | If true: The seller wants their eligible eBay listings to be included on eBay Express
     * (in addition to the main eBay site). If false: The seller does not want their listings
     * to be included on eBay Express. If omitted (in SetUserPreferences): The seller does
     * not want to change their existing preference. (Initially, eBay sets this preference
     * to true for every seller.)
     */
    public $eBxOptInPreference;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEBxOptInPreference($val)
    {
        $this->eBxOptInPreference = (int)$val;
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

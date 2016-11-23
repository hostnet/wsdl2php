<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchDetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | Indicates whether a listing uses the Buy It Now feature.
     */
    public $BuyItNowEnabled;
    /**
     * @var boolean | Indicates whether a listing has an image associated with it.
     */
    public $Picture;
    /**
     * @var boolean | Indicates whether a listing is no more than one day old.
     */
    public $RecentListing;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setBuyItNowEnabled($val)
    {
        $this->BuyItNowEnabled = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPicture($val)
    {
        $this->Picture = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setRecentListing($val)
    {
        $this->RecentListing = (int)$val;
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

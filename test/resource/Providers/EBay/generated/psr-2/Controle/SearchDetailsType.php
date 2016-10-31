<?php

namespace Controle;

class SearchDetailsType
{
    /**
     * @var boolean | Indicates whether a listing uses the Buy It Now feature.
     */
    public $buyitnowenabled;
    /**
     * @var boolean | Indicates whether a listing has an image associated with it.
     */
    public $picture;
    /**
     * @var boolean | Indicates whether a listing is no more than one day old.
     */
    public $recentlisting;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setBuyItNowEnabled($val)
    {
        $this->buyitnowenabled = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPicture($val)
    {
        $this->picture = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setRecentListing($val)
    {
        $this->recentlisting = (int)$val;
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

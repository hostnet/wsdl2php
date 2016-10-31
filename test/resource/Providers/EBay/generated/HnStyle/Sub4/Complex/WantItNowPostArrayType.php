<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * WantItNowPostArrayType
 * Container for a list of search result items. Can contain zero, one, or multiple WantItNowPostType
 * objects, each of which contains data for a single Want It Now post found by the search.
 */
class WantItNowPostArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WantItNowPostType | Contains data for a Want It Now post found by a search.
     */
    public $wantitnowpost;
    /**
     * @param WantItNowPostType $val
     * @throws Exception
     */
    public function setWantItNowPost($val)
    {
        $this->wantitnowpost = (int)$val;
    }
}

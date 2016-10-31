<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetWantItNowPostResponseType
 * Contains the Want It Now post data returned by the call. The data for the specified post
 * listing is returned in a WantItNowPostType object.
 */
class GetWantItNowPostResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
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

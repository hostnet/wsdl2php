<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetWantItNowPostRequestType
 * Retrieves data for a specific, active Want It Now post identified by a post ID. The response
 * includes the following fields: CategoryID, Description, PostID, Site, StartTime, ResponseCount,
 * and Title. Although GetWantItNowSearchResults returns most of this information, only GetWantItNowPost
 * returns Description for a post.
 */
class GetWantItNowPostRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | ID that uniquely identifies a Want It Now post.
     */
    public $PostID;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setPostID($val)
    {
        $this->PostID = (ItemIDType)$val;
    }
}

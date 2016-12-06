<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UrLdetailsType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\URLTypeCodeType | A compressed, representative title for the eBay URL.
     */
    public $URLType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item
     * URL) to launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be
     * used in certain types of applications. See your API license agreement. Also see this
     * page for logo usage rules:<br> http://developer.ebay.com/join/licenses/apilogousage
     */
    public $URL;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param URLTypeCodeType $val
     * @throws Exception
     */
    public function setURLType($val)
    {
        $this->URLType = $val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setURL($val)
    {
        $this->URL = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}

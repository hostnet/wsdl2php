<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ListingTipMessageType
 * (out) Contains the message portion of a listing tip that is returned by the Listing Analyzer
 * engine.
 */
class ListingTipMessageType
{
    /**
     * @var string | Identifier for the tip message. Primarily for internal use. This value may change over
     * time.
     */
    public $listingtipmessageid;
    /**
     * @var string | Brief version of the tip message.
     */
    public $shortmessage;
    /**
     * @var string | Detailed version of the tip message.
     */
    public $longmessage;
    /**
     * @var string | Path part of a URL for a "Learn More" link that points to a relevant eBay Web site online
     * help page.            The path is relative to http://pages.ebay.XX, where XX is the
     * 2-letter site code            (e.g., http://pages.ebay.de for the eBay Germany site).
     * Applications should append the            URL to the appropriate path for the user's
     * site.
     */
    public $helpurlpath;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setListingTipMessageID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListingTipMessageID');
        }
        $this->listingtipmessageid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setShortMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ShortMessage');
        }
        $this->shortmessage = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLongMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LongMessage');
        }
        $this->longmessage = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setHelpURLPath($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HelpURLPath');
        }
        $this->helpurlpath = (int)$val;
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
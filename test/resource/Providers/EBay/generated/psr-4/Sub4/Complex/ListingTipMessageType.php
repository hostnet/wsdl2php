<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ListingTipMessageType
 * (out) Contains the message portion of a listing tip that is returned by the Listing Analyzer
 * engine.
 */
class ListingTipMessageType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Identifier for the tip message. Primarily for internal use. This value may change over
     * time.
     */
    public $ListingTipMessageID;
    /**
     * @var string | Brief version of the tip message.
     */
    public $ShortMessage;
    /**
     * @var string | Detailed version of the tip message.
     */
    public $LongMessage;
    /**
     * @var string | Path part of a URL for a "Learn More" link that points to a relevant eBay Web site online
     * help page.            The path is relative to http://pages.ebay.XX, where XX is the
     * 2-letter site code            (e.g., http://pages.ebay.de for the eBay Germany site).
     * Applications should append the            URL to the appropriate path for the user's
     * site.
     */
    public $HelpURLPath;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setListingTipMessageID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListingTipMessageID');
        }
        $this->ListingTipMessageID = (string)$val;
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
        $this->ShortMessage = (string)$val;
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
        $this->LongMessage = (string)$val;
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
        $this->HelpURLPath = (string)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}

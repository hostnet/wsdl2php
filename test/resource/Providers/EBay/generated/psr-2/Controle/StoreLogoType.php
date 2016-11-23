<?php

namespace Controle;

/**
 * StoreLogoType
 * Store logo.
 */
class StoreLogoType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | Store logo ID (use GetStoreOptions to get the list of valid logo IDs).
     */
    public $LogoID;
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var \Controle\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item
     * URL) to launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be
     * used in certain types of applications. See your API license agreement. Also see this
     * page for logo usage rules:<br> http://developer.ebay.com/join/licenses/apilogousage
     */
    public $URL;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setLogoID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->LogoID = (int)$val;
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
     * @param anyURI $val
     * @throws Exception
     */
    public function setURL($val)
    {
        $this->URL = (int)$val;
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

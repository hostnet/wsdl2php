<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * BuyingGuideType
 * Information that identifies a buying guide. A buying guide provides content about particular product
 * areas, categories, or subjects to help buyers decide which type of item to purchase based
 * on their particular interests. Buying guides are useful to buyers who do not have a specific
 * product in mind. For example, a digital camera buying guide could help a buyer determine
 * what kind of digital camera is right for them.
 */
class BuyingGuideType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyURI | A commonly used eBay URL. Applications use some of these URLs (such as the View Item
     * URL) to launch eBay Web site pages in a browser.<br><br> Logo URLs are required to be
     * used in certain types of applications. See your API license agreement. Also see this
     * page for logo usage rules:<br> http://developer.ebay.com/join/licenses/apilogousage
     */
    public $URL;
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
    /**
     * @var int | Numeric identifier for a buy-side product finder. A product finder defines how to
     *           search for Item Specifics in listings (e.g., how to search against a particular
     * shoe size).            See the eBay Web Services guide for details about product finders.
     *            You need to specify a product finder ID when you are searching against a
     * listing's             Item Specifics (i.e., when you use SearchAttributes). A few categories,
     * such as US Event Tickets and US eBay Motors, can also return a subset of Item Specifics
     * (e.g., the event venue, section, and row for a ticket listing) in the search results.
     * To retrieve this data, you must specify the product finder ID, and also specify a detail
     * level of ItemReturnAttributes or ReturnAll. Use GetProductFinder to determine valid
     * product finder IDs.
     */
    public $ProductFinderID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
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
     * @param string $val
     * @throws Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setProductFinderID($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->ProductFinderID = $val;
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

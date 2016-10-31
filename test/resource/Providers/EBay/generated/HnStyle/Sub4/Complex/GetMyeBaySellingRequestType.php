<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetMyeBaySellingRequestType
 * Returns a summary and details of items a user is selling from the user's My eBay account. <br
 * /> If you do not specify a detail level or a specific container, the response contains just
 * the SellingSummary container. <br /> If you specify a container but not a detail level,
 * the response contains SellingSummary and any container you specified in the request. <br
 * /> If you specify a DetailLevel of ReturnAll, the response contains the SellingSummary and
 * all other containers. Any containers that were not specified in the request are returned
 * with default settings. <br /> While specifying pagination can help manage the amount of
 * data that is returned (especially at ReturnAll), high-volume sellers may receive a warning
 * message that the amount of data returned is over the system limit and therefore truncated.
 */
class GetMyeBaySellingRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemListCustomizationType | Contains the items the user has scheduled for sale, but whose listings have not yet
     * started.
     */
    public $scheduledlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemListCustomizationType | Contains the items the user is selling that have active listings.
     */
    public $activelist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemListCustomizationType | Contains the items the user has sold.
     */
    public $soldlist;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemListCustomizationType | Contains the items whose listings have ended but that have not sold.
     */
    public $unsoldlist;
    /**
     * @param ItemListCustomizationType $val
     * @throws Exception
     */
    public function setScheduledList($val)
    {
        $this->scheduledlist = (int)$val;
    }

    /**
     * @param ItemListCustomizationType $val
     * @throws Exception
     */
    public function setActiveList($val)
    {
        $this->activelist = (int)$val;
    }

    /**
     * @param ItemListCustomizationType $val
     * @throws Exception
     */
    public function setSoldList($val)
    {
        $this->soldlist = (int)$val;
    }

    /**
     * @param ItemListCustomizationType $val
     * @throws Exception
     */
    public function setUnsoldList($val)
    {
        $this->unsoldlist = (int)$val;
    }
}

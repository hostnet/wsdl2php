<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetUserRequestType
 * Retrieves information about a user. Input fields control what user data is returned. This
 * includes the eBay user ID for the user whose data is to be returned and the item ID for
 * a listing to indicate a transactional relationship between the requestor and the target
 * user.
 */
class GetUserRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var string | Unique eBay user ID for the user.<br> <br> In GetSearchResultsExpress, only returned
     * when ItemDetails is set to Fine. <br><br> Starting Jan 2007, when a bidder's user info
     * is made anonymous, this tag will contain the real ID value only for that bidder, and
     * the seller of an item that the user is bidding on. For all other users, the real ID
     * value will be replaced with the value "Bidder X" where X is a number indicating the
     * order of that user's first bid. For example, if the user was the third bidder, UserID
     * = Bidder 3. <br><br> Note that the anonymous bidder ID stays the same for a given auction,
     * but is different for different auctions. For example, a bidder who is the third and
     * then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However,
     * if that same bidder is the first bidder on a different auction, the bidder will be listed
     * for that auction as "Bidder 1", not "Bidder 3".
     */
    public $UserID;
    /**
     * @var boolean | Indicates if the response should include detailed data relating to whether an item would
     * qualify as an Express listing. For information about the Express-related data that can
     * be returned when IncludeExpressRequirements is set to true, see the annotations for
     * the output of VerifyAddItem and see the eBay Web Services Guide.
     */
    public $IncludeExpressRequirements;
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setUserID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for UserID');
        }
        $this->UserID = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeExpressRequirements($val)
    {
        $this->IncludeExpressRequirements = (int)$val;
    }
}

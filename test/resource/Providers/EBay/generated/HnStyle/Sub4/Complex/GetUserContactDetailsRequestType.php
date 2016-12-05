<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetUserContactDetailsRequestType
 * Returns contact information for a specified user if a bidding relationship exists. The bidder
 * must be bidding on the seller's active item, or an eBay user must have made an offer on the
 * item using Best Offer. The item must be in the Motors or Business & Industrial categories. Bidders
 * can use this call to contact sellers of an item they are bidding on or have made an offer
 * on (through Best Offer). Note that this call does NOT return an email address. Sellers who
 * wish to send an email to bidders should use AddMemberMessagesAAQToBidder.
 */
class GetUserContactDetailsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var string | An eBay ID that uniquely identifies a given user. The same as the contact's eBay username. Either
     * the seller's or bidder's username may be specified here, as long as a bidding relationship
     * exists between them. That is, the bidder must be bidding on the seller's active item,
     * or an eBay user must have made an offer on the item via Best Offer.
     */
    public $ContactID;
    /**
     * @var string | An eBay ID that uniquely identifies a given user. The same as the seller's eBay username. Either
     * the seller's or bidder's username may be specified here, as long as a bidding relationship
     * exists between them. That is, the bidder must be bidding on the seller's active item,
     * or an eBay user must have made an offer on the item via Best Offer.
     */
    public $RequesterID;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ItemID');
        }
        $this->ItemID = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setContactID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ContactID');
        }
        $this->ContactID = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRequesterID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RequesterID');
        }
        $this->RequesterID = (string)$val;
    }
}

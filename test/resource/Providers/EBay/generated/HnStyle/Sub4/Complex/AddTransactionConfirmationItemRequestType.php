<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AddTransactionConfirmationItemRequestType
 * Ends the listing specified by ItemID (if listed for at least 24 hours) and creates a new
 * Transaction Confirmation Request (TCR) for an item, enabling the TCR recipient to purchase
 * the item. A TCR can be sent by a seller to any one of the following: a bidder, a best offer
 * buyer, a member who has asked the seller a question, or any member with a postal code. This
 * call can also be used to verify whether a new TCR can be created. Applies to the US eBay
 * Motors site (except Parts and Accessories category), effective July 2006.
 */
class AddTransactionConfirmationItemRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIDType | The displayable user ID of the recipient.
     */
    public $RecipientUserID;
    /**
     * @var string | If true, specifies that the seller is verifying whether a new Transaction Confirmation
     * Request (TCR) can be created. Thus, if this value is passed as true, then no Transaction
     * Confirmation Request is actually made. If VerifyEligibilityOnly is not passed, or is
     * false, a Transaction Confirmation Request is actually made.
     */
    public $VerifyEligibilityOnly;
    /**
     * @var string | Specifies the postal code of the user to whom the seller is offering the Transaction
     * Confirmation Request. Required only if the user does not meet the other options listed
     * in RecipientRelationCodeType. An error is returned if RecipientUserID and RecipientPostalCode
     * do not match for more than 3 times for a seller per day.
     */
    public $RecipientPostalCode;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RecipientRelationCodeType | Specifies the current relationship between the seller and the potential buyer. A seller
     * can make a Transaction Confirmation Request (TCR) for an item to a potential buyer if
     * the buyer meets one of several criteria. A TCR is sent by a seller to one of the following:
     * a bidder, a best offer buyer, a member with an ASQ question, or any member with a postal
     * code. See the values and annotations in RecipientRelationCodeType.
     */
    public $RecipientRelationType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The amount the offer recipient must pay to buy the item specified in the Transaction
     * Confirmation Request (TCR). A negotiated amount between the buyer and the seller.
     */
    public $NegotiatedPrice;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SecondChanceOfferDurationCodeType | Specifies the ID of a set of default durations for a certain type of listing. The actual
     * duration values are returned within the FeatureDefinitions node. The type of listing
     * is named in the type attribute.
     */
    public $ListingDuration;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
    /**
     * @var string | Comments the seller wants to send to the recipient (bidder, best offer buyer, member
     * with an ASQ question, or member with a postal code).
     */
    public $Comments;
    // @codingStandardsIgnoreEnd

    /**
     * @param UserIDType $val
     * @throws Exception
     */
    public function setRecipientUserID($val)
    {
        $this->RecipientUserID = (UserIDType)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setVerifyEligibilityOnly($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for VerifyEligibilityOnly');
        }
        $this->VerifyEligibilityOnly = (string)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRecipientPostalCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RecipientPostalCode');
        }
        $this->RecipientPostalCode = (string)$val;
    }

    /**
     * @param RecipientRelationCodeType $val
     * @throws Exception
     */
    public function setRecipientRelationType($val)
    {
        $this->RecipientRelationType = (RecipientRelationCodeType)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setNegotiatedPrice($val)
    {
        $this->NegotiatedPrice = (AmountType)$val;
    }

    /**
     * @param SecondChanceOfferDurationCodeType $val
     * @throws Exception
     */
    public function setListingDuration($val)
    {
        $this->ListingDuration = (SecondChanceOfferDurationCodeType)$val;
    }

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (ItemIDType)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setComments($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Comments');
        }
        $this->Comments = (string)$val;
    }
}

<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ValidateTestUserRegistrationRequestType
 * Requests to enable a test user to sell items in the Sandbox environment.
 */
class ValidateTestUserRegistrationRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | The aggregate feedback score for a user. A user's feedback score is the net positive
     * feedback minus the net negative feedback left for the user. Feedback scores are a quantitative
     * expression of the desirability of dealing with a user as a buyer or a seller in transactions.
     * Each transaction can result in one feedback entry for a given user (the buyer can leave
     * feedback for the seller, and the seller can leave feedback for the buyer.). That one
     * feedback can be positive, negative, or neutral. The aggregated feedback counts for a particular
     * user represent that user's overall feedback score (referred to as a "feedback rating"
     * on the eBay site). If the user has chosen to make their feedback private and that user
     * is not the user identified in the request's authentication token, FeedbackScore is not
     * returned and FeedbackPrivate is returned with a value of true.<br> <br> To be eligible
     * to list on Express, a seller's feedback score needs to be 100 or higher. See "eBay Express"
     * in the eBay Web Services guide. In GetSearchResultsExpress, only returned when ItemDetails
     * is set to Fine.<br> <br> In GetSearchResults and GetCategoryListings, feedback information
     * is only returned if IncludeFeedback = true in the request. <br><br> Starting Jan 2007,
     * when a bidder's user info is made anonymous, the real feedback score will be returned
     * only for that bidder, and the seller of an item that the user is bidding on. For all
     * other users, the value -99 is returned.
     */
    public $FeedbackScore;
    /**
     * @var dateTime | Indicates the date the specified user originally registered with eBay. <br><br> Starting
     * Jan 2007, when a bidder's user info is made anonymous, this tag will be returned only
     * for that bidder, and the seller of an item that the user is bidding on.
     */
    public $RegistrationDate;
    /**
     * @var boolean | Indicates if a user subscribes to Seller's Assistant. You cannot request to subscribe
     * a user to both Seller's Assistant and Seller's Assistant Pro. You cannot request to
     * unsubscribe a user.
     */
    public $SubscribeSA;
    /**
     * @var boolean | Indicates if a user subscribes to Seller's Assistant Pro. You cannot request to subscribe
     * a user to both Seller's Assistant and Seller's Assistant Pro. You cannot request to
     * unsubscribe a user.
     */
    public $SubscribeSAPro;
    /**
     * @var boolean | Indicates if a user subscribes to Selling Manager. You cannot request to subscribe a
     * user to both Selling Manager and Selling Manager Pro. You cannot request to unsubscribe
     * a user.
     */
    public $SubscribeSM;
    /**
     * @var boolean | Indicates if a user subscribes to Selling Manager Pro. You cannot request to subscribe
     * a user to both Selling Manager and Selling Manager Pro. You cannot request to unsubscribe
     * a user.
     */
    public $SubscribeSMPro;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setFeedbackScore($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->FeedbackScore = $val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRegistrationDate($val)
    {
        $this->RegistrationDate = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setSubscribeSA($val)
    {
        $this->SubscribeSA = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setSubscribeSAPro($val)
    {
        $this->SubscribeSAPro = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setSubscribeSM($val)
    {
        $this->SubscribeSM = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setSubscribeSMPro($val)
    {
        $this->SubscribeSMPro = $val;
    }
}

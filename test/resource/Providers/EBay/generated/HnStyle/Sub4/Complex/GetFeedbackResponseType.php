<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetFeedbackResponseType
 * The GetFeedback response contains the specified user's total feedback score, feedback summary
 * data, and (if the applicable detail level is specified) an array of individual feedbacks.
 */
class GetFeedbackResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeedbackDetailArrayType | Contains the individual feedbacks for the user, one FeedbackDetailType object for each
     * feedback. Only populated with data when a detail level of ReturnAll is specified in
     * the request. Not returned if you specify FeedbackID in the request.
     */
    public $feedbackdetailarray;
    /**
     * @var int | Indicates the number of FeedbackDetailType objects returned in the FeedbackDetailArray
     * property. Only applicable if feedback details are returned.
     */
    public $feedbackdetailitemtotal;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeedbackSummaryType | Summary feedback data for the user. Contains counts of positive, neutral, and negative
     * feedback for predefined time periods. Only applicable if feedback details are returned.
     */
    public $feedbacksummary;
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
    public $feedbackscore;
    /**
     * @param FeedbackDetailArrayType $val
     * @throws Exception
     */
    public function setFeedbackDetailArray($val)
    {
        $this->feedbackdetailarray = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setFeedbackDetailItemTotal($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->feedbackdetailitemtotal = (int)$val;
    }

    /**
     * @param FeedbackSummaryType $val
     * @throws Exception
     */
    public function setFeedbackSummary($val)
    {
        $this->feedbacksummary = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setFeedbackScore($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->feedbackscore = (int)$val;
    }
}

<?php

namespace Controle;

class NotificationEventTypeCodeType
{
	// @codingStandardsIgnoreStart
	const NONE                        = 'None';
	const OUTBID                      = 'OutBid';
	const ENDOFAUCTION                = 'EndOfAuction';
	const AUCTIONCHECKOUTCOMPLETE     = 'AuctionCheckoutComplete';
	const FIXEDPRICEENDOFTRANSACTION  = 'FixedPriceEndOfTransaction';
	const CHECKOUTBUYERREQUESTSTOTAL  = 'CheckoutBuyerRequestsTotal';
	const FEEDBACK                    = 'Feedback';
	const FEEDBACKFORSELLER           = 'FeedbackForSeller';
	const FIXEDPRICETRANSACTION       = 'FixedPriceTransaction';
	const SECONDCHANCEOFFER           = 'SecondChanceOffer';
	const ASKSELLERQUESTION           = 'AskSellerQuestion';
	const ITEMLISTED                  = 'ItemListed';
	const ITEMREVISED                 = 'ItemRevised';
	const BUYERRESPONSEDISPUTE        = 'BuyerResponseDispute';
	const SELLEROPENEDDISPUTE         = 'SellerOpenedDispute';
	const SELLERRESPONDEDTODISPUTE    = 'SellerRespondedToDispute';
	const SELLERCLOSEDDISPUTE         = 'SellerClosedDispute';
	const BESTOFFER                   = 'BestOffer';
	const MYMESSAGESALERTHEADER       = 'MyMessagesAlertHeader';
	const MYMESSAGESALERT             = 'MyMessagesAlert';
	const MYMESSAGESEBAYMESSAGEHEADER = 'MyMessageseBayMessageHeader';
	const MYMESSAGESEBAYMESSAGE       = 'MyMessageseBayMessage';
	const MYMESSAGESM2MMESSAGEHEADER  = 'MyMessagesM2MMessageHeader';
	const MYMESSAGESM2MMESSAGE        = 'MyMessagesM2MMessage';
	const INRBUYEROPENEDDISPUTE       = 'INRBuyerOpenedDispute';
	const INRBUYERRESPONDEDTODISPUTE  = 'INRBuyerRespondedToDispute';
	const INRBUYERCLOSEDDISPUTE       = 'INRBuyerClosedDispute';
	const INRSELLERRESPONDEDTODISPUTE = 'INRSellerRespondedToDispute';
	const CHECKOUT                    = 'Checkout';
	const WATCHEDITEMENDINGSOON       = 'WatchedItemEndingSoon';
	const ITEMCLOSED                  = 'ItemClosed';
	const ITEMSUSPENDED               = 'ItemSuspended';
	const ITEMSOLD                    = 'ItemSold';
	const ITEMEXTENDED                = 'ItemExtended';
	const USERIDCHANGED               = 'UserIDChanged';
	const EMAILADDRESSCHANGED         = 'EmailAddressChanged';
	const PASSWORDCHANGED             = 'PasswordChanged';
	const PASSWORDHINTCHANGED         = 'PasswordHintChanged';
	const PAYMENTDETAILCHANGED        = 'PaymentDetailChanged';
	const ACCOUNTSUSPENDED            = 'AccountSuspended';
	const ACCOUNTSUMMARY              = 'AccountSummary';
	const CUSTOMCODE                  = 'CustomCode';
	// @codingStandardsIgnoreEnd
}

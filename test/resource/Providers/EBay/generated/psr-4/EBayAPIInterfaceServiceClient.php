<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * eBayAPIInterfaceServiceClient
 * Version 491
 */
class eBayAPIInterfaceServiceClient extends \SoapClient
{
    const WSDL_FILE = "eBayTest.wsdl";

    private $classmap = array(
        'AddDisputeResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddDisputeResponseType',
        'AddDisputeResponseResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddDisputeResponseResponseType',
        'AddItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddItemResponseType',
        'AddLiveAuctionItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddLiveAuctionItemResponseType',
        'AddOrderResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddOrderResponseType',
        'AddSecondChanceItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddSecondChanceItemResponseType',
        'AddToItemDescriptionResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddToItemDescriptionResponseType',
        'AddToWatchListResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddToWatchListResponseType',
        'AddTransactionConfirmationItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddTransactionConfirmationItemResponseType',
        'ApproveLiveAuctionBiddersResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ApproveLiveAuctionBiddersResponseType',
        'CompleteSaleResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CompleteSaleResponseType',
        'DeleteMyMessagesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DeleteMyMessagesResponseType',
        'EndItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EndItemResponseType',
        'FetchTokenResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FetchTokenResponseType',
        'GetAccountResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetAccountResponseType',
        'GetAdFormatLeadsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetAdFormatLeadsResponseType',
        'GetAllBiddersResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetAllBiddersResponseType',
        'GetApiAccessRulesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetApiAccessRulesResponseType',
        'GetBestOffersResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetBestOffersResponseType',
        'GetBidderListResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetBidderListResponseType',
        'GetCategoriesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetCategoriesResponseType',
        'GetCategory2FinanceOfferResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetCategory2FinanceOfferResponseType',
        'GetCategoryFeaturesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryFeaturesResponseType',
        'GetCategoryListingsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryListingsResponseType',
        'GetCategoryMappingsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryMappingsResponseType',
        'GetChallengeTokenResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetChallengeTokenResponseType',
        'GetCharitiesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetCharitiesResponseType',
        'GetContextualKeywordsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetContextualKeywordsResponseType',
        'GetCrossPromotionsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetCrossPromotionsResponseType',
        'GetDescriptionTemplatesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetDescriptionTemplatesResponseType',
        'GetDisputeResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetDisputeResponseType',
        'GetFeedbackResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetFeedbackResponseType',
        'GetFinanceOffersResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetFinanceOffersResponseType',
        'GetHighBiddersResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetHighBiddersResponseType',
        'GetItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetItemResponseType',
        'GetItemRecommendationsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetItemRecommendationsResponseType',
        'GetItemShippingResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetItemShippingResponseType',
        'GetItemTransactionsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetItemTransactionsResponseType',
        'GetItemsAwaitingFeedbackResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetItemsAwaitingFeedbackResponseType',
        'GetLiveAuctionBiddersResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetLiveAuctionBiddersResponseType',
        'GetLiveAuctionCatalogDetailsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetLiveAuctionCatalogDetailsResponseType',
        'GetMemberMessagesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetMemberMessagesResponseType',
        'GetMyMessagesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetMyMessagesResponseType',
        'GetMyeBayResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayResponseType',
        'GetMyeBayBuyingResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayBuyingResponseType',
        'GetMyeBayRemindersResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayRemindersResponseType',
        'GetMyeBaySellingResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBaySellingResponseType',
        'GetNotificationPreferencesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetNotificationPreferencesResponseType',
        'GetNotificationsUsageResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetNotificationsUsageResponseType',
        'GetOrderTransactionsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetOrderTransactionsResponseType',
        'GetOrdersResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetOrdersResponseType',
        'GetPictureManagerDetailsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetPictureManagerDetailsResponseType',
        'GetPictureManagerOptionsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetPictureManagerOptionsResponseType',
        'GetPopularKeywordsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetPopularKeywordsResponseType',
        'GetProductFamilyMembersResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetProductFamilyMembersResponseType',
        'GetProductFinderResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetProductFinderResponseType',
        'GetProductSearchPageResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetProductSearchPageResponseType',
        'GetProductSearchResultsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetProductSearchResultsResponseType',
        'GetProductSellingPagesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetProductSellingPagesResponseType',
        'GetPromotionRulesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetPromotionRulesResponseType',
        'GetRecommendationsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetRecommendationsResponseType',
        'GetRuNameResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetRuNameResponseType',
        'GetSearchResultsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetSearchResultsResponseType',
        'GetSearchResultsExpressResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetSearchResultsExpressResponseType',
        'GetSellerEventsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetSellerEventsResponseType',
        'GetSellerListResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetSellerListResponseType',
        'GetSellerPaymentsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetSellerPaymentsResponseType',
        'GetSellerTransactionsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetSellerTransactionsResponseType',
        'GetStoreResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetStoreResponseType',
        'GetStoreCategoryUpdateStatusResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetStoreCategoryUpdateStatusResponseType',
        'GetStoreCustomPageResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetStoreCustomPageResponseType',
        'GetStoreOptionsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetStoreOptionsResponseType',
        'GetStorePreferencesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetStorePreferencesResponseType',
        'GetSuggestedCategoriesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetSuggestedCategoriesResponseType',
        'GetTaxTableResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetTaxTableResponseType',
        'GetUserResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetUserResponseType',
        'GetUserContactDetailsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetUserContactDetailsResponseType',
        'GetUserDisputesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetUserDisputesResponseType',
        'GetUserPreferencesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetUserPreferencesResponseType',
        'GetWantItNowPostResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetWantItNowPostResponseType',
        'GetWantItNowSearchResultsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetWantItNowSearchResultsResponseType',
        'GeteBayDetailsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GeteBayDetailsResponseType',
        'GeteBayOfficialTimeResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GeteBayOfficialTimeResponseType',
        'IssueRefundResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\IssueRefundResponseType',
        'LeaveFeedbackResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LeaveFeedbackResponseType',
        'PlaceOfferResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PlaceOfferResponseType',
        'RelistItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RelistItemResponseType',
        'RemoveFromWatchListResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RemoveFromWatchListResponseType',
        'RespondToBestOfferResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RespondToBestOfferResponseType',
        'RespondToFeedbackResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RespondToFeedbackResponseType',
        'RespondToWantItNowPostResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RespondToWantItNowPostResponseType',
        'ReviseCheckoutStatusResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReviseCheckoutStatusResponseType',
        'ReviseItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReviseItemResponseType',
        'ReviseLiveAuctionItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReviseLiveAuctionItemResponseType',
        'ReviseMyMessagesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReviseMyMessagesResponseType',
        'ReviseMyMessagesFoldersResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReviseMyMessagesFoldersResponseType',
        'SellerReverseDisputeResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerReverseDisputeResponseType',
        'SendInvoiceResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SendInvoiceResponseType',
        'SetNotificationPreferencesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetNotificationPreferencesResponseType',
        'SetPictureManagerDetailsResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetPictureManagerDetailsResponseType',
        'SetPromotionRulesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetPromotionRulesResponseType',
        'SetStoreResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetStoreResponseType',
        'SetStoreCategoriesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetStoreCategoriesResponseType',
        'SetStoreCustomPageResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetStoreCustomPageResponseType',
        'SetStorePreferencesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetStorePreferencesResponseType',
        'SetTaxTableResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetTaxTableResponseType',
        'SetUserNotesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetUserNotesResponseType',
        'SetUserPreferencesResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetUserPreferencesResponseType',
        'ValidateChallengeInputResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ValidateChallengeInputResponseType',
        'ValidateTestUserRegistrationResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ValidateTestUserRegistrationResponseType',
        'VerifyAddItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\VerifyAddItemResponseType',
        'VerifyAddSecondChanceItemResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\VerifyAddSecondChanceItemResponseType',
        'AbstractRequestType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType',
        'AbstractResponseType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType',
        'AckCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AckCodeType',
        'BuyerPaymentMethodCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BuyerPaymentMethodCodeType',
        'DetailLevelCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DetailLevelCodeType',
        'DisputeActivityCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeActivityCodeType',
        'DisputeCreditEligibilityCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeCreditEligibilityCodeType',
        'DisputeExplanationCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeExplanationCodeType',
        'DisputeFilterCountType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeFilterCountType',
        'DisputeFilterTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeFilterTypeCodeType',
        'DisputeMessageSourceCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeMessageSourceCodeType',
        'DisputeMessageType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeMessageType',
        'DisputeReasonCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeReasonCodeType',
        'DisputeRecordTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeRecordTypeCodeType',
        'DisputeResolutionReasonCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeResolutionReasonCodeType',
        'DisputeResolutionRecordTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeResolutionRecordTypeCodeType',
        'DisputeResolutionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeResolutionType',
        'DisputeSortTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeSortTypeCodeType',
        'DisputeStateCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeStateCodeType',
        'DisputeStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeStatusCodeType',
        'DuplicateInvocationDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DuplicateInvocationDetailsType',
        'ErrorClassificationCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ErrorClassificationCodeType',
        'ErrorHandlingCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ErrorHandlingCodeType',
        'ErrorParameterType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ErrorParameterType',
        'ErrorType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ErrorType',
        'InvocationStatusType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\InvocationStatusType',
        'MeasureType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MeasureType',
        'MeasurementSystemCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MeasurementSystemCodeType',
        'PaginationType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaginationType',
        'SeverityCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SeverityCodeType',
        'UserIdPasswordType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\UserIdPasswordType',
        'WarningLevelCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WarningLevelCodeType',
        'AccessRuleCurrentStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccessRuleCurrentStatusCodeType',
        'AccessRuleStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccessRuleStatusCodeType',
        'AccountDetailEntryCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccountDetailEntryCodeType',
        'AccountEntriesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccountEntriesType',
        'AccountEntrySortTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccountEntrySortTypeCodeType',
        'AccountEntryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccountEntryType',
        'AccountHistorySelectionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccountHistorySelectionCodeType',
        'AccountStateCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccountStateCodeType',
        'AccountSummaryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AccountSummaryType',
        'AdFormatEnabledCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AdFormatEnabledCodeType',
        'AdFormatEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AdFormatEnabledDefinitionType',
        'AdFormatLeadType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AdFormatLeadType',
        'AdditionalAccountType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AdditionalAccountType',
        'AddressOwnerCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddressOwnerCodeType',
        'AddressRecordTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddressRecordTypeCodeType',
        'AddressStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddressStatusCodeType',
        'AddressType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AddressType',
        'AffiliateTrackingDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AffiliateTrackingDetailsType',
        'AmountType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AmountType',
        'ApiAccessRuleType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ApiAccessRuleType',
        'ApplicationDeliveryPreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ApplicationDeliveryPreferencesType',
        'ApplicationDeviceTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ApplicationDeviceTypeCodeType',
        'AttributeArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AttributeArrayType',
        'AttributeRecommendationsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AttributeRecommendationsType',
        'AttributeSetArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AttributeSetArrayType',
        'AttributeSetType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AttributeSetType',
        'AttributeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AttributeType',
        'AuthenticationEntryArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AuthenticationEntryArrayType',
        'AuthenticationEntryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\AuthenticationEntryType',
        'BasicUpgradePackEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BasicUpgradePackEnabledDefinitionType',
        'BestOfferActionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BestOfferActionCodeType',
        'BestOfferArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BestOfferArrayType',
        'BestOfferAutoDeclineEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BestOfferAutoDeclineEnabledDefinitionType',
        'BestOfferCounterEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BestOfferCounterEnabledDefinitionType',
        'BestOfferDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BestOfferDetailsType',
        'BestOfferEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BestOfferEnabledDefinitionType',
        'BestOfferStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BestOfferStatusCodeType',
        'BestOfferType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BestOfferType',
        'BestOfferTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BestOfferTypeCodeType',
        'BidActionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BidActionCodeType',
        'BidApprovalArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BidApprovalArrayType',
        'BidApprovalType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BidApprovalType',
        'BidderDetailArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BidderDetailArrayType',
        'BidderDetailType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BidderDetailType',
        'BidderNoticePreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BidderNoticePreferencesType',
        'BidderStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BidderStatusCodeType',
        'BiddingDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BiddingDetailsType',
        'BiddingSummaryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BiddingSummaryType',
        'BuyerProtectionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BuyerProtectionCodeType',
        'BuyerRequirementsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BuyerRequirementsType',
        'BuyerType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BuyerType',
        'BuyingGuideDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BuyingGuideDetailsType',
        'BuyingGuideType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BuyingGuideType',
        'BuyingSummaryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\BuyingSummaryType',
        'CalculatedShippingChargeOptionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CalculatedShippingChargeOptionCodeType',
        'CalculatedShippingPreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CalculatedShippingPreferencesType',
        'CalculatedShippingRateOptionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CalculatedShippingRateOptionCodeType',
        'CalculatedShippingRateType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CalculatedShippingRateType',
        'CancelOfferType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CancelOfferType',
        'CategoryArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CategoryArrayType',
        'CategoryFeatureType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CategoryFeatureType',
        'CategoryFinanceOfferArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CategoryFinanceOfferArrayType',
        'CategoryFinanceOfferType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CategoryFinanceOfferType',
        'CategoryListingsOrderCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CategoryListingsOrderCodeType',
        'CategoryListingsSearchCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CategoryListingsSearchCodeType',
        'CategoryMappingType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CategoryMappingType',
        'CategoryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CategoryType',
        'CharacteristicType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharacteristicType',
        'CharacteristicsSearchCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharacteristicsSearchCodeType',
        'CharacteristicsSetType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharacteristicsSetType',
        'CharityAffiliationType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharityAffiliationType',
        'CharityAffiliationTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharityAffiliationTypeCodeType',
        'CharityAffiliationsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharityAffiliationsType',
        'CharityInfoType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharityInfoType',
        'CharitySellerStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharitySellerStatusCodeType',
        'CharitySellerType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharitySellerType',
        'CharityStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharityStatusCodeType',
        'CharityType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CharityType',
        'CheckoutMethodCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CheckoutMethodCodeType',
        'CheckoutStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CheckoutStatusCodeType',
        'CheckoutStatusType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CheckoutStatusType',
        'CombinedPaymentOptionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CombinedPaymentOptionCodeType',
        'CombinedPaymentPeriodCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CombinedPaymentPeriodCodeType',
        'CombinedPaymentPreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CombinedPaymentPreferencesType',
        'CommentTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CommentTypeCodeType',
        'CompleteStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CompleteStatusCodeType',
        'ConditionSelectionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ConditionSelectionCodeType',
        'ContextSearchAssetType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ContextSearchAssetType',
        'CountryCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CountryCodeType',
        'CountryDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CountryDetailsType',
        'CrossPromotionPreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CrossPromotionPreferencesType',
        'CrossPromotionsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CrossPromotionsType',
        'CurrencyCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CurrencyCodeType',
        'CurrencyDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\CurrencyDetailsType',
        'DataElementSetType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DataElementSetType',
        'DateSpecifierCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DateSpecifierCodeType',
        'DepositTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DepositTypeCodeType',
        'DescriptionReviseModeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DescriptionReviseModeCodeType',
        'DescriptionTemplateCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DescriptionTemplateCodeType',
        'DescriptionTemplateType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DescriptionTemplateType',
        'DetailNameCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DetailNameCodeType',
        'DeviceTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DeviceTypeCodeType',
        'DigitalDeliveryDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DigitalDeliveryDetailsType',
        'DigitalDeliveryEnabledCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DigitalDeliveryEnabledCodeType',
        'DigitalDeliveryEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DigitalDeliveryEnabledDefinitionType',
        'DigitalDeliveryMethodCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DigitalDeliveryMethodCodeType',
        'DispatchTimeMaxDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DispatchTimeMaxDetailsType',
        'DisplayPayNowButtonCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisplayPayNowButtonCodeType',
        'DisputeArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeArrayType',
        'DisputeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DisputeType',
        'DistanceType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DistanceType',
        'DomainHistogramType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\DomainHistogramType',
        'EnableCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EnableCodeType',
        'EndOfAuctionEmailPreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EndOfAuctionEmailPreferencesType',
        'EndOfAuctionLogoTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EndOfAuctionLogoTypeCodeType',
        'EndReasonCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\EndReasonCodeType',
        'ExpansionArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpansionArrayType',
        'ExpressConditionRequiredDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressConditionRequiredDefinitionType',
        'ExpressDetailLevelCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressDetailLevelCodeType',
        'ExpressDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressDetailsType',
        'ExpressEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressEnabledDefinitionType',
        'ExpressHistogramAisleType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressHistogramAisleType',
        'ExpressHistogramDepartmentType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressHistogramDepartmentType',
        'ExpressHistogramDomainDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressHistogramDomainDetailsType',
        'ExpressHistogramProductType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressHistogramProductType',
        'ExpressHistogramSortCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressHistogramSortCodeType',
        'ExpressItemRequirementsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressItemRequirementsType',
        'ExpressItemSortCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressItemSortCodeType',
        'ExpressPicturesRequiredDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressPicturesRequiredDefinitionType',
        'ExpressPreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressPreferencesType',
        'ExpressProductSortCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressProductSortCodeType',
        'ExpressProductType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressProductType',
        'ExpressSellerRequirementsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressSellerRequirementsType',
        'ExpressSellingPreferenceCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExpressSellingPreferenceCodeType',
        'ExternalProductCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExternalProductCodeType',
        'ExternalTransactionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ExternalTransactionType',
        'FeatureDefinitionsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeatureDefinitionsType',
        'FeeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeeType',
        'FeedbackDetailArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeedbackDetailArrayType',
        'FeedbackDetailType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeedbackDetailType',
        'FeedbackInfoType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeedbackInfoType',
        'FeedbackPeriodArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeedbackPeriodArrayType',
        'FeedbackPeriodType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeedbackPeriodType',
        'FeedbackRatingStarCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeedbackRatingStarCodeType',
        'FeedbackRequirementsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeedbackRequirementsType',
        'FeedbackResponseCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeedbackResponseCodeType',
        'FeedbackSummaryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeedbackSummaryType',
        'FeesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FeesType',
        'FinanceOfferArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FinanceOfferArrayType',
        'FinanceOfferType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FinanceOfferType',
        'FlatRateInsuranceRangeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FlatRateInsuranceRangeCodeType',
        'FlatRateInsuranceRangeCostType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FlatRateInsuranceRangeCostType',
        'FlatShippingPreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FlatShippingPreferencesType',
        'FlatShippingRateOptionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\FlatShippingRateOptionCodeType',
        'GallerySortFilterCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GallerySortFilterCodeType',
        'GalleryTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GalleryTypeCodeType',
        'GetAllBiddersModeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetAllBiddersModeCodeType',
        'GetRecommendationsRequestContainerType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetRecommendationsRequestContainerType',
        'GetRecommendationsResponseContainerType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GetRecommendationsResponseContainerType',
        'GiftServicesCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GiftServicesCodeType',
        'GranularityLevelCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\GranularityLevelCodeType',
        'HitCounterCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HitCounterCodeType',
        'HomePageFeaturedEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\HomePageFeaturedEnabledDefinitionType',
        'InsuranceDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\InsuranceDetailsType',
        'InsuranceOptionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\InsuranceOptionCodeType',
        'InsuranceSelectedCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\InsuranceSelectedCodeType',
        'InternationalShippingServiceOptionsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\InternationalShippingServiceOptionsType',
        'ItemArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ItemArrayType',
        'ItemBidDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ItemBidDetailsType',
        'ItemFormatSortFilterCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ItemFormatSortFilterCodeType',
        'ItemListCustomizationType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ItemListCustomizationType',
        'ItemLocationCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ItemLocationCodeType',
        'ItemSortFilterCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ItemSortFilterCodeType',
        'ItemSortTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ItemSortTypeCodeType',
        'ItemType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ItemType',
        'ItemTypeFilterCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ItemTypeFilterCodeType',
        'LabelType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LabelType',
        'ListingAnalyzerRecommendationsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingAnalyzerRecommendationsType',
        'ListingCheckoutRedirectPreferenceType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingCheckoutRedirectPreferenceType',
        'ListingDesignerType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingDesignerType',
        'ListingDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingDetailsType',
        'ListingDurationDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingDurationDefinitionType',
        'ListingDurationDefinitionsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingDurationDefinitionsType',
        'ListingDurationReferenceType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingDurationReferenceType',
        'ListingEnhancementsCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingEnhancementsCodeType',
        'ListingFlowCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingFlowCodeType',
        'ListingStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingStatusCodeType',
        'ListingSubtypeEnum\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingSubtypeEnum',
        'ListingTipArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingTipArrayType',
        'ListingTipFieldType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingTipFieldType',
        'ListingTipMessageType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingTipMessageType',
        'ListingTipType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingTipType',
        'ListingTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingTypeCodeType',
        'LiveAuctionApprovalStatusArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LiveAuctionApprovalStatusArrayType',
        'LiveAuctionApprovalStatusType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LiveAuctionApprovalStatusType',
        'LiveAuctionBidType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LiveAuctionBidType',
        'LiveAuctionCatalogType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LiveAuctionCatalogType',
        'LiveAuctionDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LiveAuctionDetailsType',
        'LocalListingDistancesNonSubscriptionDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LocalListingDistancesNonSubscriptionDefinitionType',
        'LocalListingDistancesRegularDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LocalListingDistancesRegularDefinitionType',
        'LocalListingDistancesSpecialtyDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LocalListingDistancesSpecialtyDefinitionType',
        'LocalMarketNonSubscriptionDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LocalMarketNonSubscriptionDefinitionType',
        'LocalMarketPremiumSubscriptionDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LocalMarketPremiumSubscriptionDefinitionType',
        'LocalMarketRegularSubscriptionDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LocalMarketRegularSubscriptionDefinitionType',
        'LocalMarketSpecialitySubscriptionDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LocalMarketSpecialitySubscriptionDefinitionType',
        'LookupAttributeArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LookupAttributeArrayType',
        'LookupAttributeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\LookupAttributeType',
        'MarkUpMarkDownEventType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MarkUpMarkDownEventType',
        'MarkUpMarkDownEventTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MarkUpMarkDownEventTypeCodeType',
        'MarkUpMarkDownHistoryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MarkUpMarkDownHistoryType',
        'MaximumItemRequirementsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MaximumItemRequirementsType',
        'MemberMessageExchangeArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MemberMessageExchangeArrayType',
        'MemberMessageExchangeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MemberMessageExchangeType',
        'MemberMessageType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MemberMessageType',
        'MerchDisplayCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MerchDisplayCodeType',
        'MerchandizingPrefCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MerchandizingPrefCodeType',
        'MessageStatusTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MessageStatusTypeCodeType',
        'MessageTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MessageTypeCodeType',
        'MinimumReservePriceDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MinimumReservePriceDefinitionType',
        'ModifiedFieldType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ModifiedFieldType',
        'ModifyActionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ModifyActionCodeType',
        'ModifyCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ModifyCodeType',
        'MyMessagesAlertArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesAlertArrayType',
        'MyMessagesAlertResolutionStatusCode\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesAlertResolutionStatusCode',
        'MyMessagesAlertType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesAlertType',
        'MyMessagesFolderOperationCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesFolderOperationCodeType',
        'MyMessagesFolderSummaryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesFolderSummaryType',
        'MyMessagesFolderType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesFolderType',
        'MyMessagesForwardDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesForwardDetailsType',
        'MyMessagesMessageArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesMessageArrayType',
        'MyMessagesMessageType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesMessageType',
        'MyMessagesResponseDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesResponseDetailsType',
        'MyMessagesSummaryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesSummaryType',
        'MyeBayFavoriteSearchListType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyeBayFavoriteSearchListType',
        'MyeBayFavoriteSearchType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyeBayFavoriteSearchType',
        'MyeBayFavoriteSellerListType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyeBayFavoriteSellerListType',
        'MyeBayFavoriteSellerType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyeBayFavoriteSellerType',
        'MyeBaySecondChanceOfferListType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyeBaySecondChanceOfferListType',
        'MyeBaySelectionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MyeBaySelectionType',
        'NameValueListArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NameValueListArrayType',
        'NameValueListType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NameValueListType',
        'NotificationDetailsArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationDetailsArrayType',
        'NotificationDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationDetailsType',
        'NotificationEnableArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationEnableArrayType',
        'NotificationEnableType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationEnableType',
        'NotificationEventPropertyNameCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationEventPropertyNameCodeType',
        'NotificationEventPropertyType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationEventPropertyType',
        'NotificationEventStateCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationEventStateCodeType',
        'NotificationEventTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationEventTypeCodeType',
        'NotificationPayloadTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationPayloadTypeCodeType',
        'NotificationRoleCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationRoleCodeType',
        'NotificationStatisticsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationStatisticsType',
        'NotificationUserDataType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\NotificationUserDataType',
        'OfferArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\OfferArrayType',
        'OfferType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\OfferType',
        'OperationTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\OperationTypeCodeType',
        'OrderArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\OrderArrayType',
        'OrderStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\OrderStatusCodeType',
        'OrderTransactionArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\OrderTransactionArrayType',
        'OrderTransactionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\OrderTransactionType',
        'OrderType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\OrderType',
        'PaginatedItemArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaginatedItemArrayType',
        'PaginatedOrderTransactionArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaginatedOrderTransactionArrayType',
        'PaginatedTransactionArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaginatedTransactionArrayType',
        'PaginationResultType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType',
        'PaidStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaidStatusCodeType',
        'PayPalAccountLevelCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PayPalAccountLevelCodeType',
        'PayPalAccountStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PayPalAccountStatusCodeType',
        'PayPalAccountTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PayPalAccountTypeCodeType',
        'PaymentDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaymentDetailsType',
        'PaymentMethodSearchCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaymentMethodSearchCodeType',
        'PaymentOptionDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaymentOptionDetailsType',
        'PaymentStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaymentStatusCodeType',
        'PaymentTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PaymentTypeCodeType',
        'PhotoDisplayCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PhotoDisplayCodeType',
        'PictureDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureDetailsType',
        'PictureManagerActionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerActionCodeType',
        'PictureManagerDetailLevelCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerDetailLevelCodeType',
        'PictureManagerDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerDetailsType',
        'PictureManagerFolderType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerFolderType',
        'PictureManagerPictureDisplayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerPictureDisplayType',
        'PictureManagerPictureDisplayTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerPictureDisplayTypeCodeType',
        'PictureManagerPictureType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerPictureType',
        'PictureManagerSubscriptionLevelCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerSubscriptionLevelCodeType',
        'PictureManagerSubscriptionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureManagerSubscriptionType',
        'PictureSourceCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PictureSourceCodeType',
        'PriceRangeFilterType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PriceRangeFilterType',
        'PricingRecommendationsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PricingRecommendationsType',
        'ProPackEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProPackEnabledDefinitionType',
        'ProPackPlusEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProPackPlusEnabledDefinitionType',
        'ProStoresCheckoutPreferenceType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProStoresCheckoutPreferenceType',
        'ProStoresDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProStoresDetailsType',
        'ProductArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductArrayType',
        'ProductFamilyType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductFamilyType',
        'ProductFinderConstraintType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductFinderConstraintType',
        'ProductInfoType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductInfoType',
        'ProductListingDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductListingDetailsType',
        'ProductRecommendationsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductRecommendationsType',
        'ProductSearchPageType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductSearchPageType',
        'ProductSearchResultType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductSearchResultType',
        'ProductSearchType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductSearchType',
        'ProductType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductType',
        'ProductUseCaseCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductUseCaseCodeType',
        'PromotedItemType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PromotedItemType',
        'PromotionDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PromotionDetailsType',
        'PromotionItemPriceTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PromotionItemPriceTypeCodeType',
        'PromotionItemSelectionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PromotionItemSelectionCodeType',
        'PromotionMethodCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PromotionMethodCodeType',
        'PromotionRuleArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PromotionRuleArrayType',
        'PromotionRuleType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PromotionRuleType',
        'PromotionSchemeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\PromotionSchemeCodeType',
        'ProximitySearchDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProximitySearchDetailsType',
        'ProximitySearchType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProximitySearchType',
        'QuantityOperatorCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\QuantityOperatorCodeType',
        'QuestionTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\QuestionTypeCodeType',
        'RangeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RangeCodeType',
        'ReasonCodeDetailType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReasonCodeDetailType',
        'RecipientRelationCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RecipientRelationCodeType',
        'RecommendationEngineCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RecommendationEngineCodeType',
        'RefundArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RefundArrayType',
        'RefundReasonCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RefundReasonCodeType',
        'RefundType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RefundType',
        'RefundTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RefundTypeCodeType',
        'RegionDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RegionDetailsType',
        'RelatedSearchKeywordArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RelatedSearchKeywordArrayType',
        'ReminderCustomizationType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReminderCustomizationType',
        'RemindersType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RemindersType',
        'RequestCategoriesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\RequestCategoriesType',
        'ResponseAttributeSetType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ResponseAttributeSetType',
        'ReviseStatusType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ReviseStatusType',
        'SalesTaxType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SalesTaxType',
        'ScheduleType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ScheduleType',
        'SchedulingInfoType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SchedulingInfoType',
        'SearchAttributesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchAttributesType',
        'SearchDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchDetailsType',
        'SearchFlagsCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchFlagsCodeType',
        'SearchLocationFilterType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchLocationFilterType',
        'SearchLocationType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchLocationType',
        'SearchRequestType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchRequestType',
        'SearchResultItemArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchResultItemArrayType',
        'SearchResultItemType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchResultItemType',
        'SearchResultValuesCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchResultValuesCodeType',
        'SearchSortOrderCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchSortOrderCodeType',
        'SearchStoreFilterType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchStoreFilterType',
        'SearchTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SearchTypeCodeType',
        'SecondChanceOfferDurationCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SecondChanceOfferDurationCodeType',
        'SellerBusinessCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerBusinessCodeType',
        'SellerContactDetailsEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerContactDetailsEnabledDefinitionType',
        'SellerFavoriteItemPreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerFavoriteItemPreferencesType',
        'SellerGuaranteeLevelCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerGuaranteeLevelCodeType',
        'SellerLevelCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerLevelCodeType',
        'SellerPaymentMethodCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerPaymentMethodCodeType',
        'SellerPaymentPreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerPaymentPreferencesType',
        'SellerPaymentType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerPaymentType',
        'SellerType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerType',
        'SellingManagerProductDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellingManagerProductDetailsType',
        'SellingStatusType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellingStatusType',
        'SellingSummaryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellingSummaryType',
        'SetUserNotesActionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SetUserNotesActionCodeType',
        'ShipmentDeliveryStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShipmentDeliveryStatusCodeType',
        'ShipmentStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShipmentStatusCodeType',
        'ShippingCarrierCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingCarrierCodeType',
        'ShippingDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingDetailsType',
        'ShippingFeatureCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingFeatureCodeType',
        'ShippingLocationDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingLocationDetailsType',
        'ShippingOptionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingOptionCodeType',
        'ShippingPackageCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingPackageCodeType',
        'ShippingRateTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingRateTypeCodeType',
        'ShippingRegionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingRegionCodeType',
        'ShippingServiceCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingServiceCodeType',
        'ShippingServiceDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingServiceDetailsType',
        'ShippingServiceOptionsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingServiceOptionsType',
        'ShippingTermRequiredDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingTermRequiredDefinitionType',
        'ShippingTermsCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingTermsCodeType',
        'ShippingTypeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShippingTypeCodeType',
        'SiteCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SiteCodeType',
        'SiteDefaultsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SiteDefaultsType',
        'SiteDetailsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SiteDetailsType',
        'SiteHostedPictureType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SiteHostedPictureType',
        'SiteLocationType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SiteLocationType',
        'SiteWideCharacteristicsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SiteWideCharacteristicsType',
        'SkypeContactOptionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SkypeContactOptionCodeType',
        'SkypeMeNonTransactionalEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SkypeMeNonTransactionalEnabledDefinitionType',
        'SkypeMeTransactionalEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SkypeMeTransactionalEnabledDefinitionType',
        'SkypeOptionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SkypeOptionCodeType',
        'SortOrderCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SortOrderCodeType',
        'SpellingSuggestionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SpellingSuggestionType',
        'StoreCategoryUpdateActionCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCategoryUpdateActionCodeType',
        'StoreColorSchemeArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreColorSchemeArrayType',
        'StoreColorSchemeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreColorSchemeType',
        'StoreColorType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreColorType',
        'StoreCustomCategoryArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomCategoryArrayType',
        'StoreCustomCategoryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomCategoryType',
        'StoreCustomHeaderLayoutCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomHeaderLayoutCodeType',
        'StoreCustomListingHeaderDisplayCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomListingHeaderDisplayCodeType',
        'StoreCustomListingHeaderLinkCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomListingHeaderLinkCodeType',
        'StoreCustomListingHeaderLinkType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomListingHeaderLinkType',
        'StoreCustomListingHeaderType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomListingHeaderType',
        'StoreCustomPageArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomPageArrayType',
        'StoreCustomPageStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomPageStatusCodeType',
        'StoreCustomPageType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreCustomPageType',
        'StoreFontFaceCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreFontFaceCodeType',
        'StoreFontSizeCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreFontSizeCodeType',
        'StoreFontType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreFontType',
        'StoreHeaderStyleCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreHeaderStyleCodeType',
        'StoreInventoryEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreInventoryEnabledDefinitionType',
        'StoreItemListLayoutCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreItemListLayoutCodeType',
        'StoreItemListSortOrderCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreItemListSortOrderCodeType',
        'StoreLogoArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreLogoArrayType',
        'StoreLogoType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreLogoType',
        'StorePreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StorePreferencesType',
        'StoreSearchCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreSearchCodeType',
        'StoreSubscriptionArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreSubscriptionArrayType',
        'StoreSubscriptionLevelCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreSubscriptionLevelCodeType',
        'StoreSubscriptionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreSubscriptionType',
        'StoreThemeArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreThemeArrayType',
        'StoreThemeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreThemeType',
        'StoreType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreType',
        'StoreVacationPreferencesType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StoreVacationPreferencesType',
        'StorefrontType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StorefrontType',
        'StringMatchCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\StringMatchCodeType',
        'SuggestedCategoryArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SuggestedCategoryArrayType',
        'SuggestedCategoryType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SuggestedCategoryType',
        'SummaryEventScheduleType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SummaryEventScheduleType',
        'SummaryFrequencyCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SummaryFrequencyCodeType',
        'SummaryWindowPeriodCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SummaryWindowPeriodCodeType',
        'TaskStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\TaskStatusCodeType',
        'TaxJurisdictionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\TaxJurisdictionType',
        'TaxTableType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\TaxTableType',
        'ThemeGroupType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ThemeGroupType',
        'TokenReturnMethodCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\TokenReturnMethodCodeType',
        'TradingRoleCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\TradingRoleCodeType',
        'TransactionArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\TransactionArrayType',
        'TransactionPlatformType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\TransactionPlatformType',
        'TransactionStatusType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\TransactionStatusType',
        'TransactionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\TransactionType',
        'UserConsentRequiredDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\UserConsentRequiredDefinitionType',
        'UserIdFilterType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\UserIdFilterType',
        'UserStatusCodeType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\UserStatusCodeType',
        'UserType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\UserType',
        'ValType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ValType',
        'ValuePackEnabledDefinitionType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ValuePackEnabledDefinitionType',
        'VendorHostedPictureType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\VendorHostedPictureType',
        'VerifiedUserRequirementsType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\VerifiedUserRequirementsType',
        'WantItNowPostArrayType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WantItNowPostArrayType',
        'WantItNowPostType\,' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\WantItNowPostType',
    );

    public function __construct(
        $wsdl = null,
        $options = array()
    ) {
        foreach ($this->classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        if (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
    }

    /**
     * AddDispute
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddDisputeRequestType $AddDisputeRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddDisputeResponseType
     */
    public function addDispute(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddDisputeRequestType $AddDisputeRequest
    ) {
        return $this->__soapCall(
            'AddDispute',
            array($AddDisputeRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddDisputeResponse
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddDisputeResponseRequestType $AddDisputeResponseRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddDisputeResponseResponseType
     */
    public function addDisputeResponse(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddDisputeResponseRequestType $AddDisputeResponseRequest
    ) {
        return $this->__soapCall(
            'AddDisputeResponse',
            array($AddDisputeResponseRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddItemRequestType $AddItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddItemResponseType
     */
    public function addItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddItemRequestType $AddItemRequest
    ) {
        return $this->__soapCall(
            'AddItem',
            array($AddItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddLiveAuctionItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddLiveAuctionItemRequestType $AddLiveAuctionItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddLiveAuctionItemResponseType
     */
    public function addLiveAuctionItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddLiveAuctionItemRequestType $AddLiveAuctionItemRequest
    ) {
        return $this->__soapCall(
            'AddLiveAuctionItem',
            array($AddLiveAuctionItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddMemberMessageAAQToPartner
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessageAAQToPartnerRequestType $AddMemberMessageAAQToPartnerRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessageAAQToPartnerResponseType
     */
    public function addMemberMessageAAQToPartner(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessageAAQToPartnerRequestType $AddMemberMessageAAQToPartnerRequest
    ) {
        return $this->__soapCall(
            'AddMemberMessageAAQToPartner',
            array($AddMemberMessageAAQToPartnerRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddMemberMessageRTQ
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessageRTQRequestType $AddMemberMessageRTQRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessageRTQResponseType
     */
    public function addMemberMessageRTQ(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessageRTQRequestType $AddMemberMessageRTQRequest
    ) {
        return $this->__soapCall(
            'AddMemberMessageRTQ',
            array($AddMemberMessageRTQRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddMemberMessagesAAQToBidder
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessagesAAQToBidderRequestType $AddMemberMessagesAAQToBidderRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessagesAAQToBidderResponseType
     */
    public function addMemberMessagesAAQToBidder(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddMemberMessagesAAQToBidderRequestType $AddMemberMessagesAAQToBidderRequest
    ) {
        return $this->__soapCall(
            'AddMemberMessagesAAQToBidder',
            array($AddMemberMessagesAAQToBidderRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddOrder
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddOrderRequestType $AddOrderRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddOrderResponseType
     */
    public function addOrder(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddOrderRequestType $AddOrderRequest
    ) {
        return $this->__soapCall(
            'AddOrder',
            array($AddOrderRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddSecondChanceItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddSecondChanceItemRequestType $AddSecondChanceItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddSecondChanceItemResponseType
     */
    public function addSecondChanceItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddSecondChanceItemRequestType $AddSecondChanceItemRequest
    ) {
        return $this->__soapCall(
            'AddSecondChanceItem',
            array($AddSecondChanceItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddToItemDescription
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddToItemDescriptionRequestType $AddToItemDescriptionRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddToItemDescriptionResponseType
     */
    public function addToItemDescription(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddToItemDescriptionRequestType $AddToItemDescriptionRequest
    ) {
        return $this->__soapCall(
            'AddToItemDescription',
            array($AddToItemDescriptionRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddToWatchList
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddToWatchListRequestType $AddToWatchListRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddToWatchListResponseType
     */
    public function addToWatchList(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddToWatchListRequestType $AddToWatchListRequest
    ) {
        return $this->__soapCall(
            'AddToWatchList',
            array($AddToWatchListRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddTransactionConfirmationItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddTransactionConfirmationItemRequestType $AddTransactionConfirmationItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\AddTransactionConfirmationItemResponseType
     */
    public function addTransactionConfirmationItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddTransactionConfirmationItemRequestType $AddTransactionConfirmationItemRequest
    ) {
        return $this->__soapCall(
            'AddTransactionConfirmationItem',
            array($AddTransactionConfirmationItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ApproveLiveAuctionBidders
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ApproveLiveAuctionBiddersRequestType $ApproveLiveAuctionBiddersRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ApproveLiveAuctionBiddersResponseType
     */
    public function approveLiveAuctionBidders(
        \Controle\Hostnet\Namesp\Sub4\Complex\ApproveLiveAuctionBiddersRequestType $ApproveLiveAuctionBiddersRequest
    ) {
        return $this->__soapCall(
            'ApproveLiveAuctionBidders',
            array($ApproveLiveAuctionBiddersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * CompleteSale
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\CompleteSaleRequestType $CompleteSaleRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\CompleteSaleResponseType
     */
    public function completeSale(
        \Controle\Hostnet\Namesp\Sub4\Complex\CompleteSaleRequestType $CompleteSaleRequest
    ) {
        return $this->__soapCall(
            'CompleteSale',
            array($CompleteSaleRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * DeleteMyMessages
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DeleteMyMessagesRequestType $DeleteMyMessagesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\DeleteMyMessagesResponseType
     */
    public function deleteMyMessages(
        \Controle\Hostnet\Namesp\Sub4\Complex\DeleteMyMessagesRequestType $DeleteMyMessagesRequest
    ) {
        return $this->__soapCall(
            'DeleteMyMessages',
            array($DeleteMyMessagesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * EndItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\EndItemRequestType $EndItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\EndItemResponseType
     */
    public function endItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\EndItemRequestType $EndItemRequest
    ) {
        return $this->__soapCall(
            'EndItem',
            array($EndItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * FetchToken
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\FetchTokenRequestType $FetchTokenRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\FetchTokenResponseType
     */
    public function fetchToken(
        \Controle\Hostnet\Namesp\Sub4\Complex\FetchTokenRequestType $FetchTokenRequest
    ) {
        return $this->__soapCall(
            'FetchToken',
            array($FetchTokenRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetAccount
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetAccountRequestType $GetAccountRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetAccountResponseType
     */
    public function getAccount(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetAccountRequestType $GetAccountRequest
    ) {
        return $this->__soapCall(
            'GetAccount',
            array($GetAccountRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetAdFormatLeads
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetAdFormatLeadsRequestType $GetAdFormatLeadsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetAdFormatLeadsResponseType
     */
    public function getAdFormatLeads(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetAdFormatLeadsRequestType $GetAdFormatLeadsRequest
    ) {
        return $this->__soapCall(
            'GetAdFormatLeads',
            array($GetAdFormatLeadsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetAllBidders
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetAllBiddersRequestType $GetAllBiddersRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetAllBiddersResponseType
     */
    public function getAllBidders(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetAllBiddersRequestType $GetAllBiddersRequest
    ) {
        return $this->__soapCall(
            'GetAllBidders',
            array($GetAllBiddersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetApiAccessRules
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetApiAccessRulesRequestType $GetApiAccessRulesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetApiAccessRulesResponseType
     */
    public function getApiAccessRules(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetApiAccessRulesRequestType $GetApiAccessRulesRequest
    ) {
        return $this->__soapCall(
            'GetApiAccessRules',
            array($GetApiAccessRulesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetAttributesCS
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetAttributesCSRequestType $GetAttributesCSRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetAttributesCSResponseType
     */
    public function getAttributesCS(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetAttributesCSRequestType $GetAttributesCSRequest
    ) {
        return $this->__soapCall(
            'GetAttributesCS',
            array($GetAttributesCSRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetAttributesXSL
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetAttributesXSLRequestType $GetAttributesXSLRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetAttributesXSLResponseType
     */
    public function getAttributesXSL(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetAttributesXSLRequestType $GetAttributesXSLRequest
    ) {
        return $this->__soapCall(
            'GetAttributesXSL',
            array($GetAttributesXSLRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetBestOffers
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetBestOffersRequestType $GetBestOffersRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetBestOffersResponseType
     */
    public function getBestOffers(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetBestOffersRequestType $GetBestOffersRequest
    ) {
        return $this->__soapCall(
            'GetBestOffers',
            array($GetBestOffersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetBidderList
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetBidderListRequestType $GetBidderListRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetBidderListResponseType
     */
    public function getBidderList(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetBidderListRequestType $GetBidderListRequest
    ) {
        return $this->__soapCall(
            'GetBidderList',
            array($GetBidderListRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategories
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoriesRequestType $GetCategoriesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoriesResponseType
     */
    public function getCategories(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoriesRequestType $GetCategoriesRequest
    ) {
        return $this->__soapCall(
            'GetCategories',
            array($GetCategoriesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategory2CS
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetCategory2CSRequestType $GetCategory2CSRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetCategory2CSResponseType
     */
    public function getCategory2CS(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetCategory2CSRequestType $GetCategory2CSRequest
    ) {
        return $this->__soapCall(
            'GetCategory2CS',
            array($GetCategory2CSRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategory2FinanceOffer
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetCategory2FinanceOfferRequestType $GetCategory2FinanceOfferRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetCategory2FinanceOfferResponseType
     */
    public function getCategory2FinanceOffer(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetCategory2FinanceOfferRequestType $GetCategory2FinanceOfferRequest
    ) {
        return $this->__soapCall(
            'GetCategory2FinanceOffer',
            array($GetCategory2FinanceOfferRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategoryFeatures
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryFeaturesRequestType $GetCategoryFeaturesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryFeaturesResponseType
     */
    public function getCategoryFeatures(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryFeaturesRequestType $GetCategoryFeaturesRequest
    ) {
        return $this->__soapCall(
            'GetCategoryFeatures',
            array($GetCategoryFeaturesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategoryListings
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryListingsRequestType $GetCategoryListingsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryListingsResponseType
     */
    public function getCategoryListings(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryListingsRequestType $GetCategoryListingsRequest
    ) {
        return $this->__soapCall(
            'GetCategoryListings',
            array($GetCategoryListingsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategoryMappings
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryMappingsRequestType $GetCategoryMappingsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryMappingsResponseType
     */
    public function getCategoryMappings(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetCategoryMappingsRequestType $GetCategoryMappingsRequest
    ) {
        return $this->__soapCall(
            'GetCategoryMappings',
            array($GetCategoryMappingsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetChallengeToken
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetChallengeTokenRequestType $GetChallengeTokenRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetChallengeTokenResponseType
     */
    public function getChallengeToken(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetChallengeTokenRequestType $GetChallengeTokenRequest
    ) {
        return $this->__soapCall(
            'GetChallengeToken',
            array($GetChallengeTokenRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCharities
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetCharitiesRequestType $GetCharitiesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetCharitiesResponseType
     */
    public function getCharities(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetCharitiesRequestType $GetCharitiesRequest
    ) {
        return $this->__soapCall(
            'GetCharities',
            array($GetCharitiesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetContextualKeywords
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetContextualKeywordsRequestType $GetContextualKeywordsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetContextualKeywordsResponseType
     */
    public function getContextualKeywords(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetContextualKeywordsRequestType $GetContextualKeywordsRequest
    ) {
        return $this->__soapCall(
            'GetContextualKeywords',
            array($GetContextualKeywordsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCrossPromotions
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetCrossPromotionsRequestType $GetCrossPromotionsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetCrossPromotionsResponseType
     */
    public function getCrossPromotions(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetCrossPromotionsRequestType $GetCrossPromotionsRequest
    ) {
        return $this->__soapCall(
            'GetCrossPromotions',
            array($GetCrossPromotionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetDescriptionTemplates
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetDescriptionTemplatesRequestType $GetDescriptionTemplatesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetDescriptionTemplatesResponseType
     */
    public function getDescriptionTemplates(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetDescriptionTemplatesRequestType $GetDescriptionTemplatesRequest
    ) {
        return $this->__soapCall(
            'GetDescriptionTemplates',
            array($GetDescriptionTemplatesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetDispute
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetDisputeRequestType $GetDisputeRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetDisputeResponseType
     */
    public function getDispute(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetDisputeRequestType $GetDisputeRequest
    ) {
        return $this->__soapCall(
            'GetDispute',
            array($GetDisputeRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetFeedback
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetFeedbackRequestType $GetFeedbackRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetFeedbackResponseType
     */
    public function getFeedback(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetFeedbackRequestType $GetFeedbackRequest
    ) {
        return $this->__soapCall(
            'GetFeedback',
            array($GetFeedbackRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetFinanceOffers
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetFinanceOffersRequestType $GetFinanceOffersRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetFinanceOffersResponseType
     */
    public function getFinanceOffers(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetFinanceOffersRequestType $GetFinanceOffersRequest
    ) {
        return $this->__soapCall(
            'GetFinanceOffers',
            array($GetFinanceOffersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetHighBidders
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetHighBiddersRequestType $GetHighBiddersRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetHighBiddersResponseType
     */
    public function getHighBidders(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetHighBiddersRequestType $GetHighBiddersRequest
    ) {
        return $this->__soapCall(
            'GetHighBidders',
            array($GetHighBiddersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetItemRequestType $GetItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetItemResponseType
     */
    public function getItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetItemRequestType $GetItemRequest
    ) {
        return $this->__soapCall(
            'GetItem',
            array($GetItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetItemRecommendations
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetItemRecommendationsRequestType $GetItemRecommendationsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetItemRecommendationsResponseType
     */
    public function getItemRecommendations(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetItemRecommendationsRequestType $GetItemRecommendationsRequest
    ) {
        return $this->__soapCall(
            'GetItemRecommendations',
            array($GetItemRecommendationsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetItemShipping
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetItemShippingRequestType $GetItemShippingRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetItemShippingResponseType
     */
    public function getItemShipping(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetItemShippingRequestType $GetItemShippingRequest
    ) {
        return $this->__soapCall(
            'GetItemShipping',
            array($GetItemShippingRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetItemTransactions
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetItemTransactionsRequestType $GetItemTransactionsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetItemTransactionsResponseType
     */
    public function getItemTransactions(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetItemTransactionsRequestType $GetItemTransactionsRequest
    ) {
        return $this->__soapCall(
            'GetItemTransactions',
            array($GetItemTransactionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetItemsAwaitingFeedback
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetItemsAwaitingFeedbackRequestType $GetItemsAwaitingFeedbackRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetItemsAwaitingFeedbackResponseType
     */
    public function getItemsAwaitingFeedback(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetItemsAwaitingFeedbackRequestType $GetItemsAwaitingFeedbackRequest
    ) {
        return $this->__soapCall(
            'GetItemsAwaitingFeedback',
            array($GetItemsAwaitingFeedbackRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetLiveAuctionBidders
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetLiveAuctionBiddersRequestType $GetLiveAuctionBiddersRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetLiveAuctionBiddersResponseType
     */
    public function getLiveAuctionBidders(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetLiveAuctionBiddersRequestType $GetLiveAuctionBiddersRequest
    ) {
        return $this->__soapCall(
            'GetLiveAuctionBidders',
            array($GetLiveAuctionBiddersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetLiveAuctionCatalogDetails
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetLiveAuctionCatalogDetailsRequestType $GetLiveAuctionCatalogDetailsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetLiveAuctionCatalogDetailsResponseType
     */
    public function getLiveAuctionCatalogDetails(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetLiveAuctionCatalogDetailsRequestType $GetLiveAuctionCatalogDetailsRequest
    ) {
        return $this->__soapCall(
            'GetLiveAuctionCatalogDetails',
            array($GetLiveAuctionCatalogDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMemberMessages
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetMemberMessagesRequestType $GetMemberMessagesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetMemberMessagesResponseType
     */
    public function getMemberMessages(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetMemberMessagesRequestType $GetMemberMessagesRequest
    ) {
        return $this->__soapCall(
            'GetMemberMessages',
            array($GetMemberMessagesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMyMessages
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetMyMessagesRequestType $GetMyMessagesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetMyMessagesResponseType
     */
    public function getMyMessages(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetMyMessagesRequestType $GetMyMessagesRequest
    ) {
        return $this->__soapCall(
            'GetMyMessages',
            array($GetMyMessagesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMyeBay
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayRequestType $GetMyeBayRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayResponseType
     */
    public function getMyeBay(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayRequestType $GetMyeBayRequest
    ) {
        return $this->__soapCall(
            'GetMyeBay',
            array($GetMyeBayRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMyeBayBuying
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayBuyingRequestType $GetMyeBayBuyingRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayBuyingResponseType
     */
    public function getMyeBayBuying(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayBuyingRequestType $GetMyeBayBuyingRequest
    ) {
        return $this->__soapCall(
            'GetMyeBayBuying',
            array($GetMyeBayBuyingRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMyeBayReminders
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayRemindersRequestType $GetMyeBayRemindersRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayRemindersResponseType
     */
    public function getMyeBayReminders(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBayRemindersRequestType $GetMyeBayRemindersRequest
    ) {
        return $this->__soapCall(
            'GetMyeBayReminders',
            array($GetMyeBayRemindersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMyeBaySelling
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBaySellingRequestType $GetMyeBaySellingRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBaySellingResponseType
     */
    public function getMyeBaySelling(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetMyeBaySellingRequestType $GetMyeBaySellingRequest
    ) {
        return $this->__soapCall(
            'GetMyeBaySelling',
            array($GetMyeBaySellingRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetNotificationPreferences
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetNotificationPreferencesRequestType $GetNotificationPreferencesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetNotificationPreferencesResponseType
     */
    public function getNotificationPreferences(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetNotificationPreferencesRequestType $GetNotificationPreferencesRequest
    ) {
        return $this->__soapCall(
            'GetNotificationPreferences',
            array($GetNotificationPreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetNotificationsUsage
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetNotificationsUsageRequestType $GetNotificationsUsageRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetNotificationsUsageResponseType
     */
    public function getNotificationsUsage(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetNotificationsUsageRequestType $GetNotificationsUsageRequest
    ) {
        return $this->__soapCall(
            'GetNotificationsUsage',
            array($GetNotificationsUsageRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetOrderTransactions
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetOrderTransactionsRequestType $GetOrderTransactionsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetOrderTransactionsResponseType
     */
    public function getOrderTransactions(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetOrderTransactionsRequestType $GetOrderTransactionsRequest
    ) {
        return $this->__soapCall(
            'GetOrderTransactions',
            array($GetOrderTransactionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetOrders
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetOrdersRequestType $GetOrdersRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetOrdersResponseType
     */
    public function getOrders(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetOrdersRequestType $GetOrdersRequest
    ) {
        return $this->__soapCall(
            'GetOrders',
            array($GetOrdersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetPictureManagerDetails
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetPictureManagerDetailsRequestType $GetPictureManagerDetailsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetPictureManagerDetailsResponseType
     */
    public function getPictureManagerDetails(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetPictureManagerDetailsRequestType $GetPictureManagerDetailsRequest
    ) {
        return $this->__soapCall(
            'GetPictureManagerDetails',
            array($GetPictureManagerDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetPictureManagerOptions
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetPictureManagerOptionsRequestType $GetPictureManagerOptionsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetPictureManagerOptionsResponseType
     */
    public function getPictureManagerOptions(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetPictureManagerOptionsRequestType $GetPictureManagerOptionsRequest
    ) {
        return $this->__soapCall(
            'GetPictureManagerOptions',
            array($GetPictureManagerOptionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetPopularKeywords
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetPopularKeywordsRequestType $GetPopularKeywordsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetPopularKeywordsResponseType
     */
    public function getPopularKeywords(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetPopularKeywordsRequestType $GetPopularKeywordsRequest
    ) {
        return $this->__soapCall(
            'GetPopularKeywords',
            array($GetPopularKeywordsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductFamilyMembers
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetProductFamilyMembersRequestType $GetProductFamilyMembersRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetProductFamilyMembersResponseType
     */
    public function getProductFamilyMembers(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetProductFamilyMembersRequestType $GetProductFamilyMembersRequest
    ) {
        return $this->__soapCall(
            'GetProductFamilyMembers',
            array($GetProductFamilyMembersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductFinder
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetProductFinderRequestType $GetProductFinderRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetProductFinderResponseType
     */
    public function getProductFinder(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetProductFinderRequestType $GetProductFinderRequest
    ) {
        return $this->__soapCall(
            'GetProductFinder',
            array($GetProductFinderRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductFinderXSL
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetProductFinderXSLRequestType $GetProductFinderXSLRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetProductFinderXSLResponseType
     */
    public function getProductFinderXSL(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetProductFinderXSLRequestType $GetProductFinderXSLRequest
    ) {
        return $this->__soapCall(
            'GetProductFinderXSL',
            array($GetProductFinderXSLRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductSearchPage
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetProductSearchPageRequestType $GetProductSearchPageRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetProductSearchPageResponseType
     */
    public function getProductSearchPage(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetProductSearchPageRequestType $GetProductSearchPageRequest
    ) {
        return $this->__soapCall(
            'GetProductSearchPage',
            array($GetProductSearchPageRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductSearchResults
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetProductSearchResultsRequestType $GetProductSearchResultsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetProductSearchResultsResponseType
     */
    public function getProductSearchResults(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetProductSearchResultsRequestType $GetProductSearchResultsRequest
    ) {
        return $this->__soapCall(
            'GetProductSearchResults',
            array($GetProductSearchResultsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductSellingPages
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetProductSellingPagesRequestType $GetProductSellingPagesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetProductSellingPagesResponseType
     */
    public function getProductSellingPages(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetProductSellingPagesRequestType $GetProductSellingPagesRequest
    ) {
        return $this->__soapCall(
            'GetProductSellingPages',
            array($GetProductSellingPagesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetPromotionRules
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetPromotionRulesRequestType $GetPromotionRulesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetPromotionRulesResponseType
     */
    public function getPromotionRules(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetPromotionRulesRequestType $GetPromotionRulesRequest
    ) {
        return $this->__soapCall(
            'GetPromotionRules',
            array($GetPromotionRulesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetRecommendations
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetRecommendationsRequestType $GetRecommendationsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetRecommendationsResponseType
     */
    public function getRecommendations(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetRecommendationsRequestType $GetRecommendationsRequest
    ) {
        return $this->__soapCall(
            'GetRecommendations',
            array($GetRecommendationsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetReturnURL
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetReturnURLRequestType $GetReturnURLRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetReturnURLResponseType
     */
    public function getReturnURL(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetReturnURLRequestType $GetReturnURLRequest
    ) {
        return $this->__soapCall(
            'GetReturnURL',
            array($GetReturnURLRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetRuName
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetRuNameRequestType $GetRuNameRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetRuNameResponseType
     */
    public function getRuName(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetRuNameRequestType $GetRuNameRequest
    ) {
        return $this->__soapCall(
            'GetRuName',
            array($GetRuNameRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSearchResults
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetSearchResultsRequestType $GetSearchResultsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetSearchResultsResponseType
     */
    public function getSearchResults(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetSearchResultsRequestType $GetSearchResultsRequest
    ) {
        return $this->__soapCall(
            'GetSearchResults',
            array($GetSearchResultsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSearchResultsExpress
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetSearchResultsExpressRequestType $GetSearchResultsExpressRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetSearchResultsExpressResponseType
     */
    public function getSearchResultsExpress(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetSearchResultsExpressRequestType $GetSearchResultsExpressRequest
    ) {
        return $this->__soapCall(
            'GetSearchResultsExpress',
            array($GetSearchResultsExpressRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSellerEvents
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerEventsRequestType $GetSellerEventsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerEventsResponseType
     */
    public function getSellerEvents(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerEventsRequestType $GetSellerEventsRequest
    ) {
        return $this->__soapCall(
            'GetSellerEvents',
            array($GetSellerEventsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSellerList
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerListRequestType $GetSellerListRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerListResponseType
     */
    public function getSellerList(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerListRequestType $GetSellerListRequest
    ) {
        return $this->__soapCall(
            'GetSellerList',
            array($GetSellerListRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSellerPayments
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerPaymentsRequestType $GetSellerPaymentsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerPaymentsResponseType
     */
    public function getSellerPayments(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerPaymentsRequestType $GetSellerPaymentsRequest
    ) {
        return $this->__soapCall(
            'GetSellerPayments',
            array($GetSellerPaymentsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSellerTransactions
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerTransactionsRequestType $GetSellerTransactionsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerTransactionsResponseType
     */
    public function getSellerTransactions(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetSellerTransactionsRequestType $GetSellerTransactionsRequest
    ) {
        return $this->__soapCall(
            'GetSellerTransactions',
            array($GetSellerTransactionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetStore
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreRequestType $GetStoreRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreResponseType
     */
    public function getStore(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreRequestType $GetStoreRequest
    ) {
        return $this->__soapCall(
            'GetStore',
            array($GetStoreRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetStoreCategoryUpdateStatus
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreCategoryUpdateStatusRequestType $GetStoreCategoryUpdateStatusRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreCategoryUpdateStatusResponseType
     */
    public function getStoreCategoryUpdateStatus(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreCategoryUpdateStatusRequestType $GetStoreCategoryUpdateStatusRequest
    ) {
        return $this->__soapCall(
            'GetStoreCategoryUpdateStatus',
            array($GetStoreCategoryUpdateStatusRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetStoreCustomPage
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreCustomPageRequestType $GetStoreCustomPageRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreCustomPageResponseType
     */
    public function getStoreCustomPage(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreCustomPageRequestType $GetStoreCustomPageRequest
    ) {
        return $this->__soapCall(
            'GetStoreCustomPage',
            array($GetStoreCustomPageRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetStoreOptions
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreOptionsRequestType $GetStoreOptionsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreOptionsResponseType
     */
    public function getStoreOptions(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetStoreOptionsRequestType $GetStoreOptionsRequest
    ) {
        return $this->__soapCall(
            'GetStoreOptions',
            array($GetStoreOptionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetStorePreferences
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetStorePreferencesRequestType $GetStorePreferencesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetStorePreferencesResponseType
     */
    public function getStorePreferences(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetStorePreferencesRequestType $GetStorePreferencesRequest
    ) {
        return $this->__soapCall(
            'GetStorePreferences',
            array($GetStorePreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSuggestedCategories
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetSuggestedCategoriesRequestType $GetSuggestedCategoriesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetSuggestedCategoriesResponseType
     */
    public function getSuggestedCategories(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetSuggestedCategoriesRequestType $GetSuggestedCategoriesRequest
    ) {
        return $this->__soapCall(
            'GetSuggestedCategories',
            array($GetSuggestedCategoriesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetTaxTable
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetTaxTableRequestType $GetTaxTableRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetTaxTableResponseType
     */
    public function getTaxTable(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetTaxTableRequestType $GetTaxTableRequest
    ) {
        return $this->__soapCall(
            'GetTaxTable',
            array($GetTaxTableRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetUser
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetUserRequestType $GetUserRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetUserResponseType
     */
    public function getUser(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetUserRequestType $GetUserRequest
    ) {
        return $this->__soapCall(
            'GetUser',
            array($GetUserRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetUserContactDetails
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetUserContactDetailsRequestType $GetUserContactDetailsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetUserContactDetailsResponseType
     */
    public function getUserContactDetails(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetUserContactDetailsRequestType $GetUserContactDetailsRequest
    ) {
        return $this->__soapCall(
            'GetUserContactDetails',
            array($GetUserContactDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetUserDisputes
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetUserDisputesRequestType $GetUserDisputesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetUserDisputesResponseType
     */
    public function getUserDisputes(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetUserDisputesRequestType $GetUserDisputesRequest
    ) {
        return $this->__soapCall(
            'GetUserDisputes',
            array($GetUserDisputesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetUserPreferences
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetUserPreferencesRequestType $GetUserPreferencesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetUserPreferencesResponseType
     */
    public function getUserPreferences(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetUserPreferencesRequestType $GetUserPreferencesRequest
    ) {
        return $this->__soapCall(
            'GetUserPreferences',
            array($GetUserPreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetVeROReasonCodeDetails
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetVeROReasonCodeDetailsRequestType $GetVeROReasonCodeDetailsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetVeROReasonCodeDetailsResponseType
     */
    public function getVeROReasonCodeDetails(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetVeROReasonCodeDetailsRequestType $GetVeROReasonCodeDetailsRequest
    ) {
        return $this->__soapCall(
            'GetVeROReasonCodeDetails',
            array($GetVeROReasonCodeDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetVeROReportStatus
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetVeROReportStatusRequestType $GetVeROReportStatusRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetVeROReportStatusResponseType
     */
    public function getVeROReportStatus(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetVeROReportStatusRequestType $GetVeROReportStatusRequest
    ) {
        return $this->__soapCall(
            'GetVeROReportStatus',
            array($GetVeROReportStatusRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetWantItNowPost
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetWantItNowPostRequestType $GetWantItNowPostRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetWantItNowPostResponseType
     */
    public function getWantItNowPost(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetWantItNowPostRequestType $GetWantItNowPostRequest
    ) {
        return $this->__soapCall(
            'GetWantItNowPost',
            array($GetWantItNowPostRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetWantItNowSearchResults
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetWantItNowSearchResultsRequestType $GetWantItNowSearchResultsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GetWantItNowSearchResultsResponseType
     */
    public function getWantItNowSearchResults(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetWantItNowSearchResultsRequestType $GetWantItNowSearchResultsRequest
    ) {
        return $this->__soapCall(
            'GetWantItNowSearchResults',
            array($GetWantItNowSearchResultsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GeteBayDetails
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GeteBayDetailsRequestType $GeteBayDetailsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GeteBayDetailsResponseType
     */
    public function geteBayDetails(
        \Controle\Hostnet\Namesp\Sub4\Complex\GeteBayDetailsRequestType $GeteBayDetailsRequest
    ) {
        return $this->__soapCall(
            'GeteBayDetails',
            array($GeteBayDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GeteBayOfficialTime
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GeteBayOfficialTimeRequestType $GeteBayOfficialTimeRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\GeteBayOfficialTimeResponseType
     */
    public function geteBayOfficialTime(
        \Controle\Hostnet\Namesp\Sub4\Complex\GeteBayOfficialTimeRequestType $GeteBayOfficialTimeRequest
    ) {
        return $this->__soapCall(
            'GeteBayOfficialTime',
            array($GeteBayOfficialTimeRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * IssueRefund
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\IssueRefundRequestType $IssueRefundRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\IssueRefundResponseType
     */
    public function issueRefund(
        \Controle\Hostnet\Namesp\Sub4\Complex\IssueRefundRequestType $IssueRefundRequest
    ) {
        return $this->__soapCall(
            'IssueRefund',
            array($IssueRefundRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * LeaveFeedback
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\LeaveFeedbackRequestType $LeaveFeedbackRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\LeaveFeedbackResponseType
     */
    public function leaveFeedback(
        \Controle\Hostnet\Namesp\Sub4\Complex\LeaveFeedbackRequestType $LeaveFeedbackRequest
    ) {
        return $this->__soapCall(
            'LeaveFeedback',
            array($LeaveFeedbackRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * PlaceOffer
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\PlaceOfferRequestType $PlaceOfferRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\PlaceOfferResponseType
     */
    public function placeOffer(
        \Controle\Hostnet\Namesp\Sub4\Complex\PlaceOfferRequestType $PlaceOfferRequest
    ) {
        return $this->__soapCall(
            'PlaceOffer',
            array($PlaceOfferRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * RelistItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\RelistItemRequestType $RelistItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\RelistItemResponseType
     */
    public function relistItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\RelistItemRequestType $RelistItemRequest
    ) {
        return $this->__soapCall(
            'RelistItem',
            array($RelistItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * RemoveFromWatchList
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\RemoveFromWatchListRequestType $RemoveFromWatchListRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\RemoveFromWatchListResponseType
     */
    public function removeFromWatchList(
        \Controle\Hostnet\Namesp\Sub4\Complex\RemoveFromWatchListRequestType $RemoveFromWatchListRequest
    ) {
        return $this->__soapCall(
            'RemoveFromWatchList',
            array($RemoveFromWatchListRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * RespondToBestOffer
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\RespondToBestOfferRequestType $RespondToBestOfferRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\RespondToBestOfferResponseType
     */
    public function respondToBestOffer(
        \Controle\Hostnet\Namesp\Sub4\Complex\RespondToBestOfferRequestType $RespondToBestOfferRequest
    ) {
        return $this->__soapCall(
            'RespondToBestOffer',
            array($RespondToBestOfferRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * RespondToFeedback
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\RespondToFeedbackRequestType $RespondToFeedbackRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\RespondToFeedbackResponseType
     */
    public function respondToFeedback(
        \Controle\Hostnet\Namesp\Sub4\Complex\RespondToFeedbackRequestType $RespondToFeedbackRequest
    ) {
        return $this->__soapCall(
            'RespondToFeedback',
            array($RespondToFeedbackRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * RespondToWantItNowPost
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\RespondToWantItNowPostRequestType $RespondToWantItNowPostRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\RespondToWantItNowPostResponseType
     */
    public function respondToWantItNowPost(
        \Controle\Hostnet\Namesp\Sub4\Complex\RespondToWantItNowPostRequestType $RespondToWantItNowPostRequest
    ) {
        return $this->__soapCall(
            'RespondToWantItNowPost',
            array($RespondToWantItNowPostRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ReviseCheckoutStatus
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ReviseCheckoutStatusRequestType $ReviseCheckoutStatusRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ReviseCheckoutStatusResponseType
     */
    public function reviseCheckoutStatus(
        \Controle\Hostnet\Namesp\Sub4\Complex\ReviseCheckoutStatusRequestType $ReviseCheckoutStatusRequest
    ) {
        return $this->__soapCall(
            'ReviseCheckoutStatus',
            array($ReviseCheckoutStatusRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ReviseItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ReviseItemRequestType $ReviseItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ReviseItemResponseType
     */
    public function reviseItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\ReviseItemRequestType $ReviseItemRequest
    ) {
        return $this->__soapCall(
            'ReviseItem',
            array($ReviseItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ReviseLiveAuctionItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ReviseLiveAuctionItemRequestType $ReviseLiveAuctionItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ReviseLiveAuctionItemResponseType
     */
    public function reviseLiveAuctionItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\ReviseLiveAuctionItemRequestType $ReviseLiveAuctionItemRequest
    ) {
        return $this->__soapCall(
            'ReviseLiveAuctionItem',
            array($ReviseLiveAuctionItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ReviseMyMessages
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ReviseMyMessagesRequestType $ReviseMyMessagesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ReviseMyMessagesResponseType
     */
    public function reviseMyMessages(
        \Controle\Hostnet\Namesp\Sub4\Complex\ReviseMyMessagesRequestType $ReviseMyMessagesRequest
    ) {
        return $this->__soapCall(
            'ReviseMyMessages',
            array($ReviseMyMessagesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ReviseMyMessagesFolders
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ReviseMyMessagesFoldersRequestType $ReviseMyMessagesFoldersRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ReviseMyMessagesFoldersResponseType
     */
    public function reviseMyMessagesFolders(
        \Controle\Hostnet\Namesp\Sub4\Complex\ReviseMyMessagesFoldersRequestType $ReviseMyMessagesFoldersRequest
    ) {
        return $this->__soapCall(
            'ReviseMyMessagesFolders',
            array($ReviseMyMessagesFoldersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SellerReverseDispute
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SellerReverseDisputeRequestType $SellerReverseDisputeRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SellerReverseDisputeResponseType
     */
    public function sellerReverseDispute(
        \Controle\Hostnet\Namesp\Sub4\Complex\SellerReverseDisputeRequestType $SellerReverseDisputeRequest
    ) {
        return $this->__soapCall(
            'SellerReverseDispute',
            array($SellerReverseDisputeRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SendInvoice
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SendInvoiceRequestType $SendInvoiceRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SendInvoiceResponseType
     */
    public function sendInvoice(
        \Controle\Hostnet\Namesp\Sub4\Complex\SendInvoiceRequestType $SendInvoiceRequest
    ) {
        return $this->__soapCall(
            'SendInvoice',
            array($SendInvoiceRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetNotificationPreferences
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetNotificationPreferencesRequestType $SetNotificationPreferencesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetNotificationPreferencesResponseType
     */
    public function setNotificationPreferences(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetNotificationPreferencesRequestType $SetNotificationPreferencesRequest
    ) {
        return $this->__soapCall(
            'SetNotificationPreferences',
            array($SetNotificationPreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetPictureManagerDetails
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetPictureManagerDetailsRequestType $SetPictureManagerDetailsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetPictureManagerDetailsResponseType
     */
    public function setPictureManagerDetails(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetPictureManagerDetailsRequestType $SetPictureManagerDetailsRequest
    ) {
        return $this->__soapCall(
            'SetPictureManagerDetails',
            array($SetPictureManagerDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetPromotionRules
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetPromotionRulesRequestType $SetPromotionRulesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetPromotionRulesResponseType
     */
    public function setPromotionRules(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetPromotionRulesRequestType $SetPromotionRulesRequest
    ) {
        return $this->__soapCall(
            'SetPromotionRules',
            array($SetPromotionRulesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetReturnURL
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetReturnURLRequestType $SetReturnURLRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetReturnURLResponseType
     */
    public function setReturnURL(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetReturnURLRequestType $SetReturnURLRequest
    ) {
        return $this->__soapCall(
            'SetReturnURL',
            array($SetReturnURLRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetStore
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetStoreRequestType $SetStoreRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetStoreResponseType
     */
    public function setStore(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetStoreRequestType $SetStoreRequest
    ) {
        return $this->__soapCall(
            'SetStore',
            array($SetStoreRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetStoreCategories
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetStoreCategoriesRequestType $SetStoreCategoriesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetStoreCategoriesResponseType
     */
    public function setStoreCategories(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetStoreCategoriesRequestType $SetStoreCategoriesRequest
    ) {
        return $this->__soapCall(
            'SetStoreCategories',
            array($SetStoreCategoriesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetStoreCustomPage
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetStoreCustomPageRequestType $SetStoreCustomPageRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetStoreCustomPageResponseType
     */
    public function setStoreCustomPage(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetStoreCustomPageRequestType $SetStoreCustomPageRequest
    ) {
        return $this->__soapCall(
            'SetStoreCustomPage',
            array($SetStoreCustomPageRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetStorePreferences
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetStorePreferencesRequestType $SetStorePreferencesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetStorePreferencesResponseType
     */
    public function setStorePreferences(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetStorePreferencesRequestType $SetStorePreferencesRequest
    ) {
        return $this->__soapCall(
            'SetStorePreferences',
            array($SetStorePreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetTaxTable
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetTaxTableRequestType $SetTaxTableRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetTaxTableResponseType
     */
    public function setTaxTable(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetTaxTableRequestType $SetTaxTableRequest
    ) {
        return $this->__soapCall(
            'SetTaxTable',
            array($SetTaxTableRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetUserNotes
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetUserNotesRequestType $SetUserNotesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetUserNotesResponseType
     */
    public function setUserNotes(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetUserNotesRequestType $SetUserNotesRequest
    ) {
        return $this->__soapCall(
            'SetUserNotes',
            array($SetUserNotesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetUserPreferences
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SetUserPreferencesRequestType $SetUserPreferencesRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SetUserPreferencesResponseType
     */
    public function setUserPreferences(
        \Controle\Hostnet\Namesp\Sub4\Complex\SetUserPreferencesRequestType $SetUserPreferencesRequest
    ) {
        return $this->__soapCall(
            'SetUserPreferences',
            array($SetUserPreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ValidateChallengeInput
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ValidateChallengeInputRequestType $ValidateChallengeInputRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ValidateChallengeInputResponseType
     */
    public function validateChallengeInput(
        \Controle\Hostnet\Namesp\Sub4\Complex\ValidateChallengeInputRequestType $ValidateChallengeInputRequest
    ) {
        return $this->__soapCall(
            'ValidateChallengeInput',
            array($ValidateChallengeInputRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ValidateTestUserRegistration
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ValidateTestUserRegistrationRequestType $ValidateTestUserRegistrationRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ValidateTestUserRegistrationResponseType
     */
    public function validateTestUserRegistration(
        \Controle\Hostnet\Namesp\Sub4\Complex\ValidateTestUserRegistrationRequestType $ValidateTestUserRegistrationRequest
    ) {
        return $this->__soapCall(
            'ValidateTestUserRegistration',
            array($ValidateTestUserRegistrationRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * VeROReportItems
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportItemsRequestType $VeROReportItemsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportItemsResponseType
     */
    public function veROReportItems(
        \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportItemsRequestType $VeROReportItemsRequest
    ) {
        return $this->__soapCall(
            'VeROReportItems',
            array($VeROReportItemsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * VerifyAddItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\VerifyAddItemRequestType $VerifyAddItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\VerifyAddItemResponseType
     */
    public function verifyAddItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\VerifyAddItemRequestType $VerifyAddItemRequest
    ) {
        return $this->__soapCall(
            'VerifyAddItem',
            array($VerifyAddItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * VerifyAddSecondChanceItem
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\VerifyAddSecondChanceItemRequestType $VerifyAddSecondChanceItemRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\VerifyAddSecondChanceItemResponseType
     */
    public function verifyAddSecondChanceItem(
        \Controle\Hostnet\Namesp\Sub4\Complex\VerifyAddSecondChanceItemRequestType $VerifyAddSecondChanceItemRequest
    ) {
        return $this->__soapCall(
            'VerifyAddSecondChanceItem',
            array($VerifyAddSecondChanceItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }
}

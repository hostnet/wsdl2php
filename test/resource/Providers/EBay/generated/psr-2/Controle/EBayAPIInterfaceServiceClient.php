<?php

namespace Controle;

/**
 * eBayAPIInterfaceServiceClient
 * Version 491
 */
class eBayAPIInterfaceServiceClient extends \SoapClient {

    const WSDL_FILE = "eBayTest.wsdl";
    private $classmap = array(
        'AddDisputeResponseType\,' =>
            '\Controle\AddDisputeResponseType',
        'AddDisputeResponseResponseType\,' =>
            '\Controle\AddDisputeResponseResponseType',
        'AddItemResponseType\,' =>
            '\Controle\AddItemResponseType',
        'AddLiveAuctionItemResponseType\,' =>
            '\Controle\AddLiveAuctionItemResponseType',
        'AddOrderResponseType\,' =>
            '\Controle\AddOrderResponseType',
        'AddSecondChanceItemResponseType\,' =>
            '\Controle\AddSecondChanceItemResponseType',
        'AddToItemDescriptionResponseType\,' =>
            '\Controle\AddToItemDescriptionResponseType',
        'AddToWatchListResponseType\,' =>
            '\Controle\AddToWatchListResponseType',
        'AddTransactionConfirmationItemResponseType\,' =>
            '\Controle\AddTransactionConfirmationItemResponseType',
        'ApproveLiveAuctionBiddersResponseType\,' =>
            '\Controle\ApproveLiveAuctionBiddersResponseType',
        'CompleteSaleResponseType\,' =>
            '\Controle\CompleteSaleResponseType',
        'DeleteMyMessagesResponseType\,' =>
            '\Controle\DeleteMyMessagesResponseType',
        'EndItemResponseType\,' =>
            '\Controle\EndItemResponseType',
        'FetchTokenResponseType\,' =>
            '\Controle\FetchTokenResponseType',
        'GetAccountResponseType\,' =>
            '\Controle\GetAccountResponseType',
        'GetAdFormatLeadsResponseType\,' =>
            '\Controle\GetAdFormatLeadsResponseType',
        'GetAllBiddersResponseType\,' =>
            '\Controle\GetAllBiddersResponseType',
        'GetApiAccessRulesResponseType\,' =>
            '\Controle\GetApiAccessRulesResponseType',
        'GetBestOffersResponseType\,' =>
            '\Controle\GetBestOffersResponseType',
        'GetBidderListResponseType\,' =>
            '\Controle\GetBidderListResponseType',
        'GetCategoriesResponseType\,' =>
            '\Controle\GetCategoriesResponseType',
        'GetCategory2FinanceOfferResponseType\,' =>
            '\Controle\GetCategory2FinanceOfferResponseType',
        'GetCategoryFeaturesResponseType\,' =>
            '\Controle\GetCategoryFeaturesResponseType',
        'GetCategoryListingsResponseType\,' =>
            '\Controle\GetCategoryListingsResponseType',
        'GetCategoryMappingsResponseType\,' =>
            '\Controle\GetCategoryMappingsResponseType',
        'GetChallengeTokenResponseType\,' =>
            '\Controle\GetChallengeTokenResponseType',
        'GetCharitiesResponseType\,' =>
            '\Controle\GetCharitiesResponseType',
        'GetContextualKeywordsResponseType\,' =>
            '\Controle\GetContextualKeywordsResponseType',
        'GetCrossPromotionsResponseType\,' =>
            '\Controle\GetCrossPromotionsResponseType',
        'GetDescriptionTemplatesResponseType\,' =>
            '\Controle\GetDescriptionTemplatesResponseType',
        'GetDisputeResponseType\,' =>
            '\Controle\GetDisputeResponseType',
        'GetFeedbackResponseType\,' =>
            '\Controle\GetFeedbackResponseType',
        'GetFinanceOffersResponseType\,' =>
            '\Controle\GetFinanceOffersResponseType',
        'GetHighBiddersResponseType\,' =>
            '\Controle\GetHighBiddersResponseType',
        'GetItemResponseType\,' =>
            '\Controle\GetItemResponseType',
        'GetItemRecommendationsResponseType\,' =>
            '\Controle\GetItemRecommendationsResponseType',
        'GetItemShippingResponseType\,' =>
            '\Controle\GetItemShippingResponseType',
        'GetItemTransactionsResponseType\,' =>
            '\Controle\GetItemTransactionsResponseType',
        'GetItemsAwaitingFeedbackResponseType\,' =>
            '\Controle\GetItemsAwaitingFeedbackResponseType',
        'GetLiveAuctionBiddersResponseType\,' =>
            '\Controle\GetLiveAuctionBiddersResponseType',
        'GetLiveAuctionCatalogDetailsResponseType\,' =>
            '\Controle\GetLiveAuctionCatalogDetailsResponseType',
        'GetMemberMessagesResponseType\,' =>
            '\Controle\GetMemberMessagesResponseType',
        'GetMyMessagesResponseType\,' =>
            '\Controle\GetMyMessagesResponseType',
        'GetMyeBayResponseType\,' =>
            '\Controle\GetMyeBayResponseType',
        'GetMyeBayBuyingResponseType\,' =>
            '\Controle\GetMyeBayBuyingResponseType',
        'GetMyeBayRemindersResponseType\,' =>
            '\Controle\GetMyeBayRemindersResponseType',
        'GetMyeBaySellingResponseType\,' =>
            '\Controle\GetMyeBaySellingResponseType',
        'GetNotificationPreferencesResponseType\,' =>
            '\Controle\GetNotificationPreferencesResponseType',
        'GetNotificationsUsageResponseType\,' =>
            '\Controle\GetNotificationsUsageResponseType',
        'GetOrderTransactionsResponseType\,' =>
            '\Controle\GetOrderTransactionsResponseType',
        'GetOrdersResponseType\,' =>
            '\Controle\GetOrdersResponseType',
        'GetPictureManagerDetailsResponseType\,' =>
            '\Controle\GetPictureManagerDetailsResponseType',
        'GetPictureManagerOptionsResponseType\,' =>
            '\Controle\GetPictureManagerOptionsResponseType',
        'GetPopularKeywordsResponseType\,' =>
            '\Controle\GetPopularKeywordsResponseType',
        'GetProductFamilyMembersResponseType\,' =>
            '\Controle\GetProductFamilyMembersResponseType',
        'GetProductFinderResponseType\,' =>
            '\Controle\GetProductFinderResponseType',
        'GetProductSearchPageResponseType\,' =>
            '\Controle\GetProductSearchPageResponseType',
        'GetProductSearchResultsResponseType\,' =>
            '\Controle\GetProductSearchResultsResponseType',
        'GetProductSellingPagesResponseType\,' =>
            '\Controle\GetProductSellingPagesResponseType',
        'GetPromotionRulesResponseType\,' =>
            '\Controle\GetPromotionRulesResponseType',
        'GetRecommendationsResponseType\,' =>
            '\Controle\GetRecommendationsResponseType',
        'GetRuNameResponseType\,' =>
            '\Controle\GetRuNameResponseType',
        'GetSearchResultsResponseType\,' =>
            '\Controle\GetSearchResultsResponseType',
        'GetSearchResultsExpressResponseType\,' =>
            '\Controle\GetSearchResultsExpressResponseType',
        'GetSellerEventsResponseType\,' =>
            '\Controle\GetSellerEventsResponseType',
        'GetSellerListResponseType\,' =>
            '\Controle\GetSellerListResponseType',
        'GetSellerPaymentsResponseType\,' =>
            '\Controle\GetSellerPaymentsResponseType',
        'GetSellerTransactionsResponseType\,' =>
            '\Controle\GetSellerTransactionsResponseType',
        'GetStoreResponseType\,' =>
            '\Controle\GetStoreResponseType',
        'GetStoreCategoryUpdateStatusResponseType\,' =>
            '\Controle\GetStoreCategoryUpdateStatusResponseType',
        'GetStoreCustomPageResponseType\,' =>
            '\Controle\GetStoreCustomPageResponseType',
        'GetStoreOptionsResponseType\,' =>
            '\Controle\GetStoreOptionsResponseType',
        'GetStorePreferencesResponseType\,' =>
            '\Controle\GetStorePreferencesResponseType',
        'GetSuggestedCategoriesResponseType\,' =>
            '\Controle\GetSuggestedCategoriesResponseType',
        'GetTaxTableResponseType\,' =>
            '\Controle\GetTaxTableResponseType',
        'GetUserResponseType\,' =>
            '\Controle\GetUserResponseType',
        'GetUserContactDetailsResponseType\,' =>
            '\Controle\GetUserContactDetailsResponseType',
        'GetUserDisputesResponseType\,' =>
            '\Controle\GetUserDisputesResponseType',
        'GetUserPreferencesResponseType\,' =>
            '\Controle\GetUserPreferencesResponseType',
        'GetWantItNowPostResponseType\,' =>
            '\Controle\GetWantItNowPostResponseType',
        'GetWantItNowSearchResultsResponseType\,' =>
            '\Controle\GetWantItNowSearchResultsResponseType',
        'GeteBayDetailsResponseType\,' =>
            '\Controle\GeteBayDetailsResponseType',
        'GeteBayOfficialTimeResponseType\,' =>
            '\Controle\GeteBayOfficialTimeResponseType',
        'IssueRefundResponseType\,' =>
            '\Controle\IssueRefundResponseType',
        'LeaveFeedbackResponseType\,' =>
            '\Controle\LeaveFeedbackResponseType',
        'PlaceOfferResponseType\,' =>
            '\Controle\PlaceOfferResponseType',
        'RelistItemResponseType\,' =>
            '\Controle\RelistItemResponseType',
        'RemoveFromWatchListResponseType\,' =>
            '\Controle\RemoveFromWatchListResponseType',
        'RespondToBestOfferResponseType\,' =>
            '\Controle\RespondToBestOfferResponseType',
        'RespondToFeedbackResponseType\,' =>
            '\Controle\RespondToFeedbackResponseType',
        'RespondToWantItNowPostResponseType\,' =>
            '\Controle\RespondToWantItNowPostResponseType',
        'ReviseCheckoutStatusResponseType\,' =>
            '\Controle\ReviseCheckoutStatusResponseType',
        'ReviseItemResponseType\,' =>
            '\Controle\ReviseItemResponseType',
        'ReviseLiveAuctionItemResponseType\,' =>
            '\Controle\ReviseLiveAuctionItemResponseType',
        'ReviseMyMessagesResponseType\,' =>
            '\Controle\ReviseMyMessagesResponseType',
        'ReviseMyMessagesFoldersResponseType\,' =>
            '\Controle\ReviseMyMessagesFoldersResponseType',
        'SellerReverseDisputeResponseType\,' =>
            '\Controle\SellerReverseDisputeResponseType',
        'SendInvoiceResponseType\,' =>
            '\Controle\SendInvoiceResponseType',
        'SetNotificationPreferencesResponseType\,' =>
            '\Controle\SetNotificationPreferencesResponseType',
        'SetPictureManagerDetailsResponseType\,' =>
            '\Controle\SetPictureManagerDetailsResponseType',
        'SetPromotionRulesResponseType\,' =>
            '\Controle\SetPromotionRulesResponseType',
        'SetStoreResponseType\,' =>
            '\Controle\SetStoreResponseType',
        'SetStoreCategoriesResponseType\,' =>
            '\Controle\SetStoreCategoriesResponseType',
        'SetStoreCustomPageResponseType\,' =>
            '\Controle\SetStoreCustomPageResponseType',
        'SetStorePreferencesResponseType\,' =>
            '\Controle\SetStorePreferencesResponseType',
        'SetTaxTableResponseType\,' =>
            '\Controle\SetTaxTableResponseType',
        'SetUserNotesResponseType\,' =>
            '\Controle\SetUserNotesResponseType',
        'SetUserPreferencesResponseType\,' =>
            '\Controle\SetUserPreferencesResponseType',
        'ValidateChallengeInputResponseType\,' =>
            '\Controle\ValidateChallengeInputResponseType',
        'ValidateTestUserRegistrationResponseType\,' =>
            '\Controle\ValidateTestUserRegistrationResponseType',
        'VerifyAddItemResponseType\,' =>
            '\Controle\VerifyAddItemResponseType',
        'VerifyAddSecondChanceItemResponseType\,' =>
            '\Controle\VerifyAddSecondChanceItemResponseType',
        'AbstractRequestType\,' =>
            '\Controle\AbstractRequestType',
        'AbstractResponseType\,' =>
            '\Controle\AbstractResponseType',
        'AckCodeType\,' =>
            '\Controle\AckCodeType',
        'BuyerPaymentMethodCodeType\,' =>
            '\Controle\BuyerPaymentMethodCodeType',
        'DetailLevelCodeType\,' =>
            '\Controle\DetailLevelCodeType',
        'DisputeActivityCodeType\,' =>
            '\Controle\DisputeActivityCodeType',
        'DisputeCreditEligibilityCodeType\,' =>
            '\Controle\DisputeCreditEligibilityCodeType',
        'DisputeExplanationCodeType\,' =>
            '\Controle\DisputeExplanationCodeType',
        'DisputeFilterCountType\,' =>
            '\Controle\DisputeFilterCountType',
        'DisputeFilterTypeCodeType\,' =>
            '\Controle\DisputeFilterTypeCodeType',
        'DisputeMessageSourceCodeType\,' =>
            '\Controle\DisputeMessageSourceCodeType',
        'DisputeMessageType\,' =>
            '\Controle\DisputeMessageType',
        'DisputeReasonCodeType\,' =>
            '\Controle\DisputeReasonCodeType',
        'DisputeRecordTypeCodeType\,' =>
            '\Controle\DisputeRecordTypeCodeType',
        'DisputeResolutionReasonCodeType\,' =>
            '\Controle\DisputeResolutionReasonCodeType',
        'DisputeResolutionRecordTypeCodeType\,' =>
            '\Controle\DisputeResolutionRecordTypeCodeType',
        'DisputeResolutionType\,' =>
            '\Controle\DisputeResolutionType',
        'DisputeSortTypeCodeType\,' =>
            '\Controle\DisputeSortTypeCodeType',
        'DisputeStateCodeType\,' =>
            '\Controle\DisputeStateCodeType',
        'DisputeStatusCodeType\,' =>
            '\Controle\DisputeStatusCodeType',
        'DuplicateInvocationDetailsType\,' =>
            '\Controle\DuplicateInvocationDetailsType',
        'ErrorClassificationCodeType\,' =>
            '\Controle\ErrorClassificationCodeType',
        'ErrorHandlingCodeType\,' =>
            '\Controle\ErrorHandlingCodeType',
        'ErrorParameterType\,' =>
            '\Controle\ErrorParameterType',
        'ErrorType\,' =>
            '\Controle\ErrorType',
        'InvocationStatusType\,' =>
            '\Controle\InvocationStatusType',
        'MeasureType\,' =>
            '\Controle\MeasureType',
        'MeasurementSystemCodeType\,' =>
            '\Controle\MeasurementSystemCodeType',
        'PaginationType\,' =>
            '\Controle\PaginationType',
        'SeverityCodeType\,' =>
            '\Controle\SeverityCodeType',
        'UserIdPasswordType\,' =>
            '\Controle\UserIdPasswordType',
        'WarningLevelCodeType\,' =>
            '\Controle\WarningLevelCodeType',
        'AccessRuleCurrentStatusCodeType\,' =>
            '\Controle\AccessRuleCurrentStatusCodeType',
        'AccessRuleStatusCodeType\,' =>
            '\Controle\AccessRuleStatusCodeType',
        'AccountDetailEntryCodeType\,' =>
            '\Controle\AccountDetailEntryCodeType',
        'AccountEntriesType\,' =>
            '\Controle\AccountEntriesType',
        'AccountEntrySortTypeCodeType\,' =>
            '\Controle\AccountEntrySortTypeCodeType',
        'AccountEntryType\,' =>
            '\Controle\AccountEntryType',
        'AccountHistorySelectionCodeType\,' =>
            '\Controle\AccountHistorySelectionCodeType',
        'AccountStateCodeType\,' =>
            '\Controle\AccountStateCodeType',
        'AccountSummaryType\,' =>
            '\Controle\AccountSummaryType',
        'AdFormatEnabledCodeType\,' =>
            '\Controle\AdFormatEnabledCodeType',
        'AdFormatEnabledDefinitionType\,' =>
            '\Controle\AdFormatEnabledDefinitionType',
        'AdFormatLeadType\,' =>
            '\Controle\AdFormatLeadType',
        'AdditionalAccountType\,' =>
            '\Controle\AdditionalAccountType',
        'AddressOwnerCodeType\,' =>
            '\Controle\AddressOwnerCodeType',
        'AddressRecordTypeCodeType\,' =>
            '\Controle\AddressRecordTypeCodeType',
        'AddressStatusCodeType\,' =>
            '\Controle\AddressStatusCodeType',
        'AddressType\,' =>
            '\Controle\AddressType',
        'AffiliateTrackingDetailsType\,' =>
            '\Controle\AffiliateTrackingDetailsType',
        'AmountType\,' =>
            '\Controle\AmountType',
        'ApiAccessRuleType\,' =>
            '\Controle\ApiAccessRuleType',
        'ApplicationDeliveryPreferencesType\,' =>
            '\Controle\ApplicationDeliveryPreferencesType',
        'ApplicationDeviceTypeCodeType\,' =>
            '\Controle\ApplicationDeviceTypeCodeType',
        'AttributeArrayType\,' =>
            '\Controle\AttributeArrayType',
        'AttributeRecommendationsType\,' =>
            '\Controle\AttributeRecommendationsType',
        'AttributeSetArrayType\,' =>
            '\Controle\AttributeSetArrayType',
        'AttributeSetType\,' =>
            '\Controle\AttributeSetType',
        'AttributeType\,' =>
            '\Controle\AttributeType',
        'AuthenticationEntryArrayType\,' =>
            '\Controle\AuthenticationEntryArrayType',
        'AuthenticationEntryType\,' =>
            '\Controle\AuthenticationEntryType',
        'BasicUpgradePackEnabledDefinitionType\,' =>
            '\Controle\BasicUpgradePackEnabledDefinitionType',
        'BestOfferActionCodeType\,' =>
            '\Controle\BestOfferActionCodeType',
        'BestOfferArrayType\,' =>
            '\Controle\BestOfferArrayType',
        'BestOfferAutoDeclineEnabledDefinitionType\,' =>
            '\Controle\BestOfferAutoDeclineEnabledDefinitionType',
        'BestOfferCounterEnabledDefinitionType\,' =>
            '\Controle\BestOfferCounterEnabledDefinitionType',
        'BestOfferDetailsType\,' =>
            '\Controle\BestOfferDetailsType',
        'BestOfferEnabledDefinitionType\,' =>
            '\Controle\BestOfferEnabledDefinitionType',
        'BestOfferStatusCodeType\,' =>
            '\Controle\BestOfferStatusCodeType',
        'BestOfferType\,' =>
            '\Controle\BestOfferType',
        'BestOfferTypeCodeType\,' =>
            '\Controle\BestOfferTypeCodeType',
        'BidActionCodeType\,' =>
            '\Controle\BidActionCodeType',
        'BidApprovalArrayType\,' =>
            '\Controle\BidApprovalArrayType',
        'BidApprovalType\,' =>
            '\Controle\BidApprovalType',
        'BidderDetailArrayType\,' =>
            '\Controle\BidderDetailArrayType',
        'BidderDetailType\,' =>
            '\Controle\BidderDetailType',
        'BidderNoticePreferencesType\,' =>
            '\Controle\BidderNoticePreferencesType',
        'BidderStatusCodeType\,' =>
            '\Controle\BidderStatusCodeType',
        'BiddingDetailsType\,' =>
            '\Controle\BiddingDetailsType',
        'BiddingSummaryType\,' =>
            '\Controle\BiddingSummaryType',
        'BuyerProtectionCodeType\,' =>
            '\Controle\BuyerProtectionCodeType',
        'BuyerRequirementsType\,' =>
            '\Controle\BuyerRequirementsType',
        'BuyerType\,' =>
            '\Controle\BuyerType',
        'BuyingGuideDetailsType\,' =>
            '\Controle\BuyingGuideDetailsType',
        'BuyingGuideType\,' =>
            '\Controle\BuyingGuideType',
        'BuyingSummaryType\,' =>
            '\Controle\BuyingSummaryType',
        'CalculatedShippingChargeOptionCodeType\,' =>
            '\Controle\CalculatedShippingChargeOptionCodeType',
        'CalculatedShippingPreferencesType\,' =>
            '\Controle\CalculatedShippingPreferencesType',
        'CalculatedShippingRateOptionCodeType\,' =>
            '\Controle\CalculatedShippingRateOptionCodeType',
        'CalculatedShippingRateType\,' =>
            '\Controle\CalculatedShippingRateType',
        'CancelOfferType\,' =>
            '\Controle\CancelOfferType',
        'CategoryArrayType\,' =>
            '\Controle\CategoryArrayType',
        'CategoryFeatureType\,' =>
            '\Controle\CategoryFeatureType',
        'CategoryFinanceOfferArrayType\,' =>
            '\Controle\CategoryFinanceOfferArrayType',
        'CategoryFinanceOfferType\,' =>
            '\Controle\CategoryFinanceOfferType',
        'CategoryListingsOrderCodeType\,' =>
            '\Controle\CategoryListingsOrderCodeType',
        'CategoryListingsSearchCodeType\,' =>
            '\Controle\CategoryListingsSearchCodeType',
        'CategoryMappingType\,' =>
            '\Controle\CategoryMappingType',
        'CategoryType\,' =>
            '\Controle\CategoryType',
        'CharacteristicType\,' =>
            '\Controle\CharacteristicType',
        'CharacteristicsSearchCodeType\,' =>
            '\Controle\CharacteristicsSearchCodeType',
        'CharacteristicsSetType\,' =>
            '\Controle\CharacteristicsSetType',
        'CharityAffiliationType\,' =>
            '\Controle\CharityAffiliationType',
        'CharityAffiliationTypeCodeType\,' =>
            '\Controle\CharityAffiliationTypeCodeType',
        'CharityAffiliationsType\,' =>
            '\Controle\CharityAffiliationsType',
        'CharityInfoType\,' =>
            '\Controle\CharityInfoType',
        'CharitySellerStatusCodeType\,' =>
            '\Controle\CharitySellerStatusCodeType',
        'CharitySellerType\,' =>
            '\Controle\CharitySellerType',
        'CharityStatusCodeType\,' =>
            '\Controle\CharityStatusCodeType',
        'CharityType\,' =>
            '\Controle\CharityType',
        'CheckoutMethodCodeType\,' =>
            '\Controle\CheckoutMethodCodeType',
        'CheckoutStatusCodeType\,' =>
            '\Controle\CheckoutStatusCodeType',
        'CheckoutStatusType\,' =>
            '\Controle\CheckoutStatusType',
        'CombinedPaymentOptionCodeType\,' =>
            '\Controle\CombinedPaymentOptionCodeType',
        'CombinedPaymentPeriodCodeType\,' =>
            '\Controle\CombinedPaymentPeriodCodeType',
        'CombinedPaymentPreferencesType\,' =>
            '\Controle\CombinedPaymentPreferencesType',
        'CommentTypeCodeType\,' =>
            '\Controle\CommentTypeCodeType',
        'CompleteStatusCodeType\,' =>
            '\Controle\CompleteStatusCodeType',
        'ConditionSelectionCodeType\,' =>
            '\Controle\ConditionSelectionCodeType',
        'ContextSearchAssetType\,' =>
            '\Controle\ContextSearchAssetType',
        'CountryCodeType\,' =>
            '\Controle\CountryCodeType',
        'CountryDetailsType\,' =>
            '\Controle\CountryDetailsType',
        'CrossPromotionPreferencesType\,' =>
            '\Controle\CrossPromotionPreferencesType',
        'CrossPromotionsType\,' =>
            '\Controle\CrossPromotionsType',
        'CurrencyCodeType\,' =>
            '\Controle\CurrencyCodeType',
        'CurrencyDetailsType\,' =>
            '\Controle\CurrencyDetailsType',
        'DataElementSetType\,' =>
            '\Controle\DataElementSetType',
        'DateSpecifierCodeType\,' =>
            '\Controle\DateSpecifierCodeType',
        'DepositTypeCodeType\,' =>
            '\Controle\DepositTypeCodeType',
        'DescriptionReviseModeCodeType\,' =>
            '\Controle\DescriptionReviseModeCodeType',
        'DescriptionTemplateCodeType\,' =>
            '\Controle\DescriptionTemplateCodeType',
        'DescriptionTemplateType\,' =>
            '\Controle\DescriptionTemplateType',
        'DetailNameCodeType\,' =>
            '\Controle\DetailNameCodeType',
        'DeviceTypeCodeType\,' =>
            '\Controle\DeviceTypeCodeType',
        'DigitalDeliveryDetailsType\,' =>
            '\Controle\DigitalDeliveryDetailsType',
        'DigitalDeliveryEnabledCodeType\,' =>
            '\Controle\DigitalDeliveryEnabledCodeType',
        'DigitalDeliveryEnabledDefinitionType\,' =>
            '\Controle\DigitalDeliveryEnabledDefinitionType',
        'DigitalDeliveryMethodCodeType\,' =>
            '\Controle\DigitalDeliveryMethodCodeType',
        'DispatchTimeMaxDetailsType\,' =>
            '\Controle\DispatchTimeMaxDetailsType',
        'DisplayPayNowButtonCodeType\,' =>
            '\Controle\DisplayPayNowButtonCodeType',
        'DisputeArrayType\,' =>
            '\Controle\DisputeArrayType',
        'DisputeType\,' =>
            '\Controle\DisputeType',
        'DistanceType\,' =>
            '\Controle\DistanceType',
        'DomainHistogramType\,' =>
            '\Controle\DomainHistogramType',
        'EnableCodeType\,' =>
            '\Controle\EnableCodeType',
        'EndOfAuctionEmailPreferencesType\,' =>
            '\Controle\EndOfAuctionEmailPreferencesType',
        'EndOfAuctionLogoTypeCodeType\,' =>
            '\Controle\EndOfAuctionLogoTypeCodeType',
        'EndReasonCodeType\,' =>
            '\Controle\EndReasonCodeType',
        'ExpansionArrayType\,' =>
            '\Controle\ExpansionArrayType',
        'ExpressConditionRequiredDefinitionType\,' =>
            '\Controle\ExpressConditionRequiredDefinitionType',
        'ExpressDetailLevelCodeType\,' =>
            '\Controle\ExpressDetailLevelCodeType',
        'ExpressDetailsType\,' =>
            '\Controle\ExpressDetailsType',
        'ExpressEnabledDefinitionType\,' =>
            '\Controle\ExpressEnabledDefinitionType',
        'ExpressHistogramAisleType\,' =>
            '\Controle\ExpressHistogramAisleType',
        'ExpressHistogramDepartmentType\,' =>
            '\Controle\ExpressHistogramDepartmentType',
        'ExpressHistogramDomainDetailsType\,' =>
            '\Controle\ExpressHistogramDomainDetailsType',
        'ExpressHistogramProductType\,' =>
            '\Controle\ExpressHistogramProductType',
        'ExpressHistogramSortCodeType\,' =>
            '\Controle\ExpressHistogramSortCodeType',
        'ExpressItemRequirementsType\,' =>
            '\Controle\ExpressItemRequirementsType',
        'ExpressItemSortCodeType\,' =>
            '\Controle\ExpressItemSortCodeType',
        'ExpressPicturesRequiredDefinitionType\,' =>
            '\Controle\ExpressPicturesRequiredDefinitionType',
        'ExpressPreferencesType\,' =>
            '\Controle\ExpressPreferencesType',
        'ExpressProductSortCodeType\,' =>
            '\Controle\ExpressProductSortCodeType',
        'ExpressProductType\,' =>
            '\Controle\ExpressProductType',
        'ExpressSellerRequirementsType\,' =>
            '\Controle\ExpressSellerRequirementsType',
        'ExpressSellingPreferenceCodeType\,' =>
            '\Controle\ExpressSellingPreferenceCodeType',
        'ExternalProductCodeType\,' =>
            '\Controle\ExternalProductCodeType',
        'ExternalTransactionType\,' =>
            '\Controle\ExternalTransactionType',
        'FeatureDefinitionsType\,' =>
            '\Controle\FeatureDefinitionsType',
        'FeeType\,' =>
            '\Controle\FeeType',
        'FeedbackDetailArrayType\,' =>
            '\Controle\FeedbackDetailArrayType',
        'FeedbackDetailType\,' =>
            '\Controle\FeedbackDetailType',
        'FeedbackInfoType\,' =>
            '\Controle\FeedbackInfoType',
        'FeedbackPeriodArrayType\,' =>
            '\Controle\FeedbackPeriodArrayType',
        'FeedbackPeriodType\,' =>
            '\Controle\FeedbackPeriodType',
        'FeedbackRatingStarCodeType\,' =>
            '\Controle\FeedbackRatingStarCodeType',
        'FeedbackRequirementsType\,' =>
            '\Controle\FeedbackRequirementsType',
        'FeedbackResponseCodeType\,' =>
            '\Controle\FeedbackResponseCodeType',
        'FeedbackSummaryType\,' =>
            '\Controle\FeedbackSummaryType',
        'FeesType\,' =>
            '\Controle\FeesType',
        'FinanceOfferArrayType\,' =>
            '\Controle\FinanceOfferArrayType',
        'FinanceOfferType\,' =>
            '\Controle\FinanceOfferType',
        'FlatRateInsuranceRangeCodeType\,' =>
            '\Controle\FlatRateInsuranceRangeCodeType',
        'FlatRateInsuranceRangeCostType\,' =>
            '\Controle\FlatRateInsuranceRangeCostType',
        'FlatShippingPreferencesType\,' =>
            '\Controle\FlatShippingPreferencesType',
        'FlatShippingRateOptionCodeType\,' =>
            '\Controle\FlatShippingRateOptionCodeType',
        'GallerySortFilterCodeType\,' =>
            '\Controle\GallerySortFilterCodeType',
        'GalleryTypeCodeType\,' =>
            '\Controle\GalleryTypeCodeType',
        'GetAllBiddersModeCodeType\,' =>
            '\Controle\GetAllBiddersModeCodeType',
        'GetRecommendationsRequestContainerType\,' =>
            '\Controle\GetRecommendationsRequestContainerType',
        'GetRecommendationsResponseContainerType\,' =>
            '\Controle\GetRecommendationsResponseContainerType',
        'GiftServicesCodeType\,' =>
            '\Controle\GiftServicesCodeType',
        'GranularityLevelCodeType\,' =>
            '\Controle\GranularityLevelCodeType',
        'HitCounterCodeType\,' =>
            '\Controle\HitCounterCodeType',
        'HomePageFeaturedEnabledDefinitionType\,' =>
            '\Controle\HomePageFeaturedEnabledDefinitionType',
        'InsuranceDetailsType\,' =>
            '\Controle\InsuranceDetailsType',
        'InsuranceOptionCodeType\,' =>
            '\Controle\InsuranceOptionCodeType',
        'InsuranceSelectedCodeType\,' =>
            '\Controle\InsuranceSelectedCodeType',
        'InternationalShippingServiceOptionsType\,' =>
            '\Controle\InternationalShippingServiceOptionsType',
        'ItemArrayType\,' =>
            '\Controle\ItemArrayType',
        'ItemBidDetailsType\,' =>
            '\Controle\ItemBidDetailsType',
        'ItemFormatSortFilterCodeType\,' =>
            '\Controle\ItemFormatSortFilterCodeType',
        'ItemListCustomizationType\,' =>
            '\Controle\ItemListCustomizationType',
        'ItemLocationCodeType\,' =>
            '\Controle\ItemLocationCodeType',
        'ItemSortFilterCodeType\,' =>
            '\Controle\ItemSortFilterCodeType',
        'ItemSortTypeCodeType\,' =>
            '\Controle\ItemSortTypeCodeType',
        'ItemType\,' =>
            '\Controle\ItemType',
        'ItemTypeFilterCodeType\,' =>
            '\Controle\ItemTypeFilterCodeType',
        'LabelType\,' =>
            '\Controle\LabelType',
        'ListingAnalyzerRecommendationsType\,' =>
            '\Controle\ListingAnalyzerRecommendationsType',
        'ListingCheckoutRedirectPreferenceType\,' =>
            '\Controle\ListingCheckoutRedirectPreferenceType',
        'ListingDesignerType\,' =>
            '\Controle\ListingDesignerType',
        'ListingDetailsType\,' =>
            '\Controle\ListingDetailsType',
        'ListingDurationDefinitionType\,' =>
            '\Controle\ListingDurationDefinitionType',
        'ListingDurationDefinitionsType\,' =>
            '\Controle\ListingDurationDefinitionsType',
        'ListingDurationReferenceType\,' =>
            '\Controle\ListingDurationReferenceType',
        'ListingEnhancementsCodeType\,' =>
            '\Controle\ListingEnhancementsCodeType',
        'ListingFlowCodeType\,' =>
            '\Controle\ListingFlowCodeType',
        'ListingStatusCodeType\,' =>
            '\Controle\ListingStatusCodeType',
        'ListingSubtypeEnum\,' =>
            '\Controle\ListingSubtypeEnum',
        'ListingTipArrayType\,' =>
            '\Controle\ListingTipArrayType',
        'ListingTipFieldType\,' =>
            '\Controle\ListingTipFieldType',
        'ListingTipMessageType\,' =>
            '\Controle\ListingTipMessageType',
        'ListingTipType\,' =>
            '\Controle\ListingTipType',
        'ListingTypeCodeType\,' =>
            '\Controle\ListingTypeCodeType',
        'LiveAuctionApprovalStatusArrayType\,' =>
            '\Controle\LiveAuctionApprovalStatusArrayType',
        'LiveAuctionApprovalStatusType\,' =>
            '\Controle\LiveAuctionApprovalStatusType',
        'LiveAuctionBidType\,' =>
            '\Controle\LiveAuctionBidType',
        'LiveAuctionCatalogType\,' =>
            '\Controle\LiveAuctionCatalogType',
        'LiveAuctionDetailsType\,' =>
            '\Controle\LiveAuctionDetailsType',
        'LocalListingDistancesNonSubscriptionDefinitionType\,' =>
            '\Controle\LocalListingDistancesNonSubscriptionDefinitionType',
        'LocalListingDistancesRegularDefinitionType\,' =>
            '\Controle\LocalListingDistancesRegularDefinitionType',
        'LocalListingDistancesSpecialtyDefinitionType\,' =>
            '\Controle\LocalListingDistancesSpecialtyDefinitionType',
        'LocalMarketNonSubscriptionDefinitionType\,' =>
            '\Controle\LocalMarketNonSubscriptionDefinitionType',
        'LocalMarketPremiumSubscriptionDefinitionType\,' =>
            '\Controle\LocalMarketPremiumSubscriptionDefinitionType',
        'LocalMarketRegularSubscriptionDefinitionType\,' =>
            '\Controle\LocalMarketRegularSubscriptionDefinitionType',
        'LocalMarketSpecialitySubscriptionDefinitionType\,' =>
            '\Controle\LocalMarketSpecialitySubscriptionDefinitionType',
        'LookupAttributeArrayType\,' =>
            '\Controle\LookupAttributeArrayType',
        'LookupAttributeType\,' =>
            '\Controle\LookupAttributeType',
        'MarkUpMarkDownEventType\,' =>
            '\Controle\MarkUpMarkDownEventType',
        'MarkUpMarkDownEventTypeCodeType\,' =>
            '\Controle\MarkUpMarkDownEventTypeCodeType',
        'MarkUpMarkDownHistoryType\,' =>
            '\Controle\MarkUpMarkDownHistoryType',
        'MaximumItemRequirementsType\,' =>
            '\Controle\MaximumItemRequirementsType',
        'MemberMessageExchangeArrayType\,' =>
            '\Controle\MemberMessageExchangeArrayType',
        'MemberMessageExchangeType\,' =>
            '\Controle\MemberMessageExchangeType',
        'MemberMessageType\,' =>
            '\Controle\MemberMessageType',
        'MerchDisplayCodeType\,' =>
            '\Controle\MerchDisplayCodeType',
        'MerchandizingPrefCodeType\,' =>
            '\Controle\MerchandizingPrefCodeType',
        'MessageStatusTypeCodeType\,' =>
            '\Controle\MessageStatusTypeCodeType',
        'MessageTypeCodeType\,' =>
            '\Controle\MessageTypeCodeType',
        'MinimumReservePriceDefinitionType\,' =>
            '\Controle\MinimumReservePriceDefinitionType',
        'ModifiedFieldType\,' =>
            '\Controle\ModifiedFieldType',
        'ModifyActionCodeType\,' =>
            '\Controle\ModifyActionCodeType',
        'ModifyCodeType\,' =>
            '\Controle\ModifyCodeType',
        'MyMessagesAlertArrayType\,' =>
            '\Controle\MyMessagesAlertArrayType',
        'MyMessagesAlertResolutionStatusCode\,' =>
            '\Controle\MyMessagesAlertResolutionStatusCode',
        'MyMessagesAlertType\,' =>
            '\Controle\MyMessagesAlertType',
        'MyMessagesFolderOperationCodeType\,' =>
            '\Controle\MyMessagesFolderOperationCodeType',
        'MyMessagesFolderSummaryType\,' =>
            '\Controle\MyMessagesFolderSummaryType',
        'MyMessagesFolderType\,' =>
            '\Controle\MyMessagesFolderType',
        'MyMessagesForwardDetailsType\,' =>
            '\Controle\MyMessagesForwardDetailsType',
        'MyMessagesMessageArrayType\,' =>
            '\Controle\MyMessagesMessageArrayType',
        'MyMessagesMessageType\,' =>
            '\Controle\MyMessagesMessageType',
        'MyMessagesResponseDetailsType\,' =>
            '\Controle\MyMessagesResponseDetailsType',
        'MyMessagesSummaryType\,' =>
            '\Controle\MyMessagesSummaryType',
        'MyeBayFavoriteSearchListType\,' =>
            '\Controle\MyeBayFavoriteSearchListType',
        'MyeBayFavoriteSearchType\,' =>
            '\Controle\MyeBayFavoriteSearchType',
        'MyeBayFavoriteSellerListType\,' =>
            '\Controle\MyeBayFavoriteSellerListType',
        'MyeBayFavoriteSellerType\,' =>
            '\Controle\MyeBayFavoriteSellerType',
        'MyeBaySecondChanceOfferListType\,' =>
            '\Controle\MyeBaySecondChanceOfferListType',
        'MyeBaySelectionType\,' =>
            '\Controle\MyeBaySelectionType',
        'NameValueListArrayType\,' =>
            '\Controle\NameValueListArrayType',
        'NameValueListType\,' =>
            '\Controle\NameValueListType',
        'NotificationDetailsArrayType\,' =>
            '\Controle\NotificationDetailsArrayType',
        'NotificationDetailsType\,' =>
            '\Controle\NotificationDetailsType',
        'NotificationEnableArrayType\,' =>
            '\Controle\NotificationEnableArrayType',
        'NotificationEnableType\,' =>
            '\Controle\NotificationEnableType',
        'NotificationEventPropertyNameCodeType\,' =>
            '\Controle\NotificationEventPropertyNameCodeType',
        'NotificationEventPropertyType\,' =>
            '\Controle\NotificationEventPropertyType',
        'NotificationEventStateCodeType\,' =>
            '\Controle\NotificationEventStateCodeType',
        'NotificationEventTypeCodeType\,' =>
            '\Controle\NotificationEventTypeCodeType',
        'NotificationPayloadTypeCodeType\,' =>
            '\Controle\NotificationPayloadTypeCodeType',
        'NotificationRoleCodeType\,' =>
            '\Controle\NotificationRoleCodeType',
        'NotificationStatisticsType\,' =>
            '\Controle\NotificationStatisticsType',
        'NotificationUserDataType\,' =>
            '\Controle\NotificationUserDataType',
        'OfferArrayType\,' =>
            '\Controle\OfferArrayType',
        'OfferType\,' =>
            '\Controle\OfferType',
        'OperationTypeCodeType\,' =>
            '\Controle\OperationTypeCodeType',
        'OrderArrayType\,' =>
            '\Controle\OrderArrayType',
        'OrderStatusCodeType\,' =>
            '\Controle\OrderStatusCodeType',
        'OrderTransactionArrayType\,' =>
            '\Controle\OrderTransactionArrayType',
        'OrderTransactionType\,' =>
            '\Controle\OrderTransactionType',
        'OrderType\,' =>
            '\Controle\OrderType',
        'PaginatedItemArrayType\,' =>
            '\Controle\PaginatedItemArrayType',
        'PaginatedOrderTransactionArrayType\,' =>
            '\Controle\PaginatedOrderTransactionArrayType',
        'PaginatedTransactionArrayType\,' =>
            '\Controle\PaginatedTransactionArrayType',
        'PaginationResultType\,' =>
            '\Controle\PaginationResultType',
        'PaidStatusCodeType\,' =>
            '\Controle\PaidStatusCodeType',
        'PayPalAccountLevelCodeType\,' =>
            '\Controle\PayPalAccountLevelCodeType',
        'PayPalAccountStatusCodeType\,' =>
            '\Controle\PayPalAccountStatusCodeType',
        'PayPalAccountTypeCodeType\,' =>
            '\Controle\PayPalAccountTypeCodeType',
        'PaymentDetailsType\,' =>
            '\Controle\PaymentDetailsType',
        'PaymentMethodSearchCodeType\,' =>
            '\Controle\PaymentMethodSearchCodeType',
        'PaymentOptionDetailsType\,' =>
            '\Controle\PaymentOptionDetailsType',
        'PaymentStatusCodeType\,' =>
            '\Controle\PaymentStatusCodeType',
        'PaymentTypeCodeType\,' =>
            '\Controle\PaymentTypeCodeType',
        'PhotoDisplayCodeType\,' =>
            '\Controle\PhotoDisplayCodeType',
        'PictureDetailsType\,' =>
            '\Controle\PictureDetailsType',
        'PictureManagerActionCodeType\,' =>
            '\Controle\PictureManagerActionCodeType',
        'PictureManagerDetailLevelCodeType\,' =>
            '\Controle\PictureManagerDetailLevelCodeType',
        'PictureManagerDetailsType\,' =>
            '\Controle\PictureManagerDetailsType',
        'PictureManagerFolderType\,' =>
            '\Controle\PictureManagerFolderType',
        'PictureManagerPictureDisplayType\,' =>
            '\Controle\PictureManagerPictureDisplayType',
        'PictureManagerPictureDisplayTypeCodeType\,' =>
            '\Controle\PictureManagerPictureDisplayTypeCodeType',
        'PictureManagerPictureType\,' =>
            '\Controle\PictureManagerPictureType',
        'PictureManagerSubscriptionLevelCodeType\,' =>
            '\Controle\PictureManagerSubscriptionLevelCodeType',
        'PictureManagerSubscriptionType\,' =>
            '\Controle\PictureManagerSubscriptionType',
        'PictureSourceCodeType\,' =>
            '\Controle\PictureSourceCodeType',
        'PriceRangeFilterType\,' =>
            '\Controle\PriceRangeFilterType',
        'PricingRecommendationsType\,' =>
            '\Controle\PricingRecommendationsType',
        'ProPackEnabledDefinitionType\,' =>
            '\Controle\ProPackEnabledDefinitionType',
        'ProPackPlusEnabledDefinitionType\,' =>
            '\Controle\ProPackPlusEnabledDefinitionType',
        'ProStoresCheckoutPreferenceType\,' =>
            '\Controle\ProStoresCheckoutPreferenceType',
        'ProStoresDetailsType\,' =>
            '\Controle\ProStoresDetailsType',
        'ProductArrayType\,' =>
            '\Controle\ProductArrayType',
        'ProductFamilyType\,' =>
            '\Controle\ProductFamilyType',
        'ProductFinderConstraintType\,' =>
            '\Controle\ProductFinderConstraintType',
        'ProductInfoType\,' =>
            '\Controle\ProductInfoType',
        'ProductListingDetailsType\,' =>
            '\Controle\ProductListingDetailsType',
        'ProductRecommendationsType\,' =>
            '\Controle\ProductRecommendationsType',
        'ProductSearchPageType\,' =>
            '\Controle\ProductSearchPageType',
        'ProductSearchResultType\,' =>
            '\Controle\ProductSearchResultType',
        'ProductSearchType\,' =>
            '\Controle\ProductSearchType',
        'ProductType\,' =>
            '\Controle\ProductType',
        'ProductUseCaseCodeType\,' =>
            '\Controle\ProductUseCaseCodeType',
        'PromotedItemType\,' =>
            '\Controle\PromotedItemType',
        'PromotionDetailsType\,' =>
            '\Controle\PromotionDetailsType',
        'PromotionItemPriceTypeCodeType\,' =>
            '\Controle\PromotionItemPriceTypeCodeType',
        'PromotionItemSelectionCodeType\,' =>
            '\Controle\PromotionItemSelectionCodeType',
        'PromotionMethodCodeType\,' =>
            '\Controle\PromotionMethodCodeType',
        'PromotionRuleArrayType\,' =>
            '\Controle\PromotionRuleArrayType',
        'PromotionRuleType\,' =>
            '\Controle\PromotionRuleType',
        'PromotionSchemeCodeType\,' =>
            '\Controle\PromotionSchemeCodeType',
        'ProximitySearchDetailsType\,' =>
            '\Controle\ProximitySearchDetailsType',
        'ProximitySearchType\,' =>
            '\Controle\ProximitySearchType',
        'QuantityOperatorCodeType\,' =>
            '\Controle\QuantityOperatorCodeType',
        'QuestionTypeCodeType\,' =>
            '\Controle\QuestionTypeCodeType',
        'RangeCodeType\,' =>
            '\Controle\RangeCodeType',
        'ReasonCodeDetailType\,' =>
            '\Controle\ReasonCodeDetailType',
        'RecipientRelationCodeType\,' =>
            '\Controle\RecipientRelationCodeType',
        'RecommendationEngineCodeType\,' =>
            '\Controle\RecommendationEngineCodeType',
        'RefundArrayType\,' =>
            '\Controle\RefundArrayType',
        'RefundReasonCodeType\,' =>
            '\Controle\RefundReasonCodeType',
        'RefundType\,' =>
            '\Controle\RefundType',
        'RefundTypeCodeType\,' =>
            '\Controle\RefundTypeCodeType',
        'RegionDetailsType\,' =>
            '\Controle\RegionDetailsType',
        'RelatedSearchKeywordArrayType\,' =>
            '\Controle\RelatedSearchKeywordArrayType',
        'ReminderCustomizationType\,' =>
            '\Controle\ReminderCustomizationType',
        'RemindersType\,' =>
            '\Controle\RemindersType',
        'RequestCategoriesType\,' =>
            '\Controle\RequestCategoriesType',
        'ResponseAttributeSetType\,' =>
            '\Controle\ResponseAttributeSetType',
        'ReviseStatusType\,' =>
            '\Controle\ReviseStatusType',
        'SalesTaxType\,' =>
            '\Controle\SalesTaxType',
        'ScheduleType\,' =>
            '\Controle\ScheduleType',
        'SchedulingInfoType\,' =>
            '\Controle\SchedulingInfoType',
        'SearchAttributesType\,' =>
            '\Controle\SearchAttributesType',
        'SearchDetailsType\,' =>
            '\Controle\SearchDetailsType',
        'SearchFlagsCodeType\,' =>
            '\Controle\SearchFlagsCodeType',
        'SearchLocationFilterType\,' =>
            '\Controle\SearchLocationFilterType',
        'SearchLocationType\,' =>
            '\Controle\SearchLocationType',
        'SearchRequestType\,' =>
            '\Controle\SearchRequestType',
        'SearchResultItemArrayType\,' =>
            '\Controle\SearchResultItemArrayType',
        'SearchResultItemType\,' =>
            '\Controle\SearchResultItemType',
        'SearchResultValuesCodeType\,' =>
            '\Controle\SearchResultValuesCodeType',
        'SearchSortOrderCodeType\,' =>
            '\Controle\SearchSortOrderCodeType',
        'SearchStoreFilterType\,' =>
            '\Controle\SearchStoreFilterType',
        'SearchTypeCodeType\,' =>
            '\Controle\SearchTypeCodeType',
        'SecondChanceOfferDurationCodeType\,' =>
            '\Controle\SecondChanceOfferDurationCodeType',
        'SellerBusinessCodeType\,' =>
            '\Controle\SellerBusinessCodeType',
        'SellerContactDetailsEnabledDefinitionType\,' =>
            '\Controle\SellerContactDetailsEnabledDefinitionType',
        'SellerFavoriteItemPreferencesType\,' =>
            '\Controle\SellerFavoriteItemPreferencesType',
        'SellerGuaranteeLevelCodeType\,' =>
            '\Controle\SellerGuaranteeLevelCodeType',
        'SellerLevelCodeType\,' =>
            '\Controle\SellerLevelCodeType',
        'SellerPaymentMethodCodeType\,' =>
            '\Controle\SellerPaymentMethodCodeType',
        'SellerPaymentPreferencesType\,' =>
            '\Controle\SellerPaymentPreferencesType',
        'SellerPaymentType\,' =>
            '\Controle\SellerPaymentType',
        'SellerType\,' =>
            '\Controle\SellerType',
        'SellingManagerProductDetailsType\,' =>
            '\Controle\SellingManagerProductDetailsType',
        'SellingStatusType\,' =>
            '\Controle\SellingStatusType',
        'SellingSummaryType\,' =>
            '\Controle\SellingSummaryType',
        'SetUserNotesActionCodeType\,' =>
            '\Controle\SetUserNotesActionCodeType',
        'ShipmentDeliveryStatusCodeType\,' =>
            '\Controle\ShipmentDeliveryStatusCodeType',
        'ShipmentStatusCodeType\,' =>
            '\Controle\ShipmentStatusCodeType',
        'ShippingCarrierCodeType\,' =>
            '\Controle\ShippingCarrierCodeType',
        'ShippingDetailsType\,' =>
            '\Controle\ShippingDetailsType',
        'ShippingFeatureCodeType\,' =>
            '\Controle\ShippingFeatureCodeType',
        'ShippingLocationDetailsType\,' =>
            '\Controle\ShippingLocationDetailsType',
        'ShippingOptionCodeType\,' =>
            '\Controle\ShippingOptionCodeType',
        'ShippingPackageCodeType\,' =>
            '\Controle\ShippingPackageCodeType',
        'ShippingRateTypeCodeType\,' =>
            '\Controle\ShippingRateTypeCodeType',
        'ShippingRegionCodeType\,' =>
            '\Controle\ShippingRegionCodeType',
        'ShippingServiceCodeType\,' =>
            '\Controle\ShippingServiceCodeType',
        'ShippingServiceDetailsType\,' =>
            '\Controle\ShippingServiceDetailsType',
        'ShippingServiceOptionsType\,' =>
            '\Controle\ShippingServiceOptionsType',
        'ShippingTermRequiredDefinitionType\,' =>
            '\Controle\ShippingTermRequiredDefinitionType',
        'ShippingTermsCodeType\,' =>
            '\Controle\ShippingTermsCodeType',
        'ShippingTypeCodeType\,' =>
            '\Controle\ShippingTypeCodeType',
        'SiteCodeType\,' =>
            '\Controle\SiteCodeType',
        'SiteDefaultsType\,' =>
            '\Controle\SiteDefaultsType',
        'SiteDetailsType\,' =>
            '\Controle\SiteDetailsType',
        'SiteHostedPictureType\,' =>
            '\Controle\SiteHostedPictureType',
        'SiteLocationType\,' =>
            '\Controle\SiteLocationType',
        'SiteWideCharacteristicsType\,' =>
            '\Controle\SiteWideCharacteristicsType',
        'SkypeContactOptionCodeType\,' =>
            '\Controle\SkypeContactOptionCodeType',
        'SkypeMeNonTransactionalEnabledDefinitionType\,' =>
            '\Controle\SkypeMeNonTransactionalEnabledDefinitionType',
        'SkypeMeTransactionalEnabledDefinitionType\,' =>
            '\Controle\SkypeMeTransactionalEnabledDefinitionType',
        'SkypeOptionCodeType\,' =>
            '\Controle\SkypeOptionCodeType',
        'SortOrderCodeType\,' =>
            '\Controle\SortOrderCodeType',
        'SpellingSuggestionType\,' =>
            '\Controle\SpellingSuggestionType',
        'StoreCategoryUpdateActionCodeType\,' =>
            '\Controle\StoreCategoryUpdateActionCodeType',
        'StoreColorSchemeArrayType\,' =>
            '\Controle\StoreColorSchemeArrayType',
        'StoreColorSchemeType\,' =>
            '\Controle\StoreColorSchemeType',
        'StoreColorType\,' =>
            '\Controle\StoreColorType',
        'StoreCustomCategoryArrayType\,' =>
            '\Controle\StoreCustomCategoryArrayType',
        'StoreCustomCategoryType\,' =>
            '\Controle\StoreCustomCategoryType',
        'StoreCustomHeaderLayoutCodeType\,' =>
            '\Controle\StoreCustomHeaderLayoutCodeType',
        'StoreCustomListingHeaderDisplayCodeType\,' =>
            '\Controle\StoreCustomListingHeaderDisplayCodeType',
        'StoreCustomListingHeaderLinkCodeType\,' =>
            '\Controle\StoreCustomListingHeaderLinkCodeType',
        'StoreCustomListingHeaderLinkType\,' =>
            '\Controle\StoreCustomListingHeaderLinkType',
        'StoreCustomListingHeaderType\,' =>
            '\Controle\StoreCustomListingHeaderType',
        'StoreCustomPageArrayType\,' =>
            '\Controle\StoreCustomPageArrayType',
        'StoreCustomPageStatusCodeType\,' =>
            '\Controle\StoreCustomPageStatusCodeType',
        'StoreCustomPageType\,' =>
            '\Controle\StoreCustomPageType',
        'StoreFontFaceCodeType\,' =>
            '\Controle\StoreFontFaceCodeType',
        'StoreFontSizeCodeType\,' =>
            '\Controle\StoreFontSizeCodeType',
        'StoreFontType\,' =>
            '\Controle\StoreFontType',
        'StoreHeaderStyleCodeType\,' =>
            '\Controle\StoreHeaderStyleCodeType',
        'StoreInventoryEnabledDefinitionType\,' =>
            '\Controle\StoreInventoryEnabledDefinitionType',
        'StoreItemListLayoutCodeType\,' =>
            '\Controle\StoreItemListLayoutCodeType',
        'StoreItemListSortOrderCodeType\,' =>
            '\Controle\StoreItemListSortOrderCodeType',
        'StoreLogoArrayType\,' =>
            '\Controle\StoreLogoArrayType',
        'StoreLogoType\,' =>
            '\Controle\StoreLogoType',
        'StorePreferencesType\,' =>
            '\Controle\StorePreferencesType',
        'StoreSearchCodeType\,' =>
            '\Controle\StoreSearchCodeType',
        'StoreSubscriptionArrayType\,' =>
            '\Controle\StoreSubscriptionArrayType',
        'StoreSubscriptionLevelCodeType\,' =>
            '\Controle\StoreSubscriptionLevelCodeType',
        'StoreSubscriptionType\,' =>
            '\Controle\StoreSubscriptionType',
        'StoreThemeArrayType\,' =>
            '\Controle\StoreThemeArrayType',
        'StoreThemeType\,' =>
            '\Controle\StoreThemeType',
        'StoreType\,' =>
            '\Controle\StoreType',
        'StoreVacationPreferencesType\,' =>
            '\Controle\StoreVacationPreferencesType',
        'StorefrontType\,' =>
            '\Controle\StorefrontType',
        'StringMatchCodeType\,' =>
            '\Controle\StringMatchCodeType',
        'SuggestedCategoryArrayType\,' =>
            '\Controle\SuggestedCategoryArrayType',
        'SuggestedCategoryType\,' =>
            '\Controle\SuggestedCategoryType',
        'SummaryEventScheduleType\,' =>
            '\Controle\SummaryEventScheduleType',
        'SummaryFrequencyCodeType\,' =>
            '\Controle\SummaryFrequencyCodeType',
        'SummaryWindowPeriodCodeType\,' =>
            '\Controle\SummaryWindowPeriodCodeType',
        'TaskStatusCodeType\,' =>
            '\Controle\TaskStatusCodeType',
        'TaxJurisdictionType\,' =>
            '\Controle\TaxJurisdictionType',
        'TaxTableType\,' =>
            '\Controle\TaxTableType',
        'ThemeGroupType\,' =>
            '\Controle\ThemeGroupType',
        'TokenReturnMethodCodeType\,' =>
            '\Controle\TokenReturnMethodCodeType',
        'TradingRoleCodeType\,' =>
            '\Controle\TradingRoleCodeType',
        'TransactionArrayType\,' =>
            '\Controle\TransactionArrayType',
        'TransactionPlatformType\,' =>
            '\Controle\TransactionPlatformType',
        'TransactionStatusType\,' =>
            '\Controle\TransactionStatusType',
        'TransactionType\,' =>
            '\Controle\TransactionType',
        'UserConsentRequiredDefinitionType\,' =>
            '\Controle\UserConsentRequiredDefinitionType',
        'UserIdFilterType\,' =>
            '\Controle\UserIdFilterType',
        'UserStatusCodeType\,' =>
            '\Controle\UserStatusCodeType',
        'UserType\,' =>
            '\Controle\UserType',
        'ValType\,' =>
            '\Controle\ValType',
        'ValuePackEnabledDefinitionType\,' =>
            '\Controle\ValuePackEnabledDefinitionType',
        'VendorHostedPictureType\,' =>
            '\Controle\VendorHostedPictureType',
        'VerifiedUserRequirementsType\,' =>
            '\Controle\VerifiedUserRequirementsType',
        'WantItNowPostArrayType\,' =>
            '\Controle\WantItNowPostArrayType',
        'WantItNowPostType\,' =>
            '\Controle\WantItNowPostType',
    );

    public function __construct($wsdl = null, $options = array()) {
        foreach($this->classmap as $key => $value) {
            if(!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        if(isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
    }

    /**
     * AddDispute
     *
     * @param \Controle\AddDisputeRequestType $AddDisputeRequest
     * @return \Controle\AddDisputeResponseType
     */
    public function AddDispute(\Controle\AddDisputeRequestType $AddDisputeRequest) {
        return $this->__soapCall(
            'AddDispute',
            array($AddDisputeRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddDisputeResponse
     *
     * @param \Controle\AddDisputeResponseRequestType $AddDisputeResponseRequest
     * @return \Controle\AddDisputeResponseResponseType
     */
    public function AddDisputeResponse(\Controle\AddDisputeResponseRequestType $AddDisputeResponseRequest) {
        return $this->__soapCall(
            'AddDisputeResponse',
            array($AddDisputeResponseRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddItem
     *
     * @param \Controle\AddItemRequestType $AddItemRequest
     * @return \Controle\AddItemResponseType
     */
    public function AddItem(\Controle\AddItemRequestType $AddItemRequest) {
        return $this->__soapCall(
            'AddItem',
            array($AddItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddLiveAuctionItem
     *
     * @param \Controle\AddLiveAuctionItemRequestType $AddLiveAuctionItemRequest
     * @return \Controle\AddLiveAuctionItemResponseType
     */
    public function AddLiveAuctionItem(\Controle\AddLiveAuctionItemRequestType $AddLiveAuctionItemRequest) {
        return $this->__soapCall(
            'AddLiveAuctionItem',
            array($AddLiveAuctionItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddMemberMessageAAQToPartner
     *
     * @param \Controle\AddMemberMessageAAQToPartnerRequestType $AddMemberMessageAAQToPartnerRequest
     * @return \Controle\AddMemberMessageAAQToPartnerResponseType
     */
    public function AddMemberMessageAAQToPartner(\Controle\AddMemberMessageAAQToPartnerRequestType $AddMemberMessageAAQToPartnerRequest) {
        return $this->__soapCall(
            'AddMemberMessageAAQToPartner',
            array($AddMemberMessageAAQToPartnerRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddMemberMessageRTQ
     *
     * @param \Controle\AddMemberMessageRTQRequestType $AddMemberMessageRTQRequest
     * @return \Controle\AddMemberMessageRTQResponseType
     */
    public function AddMemberMessageRTQ(\Controle\AddMemberMessageRTQRequestType $AddMemberMessageRTQRequest) {
        return $this->__soapCall(
            'AddMemberMessageRTQ',
            array($AddMemberMessageRTQRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddMemberMessagesAAQToBidder
     *
     * @param \Controle\AddMemberMessagesAAQToBidderRequestType $AddMemberMessagesAAQToBidderRequest
     * @return \Controle\AddMemberMessagesAAQToBidderResponseType
     */
    public function AddMemberMessagesAAQToBidder(\Controle\AddMemberMessagesAAQToBidderRequestType $AddMemberMessagesAAQToBidderRequest) {
        return $this->__soapCall(
            'AddMemberMessagesAAQToBidder',
            array($AddMemberMessagesAAQToBidderRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddOrder
     *
     * @param \Controle\AddOrderRequestType $AddOrderRequest
     * @return \Controle\AddOrderResponseType
     */
    public function AddOrder(\Controle\AddOrderRequestType $AddOrderRequest) {
        return $this->__soapCall(
            'AddOrder',
            array($AddOrderRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddSecondChanceItem
     *
     * @param \Controle\AddSecondChanceItemRequestType $AddSecondChanceItemRequest
     * @return \Controle\AddSecondChanceItemResponseType
     */
    public function AddSecondChanceItem(\Controle\AddSecondChanceItemRequestType $AddSecondChanceItemRequest) {
        return $this->__soapCall(
            'AddSecondChanceItem',
            array($AddSecondChanceItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddToItemDescription
     *
     * @param \Controle\AddToItemDescriptionRequestType $AddToItemDescriptionRequest
     * @return \Controle\AddToItemDescriptionResponseType
     */
    public function AddToItemDescription(\Controle\AddToItemDescriptionRequestType $AddToItemDescriptionRequest) {
        return $this->__soapCall(
            'AddToItemDescription',
            array($AddToItemDescriptionRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddToWatchList
     *
     * @param \Controle\AddToWatchListRequestType $AddToWatchListRequest
     * @return \Controle\AddToWatchListResponseType
     */
    public function AddToWatchList(\Controle\AddToWatchListRequestType $AddToWatchListRequest) {
        return $this->__soapCall(
            'AddToWatchList',
            array($AddToWatchListRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * AddTransactionConfirmationItem
     *
     * @param \Controle\AddTransactionConfirmationItemRequestType $AddTransactionConfirmationItemRequest
     * @return \Controle\AddTransactionConfirmationItemResponseType
     */
    public function AddTransactionConfirmationItem(\Controle\AddTransactionConfirmationItemRequestType $AddTransactionConfirmationItemRequest) {
        return $this->__soapCall(
            'AddTransactionConfirmationItem',
            array($AddTransactionConfirmationItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ApproveLiveAuctionBidders
     *
     * @param \Controle\ApproveLiveAuctionBiddersRequestType $ApproveLiveAuctionBiddersRequest
     * @return \Controle\ApproveLiveAuctionBiddersResponseType
     */
    public function ApproveLiveAuctionBidders(\Controle\ApproveLiveAuctionBiddersRequestType $ApproveLiveAuctionBiddersRequest) {
        return $this->__soapCall(
            'ApproveLiveAuctionBidders',
            array($ApproveLiveAuctionBiddersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * CompleteSale
     *
     * @param \Controle\CompleteSaleRequestType $CompleteSaleRequest
     * @return \Controle\CompleteSaleResponseType
     */
    public function CompleteSale(\Controle\CompleteSaleRequestType $CompleteSaleRequest) {
        return $this->__soapCall(
            'CompleteSale',
            array($CompleteSaleRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * DeleteMyMessages
     *
     * @param \Controle\DeleteMyMessagesRequestType $DeleteMyMessagesRequest
     * @return \Controle\DeleteMyMessagesResponseType
     */
    public function DeleteMyMessages(\Controle\DeleteMyMessagesRequestType $DeleteMyMessagesRequest) {
        return $this->__soapCall(
            'DeleteMyMessages',
            array($DeleteMyMessagesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * EndItem
     *
     * @param \Controle\EndItemRequestType $EndItemRequest
     * @return \Controle\EndItemResponseType
     */
    public function EndItem(\Controle\EndItemRequestType $EndItemRequest) {
        return $this->__soapCall(
            'EndItem',
            array($EndItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * FetchToken
     *
     * @param \Controle\FetchTokenRequestType $FetchTokenRequest
     * @return \Controle\FetchTokenResponseType
     */
    public function FetchToken(\Controle\FetchTokenRequestType $FetchTokenRequest) {
        return $this->__soapCall(
            'FetchToken',
            array($FetchTokenRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetAccount
     *
     * @param \Controle\GetAccountRequestType $GetAccountRequest
     * @return \Controle\GetAccountResponseType
     */
    public function GetAccount(\Controle\GetAccountRequestType $GetAccountRequest) {
        return $this->__soapCall(
            'GetAccount',
            array($GetAccountRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetAdFormatLeads
     *
     * @param \Controle\GetAdFormatLeadsRequestType $GetAdFormatLeadsRequest
     * @return \Controle\GetAdFormatLeadsResponseType
     */
    public function GetAdFormatLeads(\Controle\GetAdFormatLeadsRequestType $GetAdFormatLeadsRequest) {
        return $this->__soapCall(
            'GetAdFormatLeads',
            array($GetAdFormatLeadsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetAllBidders
     *
     * @param \Controle\GetAllBiddersRequestType $GetAllBiddersRequest
     * @return \Controle\GetAllBiddersResponseType
     */
    public function GetAllBidders(\Controle\GetAllBiddersRequestType $GetAllBiddersRequest) {
        return $this->__soapCall(
            'GetAllBidders',
            array($GetAllBiddersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetApiAccessRules
     *
     * @param \Controle\GetApiAccessRulesRequestType $GetApiAccessRulesRequest
     * @return \Controle\GetApiAccessRulesResponseType
     */
    public function GetApiAccessRules(\Controle\GetApiAccessRulesRequestType $GetApiAccessRulesRequest) {
        return $this->__soapCall(
            'GetApiAccessRules',
            array($GetApiAccessRulesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetAttributesCS
     *
     * @param \Controle\GetAttributesCSRequestType $GetAttributesCSRequest
     * @return \Controle\GetAttributesCSResponseType
     */
    public function GetAttributesCS(\Controle\GetAttributesCSRequestType $GetAttributesCSRequest) {
        return $this->__soapCall(
            'GetAttributesCS',
            array($GetAttributesCSRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetAttributesXSL
     *
     * @param \Controle\GetAttributesXSLRequestType $GetAttributesXSLRequest
     * @return \Controle\GetAttributesXSLResponseType
     */
    public function GetAttributesXSL(\Controle\GetAttributesXSLRequestType $GetAttributesXSLRequest) {
        return $this->__soapCall(
            'GetAttributesXSL',
            array($GetAttributesXSLRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetBestOffers
     *
     * @param \Controle\GetBestOffersRequestType $GetBestOffersRequest
     * @return \Controle\GetBestOffersResponseType
     */
    public function GetBestOffers(\Controle\GetBestOffersRequestType $GetBestOffersRequest) {
        return $this->__soapCall(
            'GetBestOffers',
            array($GetBestOffersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetBidderList
     *
     * @param \Controle\GetBidderListRequestType $GetBidderListRequest
     * @return \Controle\GetBidderListResponseType
     */
    public function GetBidderList(\Controle\GetBidderListRequestType $GetBidderListRequest) {
        return $this->__soapCall(
            'GetBidderList',
            array($GetBidderListRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategories
     *
     * @param \Controle\GetCategoriesRequestType $GetCategoriesRequest
     * @return \Controle\GetCategoriesResponseType
     */
    public function GetCategories(\Controle\GetCategoriesRequestType $GetCategoriesRequest) {
        return $this->__soapCall(
            'GetCategories',
            array($GetCategoriesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategory2CS
     *
     * @param \Controle\GetCategory2CSRequestType $GetCategory2CSRequest
     * @return \Controle\GetCategory2CSResponseType
     */
    public function GetCategory2CS(\Controle\GetCategory2CSRequestType $GetCategory2CSRequest) {
        return $this->__soapCall(
            'GetCategory2CS',
            array($GetCategory2CSRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategory2FinanceOffer
     *
     * @param \Controle\GetCategory2FinanceOfferRequestType $GetCategory2FinanceOfferRequest
     * @return \Controle\GetCategory2FinanceOfferResponseType
     */
    public function GetCategory2FinanceOffer(\Controle\GetCategory2FinanceOfferRequestType $GetCategory2FinanceOfferRequest) {
        return $this->__soapCall(
            'GetCategory2FinanceOffer',
            array($GetCategory2FinanceOfferRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategoryFeatures
     *
     * @param \Controle\GetCategoryFeaturesRequestType $GetCategoryFeaturesRequest
     * @return \Controle\GetCategoryFeaturesResponseType
     */
    public function GetCategoryFeatures(\Controle\GetCategoryFeaturesRequestType $GetCategoryFeaturesRequest) {
        return $this->__soapCall(
            'GetCategoryFeatures',
            array($GetCategoryFeaturesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategoryListings
     *
     * @param \Controle\GetCategoryListingsRequestType $GetCategoryListingsRequest
     * @return \Controle\GetCategoryListingsResponseType
     */
    public function GetCategoryListings(\Controle\GetCategoryListingsRequestType $GetCategoryListingsRequest) {
        return $this->__soapCall(
            'GetCategoryListings',
            array($GetCategoryListingsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCategoryMappings
     *
     * @param \Controle\GetCategoryMappingsRequestType $GetCategoryMappingsRequest
     * @return \Controle\GetCategoryMappingsResponseType
     */
    public function GetCategoryMappings(\Controle\GetCategoryMappingsRequestType $GetCategoryMappingsRequest) {
        return $this->__soapCall(
            'GetCategoryMappings',
            array($GetCategoryMappingsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetChallengeToken
     *
     * @param \Controle\GetChallengeTokenRequestType $GetChallengeTokenRequest
     * @return \Controle\GetChallengeTokenResponseType
     */
    public function GetChallengeToken(\Controle\GetChallengeTokenRequestType $GetChallengeTokenRequest) {
        return $this->__soapCall(
            'GetChallengeToken',
            array($GetChallengeTokenRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCharities
     *
     * @param \Controle\GetCharitiesRequestType $GetCharitiesRequest
     * @return \Controle\GetCharitiesResponseType
     */
    public function GetCharities(\Controle\GetCharitiesRequestType $GetCharitiesRequest) {
        return $this->__soapCall(
            'GetCharities',
            array($GetCharitiesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetContextualKeywords
     *
     * @param \Controle\GetContextualKeywordsRequestType $GetContextualKeywordsRequest
     * @return \Controle\GetContextualKeywordsResponseType
     */
    public function GetContextualKeywords(\Controle\GetContextualKeywordsRequestType $GetContextualKeywordsRequest) {
        return $this->__soapCall(
            'GetContextualKeywords',
            array($GetContextualKeywordsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetCrossPromotions
     *
     * @param \Controle\GetCrossPromotionsRequestType $GetCrossPromotionsRequest
     * @return \Controle\GetCrossPromotionsResponseType
     */
    public function GetCrossPromotions(\Controle\GetCrossPromotionsRequestType $GetCrossPromotionsRequest) {
        return $this->__soapCall(
            'GetCrossPromotions',
            array($GetCrossPromotionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetDescriptionTemplates
     *
     * @param \Controle\GetDescriptionTemplatesRequestType $GetDescriptionTemplatesRequest
     * @return \Controle\GetDescriptionTemplatesResponseType
     */
    public function GetDescriptionTemplates(\Controle\GetDescriptionTemplatesRequestType $GetDescriptionTemplatesRequest) {
        return $this->__soapCall(
            'GetDescriptionTemplates',
            array($GetDescriptionTemplatesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetDispute
     *
     * @param \Controle\GetDisputeRequestType $GetDisputeRequest
     * @return \Controle\GetDisputeResponseType
     */
    public function GetDispute(\Controle\GetDisputeRequestType $GetDisputeRequest) {
        return $this->__soapCall(
            'GetDispute',
            array($GetDisputeRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetFeedback
     *
     * @param \Controle\GetFeedbackRequestType $GetFeedbackRequest
     * @return \Controle\GetFeedbackResponseType
     */
    public function GetFeedback(\Controle\GetFeedbackRequestType $GetFeedbackRequest) {
        return $this->__soapCall(
            'GetFeedback',
            array($GetFeedbackRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetFinanceOffers
     *
     * @param \Controle\GetFinanceOffersRequestType $GetFinanceOffersRequest
     * @return \Controle\GetFinanceOffersResponseType
     */
    public function GetFinanceOffers(\Controle\GetFinanceOffersRequestType $GetFinanceOffersRequest) {
        return $this->__soapCall(
            'GetFinanceOffers',
            array($GetFinanceOffersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetHighBidders
     *
     * @param \Controle\GetHighBiddersRequestType $GetHighBiddersRequest
     * @return \Controle\GetHighBiddersResponseType
     */
    public function GetHighBidders(\Controle\GetHighBiddersRequestType $GetHighBiddersRequest) {
        return $this->__soapCall(
            'GetHighBidders',
            array($GetHighBiddersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetItem
     *
     * @param \Controle\GetItemRequestType $GetItemRequest
     * @return \Controle\GetItemResponseType
     */
    public function GetItem(\Controle\GetItemRequestType $GetItemRequest) {
        return $this->__soapCall(
            'GetItem',
            array($GetItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetItemRecommendations
     *
     * @param \Controle\GetItemRecommendationsRequestType $GetItemRecommendationsRequest
     * @return \Controle\GetItemRecommendationsResponseType
     */
    public function GetItemRecommendations(\Controle\GetItemRecommendationsRequestType $GetItemRecommendationsRequest) {
        return $this->__soapCall(
            'GetItemRecommendations',
            array($GetItemRecommendationsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetItemShipping
     *
     * @param \Controle\GetItemShippingRequestType $GetItemShippingRequest
     * @return \Controle\GetItemShippingResponseType
     */
    public function GetItemShipping(\Controle\GetItemShippingRequestType $GetItemShippingRequest) {
        return $this->__soapCall(
            'GetItemShipping',
            array($GetItemShippingRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetItemTransactions
     *
     * @param \Controle\GetItemTransactionsRequestType $GetItemTransactionsRequest
     * @return \Controle\GetItemTransactionsResponseType
     */
    public function GetItemTransactions(\Controle\GetItemTransactionsRequestType $GetItemTransactionsRequest) {
        return $this->__soapCall(
            'GetItemTransactions',
            array($GetItemTransactionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetItemsAwaitingFeedback
     *
     * @param \Controle\GetItemsAwaitingFeedbackRequestType $GetItemsAwaitingFeedbackRequest
     * @return \Controle\GetItemsAwaitingFeedbackResponseType
     */
    public function GetItemsAwaitingFeedback(\Controle\GetItemsAwaitingFeedbackRequestType $GetItemsAwaitingFeedbackRequest) {
        return $this->__soapCall(
            'GetItemsAwaitingFeedback',
            array($GetItemsAwaitingFeedbackRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetLiveAuctionBidders
     *
     * @param \Controle\GetLiveAuctionBiddersRequestType $GetLiveAuctionBiddersRequest
     * @return \Controle\GetLiveAuctionBiddersResponseType
     */
    public function GetLiveAuctionBidders(\Controle\GetLiveAuctionBiddersRequestType $GetLiveAuctionBiddersRequest) {
        return $this->__soapCall(
            'GetLiveAuctionBidders',
            array($GetLiveAuctionBiddersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetLiveAuctionCatalogDetails
     *
     * @param \Controle\GetLiveAuctionCatalogDetailsRequestType $GetLiveAuctionCatalogDetailsRequest
     * @return \Controle\GetLiveAuctionCatalogDetailsResponseType
     */
    public function GetLiveAuctionCatalogDetails(\Controle\GetLiveAuctionCatalogDetailsRequestType $GetLiveAuctionCatalogDetailsRequest) {
        return $this->__soapCall(
            'GetLiveAuctionCatalogDetails',
            array($GetLiveAuctionCatalogDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMemberMessages
     *
     * @param \Controle\GetMemberMessagesRequestType $GetMemberMessagesRequest
     * @return \Controle\GetMemberMessagesResponseType
     */
    public function GetMemberMessages(\Controle\GetMemberMessagesRequestType $GetMemberMessagesRequest) {
        return $this->__soapCall(
            'GetMemberMessages',
            array($GetMemberMessagesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMyMessages
     *
     * @param \Controle\GetMyMessagesRequestType $GetMyMessagesRequest
     * @return \Controle\GetMyMessagesResponseType
     */
    public function GetMyMessages(\Controle\GetMyMessagesRequestType $GetMyMessagesRequest) {
        return $this->__soapCall(
            'GetMyMessages',
            array($GetMyMessagesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMyeBay
     *
     * @param \Controle\GetMyeBayRequestType $GetMyeBayRequest
     * @return \Controle\GetMyeBayResponseType
     */
    public function GetMyeBay(\Controle\GetMyeBayRequestType $GetMyeBayRequest) {
        return $this->__soapCall(
            'GetMyeBay',
            array($GetMyeBayRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMyeBayBuying
     *
     * @param \Controle\GetMyeBayBuyingRequestType $GetMyeBayBuyingRequest
     * @return \Controle\GetMyeBayBuyingResponseType
     */
    public function GetMyeBayBuying(\Controle\GetMyeBayBuyingRequestType $GetMyeBayBuyingRequest) {
        return $this->__soapCall(
            'GetMyeBayBuying',
            array($GetMyeBayBuyingRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMyeBayReminders
     *
     * @param \Controle\GetMyeBayRemindersRequestType $GetMyeBayRemindersRequest
     * @return \Controle\GetMyeBayRemindersResponseType
     */
    public function GetMyeBayReminders(\Controle\GetMyeBayRemindersRequestType $GetMyeBayRemindersRequest) {
        return $this->__soapCall(
            'GetMyeBayReminders',
            array($GetMyeBayRemindersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetMyeBaySelling
     *
     * @param \Controle\GetMyeBaySellingRequestType $GetMyeBaySellingRequest
     * @return \Controle\GetMyeBaySellingResponseType
     */
    public function GetMyeBaySelling(\Controle\GetMyeBaySellingRequestType $GetMyeBaySellingRequest) {
        return $this->__soapCall(
            'GetMyeBaySelling',
            array($GetMyeBaySellingRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetNotificationPreferences
     *
     * @param \Controle\GetNotificationPreferencesRequestType $GetNotificationPreferencesRequest
     * @return \Controle\GetNotificationPreferencesResponseType
     */
    public function GetNotificationPreferences(\Controle\GetNotificationPreferencesRequestType $GetNotificationPreferencesRequest) {
        return $this->__soapCall(
            'GetNotificationPreferences',
            array($GetNotificationPreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetNotificationsUsage
     *
     * @param \Controle\GetNotificationsUsageRequestType $GetNotificationsUsageRequest
     * @return \Controle\GetNotificationsUsageResponseType
     */
    public function GetNotificationsUsage(\Controle\GetNotificationsUsageRequestType $GetNotificationsUsageRequest) {
        return $this->__soapCall(
            'GetNotificationsUsage',
            array($GetNotificationsUsageRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetOrderTransactions
     *
     * @param \Controle\GetOrderTransactionsRequestType $GetOrderTransactionsRequest
     * @return \Controle\GetOrderTransactionsResponseType
     */
    public function GetOrderTransactions(\Controle\GetOrderTransactionsRequestType $GetOrderTransactionsRequest) {
        return $this->__soapCall(
            'GetOrderTransactions',
            array($GetOrderTransactionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetOrders
     *
     * @param \Controle\GetOrdersRequestType $GetOrdersRequest
     * @return \Controle\GetOrdersResponseType
     */
    public function GetOrders(\Controle\GetOrdersRequestType $GetOrdersRequest) {
        return $this->__soapCall(
            'GetOrders',
            array($GetOrdersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetPictureManagerDetails
     *
     * @param \Controle\GetPictureManagerDetailsRequestType $GetPictureManagerDetailsRequest
     * @return \Controle\GetPictureManagerDetailsResponseType
     */
    public function GetPictureManagerDetails(\Controle\GetPictureManagerDetailsRequestType $GetPictureManagerDetailsRequest) {
        return $this->__soapCall(
            'GetPictureManagerDetails',
            array($GetPictureManagerDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetPictureManagerOptions
     *
     * @param \Controle\GetPictureManagerOptionsRequestType $GetPictureManagerOptionsRequest
     * @return \Controle\GetPictureManagerOptionsResponseType
     */
    public function GetPictureManagerOptions(\Controle\GetPictureManagerOptionsRequestType $GetPictureManagerOptionsRequest) {
        return $this->__soapCall(
            'GetPictureManagerOptions',
            array($GetPictureManagerOptionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetPopularKeywords
     *
     * @param \Controle\GetPopularKeywordsRequestType $GetPopularKeywordsRequest
     * @return \Controle\GetPopularKeywordsResponseType
     */
    public function GetPopularKeywords(\Controle\GetPopularKeywordsRequestType $GetPopularKeywordsRequest) {
        return $this->__soapCall(
            'GetPopularKeywords',
            array($GetPopularKeywordsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductFamilyMembers
     *
     * @param \Controle\GetProductFamilyMembersRequestType $GetProductFamilyMembersRequest
     * @return \Controle\GetProductFamilyMembersResponseType
     */
    public function GetProductFamilyMembers(\Controle\GetProductFamilyMembersRequestType $GetProductFamilyMembersRequest) {
        return $this->__soapCall(
            'GetProductFamilyMembers',
            array($GetProductFamilyMembersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductFinder
     *
     * @param \Controle\GetProductFinderRequestType $GetProductFinderRequest
     * @return \Controle\GetProductFinderResponseType
     */
    public function GetProductFinder(\Controle\GetProductFinderRequestType $GetProductFinderRequest) {
        return $this->__soapCall(
            'GetProductFinder',
            array($GetProductFinderRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductFinderXSL
     *
     * @param \Controle\GetProductFinderXSLRequestType $GetProductFinderXSLRequest
     * @return \Controle\GetProductFinderXSLResponseType
     */
    public function GetProductFinderXSL(\Controle\GetProductFinderXSLRequestType $GetProductFinderXSLRequest) {
        return $this->__soapCall(
            'GetProductFinderXSL',
            array($GetProductFinderXSLRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductSearchPage
     *
     * @param \Controle\GetProductSearchPageRequestType $GetProductSearchPageRequest
     * @return \Controle\GetProductSearchPageResponseType
     */
    public function GetProductSearchPage(\Controle\GetProductSearchPageRequestType $GetProductSearchPageRequest) {
        return $this->__soapCall(
            'GetProductSearchPage',
            array($GetProductSearchPageRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductSearchResults
     *
     * @param \Controle\GetProductSearchResultsRequestType $GetProductSearchResultsRequest
     * @return \Controle\GetProductSearchResultsResponseType
     */
    public function GetProductSearchResults(\Controle\GetProductSearchResultsRequestType $GetProductSearchResultsRequest) {
        return $this->__soapCall(
            'GetProductSearchResults',
            array($GetProductSearchResultsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetProductSellingPages
     *
     * @param \Controle\GetProductSellingPagesRequestType $GetProductSellingPagesRequest
     * @return \Controle\GetProductSellingPagesResponseType
     */
    public function GetProductSellingPages(\Controle\GetProductSellingPagesRequestType $GetProductSellingPagesRequest) {
        return $this->__soapCall(
            'GetProductSellingPages',
            array($GetProductSellingPagesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetPromotionRules
     *
     * @param \Controle\GetPromotionRulesRequestType $GetPromotionRulesRequest
     * @return \Controle\GetPromotionRulesResponseType
     */
    public function GetPromotionRules(\Controle\GetPromotionRulesRequestType $GetPromotionRulesRequest) {
        return $this->__soapCall(
            'GetPromotionRules',
            array($GetPromotionRulesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetRecommendations
     *
     * @param \Controle\GetRecommendationsRequestType $GetRecommendationsRequest
     * @return \Controle\GetRecommendationsResponseType
     */
    public function GetRecommendations(\Controle\GetRecommendationsRequestType $GetRecommendationsRequest) {
        return $this->__soapCall(
            'GetRecommendations',
            array($GetRecommendationsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetReturnURL
     *
     * @param \Controle\GetReturnURLRequestType $GetReturnURLRequest
     * @return \Controle\GetReturnURLResponseType
     */
    public function GetReturnURL(\Controle\GetReturnURLRequestType $GetReturnURLRequest) {
        return $this->__soapCall(
            'GetReturnURL',
            array($GetReturnURLRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetRuName
     *
     * @param \Controle\GetRuNameRequestType $GetRuNameRequest
     * @return \Controle\GetRuNameResponseType
     */
    public function GetRuName(\Controle\GetRuNameRequestType $GetRuNameRequest) {
        return $this->__soapCall(
            'GetRuName',
            array($GetRuNameRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSearchResults
     *
     * @param \Controle\GetSearchResultsRequestType $GetSearchResultsRequest
     * @return \Controle\GetSearchResultsResponseType
     */
    public function GetSearchResults(\Controle\GetSearchResultsRequestType $GetSearchResultsRequest) {
        return $this->__soapCall(
            'GetSearchResults',
            array($GetSearchResultsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSearchResultsExpress
     *
     * @param \Controle\GetSearchResultsExpressRequestType $GetSearchResultsExpressRequest
     * @return \Controle\GetSearchResultsExpressResponseType
     */
    public function GetSearchResultsExpress(\Controle\GetSearchResultsExpressRequestType $GetSearchResultsExpressRequest) {
        return $this->__soapCall(
            'GetSearchResultsExpress',
            array($GetSearchResultsExpressRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSellerEvents
     *
     * @param \Controle\GetSellerEventsRequestType $GetSellerEventsRequest
     * @return \Controle\GetSellerEventsResponseType
     */
    public function GetSellerEvents(\Controle\GetSellerEventsRequestType $GetSellerEventsRequest) {
        return $this->__soapCall(
            'GetSellerEvents',
            array($GetSellerEventsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSellerList
     *
     * @param \Controle\GetSellerListRequestType $GetSellerListRequest
     * @return \Controle\GetSellerListResponseType
     */
    public function GetSellerList(\Controle\GetSellerListRequestType $GetSellerListRequest) {
        return $this->__soapCall(
            'GetSellerList',
            array($GetSellerListRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSellerPayments
     *
     * @param \Controle\GetSellerPaymentsRequestType $GetSellerPaymentsRequest
     * @return \Controle\GetSellerPaymentsResponseType
     */
    public function GetSellerPayments(\Controle\GetSellerPaymentsRequestType $GetSellerPaymentsRequest) {
        return $this->__soapCall(
            'GetSellerPayments',
            array($GetSellerPaymentsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSellerTransactions
     *
     * @param \Controle\GetSellerTransactionsRequestType $GetSellerTransactionsRequest
     * @return \Controle\GetSellerTransactionsResponseType
     */
    public function GetSellerTransactions(\Controle\GetSellerTransactionsRequestType $GetSellerTransactionsRequest) {
        return $this->__soapCall(
            'GetSellerTransactions',
            array($GetSellerTransactionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetStore
     *
     * @param \Controle\GetStoreRequestType $GetStoreRequest
     * @return \Controle\GetStoreResponseType
     */
    public function GetStore(\Controle\GetStoreRequestType $GetStoreRequest) {
        return $this->__soapCall(
            'GetStore',
            array($GetStoreRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetStoreCategoryUpdateStatus
     *
     * @param \Controle\GetStoreCategoryUpdateStatusRequestType $GetStoreCategoryUpdateStatusRequest
     * @return \Controle\GetStoreCategoryUpdateStatusResponseType
     */
    public function GetStoreCategoryUpdateStatus(\Controle\GetStoreCategoryUpdateStatusRequestType $GetStoreCategoryUpdateStatusRequest) {
        return $this->__soapCall(
            'GetStoreCategoryUpdateStatus',
            array($GetStoreCategoryUpdateStatusRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetStoreCustomPage
     *
     * @param \Controle\GetStoreCustomPageRequestType $GetStoreCustomPageRequest
     * @return \Controle\GetStoreCustomPageResponseType
     */
    public function GetStoreCustomPage(\Controle\GetStoreCustomPageRequestType $GetStoreCustomPageRequest) {
        return $this->__soapCall(
            'GetStoreCustomPage',
            array($GetStoreCustomPageRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetStoreOptions
     *
     * @param \Controle\GetStoreOptionsRequestType $GetStoreOptionsRequest
     * @return \Controle\GetStoreOptionsResponseType
     */
    public function GetStoreOptions(\Controle\GetStoreOptionsRequestType $GetStoreOptionsRequest) {
        return $this->__soapCall(
            'GetStoreOptions',
            array($GetStoreOptionsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetStorePreferences
     *
     * @param \Controle\GetStorePreferencesRequestType $GetStorePreferencesRequest
     * @return \Controle\GetStorePreferencesResponseType
     */
    public function GetStorePreferences(\Controle\GetStorePreferencesRequestType $GetStorePreferencesRequest) {
        return $this->__soapCall(
            'GetStorePreferences',
            array($GetStorePreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetSuggestedCategories
     *
     * @param \Controle\GetSuggestedCategoriesRequestType $GetSuggestedCategoriesRequest
     * @return \Controle\GetSuggestedCategoriesResponseType
     */
    public function GetSuggestedCategories(\Controle\GetSuggestedCategoriesRequestType $GetSuggestedCategoriesRequest) {
        return $this->__soapCall(
            'GetSuggestedCategories',
            array($GetSuggestedCategoriesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetTaxTable
     *
     * @param \Controle\GetTaxTableRequestType $GetTaxTableRequest
     * @return \Controle\GetTaxTableResponseType
     */
    public function GetTaxTable(\Controle\GetTaxTableRequestType $GetTaxTableRequest) {
        return $this->__soapCall(
            'GetTaxTable',
            array($GetTaxTableRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetUser
     *
     * @param \Controle\GetUserRequestType $GetUserRequest
     * @return \Controle\GetUserResponseType
     */
    public function GetUser(\Controle\GetUserRequestType $GetUserRequest) {
        return $this->__soapCall(
            'GetUser',
            array($GetUserRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetUserContactDetails
     *
     * @param \Controle\GetUserContactDetailsRequestType $GetUserContactDetailsRequest
     * @return \Controle\GetUserContactDetailsResponseType
     */
    public function GetUserContactDetails(\Controle\GetUserContactDetailsRequestType $GetUserContactDetailsRequest) {
        return $this->__soapCall(
            'GetUserContactDetails',
            array($GetUserContactDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetUserDisputes
     *
     * @param \Controle\GetUserDisputesRequestType $GetUserDisputesRequest
     * @return \Controle\GetUserDisputesResponseType
     */
    public function GetUserDisputes(\Controle\GetUserDisputesRequestType $GetUserDisputesRequest) {
        return $this->__soapCall(
            'GetUserDisputes',
            array($GetUserDisputesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetUserPreferences
     *
     * @param \Controle\GetUserPreferencesRequestType $GetUserPreferencesRequest
     * @return \Controle\GetUserPreferencesResponseType
     */
    public function GetUserPreferences(\Controle\GetUserPreferencesRequestType $GetUserPreferencesRequest) {
        return $this->__soapCall(
            'GetUserPreferences',
            array($GetUserPreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetVeROReasonCodeDetails
     *
     * @param \Controle\GetVeROReasonCodeDetailsRequestType $GetVeROReasonCodeDetailsRequest
     * @return \Controle\GetVeROReasonCodeDetailsResponseType
     */
    public function GetVeROReasonCodeDetails(\Controle\GetVeROReasonCodeDetailsRequestType $GetVeROReasonCodeDetailsRequest) {
        return $this->__soapCall(
            'GetVeROReasonCodeDetails',
            array($GetVeROReasonCodeDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetVeROReportStatus
     *
     * @param \Controle\GetVeROReportStatusRequestType $GetVeROReportStatusRequest
     * @return \Controle\GetVeROReportStatusResponseType
     */
    public function GetVeROReportStatus(\Controle\GetVeROReportStatusRequestType $GetVeROReportStatusRequest) {
        return $this->__soapCall(
            'GetVeROReportStatus',
            array($GetVeROReportStatusRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetWantItNowPost
     *
     * @param \Controle\GetWantItNowPostRequestType $GetWantItNowPostRequest
     * @return \Controle\GetWantItNowPostResponseType
     */
    public function GetWantItNowPost(\Controle\GetWantItNowPostRequestType $GetWantItNowPostRequest) {
        return $this->__soapCall(
            'GetWantItNowPost',
            array($GetWantItNowPostRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GetWantItNowSearchResults
     *
     * @param \Controle\GetWantItNowSearchResultsRequestType $GetWantItNowSearchResultsRequest
     * @return \Controle\GetWantItNowSearchResultsResponseType
     */
    public function GetWantItNowSearchResults(\Controle\GetWantItNowSearchResultsRequestType $GetWantItNowSearchResultsRequest) {
        return $this->__soapCall(
            'GetWantItNowSearchResults',
            array($GetWantItNowSearchResultsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GeteBayDetails
     *
     * @param \Controle\GeteBayDetailsRequestType $GeteBayDetailsRequest
     * @return \Controle\GeteBayDetailsResponseType
     */
    public function GeteBayDetails(\Controle\GeteBayDetailsRequestType $GeteBayDetailsRequest) {
        return $this->__soapCall(
            'GeteBayDetails',
            array($GeteBayDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * GeteBayOfficialTime
     *
     * @param \Controle\GeteBayOfficialTimeRequestType $GeteBayOfficialTimeRequest
     * @return \Controle\GeteBayOfficialTimeResponseType
     */
    public function GeteBayOfficialTime(\Controle\GeteBayOfficialTimeRequestType $GeteBayOfficialTimeRequest) {
        return $this->__soapCall(
            'GeteBayOfficialTime',
            array($GeteBayOfficialTimeRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * IssueRefund
     *
     * @param \Controle\IssueRefundRequestType $IssueRefundRequest
     * @return \Controle\IssueRefundResponseType
     */
    public function IssueRefund(\Controle\IssueRefundRequestType $IssueRefundRequest) {
        return $this->__soapCall(
            'IssueRefund',
            array($IssueRefundRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * LeaveFeedback
     *
     * @param \Controle\LeaveFeedbackRequestType $LeaveFeedbackRequest
     * @return \Controle\LeaveFeedbackResponseType
     */
    public function LeaveFeedback(\Controle\LeaveFeedbackRequestType $LeaveFeedbackRequest) {
        return $this->__soapCall(
            'LeaveFeedback',
            array($LeaveFeedbackRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * PlaceOffer
     *
     * @param \Controle\PlaceOfferRequestType $PlaceOfferRequest
     * @return \Controle\PlaceOfferResponseType
     */
    public function PlaceOffer(\Controle\PlaceOfferRequestType $PlaceOfferRequest) {
        return $this->__soapCall(
            'PlaceOffer',
            array($PlaceOfferRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * RelistItem
     *
     * @param \Controle\RelistItemRequestType $RelistItemRequest
     * @return \Controle\RelistItemResponseType
     */
    public function RelistItem(\Controle\RelistItemRequestType $RelistItemRequest) {
        return $this->__soapCall(
            'RelistItem',
            array($RelistItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * RemoveFromWatchList
     *
     * @param \Controle\RemoveFromWatchListRequestType $RemoveFromWatchListRequest
     * @return \Controle\RemoveFromWatchListResponseType
     */
    public function RemoveFromWatchList(\Controle\RemoveFromWatchListRequestType $RemoveFromWatchListRequest) {
        return $this->__soapCall(
            'RemoveFromWatchList',
            array($RemoveFromWatchListRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * RespondToBestOffer
     *
     * @param \Controle\RespondToBestOfferRequestType $RespondToBestOfferRequest
     * @return \Controle\RespondToBestOfferResponseType
     */
    public function RespondToBestOffer(\Controle\RespondToBestOfferRequestType $RespondToBestOfferRequest) {
        return $this->__soapCall(
            'RespondToBestOffer',
            array($RespondToBestOfferRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * RespondToFeedback
     *
     * @param \Controle\RespondToFeedbackRequestType $RespondToFeedbackRequest
     * @return \Controle\RespondToFeedbackResponseType
     */
    public function RespondToFeedback(\Controle\RespondToFeedbackRequestType $RespondToFeedbackRequest) {
        return $this->__soapCall(
            'RespondToFeedback',
            array($RespondToFeedbackRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * RespondToWantItNowPost
     *
     * @param \Controle\RespondToWantItNowPostRequestType $RespondToWantItNowPostRequest
     * @return \Controle\RespondToWantItNowPostResponseType
     */
    public function RespondToWantItNowPost(\Controle\RespondToWantItNowPostRequestType $RespondToWantItNowPostRequest) {
        return $this->__soapCall(
            'RespondToWantItNowPost',
            array($RespondToWantItNowPostRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ReviseCheckoutStatus
     *
     * @param \Controle\ReviseCheckoutStatusRequestType $ReviseCheckoutStatusRequest
     * @return \Controle\ReviseCheckoutStatusResponseType
     */
    public function ReviseCheckoutStatus(\Controle\ReviseCheckoutStatusRequestType $ReviseCheckoutStatusRequest) {
        return $this->__soapCall(
            'ReviseCheckoutStatus',
            array($ReviseCheckoutStatusRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ReviseItem
     *
     * @param \Controle\ReviseItemRequestType $ReviseItemRequest
     * @return \Controle\ReviseItemResponseType
     */
    public function ReviseItem(\Controle\ReviseItemRequestType $ReviseItemRequest) {
        return $this->__soapCall(
            'ReviseItem',
            array($ReviseItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ReviseLiveAuctionItem
     *
     * @param \Controle\ReviseLiveAuctionItemRequestType $ReviseLiveAuctionItemRequest
     * @return \Controle\ReviseLiveAuctionItemResponseType
     */
    public function ReviseLiveAuctionItem(\Controle\ReviseLiveAuctionItemRequestType $ReviseLiveAuctionItemRequest) {
        return $this->__soapCall(
            'ReviseLiveAuctionItem',
            array($ReviseLiveAuctionItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ReviseMyMessages
     *
     * @param \Controle\ReviseMyMessagesRequestType $ReviseMyMessagesRequest
     * @return \Controle\ReviseMyMessagesResponseType
     */
    public function ReviseMyMessages(\Controle\ReviseMyMessagesRequestType $ReviseMyMessagesRequest) {
        return $this->__soapCall(
            'ReviseMyMessages',
            array($ReviseMyMessagesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ReviseMyMessagesFolders
     *
     * @param \Controle\ReviseMyMessagesFoldersRequestType $ReviseMyMessagesFoldersRequest
     * @return \Controle\ReviseMyMessagesFoldersResponseType
     */
    public function ReviseMyMessagesFolders(\Controle\ReviseMyMessagesFoldersRequestType $ReviseMyMessagesFoldersRequest) {
        return $this->__soapCall(
            'ReviseMyMessagesFolders',
            array($ReviseMyMessagesFoldersRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SellerReverseDispute
     *
     * @param \Controle\SellerReverseDisputeRequestType $SellerReverseDisputeRequest
     * @return \Controle\SellerReverseDisputeResponseType
     */
    public function SellerReverseDispute(\Controle\SellerReverseDisputeRequestType $SellerReverseDisputeRequest) {
        return $this->__soapCall(
            'SellerReverseDispute',
            array($SellerReverseDisputeRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SendInvoice
     *
     * @param \Controle\SendInvoiceRequestType $SendInvoiceRequest
     * @return \Controle\SendInvoiceResponseType
     */
    public function SendInvoice(\Controle\SendInvoiceRequestType $SendInvoiceRequest) {
        return $this->__soapCall(
            'SendInvoice',
            array($SendInvoiceRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetNotificationPreferences
     *
     * @param \Controle\SetNotificationPreferencesRequestType $SetNotificationPreferencesRequest
     * @return \Controle\SetNotificationPreferencesResponseType
     */
    public function SetNotificationPreferences(\Controle\SetNotificationPreferencesRequestType $SetNotificationPreferencesRequest) {
        return $this->__soapCall(
            'SetNotificationPreferences',
            array($SetNotificationPreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetPictureManagerDetails
     *
     * @param \Controle\SetPictureManagerDetailsRequestType $SetPictureManagerDetailsRequest
     * @return \Controle\SetPictureManagerDetailsResponseType
     */
    public function SetPictureManagerDetails(\Controle\SetPictureManagerDetailsRequestType $SetPictureManagerDetailsRequest) {
        return $this->__soapCall(
            'SetPictureManagerDetails',
            array($SetPictureManagerDetailsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetPromotionRules
     *
     * @param \Controle\SetPromotionRulesRequestType $SetPromotionRulesRequest
     * @return \Controle\SetPromotionRulesResponseType
     */
    public function SetPromotionRules(\Controle\SetPromotionRulesRequestType $SetPromotionRulesRequest) {
        return $this->__soapCall(
            'SetPromotionRules',
            array($SetPromotionRulesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetReturnURL
     *
     * @param \Controle\SetReturnURLRequestType $SetReturnURLRequest
     * @return \Controle\SetReturnURLResponseType
     */
    public function SetReturnURL(\Controle\SetReturnURLRequestType $SetReturnURLRequest) {
        return $this->__soapCall(
            'SetReturnURL',
            array($SetReturnURLRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetStore
     *
     * @param \Controle\SetStoreRequestType $SetStoreRequest
     * @return \Controle\SetStoreResponseType
     */
    public function SetStore(\Controle\SetStoreRequestType $SetStoreRequest) {
        return $this->__soapCall(
            'SetStore',
            array($SetStoreRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetStoreCategories
     *
     * @param \Controle\SetStoreCategoriesRequestType $SetStoreCategoriesRequest
     * @return \Controle\SetStoreCategoriesResponseType
     */
    public function SetStoreCategories(\Controle\SetStoreCategoriesRequestType $SetStoreCategoriesRequest) {
        return $this->__soapCall(
            'SetStoreCategories',
            array($SetStoreCategoriesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetStoreCustomPage
     *
     * @param \Controle\SetStoreCustomPageRequestType $SetStoreCustomPageRequest
     * @return \Controle\SetStoreCustomPageResponseType
     */
    public function SetStoreCustomPage(\Controle\SetStoreCustomPageRequestType $SetStoreCustomPageRequest) {
        return $this->__soapCall(
            'SetStoreCustomPage',
            array($SetStoreCustomPageRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetStorePreferences
     *
     * @param \Controle\SetStorePreferencesRequestType $SetStorePreferencesRequest
     * @return \Controle\SetStorePreferencesResponseType
     */
    public function SetStorePreferences(\Controle\SetStorePreferencesRequestType $SetStorePreferencesRequest) {
        return $this->__soapCall(
            'SetStorePreferences',
            array($SetStorePreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetTaxTable
     *
     * @param \Controle\SetTaxTableRequestType $SetTaxTableRequest
     * @return \Controle\SetTaxTableResponseType
     */
    public function SetTaxTable(\Controle\SetTaxTableRequestType $SetTaxTableRequest) {
        return $this->__soapCall(
            'SetTaxTable',
            array($SetTaxTableRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetUserNotes
     *
     * @param \Controle\SetUserNotesRequestType $SetUserNotesRequest
     * @return \Controle\SetUserNotesResponseType
     */
    public function SetUserNotes(\Controle\SetUserNotesRequestType $SetUserNotesRequest) {
        return $this->__soapCall(
            'SetUserNotes',
            array($SetUserNotesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * SetUserPreferences
     *
     * @param \Controle\SetUserPreferencesRequestType $SetUserPreferencesRequest
     * @return \Controle\SetUserPreferencesResponseType
     */
    public function SetUserPreferences(\Controle\SetUserPreferencesRequestType $SetUserPreferencesRequest) {
        return $this->__soapCall(
            'SetUserPreferences',
            array($SetUserPreferencesRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ValidateChallengeInput
     *
     * @param \Controle\ValidateChallengeInputRequestType $ValidateChallengeInputRequest
     * @return \Controle\ValidateChallengeInputResponseType
     */
    public function ValidateChallengeInput(\Controle\ValidateChallengeInputRequestType $ValidateChallengeInputRequest) {
        return $this->__soapCall(
            'ValidateChallengeInput',
            array($ValidateChallengeInputRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * ValidateTestUserRegistration
     *
     * @param \Controle\ValidateTestUserRegistrationRequestType $ValidateTestUserRegistrationRequest
     * @return \Controle\ValidateTestUserRegistrationResponseType
     */
    public function ValidateTestUserRegistration(\Controle\ValidateTestUserRegistrationRequestType $ValidateTestUserRegistrationRequest) {
        return $this->__soapCall(
            'ValidateTestUserRegistration',
            array($ValidateTestUserRegistrationRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * VeROReportItems
     *
     * @param \Controle\VeROReportItemsRequestType $VeROReportItemsRequest
     * @return \Controle\VeROReportItemsResponseType
     */
    public function VeROReportItems(\Controle\VeROReportItemsRequestType $VeROReportItemsRequest) {
        return $this->__soapCall(
            'VeROReportItems',
            array($VeROReportItemsRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * VerifyAddItem
     *
     * @param \Controle\VerifyAddItemRequestType $VerifyAddItemRequest
     * @return \Controle\VerifyAddItemResponseType
     */
    public function VerifyAddItem(\Controle\VerifyAddItemRequestType $VerifyAddItemRequest) {
        return $this->__soapCall(
            'VerifyAddItem',
            array($VerifyAddItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }

    /**
     * VerifyAddSecondChanceItem
     *
     * @param \Controle\VerifyAddSecondChanceItemRequestType $VerifyAddSecondChanceItemRequest
     * @return \Controle\VerifyAddSecondChanceItemResponseType
     */
    public function VerifyAddSecondChanceItem(\Controle\VerifyAddSecondChanceItemRequestType $VerifyAddSecondChanceItemRequest) {
        return $this->__soapCall(
            'VerifyAddSecondChanceItem',
            array($VerifyAddSecondChanceItemRequest),
            array('uri'=>'urn:ebay:apis:eBLBaseComponents')
        );
    }
}

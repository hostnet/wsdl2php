<?php
		parent::__construct($wsdl ? $wsdl : self::WSDL_FILE, $options);
	}

	/**
	 * AddDispute
	 *
	 * @param \Controle\sub1\sub2\AddDisputeRequestType $AddDisputeRequest
	 * @return \Controle\sub1\sub2\AddDisputeResponseType
	 */
	public function AddDispute(\Controle\sub1\sub2\AddDisputeRequestType $AddDisputeRequest) {
		return $this->__soapCall(
			'AddDispute',
			array($AddDisputeRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddDisputeResponse
	 *
	 * @param \Controle\sub1\sub2\AddDisputeResponseRequestType $AddDisputeResponseRequest
	 * @return \Controle\sub1\sub2\AddDisputeResponseResponseType
	 */
	public function AddDisputeResponse(\Controle\sub1\sub2\AddDisputeResponseRequestType $AddDisputeResponseRequest) {
		return $this->__soapCall(
			'AddDisputeResponse',
			array($AddDisputeResponseRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddItem
	 *
	 * @param \Controle\sub1\sub2\AddItemRequestType $AddItemRequest
	 * @return \Controle\sub1\sub2\AddItemResponseType
	 */
	public function AddItem(\Controle\sub1\sub2\AddItemRequestType $AddItemRequest) {
		return $this->__soapCall(
			'AddItem',
			array($AddItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddLiveAuctionItem
	 *
	 * @param \Controle\sub1\sub2\AddLiveAuctionItemRequestType $AddLiveAuctionItemRequest
	 * @return \Controle\sub1\sub2\AddLiveAuctionItemResponseType
	 */
	public function AddLiveAuctionItem(\Controle\sub1\sub2\AddLiveAuctionItemRequestType $AddLiveAuctionItemRequest) {
		return $this->__soapCall(
			'AddLiveAuctionItem',
			array($AddLiveAuctionItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddMemberMessageAAQToPartner
	 *
	 * @param \Controle\sub1\sub2\AddMemberMessageAAQToPartnerRequestType $AddMemberMessageAAQToPartnerRequest
	 * @return \Controle\sub1\sub2\AddMemberMessageAAQToPartnerResponseType
	 */
	public function AddMemberMessageAAQToPartner(\Controle\sub1\sub2\AddMemberMessageAAQToPartnerRequestType $AddMemberMessageAAQToPartnerRequest) {
		return $this->__soapCall(
			'AddMemberMessageAAQToPartner',
			array($AddMemberMessageAAQToPartnerRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddMemberMessageRTQ
	 *
	 * @param \Controle\sub1\sub2\AddMemberMessageRTQRequestType $AddMemberMessageRTQRequest
	 * @return \Controle\sub1\sub2\AddMemberMessageRTQResponseType
	 */
	public function AddMemberMessageRTQ(\Controle\sub1\sub2\AddMemberMessageRTQRequestType $AddMemberMessageRTQRequest) {
		return $this->__soapCall(
			'AddMemberMessageRTQ',
			array($AddMemberMessageRTQRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddMemberMessagesAAQToBidder
	 *
	 * @param \Controle\sub1\sub2\AddMemberMessagesAAQToBidderRequestType $AddMemberMessagesAAQToBidderRequest
	 * @return \Controle\sub1\sub2\AddMemberMessagesAAQToBidderResponseType
	 */
	public function AddMemberMessagesAAQToBidder(\Controle\sub1\sub2\AddMemberMessagesAAQToBidderRequestType $AddMemberMessagesAAQToBidderRequest) {
		return $this->__soapCall(
			'AddMemberMessagesAAQToBidder',
			array($AddMemberMessagesAAQToBidderRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddOrder
	 *
	 * @param \Controle\sub1\sub2\AddOrderRequestType $AddOrderRequest
	 * @return \Controle\sub1\sub2\AddOrderResponseType
	 */
	public function AddOrder(\Controle\sub1\sub2\AddOrderRequestType $AddOrderRequest) {
		return $this->__soapCall(
			'AddOrder',
			array($AddOrderRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddSecondChanceItem
	 *
	 * @param \Controle\sub1\sub2\AddSecondChanceItemRequestType $AddSecondChanceItemRequest
	 * @return \Controle\sub1\sub2\AddSecondChanceItemResponseType
	 */
	public function AddSecondChanceItem(\Controle\sub1\sub2\AddSecondChanceItemRequestType $AddSecondChanceItemRequest) {
		return $this->__soapCall(
			'AddSecondChanceItem',
			array($AddSecondChanceItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddToItemDescription
	 *
	 * @param \Controle\sub1\sub2\AddToItemDescriptionRequestType $AddToItemDescriptionRequest
	 * @return \Controle\sub1\sub2\AddToItemDescriptionResponseType
	 */
	public function AddToItemDescription(\Controle\sub1\sub2\AddToItemDescriptionRequestType $AddToItemDescriptionRequest) {
		return $this->__soapCall(
			'AddToItemDescription',
			array($AddToItemDescriptionRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddToWatchList
	 *
	 * @param \Controle\sub1\sub2\AddToWatchListRequestType $AddToWatchListRequest
	 * @return \Controle\sub1\sub2\AddToWatchListResponseType
	 */
	public function AddToWatchList(\Controle\sub1\sub2\AddToWatchListRequestType $AddToWatchListRequest) {
		return $this->__soapCall(
			'AddToWatchList',
			array($AddToWatchListRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * AddTransactionConfirmationItem
	 *
	 * @param \Controle\sub1\sub2\AddTransactionConfirmationItemRequestType $AddTransactionConfirmationItemRequest
	 * @return \Controle\sub1\sub2\AddTransactionConfirmationItemResponseType
	 */
	public function AddTransactionConfirmationItem(\Controle\sub1\sub2\AddTransactionConfirmationItemRequestType $AddTransactionConfirmationItemRequest) {
		return $this->__soapCall(
			'AddTransactionConfirmationItem',
			array($AddTransactionConfirmationItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * ApproveLiveAuctionBidders
	 *
	 * @param \Controle\sub1\sub2\ApproveLiveAuctionBiddersRequestType $ApproveLiveAuctionBiddersRequest
	 * @return \Controle\sub1\sub2\ApproveLiveAuctionBiddersResponseType
	 */
	public function ApproveLiveAuctionBidders(\Controle\sub1\sub2\ApproveLiveAuctionBiddersRequestType $ApproveLiveAuctionBiddersRequest) {
		return $this->__soapCall(
			'ApproveLiveAuctionBidders',
			array($ApproveLiveAuctionBiddersRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * CompleteSale
	 *
	 * @param \Controle\sub1\sub2\CompleteSaleRequestType $CompleteSaleRequest
	 * @return \Controle\sub1\sub2\CompleteSaleResponseType
	 */
	public function CompleteSale(\Controle\sub1\sub2\CompleteSaleRequestType $CompleteSaleRequest) {
		return $this->__soapCall(
			'CompleteSale',
			array($CompleteSaleRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * DeleteMyMessages
	 *
	 * @param \Controle\sub1\sub2\DeleteMyMessagesRequestType $DeleteMyMessagesRequest
	 * @return \Controle\sub1\sub2\DeleteMyMessagesResponseType
	 */
	public function DeleteMyMessages(\Controle\sub1\sub2\DeleteMyMessagesRequestType $DeleteMyMessagesRequest) {
		return $this->__soapCall(
			'DeleteMyMessages',
			array($DeleteMyMessagesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * EndItem
	 *
	 * @param \Controle\sub1\sub2\EndItemRequestType $EndItemRequest
	 * @return \Controle\sub1\sub2\EndItemResponseType
	 */
	public function EndItem(\Controle\sub1\sub2\EndItemRequestType $EndItemRequest) {
		return $this->__soapCall(
			'EndItem',
			array($EndItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * FetchToken
	 *
	 * @param \Controle\sub1\sub2\FetchTokenRequestType $FetchTokenRequest
	 * @return \Controle\sub1\sub2\FetchTokenResponseType
	 */
	public function FetchToken(\Controle\sub1\sub2\FetchTokenRequestType $FetchTokenRequest) {
		return $this->__soapCall(
			'FetchToken',
			array($FetchTokenRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetAccount
	 *
	 * @param \Controle\sub1\sub2\GetAccountRequestType $GetAccountRequest
	 * @return \Controle\sub1\sub2\GetAccountResponseType
	 */
	public function GetAccount(\Controle\sub1\sub2\GetAccountRequestType $GetAccountRequest) {
		return $this->__soapCall(
			'GetAccount',
			array($GetAccountRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetAdFormatLeads
	 *
	 * @param \Controle\sub1\sub2\GetAdFormatLeadsRequestType $GetAdFormatLeadsRequest
	 * @return \Controle\sub1\sub2\GetAdFormatLeadsResponseType
	 */
	public function GetAdFormatLeads(\Controle\sub1\sub2\GetAdFormatLeadsRequestType $GetAdFormatLeadsRequest) {
		return $this->__soapCall(
			'GetAdFormatLeads',
			array($GetAdFormatLeadsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetAllBidders
	 *
	 * @param \Controle\sub1\sub2\GetAllBiddersRequestType $GetAllBiddersRequest
	 * @return \Controle\sub1\sub2\GetAllBiddersResponseType
	 */
	public function GetAllBidders(\Controle\sub1\sub2\GetAllBiddersRequestType $GetAllBiddersRequest) {
		return $this->__soapCall(
			'GetAllBidders',
			array($GetAllBiddersRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetApiAccessRules
	 *
	 * @param \Controle\sub1\sub2\GetApiAccessRulesRequestType $GetApiAccessRulesRequest
	 * @return \Controle\sub1\sub2\GetApiAccessRulesResponseType
	 */
	public function GetApiAccessRules(\Controle\sub1\sub2\GetApiAccessRulesRequestType $GetApiAccessRulesRequest) {
		return $this->__soapCall(
			'GetApiAccessRules',
			array($GetApiAccessRulesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetAttributesCS
	 *
	 * @param \Controle\sub1\sub2\GetAttributesCSRequestType $GetAttributesCSRequest
	 * @return \Controle\sub1\sub2\GetAttributesCSResponseType
	 */
	public function GetAttributesCS(\Controle\sub1\sub2\GetAttributesCSRequestType $GetAttributesCSRequest) {
		return $this->__soapCall(
			'GetAttributesCS',
			array($GetAttributesCSRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetAttributesXSL
	 *
	 * @param \Controle\sub1\sub2\GetAttributesXSLRequestType $GetAttributesXSLRequest
	 * @return \Controle\sub1\sub2\GetAttributesXSLResponseType
	 */
	public function GetAttributesXSL(\Controle\sub1\sub2\GetAttributesXSLRequestType $GetAttributesXSLRequest) {
		return $this->__soapCall(
			'GetAttributesXSL',
			array($GetAttributesXSLRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetBestOffers
	 *
	 * @param \Controle\sub1\sub2\GetBestOffersRequestType $GetBestOffersRequest
	 * @return \Controle\sub1\sub2\GetBestOffersResponseType
	 */
	public function GetBestOffers(\Controle\sub1\sub2\GetBestOffersRequestType $GetBestOffersRequest) {
		return $this->__soapCall(
			'GetBestOffers',
			array($GetBestOffersRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetBidderList
	 *
	 * @param \Controle\sub1\sub2\GetBidderListRequestType $GetBidderListRequest
	 * @return \Controle\sub1\sub2\GetBidderListResponseType
	 */
	public function GetBidderList(\Controle\sub1\sub2\GetBidderListRequestType $GetBidderListRequest) {
		return $this->__soapCall(
			'GetBidderList',
			array($GetBidderListRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetCategories
	 *
	 * @param \Controle\sub1\sub2\GetCategoriesRequestType $GetCategoriesRequest
	 * @return \Controle\sub1\sub2\GetCategoriesResponseType
	 */
	public function GetCategories(\Controle\sub1\sub2\GetCategoriesRequestType $GetCategoriesRequest) {
		return $this->__soapCall(
			'GetCategories',
			array($GetCategoriesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetCategory2CS
	 *
	 * @param \Controle\sub1\sub2\GetCategory2CSRequestType $GetCategory2CSRequest
	 * @return \Controle\sub1\sub2\GetCategory2CSResponseType
	 */
	public function GetCategory2CS(\Controle\sub1\sub2\GetCategory2CSRequestType $GetCategory2CSRequest) {
		return $this->__soapCall(
			'GetCategory2CS',
			array($GetCategory2CSRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetCategory2FinanceOffer
	 *
	 * @param \Controle\sub1\sub2\GetCategory2FinanceOfferRequestType $GetCategory2FinanceOfferRequest
	 * @return \Controle\sub1\sub2\GetCategory2FinanceOfferResponseType
	 */
	public function GetCategory2FinanceOffer(\Controle\sub1\sub2\GetCategory2FinanceOfferRequestType $GetCategory2FinanceOfferRequest) {
		return $this->__soapCall(
			'GetCategory2FinanceOffer',
			array($GetCategory2FinanceOfferRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetCategoryFeatures
	 *
	 * @param \Controle\sub1\sub2\GetCategoryFeaturesRequestType $GetCategoryFeaturesRequest
	 * @return \Controle\sub1\sub2\GetCategoryFeaturesResponseType
	 */
	public function GetCategoryFeatures(\Controle\sub1\sub2\GetCategoryFeaturesRequestType $GetCategoryFeaturesRequest) {
		return $this->__soapCall(
			'GetCategoryFeatures',
			array($GetCategoryFeaturesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetCategoryListings
	 *
	 * @param \Controle\sub1\sub2\GetCategoryListingsRequestType $GetCategoryListingsRequest
	 * @return \Controle\sub1\sub2\GetCategoryListingsResponseType
	 */
	public function GetCategoryListings(\Controle\sub1\sub2\GetCategoryListingsRequestType $GetCategoryListingsRequest) {
		return $this->__soapCall(
			'GetCategoryListings',
			array($GetCategoryListingsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetCategoryMappings
	 *
	 * @param \Controle\sub1\sub2\GetCategoryMappingsRequestType $GetCategoryMappingsRequest
	 * @return \Controle\sub1\sub2\GetCategoryMappingsResponseType
	 */
	public function GetCategoryMappings(\Controle\sub1\sub2\GetCategoryMappingsRequestType $GetCategoryMappingsRequest) {
		return $this->__soapCall(
			'GetCategoryMappings',
			array($GetCategoryMappingsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetChallengeToken
	 *
	 * @param \Controle\sub1\sub2\GetChallengeTokenRequestType $GetChallengeTokenRequest
	 * @return \Controle\sub1\sub2\GetChallengeTokenResponseType
	 */
	public function GetChallengeToken(\Controle\sub1\sub2\GetChallengeTokenRequestType $GetChallengeTokenRequest) {
		return $this->__soapCall(
			'GetChallengeToken',
			array($GetChallengeTokenRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetCharities
	 *
	 * @param \Controle\sub1\sub2\GetCharitiesRequestType $GetCharitiesRequest
	 * @return \Controle\sub1\sub2\GetCharitiesResponseType
	 */
	public function GetCharities(\Controle\sub1\sub2\GetCharitiesRequestType $GetCharitiesRequest) {
		return $this->__soapCall(
			'GetCharities',
			array($GetCharitiesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetContextualKeywords
	 *
	 * @param \Controle\sub1\sub2\GetContextualKeywordsRequestType $GetContextualKeywordsRequest
	 * @return \Controle\sub1\sub2\GetContextualKeywordsResponseType
	 */
	public function GetContextualKeywords(\Controle\sub1\sub2\GetContextualKeywordsRequestType $GetContextualKeywordsRequest) {
		return $this->__soapCall(
			'GetContextualKeywords',
			array($GetContextualKeywordsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetCrossPromotions
	 *
	 * @param \Controle\sub1\sub2\GetCrossPromotionsRequestType $GetCrossPromotionsRequest
	 * @return \Controle\sub1\sub2\GetCrossPromotionsResponseType
	 */
	public function GetCrossPromotions(\Controle\sub1\sub2\GetCrossPromotionsRequestType $GetCrossPromotionsRequest) {
		return $this->__soapCall(
			'GetCrossPromotions',
			array($GetCrossPromotionsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetDescriptionTemplates
	 *
	 * @param \Controle\sub1\sub2\GetDescriptionTemplatesRequestType $GetDescriptionTemplatesRequest
	 * @return \Controle\sub1\sub2\GetDescriptionTemplatesResponseType
	 */
	public function GetDescriptionTemplates(\Controle\sub1\sub2\GetDescriptionTemplatesRequestType $GetDescriptionTemplatesRequest) {
		return $this->__soapCall(
			'GetDescriptionTemplates',
			array($GetDescriptionTemplatesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetDispute
	 *
	 * @param \Controle\sub1\sub2\GetDisputeRequestType $GetDisputeRequest
	 * @return \Controle\sub1\sub2\GetDisputeResponseType
	 */
	public function GetDispute(\Controle\sub1\sub2\GetDisputeRequestType $GetDisputeRequest) {
		return $this->__soapCall(
			'GetDispute',
			array($GetDisputeRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetFeedback
	 *
	 * @param \Controle\sub1\sub2\GetFeedbackRequestType $GetFeedbackRequest
	 * @return \Controle\sub1\sub2\GetFeedbackResponseType
	 */
	public function GetFeedback(\Controle\sub1\sub2\GetFeedbackRequestType $GetFeedbackRequest) {
		return $this->__soapCall(
			'GetFeedback',
			array($GetFeedbackRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetFinanceOffers
	 *
	 * @param \Controle\sub1\sub2\GetFinanceOffersRequestType $GetFinanceOffersRequest
	 * @return \Controle\sub1\sub2\GetFinanceOffersResponseType
	 */
	public function GetFinanceOffers(\Controle\sub1\sub2\GetFinanceOffersRequestType $GetFinanceOffersRequest) {
		return $this->__soapCall(
			'GetFinanceOffers',
			array($GetFinanceOffersRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetHighBidders
	 *
	 * @param \Controle\sub1\sub2\GetHighBiddersRequestType $GetHighBiddersRequest
	 * @return \Controle\sub1\sub2\GetHighBiddersResponseType
	 */
	public function GetHighBidders(\Controle\sub1\sub2\GetHighBiddersRequestType $GetHighBiddersRequest) {
		return $this->__soapCall(
			'GetHighBidders',
			array($GetHighBiddersRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetItem
	 *
	 * @param \Controle\sub1\sub2\GetItemRequestType $GetItemRequest
	 * @return \Controle\sub1\sub2\GetItemResponseType
	 */
	public function GetItem(\Controle\sub1\sub2\GetItemRequestType $GetItemRequest) {
		return $this->__soapCall(
			'GetItem',
			array($GetItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetItemRecommendations
	 *
	 * @param \Controle\sub1\sub2\GetItemRecommendationsRequestType $GetItemRecommendationsRequest
	 * @return \Controle\sub1\sub2\GetItemRecommendationsResponseType
	 */
	public function GetItemRecommendations(\Controle\sub1\sub2\GetItemRecommendationsRequestType $GetItemRecommendationsRequest) {
		return $this->__soapCall(
			'GetItemRecommendations',
			array($GetItemRecommendationsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetItemShipping
	 *
	 * @param \Controle\sub1\sub2\GetItemShippingRequestType $GetItemShippingRequest
	 * @return \Controle\sub1\sub2\GetItemShippingResponseType
	 */
	public function GetItemShipping(\Controle\sub1\sub2\GetItemShippingRequestType $GetItemShippingRequest) {
		return $this->__soapCall(
			'GetItemShipping',
			array($GetItemShippingRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetItemTransactions
	 *
	 * @param \Controle\sub1\sub2\GetItemTransactionsRequestType $GetItemTransactionsRequest
	 * @return \Controle\sub1\sub2\GetItemTransactionsResponseType
	 */
	public function GetItemTransactions(\Controle\sub1\sub2\GetItemTransactionsRequestType $GetItemTransactionsRequest) {
		return $this->__soapCall(
			'GetItemTransactions',
			array($GetItemTransactionsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetItemsAwaitingFeedback
	 *
	 * @param \Controle\sub1\sub2\GetItemsAwaitingFeedbackRequestType $GetItemsAwaitingFeedbackRequest
	 * @return \Controle\sub1\sub2\GetItemsAwaitingFeedbackResponseType
	 */
	public function GetItemsAwaitingFeedback(\Controle\sub1\sub2\GetItemsAwaitingFeedbackRequestType $GetItemsAwaitingFeedbackRequest) {
		return $this->__soapCall(
			'GetItemsAwaitingFeedback',
			array($GetItemsAwaitingFeedbackRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetLiveAuctionBidders
	 *
	 * @param \Controle\sub1\sub2\GetLiveAuctionBiddersRequestType $GetLiveAuctionBiddersRequest
	 * @return \Controle\sub1\sub2\GetLiveAuctionBiddersResponseType
	 */
	public function GetLiveAuctionBidders(\Controle\sub1\sub2\GetLiveAuctionBiddersRequestType $GetLiveAuctionBiddersRequest) {
		return $this->__soapCall(
			'GetLiveAuctionBidders',
			array($GetLiveAuctionBiddersRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetLiveAuctionCatalogDetails
	 *
	 * @param \Controle\sub1\sub2\GetLiveAuctionCatalogDetailsRequestType $GetLiveAuctionCatalogDetailsRequest
	 * @return \Controle\sub1\sub2\GetLiveAuctionCatalogDetailsResponseType
	 */
	public function GetLiveAuctionCatalogDetails(\Controle\sub1\sub2\GetLiveAuctionCatalogDetailsRequestType $GetLiveAuctionCatalogDetailsRequest) {
		return $this->__soapCall(
			'GetLiveAuctionCatalogDetails',
			array($GetLiveAuctionCatalogDetailsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetMemberMessages
	 *
	 * @param \Controle\sub1\sub2\GetMemberMessagesRequestType $GetMemberMessagesRequest
	 * @return \Controle\sub1\sub2\GetMemberMessagesResponseType
	 */
	public function GetMemberMessages(\Controle\sub1\sub2\GetMemberMessagesRequestType $GetMemberMessagesRequest) {
		return $this->__soapCall(
			'GetMemberMessages',
			array($GetMemberMessagesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetMyMessages
	 *
	 * @param \Controle\sub1\sub2\GetMyMessagesRequestType $GetMyMessagesRequest
	 * @return \Controle\sub1\sub2\GetMyMessagesResponseType
	 */
	public function GetMyMessages(\Controle\sub1\sub2\GetMyMessagesRequestType $GetMyMessagesRequest) {
		return $this->__soapCall(
			'GetMyMessages',
			array($GetMyMessagesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetMyeBay
	 *
	 * @param \Controle\sub1\sub2\GetMyeBayRequestType $GetMyeBayRequest
	 * @return \Controle\sub1\sub2\GetMyeBayResponseType
	 */
	public function GetMyeBay(\Controle\sub1\sub2\GetMyeBayRequestType $GetMyeBayRequest) {
		return $this->__soapCall(
			'GetMyeBay',
			array($GetMyeBayRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetMyeBayBuying
	 *
	 * @param \Controle\sub1\sub2\GetMyeBayBuyingRequestType $GetMyeBayBuyingRequest
	 * @return \Controle\sub1\sub2\GetMyeBayBuyingResponseType
	 */
	public function GetMyeBayBuying(\Controle\sub1\sub2\GetMyeBayBuyingRequestType $GetMyeBayBuyingRequest) {
		return $this->__soapCall(
			'GetMyeBayBuying',
			array($GetMyeBayBuyingRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetMyeBayReminders
	 *
	 * @param \Controle\sub1\sub2\GetMyeBayRemindersRequestType $GetMyeBayRemindersRequest
	 * @return \Controle\sub1\sub2\GetMyeBayRemindersResponseType
	 */
	public function GetMyeBayReminders(\Controle\sub1\sub2\GetMyeBayRemindersRequestType $GetMyeBayRemindersRequest) {
		return $this->__soapCall(
			'GetMyeBayReminders',
			array($GetMyeBayRemindersRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetMyeBaySelling
	 *
	 * @param \Controle\sub1\sub2\GetMyeBaySellingRequestType $GetMyeBaySellingRequest
	 * @return \Controle\sub1\sub2\GetMyeBaySellingResponseType
	 */
	public function GetMyeBaySelling(\Controle\sub1\sub2\GetMyeBaySellingRequestType $GetMyeBaySellingRequest) {
		return $this->__soapCall(
			'GetMyeBaySelling',
			array($GetMyeBaySellingRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetNotificationPreferences
	 *
	 * @param \Controle\sub1\sub2\GetNotificationPreferencesRequestType $GetNotificationPreferencesRequest
	 * @return \Controle\sub1\sub2\GetNotificationPreferencesResponseType
	 */
	public function GetNotificationPreferences(\Controle\sub1\sub2\GetNotificationPreferencesRequestType $GetNotificationPreferencesRequest) {
		return $this->__soapCall(
			'GetNotificationPreferences',
			array($GetNotificationPreferencesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetNotificationsUsage
	 *
	 * @param \Controle\sub1\sub2\GetNotificationsUsageRequestType $GetNotificationsUsageRequest
	 * @return \Controle\sub1\sub2\GetNotificationsUsageResponseType
	 */
	public function GetNotificationsUsage(\Controle\sub1\sub2\GetNotificationsUsageRequestType $GetNotificationsUsageRequest) {
		return $this->__soapCall(
			'GetNotificationsUsage',
			array($GetNotificationsUsageRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetOrderTransactions
	 *
	 * @param \Controle\sub1\sub2\GetOrderTransactionsRequestType $GetOrderTransactionsRequest
	 * @return \Controle\sub1\sub2\GetOrderTransactionsResponseType
	 */
	public function GetOrderTransactions(\Controle\sub1\sub2\GetOrderTransactionsRequestType $GetOrderTransactionsRequest) {
		return $this->__soapCall(
			'GetOrderTransactions',
			array($GetOrderTransactionsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetOrders
	 *
	 * @param \Controle\sub1\sub2\GetOrdersRequestType $GetOrdersRequest
	 * @return \Controle\sub1\sub2\GetOrdersResponseType
	 */
	public function GetOrders(\Controle\sub1\sub2\GetOrdersRequestType $GetOrdersRequest) {
		return $this->__soapCall(
			'GetOrders',
			array($GetOrdersRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetPictureManagerDetails
	 *
	 * @param \Controle\sub1\sub2\GetPictureManagerDetailsRequestType $GetPictureManagerDetailsRequest
	 * @return \Controle\sub1\sub2\GetPictureManagerDetailsResponseType
	 */
	public function GetPictureManagerDetails(\Controle\sub1\sub2\GetPictureManagerDetailsRequestType $GetPictureManagerDetailsRequest) {
		return $this->__soapCall(
			'GetPictureManagerDetails',
			array($GetPictureManagerDetailsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetPictureManagerOptions
	 *
	 * @param \Controle\sub1\sub2\GetPictureManagerOptionsRequestType $GetPictureManagerOptionsRequest
	 * @return \Controle\sub1\sub2\GetPictureManagerOptionsResponseType
	 */
	public function GetPictureManagerOptions(\Controle\sub1\sub2\GetPictureManagerOptionsRequestType $GetPictureManagerOptionsRequest) {
		return $this->__soapCall(
			'GetPictureManagerOptions',
			array($GetPictureManagerOptionsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetPopularKeywords
	 *
	 * @param \Controle\sub1\sub2\GetPopularKeywordsRequestType $GetPopularKeywordsRequest
	 * @return \Controle\sub1\sub2\GetPopularKeywordsResponseType
	 */
	public function GetPopularKeywords(\Controle\sub1\sub2\GetPopularKeywordsRequestType $GetPopularKeywordsRequest) {
		return $this->__soapCall(
			'GetPopularKeywords',
			array($GetPopularKeywordsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetProductFamilyMembers
	 *
	 * @param \Controle\sub1\sub2\GetProductFamilyMembersRequestType $GetProductFamilyMembersRequest
	 * @return \Controle\sub1\sub2\GetProductFamilyMembersResponseType
	 */
	public function GetProductFamilyMembers(\Controle\sub1\sub2\GetProductFamilyMembersRequestType $GetProductFamilyMembersRequest) {
		return $this->__soapCall(
			'GetProductFamilyMembers',
			array($GetProductFamilyMembersRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetProductFinder
	 *
	 * @param \Controle\sub1\sub2\GetProductFinderRequestType $GetProductFinderRequest
	 * @return \Controle\sub1\sub2\GetProductFinderResponseType
	 */
	public function GetProductFinder(\Controle\sub1\sub2\GetProductFinderRequestType $GetProductFinderRequest) {
		return $this->__soapCall(
			'GetProductFinder',
			array($GetProductFinderRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetProductFinderXSL
	 *
	 * @param \Controle\sub1\sub2\GetProductFinderXSLRequestType $GetProductFinderXSLRequest
	 * @return \Controle\sub1\sub2\GetProductFinderXSLResponseType
	 */
	public function GetProductFinderXSL(\Controle\sub1\sub2\GetProductFinderXSLRequestType $GetProductFinderXSLRequest) {
		return $this->__soapCall(
			'GetProductFinderXSL',
			array($GetProductFinderXSLRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetProductSearchPage
	 *
	 * @param \Controle\sub1\sub2\GetProductSearchPageRequestType $GetProductSearchPageRequest
	 * @return \Controle\sub1\sub2\GetProductSearchPageResponseType
	 */
	public function GetProductSearchPage(\Controle\sub1\sub2\GetProductSearchPageRequestType $GetProductSearchPageRequest) {
		return $this->__soapCall(
			'GetProductSearchPage',
			array($GetProductSearchPageRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetProductSearchResults
	 *
	 * @param \Controle\sub1\sub2\GetProductSearchResultsRequestType $GetProductSearchResultsRequest
	 * @return \Controle\sub1\sub2\GetProductSearchResultsResponseType
	 */
	public function GetProductSearchResults(\Controle\sub1\sub2\GetProductSearchResultsRequestType $GetProductSearchResultsRequest) {
		return $this->__soapCall(
			'GetProductSearchResults',
			array($GetProductSearchResultsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetProductSellingPages
	 *
	 * @param \Controle\sub1\sub2\GetProductSellingPagesRequestType $GetProductSellingPagesRequest
	 * @return \Controle\sub1\sub2\GetProductSellingPagesResponseType
	 */
	public function GetProductSellingPages(\Controle\sub1\sub2\GetProductSellingPagesRequestType $GetProductSellingPagesRequest) {
		return $this->__soapCall(
			'GetProductSellingPages',
			array($GetProductSellingPagesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetPromotionRules
	 *
	 * @param \Controle\sub1\sub2\GetPromotionRulesRequestType $GetPromotionRulesRequest
	 * @return \Controle\sub1\sub2\GetPromotionRulesResponseType
	 */
	public function GetPromotionRules(\Controle\sub1\sub2\GetPromotionRulesRequestType $GetPromotionRulesRequest) {
		return $this->__soapCall(
			'GetPromotionRules',
			array($GetPromotionRulesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetRecommendations
	 *
	 * @param \Controle\sub1\sub2\GetRecommendationsRequestType $GetRecommendationsRequest
	 * @return \Controle\sub1\sub2\GetRecommendationsResponseType
	 */
	public function GetRecommendations(\Controle\sub1\sub2\GetRecommendationsRequestType $GetRecommendationsRequest) {
		return $this->__soapCall(
			'GetRecommendations',
			array($GetRecommendationsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetReturnURL
	 *
	 * @param \Controle\sub1\sub2\GetReturnURLRequestType $GetReturnURLRequest
	 * @return \Controle\sub1\sub2\GetReturnURLResponseType
	 */
	public function GetReturnURL(\Controle\sub1\sub2\GetReturnURLRequestType $GetReturnURLRequest) {
		return $this->__soapCall(
			'GetReturnURL',
			array($GetReturnURLRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetRuName
	 *
	 * @param \Controle\sub1\sub2\GetRuNameRequestType $GetRuNameRequest
	 * @return \Controle\sub1\sub2\GetRuNameResponseType
	 */
	public function GetRuName(\Controle\sub1\sub2\GetRuNameRequestType $GetRuNameRequest) {
		return $this->__soapCall(
			'GetRuName',
			array($GetRuNameRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetSearchResults
	 *
	 * @param \Controle\sub1\sub2\GetSearchResultsRequestType $GetSearchResultsRequest
	 * @return \Controle\sub1\sub2\GetSearchResultsResponseType
	 */
	public function GetSearchResults(\Controle\sub1\sub2\GetSearchResultsRequestType $GetSearchResultsRequest) {
		return $this->__soapCall(
			'GetSearchResults',
			array($GetSearchResultsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetSearchResultsExpress
	 *
	 * @param \Controle\sub1\sub2\GetSearchResultsExpressRequestType $GetSearchResultsExpressRequest
	 * @return \Controle\sub1\sub2\GetSearchResultsExpressResponseType
	 */
	public function GetSearchResultsExpress(\Controle\sub1\sub2\GetSearchResultsExpressRequestType $GetSearchResultsExpressRequest) {
		return $this->__soapCall(
			'GetSearchResultsExpress',
			array($GetSearchResultsExpressRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetSellerEvents
	 *
	 * @param \Controle\sub1\sub2\GetSellerEventsRequestType $GetSellerEventsRequest
	 * @return \Controle\sub1\sub2\GetSellerEventsResponseType
	 */
	public function GetSellerEvents(\Controle\sub1\sub2\GetSellerEventsRequestType $GetSellerEventsRequest) {
		return $this->__soapCall(
			'GetSellerEvents',
			array($GetSellerEventsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetSellerList
	 *
	 * @param \Controle\sub1\sub2\GetSellerListRequestType $GetSellerListRequest
	 * @return \Controle\sub1\sub2\GetSellerListResponseType
	 */
	public function GetSellerList(\Controle\sub1\sub2\GetSellerListRequestType $GetSellerListRequest) {
		return $this->__soapCall(
			'GetSellerList',
			array($GetSellerListRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetSellerPayments
	 *
	 * @param \Controle\sub1\sub2\GetSellerPaymentsRequestType $GetSellerPaymentsRequest
	 * @return \Controle\sub1\sub2\GetSellerPaymentsResponseType
	 */
	public function GetSellerPayments(\Controle\sub1\sub2\GetSellerPaymentsRequestType $GetSellerPaymentsRequest) {
		return $this->__soapCall(
			'GetSellerPayments',
			array($GetSellerPaymentsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetSellerTransactions
	 *
	 * @param \Controle\sub1\sub2\GetSellerTransactionsRequestType $GetSellerTransactionsRequest
	 * @return \Controle\sub1\sub2\GetSellerTransactionsResponseType
	 */
	public function GetSellerTransactions(\Controle\sub1\sub2\GetSellerTransactionsRequestType $GetSellerTransactionsRequest) {
		return $this->__soapCall(
			'GetSellerTransactions',
			array($GetSellerTransactionsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetStore
	 *
	 * @param \Controle\sub1\sub2\GetStoreRequestType $GetStoreRequest
	 * @return \Controle\sub1\sub2\GetStoreResponseType
	 */
	public function GetStore(\Controle\sub1\sub2\GetStoreRequestType $GetStoreRequest) {
		return $this->__soapCall(
			'GetStore',
			array($GetStoreRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetStoreCategoryUpdateStatus
	 *
	 * @param \Controle\sub1\sub2\GetStoreCategoryUpdateStatusRequestType $GetStoreCategoryUpdateStatusRequest
	 * @return \Controle\sub1\sub2\GetStoreCategoryUpdateStatusResponseType
	 */
	public function GetStoreCategoryUpdateStatus(\Controle\sub1\sub2\GetStoreCategoryUpdateStatusRequestType $GetStoreCategoryUpdateStatusRequest) {
		return $this->__soapCall(
			'GetStoreCategoryUpdateStatus',
			array($GetStoreCategoryUpdateStatusRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetStoreCustomPage
	 *
	 * @param \Controle\sub1\sub2\GetStoreCustomPageRequestType $GetStoreCustomPageRequest
	 * @return \Controle\sub1\sub2\GetStoreCustomPageResponseType
	 */
	public function GetStoreCustomPage(\Controle\sub1\sub2\GetStoreCustomPageRequestType $GetStoreCustomPageRequest) {
		return $this->__soapCall(
			'GetStoreCustomPage',
			array($GetStoreCustomPageRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetStoreOptions
	 *
	 * @param \Controle\sub1\sub2\GetStoreOptionsRequestType $GetStoreOptionsRequest
	 * @return \Controle\sub1\sub2\GetStoreOptionsResponseType
	 */
	public function GetStoreOptions(\Controle\sub1\sub2\GetStoreOptionsRequestType $GetStoreOptionsRequest) {
		return $this->__soapCall(
			'GetStoreOptions',
			array($GetStoreOptionsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetStorePreferences
	 *
	 * @param \Controle\sub1\sub2\GetStorePreferencesRequestType $GetStorePreferencesRequest
	 * @return \Controle\sub1\sub2\GetStorePreferencesResponseType
	 */
	public function GetStorePreferences(\Controle\sub1\sub2\GetStorePreferencesRequestType $GetStorePreferencesRequest) {
		return $this->__soapCall(
			'GetStorePreferences',
			array($GetStorePreferencesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetSuggestedCategories
	 *
	 * @param \Controle\sub1\sub2\GetSuggestedCategoriesRequestType $GetSuggestedCategoriesRequest
	 * @return \Controle\sub1\sub2\GetSuggestedCategoriesResponseType
	 */
	public function GetSuggestedCategories(\Controle\sub1\sub2\GetSuggestedCategoriesRequestType $GetSuggestedCategoriesRequest) {
		return $this->__soapCall(
			'GetSuggestedCategories',
			array($GetSuggestedCategoriesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetTaxTable
	 *
	 * @param \Controle\sub1\sub2\GetTaxTableRequestType $GetTaxTableRequest
	 * @return \Controle\sub1\sub2\GetTaxTableResponseType
	 */
	public function GetTaxTable(\Controle\sub1\sub2\GetTaxTableRequestType $GetTaxTableRequest) {
		return $this->__soapCall(
			'GetTaxTable',
			array($GetTaxTableRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetUser
	 *
	 * @param \Controle\sub1\sub2\GetUserRequestType $GetUserRequest
	 * @return \Controle\sub1\sub2\GetUserResponseType
	 */
	public function GetUser(\Controle\sub1\sub2\GetUserRequestType $GetUserRequest) {
		return $this->__soapCall(
			'GetUser',
			array($GetUserRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetUserContactDetails
	 *
	 * @param \Controle\sub1\sub2\GetUserContactDetailsRequestType $GetUserContactDetailsRequest
	 * @return \Controle\sub1\sub2\GetUserContactDetailsResponseType
	 */
	public function GetUserContactDetails(\Controle\sub1\sub2\GetUserContactDetailsRequestType $GetUserContactDetailsRequest) {
		return $this->__soapCall(
			'GetUserContactDetails',
			array($GetUserContactDetailsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetUserDisputes
	 *
	 * @param \Controle\sub1\sub2\GetUserDisputesRequestType $GetUserDisputesRequest
	 * @return \Controle\sub1\sub2\GetUserDisputesResponseType
	 */
	public function GetUserDisputes(\Controle\sub1\sub2\GetUserDisputesRequestType $GetUserDisputesRequest) {
		return $this->__soapCall(
			'GetUserDisputes',
			array($GetUserDisputesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetUserPreferences
	 *
	 * @param \Controle\sub1\sub2\GetUserPreferencesRequestType $GetUserPreferencesRequest
	 * @return \Controle\sub1\sub2\GetUserPreferencesResponseType
	 */
	public function GetUserPreferences(\Controle\sub1\sub2\GetUserPreferencesRequestType $GetUserPreferencesRequest) {
		return $this->__soapCall(
			'GetUserPreferences',
			array($GetUserPreferencesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetVeROReasonCodeDetails
	 *
	 * @param \Controle\sub1\sub2\GetVeROReasonCodeDetailsRequestType $GetVeROReasonCodeDetailsRequest
	 * @return \Controle\sub1\sub2\GetVeROReasonCodeDetailsResponseType
	 */
	public function GetVeROReasonCodeDetails(\Controle\sub1\sub2\GetVeROReasonCodeDetailsRequestType $GetVeROReasonCodeDetailsRequest) {
		return $this->__soapCall(
			'GetVeROReasonCodeDetails',
			array($GetVeROReasonCodeDetailsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetVeROReportStatus
	 *
	 * @param \Controle\sub1\sub2\GetVeROReportStatusRequestType $GetVeROReportStatusRequest
	 * @return \Controle\sub1\sub2\GetVeROReportStatusResponseType
	 */
	public function GetVeROReportStatus(\Controle\sub1\sub2\GetVeROReportStatusRequestType $GetVeROReportStatusRequest) {
		return $this->__soapCall(
			'GetVeROReportStatus',
			array($GetVeROReportStatusRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetWantItNowPost
	 *
	 * @param \Controle\sub1\sub2\GetWantItNowPostRequestType $GetWantItNowPostRequest
	 * @return \Controle\sub1\sub2\GetWantItNowPostResponseType
	 */
	public function GetWantItNowPost(\Controle\sub1\sub2\GetWantItNowPostRequestType $GetWantItNowPostRequest) {
		return $this->__soapCall(
			'GetWantItNowPost',
			array($GetWantItNowPostRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GetWantItNowSearchResults
	 *
	 * @param \Controle\sub1\sub2\GetWantItNowSearchResultsRequestType $GetWantItNowSearchResultsRequest
	 * @return \Controle\sub1\sub2\GetWantItNowSearchResultsResponseType
	 */
	public function GetWantItNowSearchResults(\Controle\sub1\sub2\GetWantItNowSearchResultsRequestType $GetWantItNowSearchResultsRequest) {
		return $this->__soapCall(
			'GetWantItNowSearchResults',
			array($GetWantItNowSearchResultsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GeteBayDetails
	 *
	 * @param \Controle\sub1\sub2\GeteBayDetailsRequestType $GeteBayDetailsRequest
	 * @return \Controle\sub1\sub2\GeteBayDetailsResponseType
	 */
	public function GeteBayDetails(\Controle\sub1\sub2\GeteBayDetailsRequestType $GeteBayDetailsRequest) {
		return $this->__soapCall(
			'GeteBayDetails',
			array($GeteBayDetailsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * GeteBayOfficialTime
	 *
	 * @param \Controle\sub1\sub2\GeteBayOfficialTimeRequestType $GeteBayOfficialTimeRequest
	 * @return \Controle\sub1\sub2\GeteBayOfficialTimeResponseType
	 */
	public function GeteBayOfficialTime(\Controle\sub1\sub2\GeteBayOfficialTimeRequestType $GeteBayOfficialTimeRequest) {
		return $this->__soapCall(
			'GeteBayOfficialTime',
			array($GeteBayOfficialTimeRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * IssueRefund
	 *
	 * @param \Controle\sub1\sub2\IssueRefundRequestType $IssueRefundRequest
	 * @return \Controle\sub1\sub2\IssueRefundResponseType
	 */
	public function IssueRefund(\Controle\sub1\sub2\IssueRefundRequestType $IssueRefundRequest) {
		return $this->__soapCall(
			'IssueRefund',
			array($IssueRefundRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * LeaveFeedback
	 *
	 * @param \Controle\sub1\sub2\LeaveFeedbackRequestType $LeaveFeedbackRequest
	 * @return \Controle\sub1\sub2\LeaveFeedbackResponseType
	 */
	public function LeaveFeedback(\Controle\sub1\sub2\LeaveFeedbackRequestType $LeaveFeedbackRequest) {
		return $this->__soapCall(
			'LeaveFeedback',
			array($LeaveFeedbackRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * PlaceOffer
	 *
	 * @param \Controle\sub1\sub2\PlaceOfferRequestType $PlaceOfferRequest
	 * @return \Controle\sub1\sub2\PlaceOfferResponseType
	 */
	public function PlaceOffer(\Controle\sub1\sub2\PlaceOfferRequestType $PlaceOfferRequest) {
		return $this->__soapCall(
			'PlaceOffer',
			array($PlaceOfferRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * RelistItem
	 *
	 * @param \Controle\sub1\sub2\RelistItemRequestType $RelistItemRequest
	 * @return \Controle\sub1\sub2\RelistItemResponseType
	 */
	public function RelistItem(\Controle\sub1\sub2\RelistItemRequestType $RelistItemRequest) {
		return $this->__soapCall(
			'RelistItem',
			array($RelistItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * RemoveFromWatchList
	 *
	 * @param \Controle\sub1\sub2\RemoveFromWatchListRequestType $RemoveFromWatchListRequest
	 * @return \Controle\sub1\sub2\RemoveFromWatchListResponseType
	 */
	public function RemoveFromWatchList(\Controle\sub1\sub2\RemoveFromWatchListRequestType $RemoveFromWatchListRequest) {
		return $this->__soapCall(
			'RemoveFromWatchList',
			array($RemoveFromWatchListRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * RespondToBestOffer
	 *
	 * @param \Controle\sub1\sub2\RespondToBestOfferRequestType $RespondToBestOfferRequest
	 * @return \Controle\sub1\sub2\RespondToBestOfferResponseType
	 */
	public function RespondToBestOffer(\Controle\sub1\sub2\RespondToBestOfferRequestType $RespondToBestOfferRequest) {
		return $this->__soapCall(
			'RespondToBestOffer',
			array($RespondToBestOfferRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * RespondToFeedback
	 *
	 * @param \Controle\sub1\sub2\RespondToFeedbackRequestType $RespondToFeedbackRequest
	 * @return \Controle\sub1\sub2\RespondToFeedbackResponseType
	 */
	public function RespondToFeedback(\Controle\sub1\sub2\RespondToFeedbackRequestType $RespondToFeedbackRequest) {
		return $this->__soapCall(
			'RespondToFeedback',
			array($RespondToFeedbackRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * RespondToWantItNowPost
	 *
	 * @param \Controle\sub1\sub2\RespondToWantItNowPostRequestType $RespondToWantItNowPostRequest
	 * @return \Controle\sub1\sub2\RespondToWantItNowPostResponseType
	 */
	public function RespondToWantItNowPost(\Controle\sub1\sub2\RespondToWantItNowPostRequestType $RespondToWantItNowPostRequest) {
		return $this->__soapCall(
			'RespondToWantItNowPost',
			array($RespondToWantItNowPostRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * ReviseCheckoutStatus
	 *
	 * @param \Controle\sub1\sub2\ReviseCheckoutStatusRequestType $ReviseCheckoutStatusRequest
	 * @return \Controle\sub1\sub2\ReviseCheckoutStatusResponseType
	 */
	public function ReviseCheckoutStatus(\Controle\sub1\sub2\ReviseCheckoutStatusRequestType $ReviseCheckoutStatusRequest) {
		return $this->__soapCall(
			'ReviseCheckoutStatus',
			array($ReviseCheckoutStatusRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * ReviseItem
	 *
	 * @param \Controle\sub1\sub2\ReviseItemRequestType $ReviseItemRequest
	 * @return \Controle\sub1\sub2\ReviseItemResponseType
	 */
	public function ReviseItem(\Controle\sub1\sub2\ReviseItemRequestType $ReviseItemRequest) {
		return $this->__soapCall(
			'ReviseItem',
			array($ReviseItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * ReviseLiveAuctionItem
	 *
	 * @param \Controle\sub1\sub2\ReviseLiveAuctionItemRequestType $ReviseLiveAuctionItemRequest
	 * @return \Controle\sub1\sub2\ReviseLiveAuctionItemResponseType
	 */
	public function ReviseLiveAuctionItem(\Controle\sub1\sub2\ReviseLiveAuctionItemRequestType $ReviseLiveAuctionItemRequest) {
		return $this->__soapCall(
			'ReviseLiveAuctionItem',
			array($ReviseLiveAuctionItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * ReviseMyMessages
	 *
	 * @param \Controle\sub1\sub2\ReviseMyMessagesRequestType $ReviseMyMessagesRequest
	 * @return \Controle\sub1\sub2\ReviseMyMessagesResponseType
	 */
	public function ReviseMyMessages(\Controle\sub1\sub2\ReviseMyMessagesRequestType $ReviseMyMessagesRequest) {
		return $this->__soapCall(
			'ReviseMyMessages',
			array($ReviseMyMessagesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * ReviseMyMessagesFolders
	 *
	 * @param \Controle\sub1\sub2\ReviseMyMessagesFoldersRequestType $ReviseMyMessagesFoldersRequest
	 * @return \Controle\sub1\sub2\ReviseMyMessagesFoldersResponseType
	 */
	public function ReviseMyMessagesFolders(\Controle\sub1\sub2\ReviseMyMessagesFoldersRequestType $ReviseMyMessagesFoldersRequest) {
		return $this->__soapCall(
			'ReviseMyMessagesFolders',
			array($ReviseMyMessagesFoldersRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SellerReverseDispute
	 *
	 * @param \Controle\sub1\sub2\SellerReverseDisputeRequestType $SellerReverseDisputeRequest
	 * @return \Controle\sub1\sub2\SellerReverseDisputeResponseType
	 */
	public function SellerReverseDispute(\Controle\sub1\sub2\SellerReverseDisputeRequestType $SellerReverseDisputeRequest) {
		return $this->__soapCall(
			'SellerReverseDispute',
			array($SellerReverseDisputeRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SendInvoice
	 *
	 * @param \Controle\sub1\sub2\SendInvoiceRequestType $SendInvoiceRequest
	 * @return \Controle\sub1\sub2\SendInvoiceResponseType
	 */
	public function SendInvoice(\Controle\sub1\sub2\SendInvoiceRequestType $SendInvoiceRequest) {
		return $this->__soapCall(
			'SendInvoice',
			array($SendInvoiceRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetNotificationPreferences
	 *
	 * @param \Controle\sub1\sub2\SetNotificationPreferencesRequestType $SetNotificationPreferencesRequest
	 * @return \Controle\sub1\sub2\SetNotificationPreferencesResponseType
	 */
	public function SetNotificationPreferences(\Controle\sub1\sub2\SetNotificationPreferencesRequestType $SetNotificationPreferencesRequest) {
		return $this->__soapCall(
			'SetNotificationPreferences',
			array($SetNotificationPreferencesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetPictureManagerDetails
	 *
	 * @param \Controle\sub1\sub2\SetPictureManagerDetailsRequestType $SetPictureManagerDetailsRequest
	 * @return \Controle\sub1\sub2\SetPictureManagerDetailsResponseType
	 */
	public function SetPictureManagerDetails(\Controle\sub1\sub2\SetPictureManagerDetailsRequestType $SetPictureManagerDetailsRequest) {
		return $this->__soapCall(
			'SetPictureManagerDetails',
			array($SetPictureManagerDetailsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetPromotionRules
	 *
	 * @param \Controle\sub1\sub2\SetPromotionRulesRequestType $SetPromotionRulesRequest
	 * @return \Controle\sub1\sub2\SetPromotionRulesResponseType
	 */
	public function SetPromotionRules(\Controle\sub1\sub2\SetPromotionRulesRequestType $SetPromotionRulesRequest) {
		return $this->__soapCall(
			'SetPromotionRules',
			array($SetPromotionRulesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetReturnURL
	 *
	 * @param \Controle\sub1\sub2\SetReturnURLRequestType $SetReturnURLRequest
	 * @return \Controle\sub1\sub2\SetReturnURLResponseType
	 */
	public function SetReturnURL(\Controle\sub1\sub2\SetReturnURLRequestType $SetReturnURLRequest) {
		return $this->__soapCall(
			'SetReturnURL',
			array($SetReturnURLRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetStore
	 *
	 * @param \Controle\sub1\sub2\SetStoreRequestType $SetStoreRequest
	 * @return \Controle\sub1\sub2\SetStoreResponseType
	 */
	public function SetStore(\Controle\sub1\sub2\SetStoreRequestType $SetStoreRequest) {
		return $this->__soapCall(
			'SetStore',
			array($SetStoreRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetStoreCategories
	 *
	 * @param \Controle\sub1\sub2\SetStoreCategoriesRequestType $SetStoreCategoriesRequest
	 * @return \Controle\sub1\sub2\SetStoreCategoriesResponseType
	 */
	public function SetStoreCategories(\Controle\sub1\sub2\SetStoreCategoriesRequestType $SetStoreCategoriesRequest) {
		return $this->__soapCall(
			'SetStoreCategories',
			array($SetStoreCategoriesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetStoreCustomPage
	 *
	 * @param \Controle\sub1\sub2\SetStoreCustomPageRequestType $SetStoreCustomPageRequest
	 * @return \Controle\sub1\sub2\SetStoreCustomPageResponseType
	 */
	public function SetStoreCustomPage(\Controle\sub1\sub2\SetStoreCustomPageRequestType $SetStoreCustomPageRequest) {
		return $this->__soapCall(
			'SetStoreCustomPage',
			array($SetStoreCustomPageRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetStorePreferences
	 *
	 * @param \Controle\sub1\sub2\SetStorePreferencesRequestType $SetStorePreferencesRequest
	 * @return \Controle\sub1\sub2\SetStorePreferencesResponseType
	 */
	public function SetStorePreferences(\Controle\sub1\sub2\SetStorePreferencesRequestType $SetStorePreferencesRequest) {
		return $this->__soapCall(
			'SetStorePreferences',
			array($SetStorePreferencesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetTaxTable
	 *
	 * @param \Controle\sub1\sub2\SetTaxTableRequestType $SetTaxTableRequest
	 * @return \Controle\sub1\sub2\SetTaxTableResponseType
	 */
	public function SetTaxTable(\Controle\sub1\sub2\SetTaxTableRequestType $SetTaxTableRequest) {
		return $this->__soapCall(
			'SetTaxTable',
			array($SetTaxTableRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetUserNotes
	 *
	 * @param \Controle\sub1\sub2\SetUserNotesRequestType $SetUserNotesRequest
	 * @return \Controle\sub1\sub2\SetUserNotesResponseType
	 */
	public function SetUserNotes(\Controle\sub1\sub2\SetUserNotesRequestType $SetUserNotesRequest) {
		return $this->__soapCall(
			'SetUserNotes',
			array($SetUserNotesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * SetUserPreferences
	 *
	 * @param \Controle\sub1\sub2\SetUserPreferencesRequestType $SetUserPreferencesRequest
	 * @return \Controle\sub1\sub2\SetUserPreferencesResponseType
	 */
	public function SetUserPreferences(\Controle\sub1\sub2\SetUserPreferencesRequestType $SetUserPreferencesRequest) {
		return $this->__soapCall(
			'SetUserPreferences',
			array($SetUserPreferencesRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * ValidateChallengeInput
	 *
	 * @param \Controle\sub1\sub2\ValidateChallengeInputRequestType $ValidateChallengeInputRequest
	 * @return \Controle\sub1\sub2\ValidateChallengeInputResponseType
	 */
	public function ValidateChallengeInput(\Controle\sub1\sub2\ValidateChallengeInputRequestType $ValidateChallengeInputRequest) {
		return $this->__soapCall(
			'ValidateChallengeInput',
			array($ValidateChallengeInputRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * ValidateTestUserRegistration
	 *
	 * @param \Controle\sub1\sub2\ValidateTestUserRegistrationRequestType $ValidateTestUserRegistrationRequest
	 * @return \Controle\sub1\sub2\ValidateTestUserRegistrationResponseType
	 */
	public function ValidateTestUserRegistration(\Controle\sub1\sub2\ValidateTestUserRegistrationRequestType $ValidateTestUserRegistrationRequest) {
		return $this->__soapCall(
			'ValidateTestUserRegistration',
			array($ValidateTestUserRegistrationRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * VeROReportItems
	 *
	 * @param \Controle\sub1\sub2\VeROReportItemsRequestType $VeROReportItemsRequest
	 * @return \Controle\sub1\sub2\VeROReportItemsResponseType
	 */
	public function VeROReportItems(\Controle\sub1\sub2\VeROReportItemsRequestType $VeROReportItemsRequest) {
		return $this->__soapCall(
			'VeROReportItems',
			array($VeROReportItemsRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * VerifyAddItem
	 *
	 * @param \Controle\sub1\sub2\VerifyAddItemRequestType $VerifyAddItemRequest
	 * @return \Controle\sub1\sub2\VerifyAddItemResponseType
	 */
	public function VerifyAddItem(\Controle\sub1\sub2\VerifyAddItemRequestType $VerifyAddItemRequest) {
		return $this->__soapCall(
			'VerifyAddItem',
			array($VerifyAddItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

	/**
	 * VerifyAddSecondChanceItem
	 *
	 * @param \Controle\sub1\sub2\VerifyAddSecondChanceItemRequestType $VerifyAddSecondChanceItemRequest
	 * @return \Controle\sub1\sub2\VerifyAddSecondChanceItemResponseType
	 */
	public function VerifyAddSecondChanceItem(\Controle\sub1\sub2\VerifyAddSecondChanceItemRequestType $VerifyAddSecondChanceItemRequest) {
		return $this->__soapCall(
			'VerifyAddSecondChanceItem',
			array($VerifyAddSecondChanceItemRequest),
			array('uri'=>'urn:ebay:apis:eBLBaseComponents')
		);
	}

}

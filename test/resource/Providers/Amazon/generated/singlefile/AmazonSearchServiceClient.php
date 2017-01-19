<?php

class ProductInfo
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $TotalResults;
	/**
	 * @var string
	 */
	public $TotalPages;
	/**
	 * @var string
	 */
	public $ListName;
	/**
	 * @var DetailsArray
	 */
	public $Details;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTotalResults($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TotalResults');
        }
        $this->TotalResults = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTotalPages($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TotalPages');
        }
        $this->TotalPages = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setListName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ListName');
        }
        $this->ListName = $val;
	}

	/**
	 * @param DetailsArray $val
	 * @throws \Exception
	 */
	public function setDetails($val)
	{
        $this->Details = $val;
	}
}

class Reviews
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $AvgCustomerRating;
	/**
	 * @var string
	 */
	public $TotalCustomerReviews;
	/**
	 * @var CustomerReviewArray
	 */
	public $CustomerReviews;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setAvgCustomerRating($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for AvgCustomerRating');
        }
        $this->AvgCustomerRating = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTotalCustomerReviews($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TotalCustomerReviews');
        }
        $this->TotalCustomerReviews = $val;
	}

	/**
	 * @param CustomerReviewArray $val
	 * @throws \Exception
	 */
	public function setCustomerReviews($val)
	{
        $this->CustomerReviews = $val;
	}
}

class MarketplaceSearch
{
	// @codingStandardsIgnoreStart
	/**
	 * @var MarketplaceSearchDetailsArray
	 */
	public $MarketplaceSearchDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param MarketplaceSearchDetailsArray $val
	 * @throws \Exception
	 */
	public function setMarketplaceSearchDetails($val)
	{
        $this->MarketplaceSearchDetails = $val;
	}
}

class SellerProfile
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SellerProfileDetailsArray
	 */
	public $SellerProfileDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SellerProfileDetailsArray $val
	 * @throws \Exception
	 */
	public function setSellerProfileDetails($val)
	{
        $this->SellerProfileDetails = $val;
	}
}

class SellerSearch
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SellerSearchDetailsArray
	 */
	public $SellerSearchDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SellerSearchDetailsArray $val
	 * @throws \Exception
	 */
	public function setSellerSearchDetails($val)
	{
        $this->SellerSearchDetails = $val;
	}
}

class ListingProductInfo
{
	// @codingStandardsIgnoreStart
	/**
	 * @var ListingProductDetailsArray
	 */
	public $ListingProductDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ListingProductDetailsArray $val
	 * @throws \Exception
	 */
	public function setListingProductDetails($val)
	{
        $this->ListingProductDetails = $val;
	}
}

class ListingProductDetails
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $ExchangeId;
	/**
	 * @var string
	 */
	public $ListingId;
	/**
	 * @var string
	 */
	public $ExchangeTitle;
	/**
	 * @var string
	 */
	public $ExchangePrice;
	/**
	 * @var string
	 */
	public $ExchangeAsin;
	/**
	 * @var string
	 */
	public $ExchangeEndDate;
	/**
	 * @var string
	 */
	public $ExchangeTinyImage;
	/**
	 * @var string
	 */
	public $ExchangeSellerId;
	/**
	 * @var string
	 */
	public $ExchangeSellerNickname;
	/**
	 * @var string
	 */
	public $ExchangeStartDate;
	/**
	 * @var string
	 */
	public $ExchangeStatus;
	/**
	 * @var string
	 */
	public $ExchangeQuantity;
	/**
	 * @var string
	 */
	public $ExchangeQuantityAllocated;
	/**
	 * @var string
	 */
	public $ExchangeFeaturedCategory;
	/**
	 * @var string
	 */
	public $ExchangeCondition;
	/**
	 * @var string
	 */
	public $ExchangeConditionType;
	/**
	 * @var string
	 */
	public $ExchangeAvailability;
	/**
	 * @var string
	 */
	public $ExchangeOfferingType;
	/**
	 * @var string
	 */
	public $ExchangeSellerState;
	/**
	 * @var string
	 */
	public $ExchangeSellerCountry;
	/**
	 * @var string
	 */
	public $ExchangeSellerRating;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeId');
        }
        $this->ExchangeId = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setListingId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ListingId');
        }
        $this->ListingId = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeTitle($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeTitle');
        }
        $this->ExchangeTitle = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangePrice($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangePrice');
        }
        $this->ExchangePrice = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeAsin($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeAsin');
        }
        $this->ExchangeAsin = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeEndDate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeEndDate');
        }
        $this->ExchangeEndDate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeTinyImage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeTinyImage');
        }
        $this->ExchangeTinyImage = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeSellerId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeSellerId');
        }
        $this->ExchangeSellerId = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeSellerNickname($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeSellerNickname');
        }
        $this->ExchangeSellerNickname = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeStartDate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeStartDate');
        }
        $this->ExchangeStartDate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeStatus($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeStatus');
        }
        $this->ExchangeStatus = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeQuantity($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeQuantity');
        }
        $this->ExchangeQuantity = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeQuantityAllocated($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeQuantityAllocated');
        }
        $this->ExchangeQuantityAllocated = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeFeaturedCategory($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeFeaturedCategory');
        }
        $this->ExchangeFeaturedCategory = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeCondition($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeCondition');
        }
        $this->ExchangeCondition = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeConditionType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeConditionType');
        }
        $this->ExchangeConditionType = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeAvailability($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeAvailability');
        }
        $this->ExchangeAvailability = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeOfferingType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeOfferingType');
        }
        $this->ExchangeOfferingType = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeSellerState($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeSellerState');
        }
        $this->ExchangeSellerState = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeSellerCountry($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeSellerCountry');
        }
        $this->ExchangeSellerCountry = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeSellerRating($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ExchangeSellerRating');
        }
        $this->ExchangeSellerRating = $val;
	}
}

class SellerFeedback
{
	// @codingStandardsIgnoreStart
	/**
	 * @var FeedbackArray
	 */
	public $Feedback;
	// @codingStandardsIgnoreEnd

	/**
	 * @param FeedbackArray $val
	 * @throws \Exception
	 */
	public function setFeedback($val)
	{
        $this->Feedback = $val;
	}
}

class ThirdPartyProductInfo
{
	// @codingStandardsIgnoreStart
	/**
	 * @var ThirdPartyProductDetailsArray
	 */
	public $ThirdPartyProductDetails;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ThirdPartyProductDetailsArray $val
	 * @throws \Exception
	 */
	public function setThirdPartyProductDetails($val)
	{
        $this->ThirdPartyProductDetails = $val;
	}
}

class KeywordRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $keyword;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $mode;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $sort;
	/**
	 * @var string
	 */
	public $variations;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setKeyword($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for keyword');
        }
        $this->keyword = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for mode');
        }
        $this->mode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSort($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sort');
        }
        $this->sort = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setVariations($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for variations');
        }
        $this->variations = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class PowerRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $power;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $mode;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $sort;
	/**
	 * @var string
	 */
	public $variations;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPower($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for power');
        }
        $this->power = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for mode');
        }
        $this->mode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSort($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sort');
        }
        $this->sort = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setVariations($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for variations');
        }
        $this->variations = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class BrowseNodeRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $browse_node;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $mode;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $sort;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBrowsenode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for browse_node');
        }
        $this->browse_node = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for mode');
        }
        $this->mode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSort($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sort');
        }
        $this->sort = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class AsinRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $asin;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $offer;
	/**
	 * @var string
	 */
	public $offerpage;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setAsin($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for asin');
        }
        $this->asin = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOffer($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for offer');
        }
        $this->offer = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOfferpage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for offerpage');
        }
        $this->offerpage = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class BlendedRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $blended;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBlended($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for blended');
        }
        $this->blended = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class UpcRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $upc;
	/**
	 * @var string
	 */
	public $mode;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $sort;
	/**
	 * @var string
	 */
	public $variations;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setUpc($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for upc');
        }
        $this->upc = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for mode');
        }
        $this->mode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSort($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sort');
        }
        $this->sort = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setVariations($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for variations');
        }
        $this->variations = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class ArtistRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $artist;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $mode;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $sort;
	/**
	 * @var string
	 */
	public $variations;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setArtist($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for artist');
        }
        $this->artist = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for mode');
        }
        $this->mode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSort($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sort');
        }
        $this->sort = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setVariations($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for variations');
        }
        $this->variations = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class AuthorRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $author;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $mode;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $sort;
	/**
	 * @var string
	 */
	public $variations;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setAuthor($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for author');
        }
        $this->author = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for mode');
        }
        $this->mode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSort($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sort');
        }
        $this->sort = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setVariations($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for variations');
        }
        $this->variations = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class ActorRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $actor;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $mode;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $sort;
	/**
	 * @var string
	 */
	public $variations;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setActor($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for actor');
        }
        $this->actor = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for mode');
        }
        $this->mode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSort($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sort');
        }
        $this->sort = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setVariations($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for variations');
        }
        $this->variations = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class DirectorRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $director;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $mode;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $sort;
	/**
	 * @var string
	 */
	public $variations;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDirector($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for director');
        }
        $this->director = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for mode');
        }
        $this->mode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSort($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sort');
        }
        $this->sort = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setVariations($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for variations');
        }
        $this->variations = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class ExchangeRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $exchange_id;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setExchangeid($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for exchange_id');
        }
        $this->exchange_id = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class ManufacturerRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $manufacturer;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $mode;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $sort;
	/**
	 * @var string
	 */
	public $variations;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setManufacturer($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for manufacturer');
        }
        $this->manufacturer = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for mode');
        }
        $this->mode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSort($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sort');
        }
        $this->sort = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setVariations($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for variations');
        }
        $this->variations = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class ListManiaRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $lm_id;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLmid($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for lm_id');
        }
        $this->lm_id = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class WishlistRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $wishlist_id;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setWishlistid($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for wishlist_id');
        }
        $this->wishlist_id = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class MarketplaceRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $marketplace_search;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $keyword;
	/**
	 * @var string
	 */
	public $keyword_search;
	/**
	 * @var string
	 */
	public $browse_id;
	/**
	 * @var string
	 */
	public $zipcode;
	/**
	 * @var string
	 */
	public $area_id;
	/**
	 * @var string
	 */
	public $geo;
	/**
	 * @var string
	 */
	public $sort;
	/**
	 * @var string
	 */
	public $listing_id;
	/**
	 * @var string
	 */
	public $locale;
	/**
	 * @var string
	 */
	public $index;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setMarketplacesearch($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for marketplace_search');
        }
        $this->marketplace_search = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setKeyword($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for keyword');
        }
        $this->keyword = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setKeywordsearch($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for keyword_search');
        }
        $this->keyword_search = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBrowseid($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for browse_id');
        }
        $this->browse_id = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setZipcode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for zipcode');
        }
        $this->zipcode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setAreaid($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for area_id');
        }
        $this->area_id = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setGeo($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for geo');
        }
        $this->geo = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSort($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sort');
        }
        $this->sort = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setListingid($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for listing_id');
        }
        $this->listing_id = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setIndex($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for index');
        }
        $this->index = $val;
	}
}

class SellerProfileRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $seller_id;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSellerid($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for seller_id');
        }
        $this->seller_id = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class SellerRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $seller_id;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $offerstatus;
	/**
	 * @var string
	 */
	public $page;
	/**
	 * @var string
	 */
	public $seller_browse_id;
	/**
	 * @var string
	 */
	public $keyword;
	/**
	 * @var string
	 */
	public $locale;
	/**
	 * @var string
	 */
	public $index;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSellerid($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for seller_id');
        }
        $this->seller_id = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setOfferstatus($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for offerstatus');
        }
        $this->offerstatus = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPage($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for page');
        }
        $this->page = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSellerbrowseid($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for seller_browse_id');
        }
        $this->seller_browse_id = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setKeyword($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for keyword');
        }
        $this->keyword = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setIndex($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for index');
        }
        $this->index = $val;
	}
}

class SimilarityRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $asin;
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $type;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setAsin($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for asin');
        }
        $this->asin = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for type');
        }
        $this->type = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class ShoppingCart
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $CartId;
	/**
	 * @var string
	 */
	public $HMAC;
	/**
	 * @var string
	 */
	public $PurchaseUrl;
	/**
	 * @var ItemArray
	 */
	public $Items;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCartId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CartId');
        }
        $this->CartId = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setHMAC($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HMAC');
        }
        $this->HMAC = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPurchaseUrl($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PurchaseUrl');
        }
        $this->PurchaseUrl = $val;
	}

	/**
	 * @param ItemArray $val
	 * @throws \Exception
	 */
	public function setItems($val)
	{
        $this->Items = $val;
	}
}

class GetShoppingCartRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $CartId;
	/**
	 * @var string
	 */
	public $HMAC;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCartId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CartId');
        }
        $this->CartId = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setHMAC($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HMAC');
        }
        $this->HMAC = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class ClearShoppingCartRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $CartId;
	/**
	 * @var string
	 */
	public $HMAC;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCartId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CartId');
        }
        $this->CartId = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setHMAC($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HMAC');
        }
        $this->HMAC = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class AddShoppingCartItemsRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $CartId;
	/**
	 * @var string
	 */
	public $HMAC;
	/**
	 * @var AddItemArray
	 */
	public $Items;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCartId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CartId');
        }
        $this->CartId = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setHMAC($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HMAC');
        }
        $this->HMAC = $val;
	}

	/**
	 * @param AddItemArray $val
	 * @throws \Exception
	 */
	public function setItems($val)
	{
        $this->Items = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class RemoveShoppingCartItemsRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $CartId;
	/**
	 * @var string
	 */
	public $HMAC;
	/**
	 * @var ItemIdArray
	 */
	public $Items;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCartId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CartId');
        }
        $this->CartId = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setHMAC($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HMAC');
        }
        $this->HMAC = $val;
	}

	/**
	 * @param ItemIdArray $val
	 * @throws \Exception
	 */
	public function setItems($val)
	{
        $this->Items = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

class ModifyShoppingCartItemsRequest
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $tag;
	/**
	 * @var string
	 */
	public $devtag;
	/**
	 * @var string
	 */
	public $CartId;
	/**
	 * @var string
	 */
	public $HMAC;
	/**
	 * @var ItemQuantityArray
	 */
	public $Items;
	/**
	 * @var string
	 */
	public $locale;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for tag');
        }
        $this->tag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDevtag($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for devtag');
        }
        $this->devtag = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCartId($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CartId');
        }
        $this->CartId = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setHMAC($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HMAC');
        }
        $this->HMAC = $val;
	}

	/**
	 * @param ItemQuantityArray $val
	 * @throws \Exception
	 */
	public function setItems($val)
	{
        $this->Items = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLocale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for locale');
        }
        $this->locale = $val;
	}
}

/**
 * AmazonSearchServiceClient
 */
class AmazonSearchServiceClient extends SoapClient {

	const WSDL_FILE = "AmazonWebServicesTest.wsdl";
	private $classmap = array(
        'ProductInfo' =>
            'ProductInfo',
        'Reviews' =>
            'Reviews',
        'MarketplaceSearch' =>
            'MarketplaceSearch',
        'SellerProfile' =>
            'SellerProfile',
        'SellerSearch' =>
            'SellerSearch',
        'ListingProductInfo' =>
            'ListingProductInfo',
        'ListingProductDetails' =>
            'ListingProductDetails',
        'SellerFeedback' =>
            'SellerFeedback',
        'ThirdPartyProductInfo' =>
            'ThirdPartyProductInfo',
        'KeywordRequest' =>
            'KeywordRequest',
        'PowerRequest' =>
            'PowerRequest',
        'BrowseNodeRequest' =>
            'BrowseNodeRequest',
        'AsinRequest' =>
            'AsinRequest',
        'BlendedRequest' =>
            'BlendedRequest',
        'UpcRequest' =>
            'UpcRequest',
        'ArtistRequest' =>
            'ArtistRequest',
        'AuthorRequest' =>
            'AuthorRequest',
        'ActorRequest' =>
            'ActorRequest',
        'DirectorRequest' =>
            'DirectorRequest',
        'ExchangeRequest' =>
            'ExchangeRequest',
        'ManufacturerRequest' =>
            'ManufacturerRequest',
        'ListManiaRequest' =>
            'ListManiaRequest',
        'WishlistRequest' =>
            'WishlistRequest',
        'MarketplaceRequest' =>
            'MarketplaceRequest',
        'SellerProfileRequest' =>
            'SellerProfileRequest',
        'SellerRequest' =>
            'SellerRequest',
        'SimilarityRequest' =>
            'SimilarityRequest',
        'ShoppingCart' =>
            'ShoppingCart',
        'GetShoppingCartRequest' =>
            'GetShoppingCartRequest',
        'ClearShoppingCartRequest' =>
            'ClearShoppingCartRequest',
        'AddShoppingCartItemsRequest' =>
            'AddShoppingCartItemsRequest',
        'RemoveShoppingCartItemsRequest' =>
            'RemoveShoppingCartItemsRequest',
        'ModifyShoppingCartItemsRequest' =>
            'ModifyShoppingCartItemsRequest',
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
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
	}

	/**
	 * KeywordSearchRequest
	 *
	 * @param KeywordRequest $KeywordSearchRequest
	 * @return ProductInfo
	 */
	public function KeywordSearchRequest(KeywordRequest $KeywordSearchRequest) {
        return $this->__soapCall(
            'KeywordSearchRequest',
            array($KeywordSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * PowerSearchRequest
	 *
	 * @param PowerRequest $PowerSearchRequest
	 * @return ProductInfo
	 */
	public function PowerSearchRequest(PowerRequest $PowerSearchRequest) {
        return $this->__soapCall(
            'PowerSearchRequest',
            array($PowerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * BrowseNodeSearchRequest
	 *
	 * @param BrowseNodeRequest $BrowseNodeSearchRequest
	 * @return ProductInfo
	 */
	public function BrowseNodeSearchRequest(BrowseNodeRequest $BrowseNodeSearchRequest) {
        return $this->__soapCall(
            'BrowseNodeSearchRequest',
            array($BrowseNodeSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * AsinSearchRequest
	 *
	 * @param AsinRequest $AsinSearchRequest
	 * @return ProductInfo
	 */
	public function AsinSearchRequest(AsinRequest $AsinSearchRequest) {
        return $this->__soapCall(
            'AsinSearchRequest',
            array($AsinSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * BlendedSearchRequest
	 *
	 * @param BlendedRequest $BlendedSearchRequest
	 * @return ProductLineArray
	 */
	public function BlendedSearchRequest(BlendedRequest $BlendedSearchRequest) {
        return $this->__soapCall(
            'BlendedSearchRequest',
            array($BlendedSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * UpcSearchRequest
	 *
	 * @param UpcRequest $UpcSearchRequest
	 * @return ProductInfo
	 */
	public function UpcSearchRequest(UpcRequest $UpcSearchRequest) {
        return $this->__soapCall(
            'UpcSearchRequest',
            array($UpcSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * AuthorSearchRequest
	 *
	 * @param AuthorRequest $AuthorSearchRequest
	 * @return ProductInfo
	 */
	public function AuthorSearchRequest(AuthorRequest $AuthorSearchRequest) {
        return $this->__soapCall(
            'AuthorSearchRequest',
            array($AuthorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ArtistSearchRequest
	 *
	 * @param ArtistRequest $ArtistSearchRequest
	 * @return ProductInfo
	 */
	public function ArtistSearchRequest(ArtistRequest $ArtistSearchRequest) {
        return $this->__soapCall(
            'ArtistSearchRequest',
            array($ArtistSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ActorSearchRequest
	 *
	 * @param ActorRequest $ActorSearchRequest
	 * @return ProductInfo
	 */
	public function ActorSearchRequest(ActorRequest $ActorSearchRequest) {
        return $this->__soapCall(
            'ActorSearchRequest',
            array($ActorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ManufacturerSearchRequest
	 *
	 * @param ManufacturerRequest $ManufacturerSearchRequest
	 * @return ProductInfo
	 */
	public function ManufacturerSearchRequest(ManufacturerRequest $ManufacturerSearchRequest) {
        return $this->__soapCall(
            'ManufacturerSearchRequest',
            array($ManufacturerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * DirectorSearchRequest
	 *
	 * @param DirectorRequest $DirectorSearchRequest
	 * @return ProductInfo
	 */
	public function DirectorSearchRequest(DirectorRequest $DirectorSearchRequest) {
        return $this->__soapCall(
            'DirectorSearchRequest',
            array($DirectorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ExchangeSearchRequest
	 *
	 * @param ExchangeRequest $ExchangeSearchRequest
	 * @return ListingProductDetails
	 */
	public function ExchangeSearchRequest(ExchangeRequest $ExchangeSearchRequest) {
        return $this->__soapCall(
            'ExchangeSearchRequest',
            array($ExchangeSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ListManiaSearchRequest
	 *
	 * @param ListManiaRequest $ListManiaSearchRequest
	 * @return ProductInfo
	 */
	public function ListManiaSearchRequest(ListManiaRequest $ListManiaSearchRequest) {
        return $this->__soapCall(
            'ListManiaSearchRequest',
            array($ListManiaSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * WishlistSearchRequest
	 *
	 * @param WishlistRequest $WishlistSearchRequest
	 * @return ProductInfo
	 */
	public function WishlistSearchRequest(WishlistRequest $WishlistSearchRequest) {
        return $this->__soapCall(
            'WishlistSearchRequest',
            array($WishlistSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * SellerProfileSearchRequest
	 *
	 * @param SellerProfileRequest $SellerProfileSearchRequest
	 * @return SellerProfile
	 */
	public function SellerProfileSearchRequest(SellerProfileRequest $SellerProfileSearchRequest) {
        return $this->__soapCall(
            'SellerProfileSearchRequest',
            array($SellerProfileSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * SellerSearchRequest
	 *
	 * @param SellerRequest $SellerSearchRequest
	 * @return SellerSearch
	 */
	public function SellerSearchRequest(SellerRequest $SellerSearchRequest) {
        return $this->__soapCall(
            'SellerSearchRequest',
            array($SellerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * MarketplaceSearchRequest
	 *
	 * @param MarketplaceRequest $MarketplaceSearchRequest
	 * @return MarketplaceSearch
	 */
	public function MarketplaceSearchRequest(MarketplaceRequest $MarketplaceSearchRequest) {
        return $this->__soapCall(
            'MarketplaceSearchRequest',
            array($MarketplaceSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * SimilaritySearchRequest
	 *
	 * @param SimilarityRequest $SimilaritySearchRequest
	 * @return ProductInfo
	 */
	public function SimilaritySearchRequest(SimilarityRequest $SimilaritySearchRequest) {
        return $this->__soapCall(
            'SimilaritySearchRequest',
            array($SimilaritySearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * GetShoppingCartRequest
	 *
	 * @param GetShoppingCartRequest $GetShoppingCartRequest
	 * @return ShoppingCart
	 */
	public function GetShoppingCartRequest(GetShoppingCartRequest $GetShoppingCartRequest) {
        return $this->__soapCall(
            'GetShoppingCartRequest',
            array($GetShoppingCartRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ClearShoppingCartRequest
	 *
	 * @param ClearShoppingCartRequest $ClearShoppingCartRequest
	 * @return ShoppingCart
	 */
	public function ClearShoppingCartRequest(ClearShoppingCartRequest $ClearShoppingCartRequest) {
        return $this->__soapCall(
            'ClearShoppingCartRequest',
            array($ClearShoppingCartRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * AddShoppingCartItemsRequest
	 *
	 * @param AddShoppingCartItemsRequest $AddShoppingCartItemsRequest
	 * @return ShoppingCart
	 */
	public function AddShoppingCartItemsRequest(AddShoppingCartItemsRequest $AddShoppingCartItemsRequest) {
        return $this->__soapCall(
            'AddShoppingCartItemsRequest',
            array($AddShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * RemoveShoppingCartItemsRequest
	 *
	 * @param RemoveShoppingCartItemsRequest $RemoveShoppingCartItemsRequest
	 * @return ShoppingCart
	 */
	public function RemoveShoppingCartItemsRequest(RemoveShoppingCartItemsRequest $RemoveShoppingCartItemsRequest) {
        return $this->__soapCall(
            'RemoveShoppingCartItemsRequest',
            array($RemoveShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ModifyShoppingCartItemsRequest
	 *
	 * @param ModifyShoppingCartItemsRequest $ModifyShoppingCartItemsRequest
	 * @return ShoppingCart
	 */
	public function ModifyShoppingCartItemsRequest(ModifyShoppingCartItemsRequest $ModifyShoppingCartItemsRequest) {
        return $this->__soapCall(
            'ModifyShoppingCartItemsRequest',
            array($ModifyShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}
}

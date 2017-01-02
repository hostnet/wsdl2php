<?php

namespace Controle\sub1\sub2;

/**
 * AmazonSearchServiceClient
 */
class AmazonSearchServiceClient extends \SoapClient {

	const WSDL_FILE = "AmazonWebServicesTest.wsdl";
	private $classmap = array(
        'ProductInfo' =>
            '\Controle\sub1\sub2\ProductInfo',
        'Reviews' =>
            '\Controle\sub1\sub2\Reviews',
        'MarketplaceSearch' =>
            '\Controle\sub1\sub2\MarketplaceSearch',
        'SellerProfile' =>
            '\Controle\sub1\sub2\SellerProfile',
        'SellerSearch' =>
            '\Controle\sub1\sub2\SellerSearch',
        'ListingProductInfo' =>
            '\Controle\sub1\sub2\ListingProductInfo',
        'ListingProductDetails' =>
            '\Controle\sub1\sub2\ListingProductDetails',
        'SellerFeedback' =>
            '\Controle\sub1\sub2\SellerFeedback',
        'ThirdPartyProductInfo' =>
            '\Controle\sub1\sub2\ThirdPartyProductInfo',
        'ShoppingCart' =>
            '\Controle\sub1\sub2\ShoppingCart',
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
	 * @param \Controle\sub1\sub2\KeywordRequest $KeywordSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function KeywordSearchRequest(\Controle\sub1\sub2\KeywordRequest $KeywordSearchRequest) {
        return $this->__soapCall(
            'KeywordSearchRequest',
            array($KeywordSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * PowerSearchRequest
	 *
	 * @param \Controle\sub1\sub2\PowerRequest $PowerSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function PowerSearchRequest(\Controle\sub1\sub2\PowerRequest $PowerSearchRequest) {
        return $this->__soapCall(
            'PowerSearchRequest',
            array($PowerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * BrowseNodeSearchRequest
	 *
	 * @param \Controle\sub1\sub2\BrowseNodeRequest $BrowseNodeSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function BrowseNodeSearchRequest(\Controle\sub1\sub2\BrowseNodeRequest $BrowseNodeSearchRequest) {
        return $this->__soapCall(
            'BrowseNodeSearchRequest',
            array($BrowseNodeSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * AsinSearchRequest
	 *
	 * @param \Controle\sub1\sub2\AsinRequest $AsinSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function AsinSearchRequest(\Controle\sub1\sub2\AsinRequest $AsinSearchRequest) {
        return $this->__soapCall(
            'AsinSearchRequest',
            array($AsinSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * BlendedSearchRequest
	 *
	 * @param \Controle\sub1\sub2\BlendedRequest $BlendedSearchRequest
	 * @return \Controle\sub1\sub2\ProductLineArray
	 */
	public function BlendedSearchRequest(\Controle\sub1\sub2\BlendedRequest $BlendedSearchRequest) {
        return $this->__soapCall(
            'BlendedSearchRequest',
            array($BlendedSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * UpcSearchRequest
	 *
	 * @param \Controle\sub1\sub2\UpcRequest $UpcSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function UpcSearchRequest(\Controle\sub1\sub2\UpcRequest $UpcSearchRequest) {
        return $this->__soapCall(
            'UpcSearchRequest',
            array($UpcSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * AuthorSearchRequest
	 *
	 * @param \Controle\sub1\sub2\AuthorRequest $AuthorSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function AuthorSearchRequest(\Controle\sub1\sub2\AuthorRequest $AuthorSearchRequest) {
        return $this->__soapCall(
            'AuthorSearchRequest',
            array($AuthorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ArtistSearchRequest
	 *
	 * @param \Controle\sub1\sub2\ArtistRequest $ArtistSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function ArtistSearchRequest(\Controle\sub1\sub2\ArtistRequest $ArtistSearchRequest) {
        return $this->__soapCall(
            'ArtistSearchRequest',
            array($ArtistSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ActorSearchRequest
	 *
	 * @param \Controle\sub1\sub2\ActorRequest $ActorSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function ActorSearchRequest(\Controle\sub1\sub2\ActorRequest $ActorSearchRequest) {
        return $this->__soapCall(
            'ActorSearchRequest',
            array($ActorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ManufacturerSearchRequest
	 *
	 * @param \Controle\sub1\sub2\ManufacturerRequest $ManufacturerSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function ManufacturerSearchRequest(\Controle\sub1\sub2\ManufacturerRequest $ManufacturerSearchRequest) {
        return $this->__soapCall(
            'ManufacturerSearchRequest',
            array($ManufacturerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * DirectorSearchRequest
	 *
	 * @param \Controle\sub1\sub2\DirectorRequest $DirectorSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function DirectorSearchRequest(\Controle\sub1\sub2\DirectorRequest $DirectorSearchRequest) {
        return $this->__soapCall(
            'DirectorSearchRequest',
            array($DirectorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ExchangeSearchRequest
	 *
	 * @param \Controle\sub1\sub2\ExchangeRequest $ExchangeSearchRequest
	 * @return \Controle\sub1\sub2\ListingProductDetails
	 */
	public function ExchangeSearchRequest(\Controle\sub1\sub2\ExchangeRequest $ExchangeSearchRequest) {
        return $this->__soapCall(
            'ExchangeSearchRequest',
            array($ExchangeSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ListManiaSearchRequest
	 *
	 * @param \Controle\sub1\sub2\ListManiaRequest $ListManiaSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function ListManiaSearchRequest(\Controle\sub1\sub2\ListManiaRequest $ListManiaSearchRequest) {
        return $this->__soapCall(
            'ListManiaSearchRequest',
            array($ListManiaSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * WishlistSearchRequest
	 *
	 * @param \Controle\sub1\sub2\WishlistRequest $WishlistSearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function WishlistSearchRequest(\Controle\sub1\sub2\WishlistRequest $WishlistSearchRequest) {
        return $this->__soapCall(
            'WishlistSearchRequest',
            array($WishlistSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * SellerProfileSearchRequest
	 *
	 * @param \Controle\sub1\sub2\SellerProfileRequest $SellerProfileSearchRequest
	 * @return \Controle\sub1\sub2\SellerProfile
	 */
	public function SellerProfileSearchRequest(\Controle\sub1\sub2\SellerProfileRequest $SellerProfileSearchRequest) {
        return $this->__soapCall(
            'SellerProfileSearchRequest',
            array($SellerProfileSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * SellerSearchRequest
	 *
	 * @param \Controle\sub1\sub2\SellerRequest $SellerSearchRequest
	 * @return \Controle\sub1\sub2\SellerSearch
	 */
	public function SellerSearchRequest(\Controle\sub1\sub2\SellerRequest $SellerSearchRequest) {
        return $this->__soapCall(
            'SellerSearchRequest',
            array($SellerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * MarketplaceSearchRequest
	 *
	 * @param \Controle\sub1\sub2\MarketplaceRequest $MarketplaceSearchRequest
	 * @return \Controle\sub1\sub2\MarketplaceSearch
	 */
	public function MarketplaceSearchRequest(\Controle\sub1\sub2\MarketplaceRequest $MarketplaceSearchRequest) {
        return $this->__soapCall(
            'MarketplaceSearchRequest',
            array($MarketplaceSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * SimilaritySearchRequest
	 *
	 * @param \Controle\sub1\sub2\SimilarityRequest $SimilaritySearchRequest
	 * @return \Controle\sub1\sub2\ProductInfo
	 */
	public function SimilaritySearchRequest(\Controle\sub1\sub2\SimilarityRequest $SimilaritySearchRequest) {
        return $this->__soapCall(
            'SimilaritySearchRequest',
            array($SimilaritySearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * GetShoppingCartRequest
	 *
	 * @param \Controle\sub1\sub2\GetShoppingCartRequest $GetShoppingCartRequest
	 * @return \Controle\sub1\sub2\ShoppingCart
	 */
	public function GetShoppingCartRequest(\Controle\sub1\sub2\GetShoppingCartRequest $GetShoppingCartRequest) {
        return $this->__soapCall(
            'GetShoppingCartRequest',
            array($GetShoppingCartRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ClearShoppingCartRequest
	 *
	 * @param \Controle\sub1\sub2\ClearShoppingCartRequest $ClearShoppingCartRequest
	 * @return \Controle\sub1\sub2\ShoppingCart
	 */
	public function ClearShoppingCartRequest(\Controle\sub1\sub2\ClearShoppingCartRequest $ClearShoppingCartRequest) {
        return $this->__soapCall(
            'ClearShoppingCartRequest',
            array($ClearShoppingCartRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * AddShoppingCartItemsRequest
	 *
	 * @param \Controle\sub1\sub2\AddShoppingCartItemsRequest $AddShoppingCartItemsRequest
	 * @return \Controle\sub1\sub2\ShoppingCart
	 */
	public function AddShoppingCartItemsRequest(\Controle\sub1\sub2\AddShoppingCartItemsRequest $AddShoppingCartItemsRequest) {
        return $this->__soapCall(
            'AddShoppingCartItemsRequest',
            array($AddShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * RemoveShoppingCartItemsRequest
	 *
	 * @param \Controle\sub1\sub2\RemoveShoppingCartItemsRequest $RemoveShoppingCartItemsRequest
	 * @return \Controle\sub1\sub2\ShoppingCart
	 */
	public function RemoveShoppingCartItemsRequest(\Controle\sub1\sub2\RemoveShoppingCartItemsRequest $RemoveShoppingCartItemsRequest) {
        return $this->__soapCall(
            'RemoveShoppingCartItemsRequest',
            array($RemoveShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}

	/**
	 * ModifyShoppingCartItemsRequest
	 *
	 * @param \Controle\sub1\sub2\ModifyShoppingCartItemsRequest $ModifyShoppingCartItemsRequest
	 * @return \Controle\sub1\sub2\ShoppingCart
	 */
	public function ModifyShoppingCartItemsRequest(\Controle\sub1\sub2\ModifyShoppingCartItemsRequest $ModifyShoppingCartItemsRequest) {
        return $this->__soapCall(
            'ModifyShoppingCartItemsRequest',
            array($ModifyShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
	}
}

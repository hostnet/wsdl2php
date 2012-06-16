<?php

namespace Controle;
/**
 * AmazonSearchServiceClient
 */
class AmazonSearchServiceClient extends \SoapClient {

    const WSDL_FILE = "AmazonWebServicesTest.wsdl";
    private $classmap = array(
        'ProductInfo' => '\Controle\ProductInfo',
        'Reviews' => '\Controle\Reviews',
        'MarketplaceSearch' => '\Controle\MarketplaceSearch',
        'SellerProfile' => '\Controle\SellerProfile',
        'SellerSearch' => '\Controle\SellerSearch',
        'ListingProductInfo' => '\Controle\ListingProductInfo',
        'ListingProductDetails' => '\Controle\ListingProductDetails',
        'SellerFeedback' => '\Controle\SellerFeedback',
        'ThirdPartyProductInfo' => '\Controle\ThirdPartyProductInfo',
        'ShoppingCart' => '\Controle\ShoppingCart',
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
     * KeywordSearchRequest
     *
     * @param \Controle\KeywordRequest $KeywordSearchRequest
     * @return \Controle\ProductInfo
     */
    public function KeywordSearchRequest(\Controle\KeywordRequest $KeywordSearchRequest) {
        return $this->__soapCall(
            'KeywordSearchRequest',
            array($KeywordSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * PowerSearchRequest
     *
     * @param \Controle\PowerRequest $PowerSearchRequest
     * @return \Controle\ProductInfo
     */
    public function PowerSearchRequest(\Controle\PowerRequest $PowerSearchRequest) {
        return $this->__soapCall(
            'PowerSearchRequest',
            array($PowerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * BrowseNodeSearchRequest
     *
     * @param \Controle\BrowseNodeRequest $BrowseNodeSearchRequest
     * @return \Controle\ProductInfo
     */
    public function BrowseNodeSearchRequest(\Controle\BrowseNodeRequest $BrowseNodeSearchRequest) {
        return $this->__soapCall(
            'BrowseNodeSearchRequest',
            array($BrowseNodeSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * AsinSearchRequest
     *
     * @param \Controle\AsinRequest $AsinSearchRequest
     * @return \Controle\ProductInfo
     */
    public function AsinSearchRequest(\Controle\AsinRequest $AsinSearchRequest) {
        return $this->__soapCall(
            'AsinSearchRequest',
            array($AsinSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * BlendedSearchRequest
     *
     * @param \Controle\BlendedRequest $BlendedSearchRequest
     * @return \Controle\ProductLineArray
     */
    public function BlendedSearchRequest(\Controle\BlendedRequest $BlendedSearchRequest) {
        return $this->__soapCall(
            'BlendedSearchRequest',
            array($BlendedSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * UpcSearchRequest
     *
     * @param \Controle\UpcRequest $UpcSearchRequest
     * @return \Controle\ProductInfo
     */
    public function UpcSearchRequest(\Controle\UpcRequest $UpcSearchRequest) {
        return $this->__soapCall(
            'UpcSearchRequest',
            array($UpcSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * AuthorSearchRequest
     *
     * @param \Controle\AuthorRequest $AuthorSearchRequest
     * @return \Controle\ProductInfo
     */
    public function AuthorSearchRequest(\Controle\AuthorRequest $AuthorSearchRequest) {
        return $this->__soapCall(
            'AuthorSearchRequest',
            array($AuthorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ArtistSearchRequest
     *
     * @param \Controle\ArtistRequest $ArtistSearchRequest
     * @return \Controle\ProductInfo
     */
    public function ArtistSearchRequest(\Controle\ArtistRequest $ArtistSearchRequest) {
        return $this->__soapCall(
            'ArtistSearchRequest',
            array($ArtistSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ActorSearchRequest
     *
     * @param \Controle\ActorRequest $ActorSearchRequest
     * @return \Controle\ProductInfo
     */
    public function ActorSearchRequest(\Controle\ActorRequest $ActorSearchRequest) {
        return $this->__soapCall(
            'ActorSearchRequest',
            array($ActorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ManufacturerSearchRequest
     *
     * @param \Controle\ManufacturerRequest $ManufacturerSearchRequest
     * @return \Controle\ProductInfo
     */
    public function ManufacturerSearchRequest(\Controle\ManufacturerRequest $ManufacturerSearchRequest) {
        return $this->__soapCall(
            'ManufacturerSearchRequest',
            array($ManufacturerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * DirectorSearchRequest
     *
     * @param \Controle\DirectorRequest $DirectorSearchRequest
     * @return \Controle\ProductInfo
     */
    public function DirectorSearchRequest(\Controle\DirectorRequest $DirectorSearchRequest) {
        return $this->__soapCall(
            'DirectorSearchRequest',
            array($DirectorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ExchangeSearchRequest
     *
     * @param \Controle\ExchangeRequest $ExchangeSearchRequest
     * @return \Controle\ListingProductDetails
     */
    public function ExchangeSearchRequest(\Controle\ExchangeRequest $ExchangeSearchRequest) {
        return $this->__soapCall(
            'ExchangeSearchRequest',
            array($ExchangeSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ListManiaSearchRequest
     *
     * @param \Controle\ListManiaRequest $ListManiaSearchRequest
     * @return \Controle\ProductInfo
     */
    public function ListManiaSearchRequest(\Controle\ListManiaRequest $ListManiaSearchRequest) {
        return $this->__soapCall(
            'ListManiaSearchRequest',
            array($ListManiaSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * WishlistSearchRequest
     *
     * @param \Controle\WishlistRequest $WishlistSearchRequest
     * @return \Controle\ProductInfo
     */
    public function WishlistSearchRequest(\Controle\WishlistRequest $WishlistSearchRequest) {
        return $this->__soapCall(
            'WishlistSearchRequest',
            array($WishlistSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * SellerProfileSearchRequest
     *
     * @param \Controle\SellerProfileRequest $SellerProfileSearchRequest
     * @return \Controle\SellerProfile
     */
    public function SellerProfileSearchRequest(\Controle\SellerProfileRequest $SellerProfileSearchRequest) {
        return $this->__soapCall(
            'SellerProfileSearchRequest',
            array($SellerProfileSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * SellerSearchRequest
     *
     * @param \Controle\SellerRequest $SellerSearchRequest
     * @return \Controle\SellerSearch
     */
    public function SellerSearchRequest(\Controle\SellerRequest $SellerSearchRequest) {
        return $this->__soapCall(
            'SellerSearchRequest',
            array($SellerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * MarketplaceSearchRequest
     *
     * @param \Controle\MarketplaceRequest $MarketplaceSearchRequest
     * @return \Controle\MarketplaceSearch
     */
    public function MarketplaceSearchRequest(\Controle\MarketplaceRequest $MarketplaceSearchRequest) {
        return $this->__soapCall(
            'MarketplaceSearchRequest',
            array($MarketplaceSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * SimilaritySearchRequest
     *
     * @param \Controle\SimilarityRequest $SimilaritySearchRequest
     * @return \Controle\ProductInfo
     */
    public function SimilaritySearchRequest(\Controle\SimilarityRequest $SimilaritySearchRequest) {
        return $this->__soapCall(
            'SimilaritySearchRequest',
            array($SimilaritySearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * GetShoppingCartRequest
     *
     * @param \Controle\GetShoppingCartRequest $GetShoppingCartRequest
     * @return \Controle\ShoppingCart
     */
    public function GetShoppingCartRequest(\Controle\GetShoppingCartRequest $GetShoppingCartRequest) {
        return $this->__soapCall(
            'GetShoppingCartRequest',
            array($GetShoppingCartRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ClearShoppingCartRequest
     *
     * @param \Controle\ClearShoppingCartRequest $ClearShoppingCartRequest
     * @return \Controle\ShoppingCart
     */
    public function ClearShoppingCartRequest(\Controle\ClearShoppingCartRequest $ClearShoppingCartRequest) {
        return $this->__soapCall(
            'ClearShoppingCartRequest',
            array($ClearShoppingCartRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * AddShoppingCartItemsRequest
     *
     * @param \Controle\AddShoppingCartItemsRequest $AddShoppingCartItemsRequest
     * @return \Controle\ShoppingCart
     */
    public function AddShoppingCartItemsRequest(\Controle\AddShoppingCartItemsRequest $AddShoppingCartItemsRequest) {
        return $this->__soapCall(
            'AddShoppingCartItemsRequest',
            array($AddShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * RemoveShoppingCartItemsRequest
     *
     * @param \Controle\RemoveShoppingCartItemsRequest $RemoveShoppingCartItemsRequest
     * @return \Controle\ShoppingCart
     */
    public function RemoveShoppingCartItemsRequest(\Controle\RemoveShoppingCartItemsRequest $RemoveShoppingCartItemsRequest) {
        return $this->__soapCall(
            'RemoveShoppingCartItemsRequest',
            array($RemoveShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ModifyShoppingCartItemsRequest
     *
     * @param \Controle\ModifyShoppingCartItemsRequest $ModifyShoppingCartItemsRequest
     * @return \Controle\ShoppingCart
     */
    public function ModifyShoppingCartItemsRequest(\Controle\ModifyShoppingCartItemsRequest $ModifyShoppingCartItemsRequest) {
        return $this->__soapCall(
            'ModifyShoppingCartItemsRequest',
            array($ModifyShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

}

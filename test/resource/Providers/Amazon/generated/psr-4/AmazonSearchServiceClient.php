<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AmazonSearchServiceClient
 */
class AmazonSearchServiceClient extends \SoapClient
{
    const WSDL_FILE = "AmazonWebServicesTest.wsdl";

    private $classmap = array(
        'ProductInfo' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo',
        'Reviews' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\Reviews',
        'MarketplaceSearch' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\MarketplaceSearch',
        'SellerProfile' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerProfile',
        'SellerSearch' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerSearch',
        'ListingProductInfo' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingProductInfo',
        'ListingProductDetails' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ListingProductDetails',
        'SellerFeedback' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\SellerFeedback',
        'ThirdPartyProductInfo' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ThirdPartyProductInfo',
        'ShoppingCart' =>
            '\Controle\Hostnet\Namesp\Sub4\Complex\ShoppingCart',
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
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
    }

    /**
     * KeywordSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\KeywordRequest $KeywordSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function keywordSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\KeywordRequest $KeywordSearchRequest
    ) {
        return $this->__soapCall(
            'KeywordSearchRequest',
            array($KeywordSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * PowerSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\PowerRequest $PowerSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function powerSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\PowerRequest $PowerSearchRequest
    ) {
        return $this->__soapCall(
            'PowerSearchRequest',
            array($PowerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * BrowseNodeSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\BrowseNodeRequest $BrowseNodeSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function browseNodeSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\BrowseNodeRequest $BrowseNodeSearchRequest
    ) {
        return $this->__soapCall(
            'BrowseNodeSearchRequest',
            array($BrowseNodeSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * AsinSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AsinRequest $AsinSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function asinSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\AsinRequest $AsinSearchRequest
    ) {
        return $this->__soapCall(
            'AsinSearchRequest',
            array($AsinSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * BlendedSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\BlendedRequest $BlendedSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductLineArray
     */
    public function blendedSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\BlendedRequest $BlendedSearchRequest
    ) {
        return $this->__soapCall(
            'BlendedSearchRequest',
            array($BlendedSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * UpcSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\UpcRequest $UpcSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function upcSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\UpcRequest $UpcSearchRequest
    ) {
        return $this->__soapCall(
            'UpcSearchRequest',
            array($UpcSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * AuthorSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AuthorRequest $AuthorSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function authorSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\AuthorRequest $AuthorSearchRequest
    ) {
        return $this->__soapCall(
            'AuthorSearchRequest',
            array($AuthorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ArtistSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ArtistRequest $ArtistSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function artistSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\ArtistRequest $ArtistSearchRequest
    ) {
        return $this->__soapCall(
            'ArtistSearchRequest',
            array($ArtistSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ActorSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ActorRequest $ActorSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function actorSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\ActorRequest $ActorSearchRequest
    ) {
        return $this->__soapCall(
            'ActorSearchRequest',
            array($ActorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ManufacturerSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ManufacturerRequest $ManufacturerSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function manufacturerSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\ManufacturerRequest $ManufacturerSearchRequest
    ) {
        return $this->__soapCall(
            'ManufacturerSearchRequest',
            array($ManufacturerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * DirectorSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\DirectorRequest $DirectorSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function directorSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\DirectorRequest $DirectorSearchRequest
    ) {
        return $this->__soapCall(
            'DirectorSearchRequest',
            array($DirectorSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ExchangeSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ExchangeRequest $ExchangeSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ListingProductDetails
     */
    public function exchangeSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\ExchangeRequest $ExchangeSearchRequest
    ) {
        return $this->__soapCall(
            'ExchangeSearchRequest',
            array($ExchangeSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ListManiaSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ListManiaRequest $ListManiaSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function listManiaSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\ListManiaRequest $ListManiaSearchRequest
    ) {
        return $this->__soapCall(
            'ListManiaSearchRequest',
            array($ListManiaSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * WishlistSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\WishlistRequest $WishlistSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function wishlistSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\WishlistRequest $WishlistSearchRequest
    ) {
        return $this->__soapCall(
            'WishlistSearchRequest',
            array($WishlistSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * SellerProfileSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SellerProfileRequest $SellerProfileSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SellerProfile
     */
    public function sellerProfileSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\SellerProfileRequest $SellerProfileSearchRequest
    ) {
        return $this->__soapCall(
            'SellerProfileSearchRequest',
            array($SellerProfileSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * SellerSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SellerRequest $SellerSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\SellerSearch
     */
    public function sellerSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\SellerRequest $SellerSearchRequest
    ) {
        return $this->__soapCall(
            'SellerSearchRequest',
            array($SellerSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * MarketplaceSearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\MarketplaceRequest $MarketplaceSearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\MarketplaceSearch
     */
    public function marketplaceSearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\MarketplaceRequest $MarketplaceSearchRequest
    ) {
        return $this->__soapCall(
            'MarketplaceSearchRequest',
            array($MarketplaceSearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * SimilaritySearchRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\SimilarityRequest $SimilaritySearchRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ProductInfo
     */
    public function similaritySearchRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\SimilarityRequest $SimilaritySearchRequest
    ) {
        return $this->__soapCall(
            'SimilaritySearchRequest',
            array($SimilaritySearchRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * GetShoppingCartRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\GetShoppingCartRequest $GetShoppingCartRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ShoppingCart
     */
    public function getShoppingCartRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\GetShoppingCartRequest $GetShoppingCartRequest
    ) {
        return $this->__soapCall(
            'GetShoppingCartRequest',
            array($GetShoppingCartRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ClearShoppingCartRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ClearShoppingCartRequest $ClearShoppingCartRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ShoppingCart
     */
    public function clearShoppingCartRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\ClearShoppingCartRequest $ClearShoppingCartRequest
    ) {
        return $this->__soapCall(
            'ClearShoppingCartRequest',
            array($ClearShoppingCartRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * AddShoppingCartItemsRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\AddShoppingCartItemsRequest $AddShoppingCartItemsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ShoppingCart
     */
    public function addShoppingCartItemsRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\AddShoppingCartItemsRequest $AddShoppingCartItemsRequest
    ) {
        return $this->__soapCall(
            'AddShoppingCartItemsRequest',
            array($AddShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * RemoveShoppingCartItemsRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\RemoveShoppingCartItemsRequest $RemoveShoppingCartItemsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ShoppingCart
     */
    public function removeShoppingCartItemsRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\RemoveShoppingCartItemsRequest $RemoveShoppingCartItemsRequest
    ) {
        return $this->__soapCall(
            'RemoveShoppingCartItemsRequest',
            array($RemoveShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }

    /**
     * ModifyShoppingCartItemsRequest
     *
     * @param \Controle\Hostnet\Namesp\Sub4\Complex\ModifyShoppingCartItemsRequest $ModifyShoppingCartItemsRequest
     * @return \Controle\Hostnet\Namesp\Sub4\Complex\ShoppingCart
     */
    public function modifyShoppingCartItemsRequest(
        \Controle\Hostnet\Namesp\Sub4\Complex\ModifyShoppingCartItemsRequest $ModifyShoppingCartItemsRequest
    ) {
        return $this->__soapCall(
            'ModifyShoppingCartItemsRequest',
            array($ModifyShoppingCartItemsRequest),
            array('uri'=>'http://soap.amazon.com')
        );
    }
}

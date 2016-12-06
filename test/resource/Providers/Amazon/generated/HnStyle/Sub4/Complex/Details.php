<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Details
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $Url;
    /**
     * @var string
     */
    public $Asin;
    /**
     * @var string
     */
    public $ProductName;
    /**
     * @var string
     */
    public $Catalog;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\KeyPhraseArray
     */
    public $KeyPhrases;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ArtistArray
     */
    public $Artists;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AuthorArray
     */
    public $Authors;
    /**
     * @var string
     */
    public $Mpn;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StarringArray
     */
    public $Starring;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DirectorArray
     */
    public $Directors;
    /**
     * @var string
     */
    public $TheatricalReleaseDate;
    /**
     * @var string
     */
    public $ReleaseDate;
    /**
     * @var string
     */
    public $Manufacturer;
    /**
     * @var string
     */
    public $Distributor;
    /**
     * @var string
     */
    public $ImageUrlSmall;
    /**
     * @var string
     */
    public $ImageUrlMedium;
    /**
     * @var string
     */
    public $ImageUrlLarge;
    /**
     * @var string
     */
    public $ListPrice;
    /**
     * @var string
     */
    public $OurPrice;
    /**
     * @var string
     */
    public $UsedPrice;
    /**
     * @var string
     */
    public $RefurbishedPrice;
    /**
     * @var string
     */
    public $CollectiblePrice;
    /**
     * @var string
     */
    public $ThirdPartyNewPrice;
    /**
     * @var string
     */
    public $NumberOfOfferings;
    /**
     * @var string
     */
    public $ThirdPartyNewCount;
    /**
     * @var string
     */
    public $UsedCount;
    /**
     * @var string
     */
    public $CollectibleCount;
    /**
     * @var string
     */
    public $RefurbishedCount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ThirdPartyProductInfo
     */
    public $ThirdPartyProductInfo;
    /**
     * @var string
     */
    public $SalesRank;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BrowseNodeArray
     */
    public $BrowseList;
    /**
     * @var string
     */
    public $Media;
    /**
     * @var string
     */
    public $ReadingLevel;
    /**
     * @var string
     */
    public $NumberOfPages;
    /**
     * @var string
     */
    public $NumberOfIssues;
    /**
     * @var string
     */
    public $IssuesPerYear;
    /**
     * @var string
     */
    public $SubscriptionLength;
    /**
     * @var string
     */
    public $DeweyNumber;
    /**
     * @var string
     */
    public $RunningTime;
    /**
     * @var string
     */
    public $Publisher;
    /**
     * @var string
     */
    public $NumMedia;
    /**
     * @var string
     */
    public $Isbn;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeaturesArray
     */
    public $Features;
    /**
     * @var string
     */
    public $MpaaRating;
    /**
     * @var string
     */
    public $EsrbRating;
    /**
     * @var string
     */
    public $AgeGroup;
    /**
     * @var string
     */
    public $Availability;
    /**
     * @var string
     */
    public $Upc;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TrackArray
     */
    public $Tracks;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AccessoryArray
     */
    public $Accessories;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PlatformArray
     */
    public $Platforms;
    /**
     * @var string
     */
    public $Encoding;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Reviews
     */
    public $Reviews;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SimilarProductsArray
     */
    public $SimilarProducts;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListArray
     */
    public $Lists;
    /**
     * @var string
     */
    public $Status;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setUrl($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Url');
        }
        $this->Url = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAsin($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Asin');
        }
        $this->Asin = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setProductName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ProductName');
        }
        $this->ProductName = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCatalog($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Catalog');
        }
        $this->Catalog = $val;
    }

    /**
     * @param KeyPhraseArray $val
     * @throws Exception
     */
    public function setKeyPhrases($val)
    {
        $this->KeyPhrases = $val;
    }

    /**
     * @param ArtistArray $val
     * @throws Exception
     */
    public function setArtists($val)
    {
        $this->Artists = $val;
    }

    /**
     * @param AuthorArray $val
     * @throws Exception
     */
    public function setAuthors($val)
    {
        $this->Authors = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMpn($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Mpn');
        }
        $this->Mpn = $val;
    }

    /**
     * @param StarringArray $val
     * @throws Exception
     */
    public function setStarring($val)
    {
        $this->Starring = $val;
    }

    /**
     * @param DirectorArray $val
     * @throws Exception
     */
    public function setDirectors($val)
    {
        $this->Directors = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTheatricalReleaseDate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TheatricalReleaseDate');
        }
        $this->TheatricalReleaseDate = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setReleaseDate($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ReleaseDate');
        }
        $this->ReleaseDate = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setManufacturer($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Manufacturer');
        }
        $this->Manufacturer = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDistributor($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Distributor');
        }
        $this->Distributor = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setImageUrlSmall($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ImageUrlSmall');
        }
        $this->ImageUrlSmall = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setImageUrlMedium($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ImageUrlMedium');
        }
        $this->ImageUrlMedium = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setImageUrlLarge($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ImageUrlLarge');
        }
        $this->ImageUrlLarge = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setListPrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListPrice');
        }
        $this->ListPrice = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setOurPrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for OurPrice');
        }
        $this->OurPrice = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setUsedPrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for UsedPrice');
        }
        $this->UsedPrice = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRefurbishedPrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RefurbishedPrice');
        }
        $this->RefurbishedPrice = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCollectiblePrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CollectiblePrice');
        }
        $this->CollectiblePrice = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setThirdPartyNewPrice($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ThirdPartyNewPrice');
        }
        $this->ThirdPartyNewPrice = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumberOfOfferings($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NumberOfOfferings');
        }
        $this->NumberOfOfferings = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setThirdPartyNewCount($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ThirdPartyNewCount');
        }
        $this->ThirdPartyNewCount = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setUsedCount($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for UsedCount');
        }
        $this->UsedCount = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCollectibleCount($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CollectibleCount');
        }
        $this->CollectibleCount = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRefurbishedCount($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RefurbishedCount');
        }
        $this->RefurbishedCount = $val;
    }

    /**
     * @param ThirdPartyProductInfo $val
     * @throws Exception
     */
    public function setThirdPartyProductInfo($val)
    {
        $this->ThirdPartyProductInfo = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSalesRank($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SalesRank');
        }
        $this->SalesRank = $val;
    }

    /**
     * @param BrowseNodeArray $val
     * @throws Exception
     */
    public function setBrowseList($val)
    {
        $this->BrowseList = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMedia($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Media');
        }
        $this->Media = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setReadingLevel($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ReadingLevel');
        }
        $this->ReadingLevel = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumberOfPages($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NumberOfPages');
        }
        $this->NumberOfPages = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumberOfIssues($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NumberOfIssues');
        }
        $this->NumberOfIssues = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setIssuesPerYear($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for IssuesPerYear');
        }
        $this->IssuesPerYear = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSubscriptionLength($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for SubscriptionLength');
        }
        $this->SubscriptionLength = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDeweyNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for DeweyNumber');
        }
        $this->DeweyNumber = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRunningTime($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RunningTime');
        }
        $this->RunningTime = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPublisher($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Publisher');
        }
        $this->Publisher = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNumMedia($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NumMedia');
        }
        $this->NumMedia = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setIsbn($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Isbn');
        }
        $this->Isbn = $val;
    }

    /**
     * @param FeaturesArray $val
     * @throws Exception
     */
    public function setFeatures($val)
    {
        $this->Features = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMpaaRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MpaaRating');
        }
        $this->MpaaRating = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEsrbRating($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EsrbRating');
        }
        $this->EsrbRating = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAgeGroup($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AgeGroup');
        }
        $this->AgeGroup = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setAvailability($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Availability');
        }
        $this->Availability = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setUpc($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Upc');
        }
        $this->Upc = $val;
    }

    /**
     * @param TrackArray $val
     * @throws Exception
     */
    public function setTracks($val)
    {
        $this->Tracks = $val;
    }

    /**
     * @param AccessoryArray $val
     * @throws Exception
     */
    public function setAccessories($val)
    {
        $this->Accessories = $val;
    }

    /**
     * @param PlatformArray $val
     * @throws Exception
     */
    public function setPlatforms($val)
    {
        $this->Platforms = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEncoding($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Encoding');
        }
        $this->Encoding = $val;
    }

    /**
     * @param Reviews $val
     * @throws Exception
     */
    public function setReviews($val)
    {
        $this->Reviews = $val;
    }

    /**
     * @param SimilarProductsArray $val
     * @throws Exception
     */
    public function setSimilarProducts($val)
    {
        $this->SimilarProducts = $val;
    }

    /**
     * @param ListArray $val
     * @throws Exception
     */
    public function setLists($val)
    {
        $this->Lists = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Status');
        }
        $this->Status = $val;
    }
}

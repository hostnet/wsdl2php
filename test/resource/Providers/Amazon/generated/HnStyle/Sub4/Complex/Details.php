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
        $this->Url = (int)$val;
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
        $this->Asin = (int)$val;
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
        $this->ProductName = (int)$val;
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
        $this->Catalog = (int)$val;
    }

    /**
     * @param KeyPhraseArray $val
     * @throws Exception
     */
    public function setKeyPhrases($val)
    {
        $this->KeyPhrases = (int)$val;
    }

    /**
     * @param ArtistArray $val
     * @throws Exception
     */
    public function setArtists($val)
    {
        $this->Artists = (int)$val;
    }

    /**
     * @param AuthorArray $val
     * @throws Exception
     */
    public function setAuthors($val)
    {
        $this->Authors = (int)$val;
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
        $this->Mpn = (int)$val;
    }

    /**
     * @param StarringArray $val
     * @throws Exception
     */
    public function setStarring($val)
    {
        $this->Starring = (int)$val;
    }

    /**
     * @param DirectorArray $val
     * @throws Exception
     */
    public function setDirectors($val)
    {
        $this->Directors = (int)$val;
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
        $this->TheatricalReleaseDate = (int)$val;
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
        $this->ReleaseDate = (int)$val;
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
        $this->Manufacturer = (int)$val;
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
        $this->Distributor = (int)$val;
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
        $this->ImageUrlSmall = (int)$val;
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
        $this->ImageUrlMedium = (int)$val;
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
        $this->ImageUrlLarge = (int)$val;
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
        $this->ListPrice = (int)$val;
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
        $this->OurPrice = (int)$val;
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
        $this->UsedPrice = (int)$val;
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
        $this->RefurbishedPrice = (int)$val;
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
        $this->CollectiblePrice = (int)$val;
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
        $this->ThirdPartyNewPrice = (int)$val;
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
        $this->NumberOfOfferings = (int)$val;
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
        $this->ThirdPartyNewCount = (int)$val;
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
        $this->UsedCount = (int)$val;
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
        $this->CollectibleCount = (int)$val;
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
        $this->RefurbishedCount = (int)$val;
    }

    /**
     * @param ThirdPartyProductInfo $val
     * @throws Exception
     */
    public function setThirdPartyProductInfo($val)
    {
        $this->ThirdPartyProductInfo = (int)$val;
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
        $this->SalesRank = (int)$val;
    }

    /**
     * @param BrowseNodeArray $val
     * @throws Exception
     */
    public function setBrowseList($val)
    {
        $this->BrowseList = (int)$val;
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
        $this->Media = (int)$val;
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
        $this->ReadingLevel = (int)$val;
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
        $this->NumberOfPages = (int)$val;
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
        $this->NumberOfIssues = (int)$val;
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
        $this->IssuesPerYear = (int)$val;
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
        $this->SubscriptionLength = (int)$val;
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
        $this->DeweyNumber = (int)$val;
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
        $this->RunningTime = (int)$val;
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
        $this->Publisher = (int)$val;
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
        $this->NumMedia = (int)$val;
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
        $this->Isbn = (int)$val;
    }

    /**
     * @param FeaturesArray $val
     * @throws Exception
     */
    public function setFeatures($val)
    {
        $this->Features = (int)$val;
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
        $this->MpaaRating = (int)$val;
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
        $this->EsrbRating = (int)$val;
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
        $this->AgeGroup = (int)$val;
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
        $this->Availability = (int)$val;
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
        $this->Upc = (int)$val;
    }

    /**
     * @param TrackArray $val
     * @throws Exception
     */
    public function setTracks($val)
    {
        $this->Tracks = (int)$val;
    }

    /**
     * @param AccessoryArray $val
     * @throws Exception
     */
    public function setAccessories($val)
    {
        $this->Accessories = (int)$val;
    }

    /**
     * @param PlatformArray $val
     * @throws Exception
     */
    public function setPlatforms($val)
    {
        $this->Platforms = (int)$val;
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
        $this->Encoding = (int)$val;
    }

    /**
     * @param Reviews $val
     * @throws Exception
     */
    public function setReviews($val)
    {
        $this->Reviews = (int)$val;
    }

    /**
     * @param SimilarProductsArray $val
     * @throws Exception
     */
    public function setSimilarProducts($val)
    {
        $this->SimilarProducts = (int)$val;
    }

    /**
     * @param ListArray $val
     * @throws Exception
     */
    public function setLists($val)
    {
        $this->Lists = (int)$val;
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
        $this->Status = (int)$val;
    }
}

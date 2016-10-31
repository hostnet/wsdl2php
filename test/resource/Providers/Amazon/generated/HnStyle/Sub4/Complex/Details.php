<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Details
{
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $asin;
    /**
     * @var string
     */
    public $productname;
    /**
     * @var string
     */
    public $catalog;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\KeyPhraseArray
     */
    public $keyphrases;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ArtistArray
     */
    public $artists;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AuthorArray
     */
    public $authors;
    /**
     * @var string
     */
    public $mpn;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\StarringArray
     */
    public $starring;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DirectorArray
     */
    public $directors;
    /**
     * @var string
     */
    public $theatricalreleasedate;
    /**
     * @var string
     */
    public $releasedate;
    /**
     * @var string
     */
    public $manufacturer;
    /**
     * @var string
     */
    public $distributor;
    /**
     * @var string
     */
    public $imageurlsmall;
    /**
     * @var string
     */
    public $imageurlmedium;
    /**
     * @var string
     */
    public $imageurllarge;
    /**
     * @var string
     */
    public $listprice;
    /**
     * @var string
     */
    public $ourprice;
    /**
     * @var string
     */
    public $usedprice;
    /**
     * @var string
     */
    public $refurbishedprice;
    /**
     * @var string
     */
    public $collectibleprice;
    /**
     * @var string
     */
    public $thirdpartynewprice;
    /**
     * @var string
     */
    public $numberofofferings;
    /**
     * @var string
     */
    public $thirdpartynewcount;
    /**
     * @var string
     */
    public $usedcount;
    /**
     * @var string
     */
    public $collectiblecount;
    /**
     * @var string
     */
    public $refurbishedcount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ThirdPartyProductInfo
     */
    public $thirdpartyproductinfo;
    /**
     * @var string
     */
    public $salesrank;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\BrowseNodeArray
     */
    public $browselist;
    /**
     * @var string
     */
    public $media;
    /**
     * @var string
     */
    public $readinglevel;
    /**
     * @var string
     */
    public $numberofpages;
    /**
     * @var string
     */
    public $numberofissues;
    /**
     * @var string
     */
    public $issuesperyear;
    /**
     * @var string
     */
    public $subscriptionlength;
    /**
     * @var string
     */
    public $deweynumber;
    /**
     * @var string
     */
    public $runningtime;
    /**
     * @var string
     */
    public $publisher;
    /**
     * @var string
     */
    public $nummedia;
    /**
     * @var string
     */
    public $isbn;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FeaturesArray
     */
    public $features;
    /**
     * @var string
     */
    public $mpaarating;
    /**
     * @var string
     */
    public $esrbrating;
    /**
     * @var string
     */
    public $agegroup;
    /**
     * @var string
     */
    public $availability;
    /**
     * @var string
     */
    public $upc;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\TrackArray
     */
    public $tracks;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AccessoryArray
     */
    public $accessories;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PlatformArray
     */
    public $platforms;
    /**
     * @var string
     */
    public $encoding;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Reviews
     */
    public $reviews;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SimilarProductsArray
     */
    public $similarproducts;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ListArray
     */
    public $lists;
    /**
     * @var string
     */
    public $status;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setUrl($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Url');
        }
        $this->url = (int)$val;
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
        $this->asin = (int)$val;
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
        $this->productname = (int)$val;
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
        $this->catalog = (int)$val;
    }

    /**
     * @param KeyPhraseArray $val
     * @throws Exception
     */
    public function setKeyPhrases($val)
    {
        $this->keyphrases = (int)$val;
    }

    /**
     * @param ArtistArray $val
     * @throws Exception
     */
    public function setArtists($val)
    {
        $this->artists = (int)$val;
    }

    /**
     * @param AuthorArray $val
     * @throws Exception
     */
    public function setAuthors($val)
    {
        $this->authors = (int)$val;
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
        $this->mpn = (int)$val;
    }

    /**
     * @param StarringArray $val
     * @throws Exception
     */
    public function setStarring($val)
    {
        $this->starring = (int)$val;
    }

    /**
     * @param DirectorArray $val
     * @throws Exception
     */
    public function setDirectors($val)
    {
        $this->directors = (int)$val;
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
        $this->theatricalreleasedate = (int)$val;
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
        $this->releasedate = (int)$val;
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
        $this->manufacturer = (int)$val;
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
        $this->distributor = (int)$val;
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
        $this->imageurlsmall = (int)$val;
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
        $this->imageurlmedium = (int)$val;
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
        $this->imageurllarge = (int)$val;
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
        $this->listprice = (int)$val;
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
        $this->ourprice = (int)$val;
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
        $this->usedprice = (int)$val;
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
        $this->refurbishedprice = (int)$val;
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
        $this->collectibleprice = (int)$val;
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
        $this->thirdpartynewprice = (int)$val;
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
        $this->numberofofferings = (int)$val;
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
        $this->thirdpartynewcount = (int)$val;
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
        $this->usedcount = (int)$val;
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
        $this->collectiblecount = (int)$val;
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
        $this->refurbishedcount = (int)$val;
    }

    /**
     * @param ThirdPartyProductInfo $val
     * @throws Exception
     */
    public function setThirdPartyProductInfo($val)
    {
        $this->thirdpartyproductinfo = (int)$val;
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
        $this->salesrank = (int)$val;
    }

    /**
     * @param BrowseNodeArray $val
     * @throws Exception
     */
    public function setBrowseList($val)
    {
        $this->browselist = (int)$val;
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
        $this->media = (int)$val;
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
        $this->readinglevel = (int)$val;
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
        $this->numberofpages = (int)$val;
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
        $this->numberofissues = (int)$val;
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
        $this->issuesperyear = (int)$val;
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
        $this->subscriptionlength = (int)$val;
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
        $this->deweynumber = (int)$val;
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
        $this->runningtime = (int)$val;
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
        $this->publisher = (int)$val;
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
        $this->nummedia = (int)$val;
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
        $this->isbn = (int)$val;
    }

    /**
     * @param FeaturesArray $val
     * @throws Exception
     */
    public function setFeatures($val)
    {
        $this->features = (int)$val;
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
        $this->mpaarating = (int)$val;
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
        $this->esrbrating = (int)$val;
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
        $this->agegroup = (int)$val;
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
        $this->availability = (int)$val;
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
        $this->upc = (int)$val;
    }

    /**
     * @param TrackArray $val
     * @throws Exception
     */
    public function setTracks($val)
    {
        $this->tracks = (int)$val;
    }

    /**
     * @param AccessoryArray $val
     * @throws Exception
     */
    public function setAccessories($val)
    {
        $this->accessories = (int)$val;
    }

    /**
     * @param PlatformArray $val
     * @throws Exception
     */
    public function setPlatforms($val)
    {
        $this->platforms = (int)$val;
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
        $this->encoding = (int)$val;
    }

    /**
     * @param Reviews $val
     * @throws Exception
     */
    public function setReviews($val)
    {
        $this->reviews = (int)$val;
    }

    /**
     * @param SimilarProductsArray $val
     * @throws Exception
     */
    public function setSimilarProducts($val)
    {
        $this->similarproducts = (int)$val;
    }

    /**
     * @param ListArray $val
     * @throws Exception
     */
    public function setLists($val)
    {
        $this->lists = (int)$val;
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
        $this->status = (int)$val;
    }
}

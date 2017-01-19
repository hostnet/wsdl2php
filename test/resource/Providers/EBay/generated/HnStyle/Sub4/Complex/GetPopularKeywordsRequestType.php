<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetPopularKeywordsRequestType
 * Retrieves the words more frequently used by eBay users when searching for listings. These
 * keywords are generated weekly by eBay. Thus, calls retrieve static data. GetPopularKeywords
 * is not available for the following sites:  FR, HK, MY, PH, PL, SG, SE. Applicable to the
 * <a href="http://developer.ebay.com/developercenter/rest/" target="_blank">REST API</a>.
 */
class GetPopularKeywordsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
    /**
     * @var boolean | If true, only one CategoryID can be specified, and keywords are returned for that category
     * and its subcategories. If false, keywords are returned only for the categories identified
     * by CategoryID. Default is false.
     */
    public $IncludeChildCategories;
    /**
     * @var int | The maximum number of keywords to be retrieved per category for this call.
     */
    public $MaxKeywordsRetrieved;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setIncludeChildCategories($val)
    {
        $this->IncludeChildCategories = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setMaxKeywordsRetrieved($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->MaxKeywordsRetrieved = $val;
    }

    /**
     * @param PaginationType $val
     * @throws \Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = $val;
    }
}

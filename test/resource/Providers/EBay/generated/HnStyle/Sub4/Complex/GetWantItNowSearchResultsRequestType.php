<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetWantItNowSearchResultsRequestType
 * Retrieves a list of active Want It Now posts that match specified keywords and/or a specific
 * category ID. The response contains the following data: CategoryID, PostID, StartTime, ResponseCount,
 * Site, and Title. To get the post description (Description), you must use GetWantItNowPost
 * to retrieve individual posts.
 */
class GetWantItNowSearchResultsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
    /**
     * @var string | One or more keywords to search for when using the Suggested Attributes engine. Required
     * when SuggestedAttributes is specified as the recommendation engine (including when no
     * recommendation engines are specified). Only the listing title is searched. The words
     * "and" and "or" are treated like any other word. Blank searches are not allowed (and
     * result in a warning).
     */
    public $Query;
    /**
     * @var boolean | If true, include the description field of Want It Now posts in the keyword search. Want It
     * Now posts returned are those where specified search keywords appear in either the description
     * or the title. This is the default behavior if SearchInDescription is not specified.
     * If false, only the title will be searched. SearchInDescription is an optional input.
     */
    public $SearchInDescription;
    /**
     * @var boolean | If true, the search applies to all eBay sites. If false, the search is limited to the
     * site specified in the URL query string when the call is made.
     */
    public $SearchWorldwide;
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
     * @throws Exception
     */
    public function setCategoryID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CategoryID');
        }
        $this->CategoryID = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setQuery($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Query');
        }
        $this->Query = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setSearchInDescription($val)
    {
        $this->SearchInDescription = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setSearchWorldwide($val)
    {
        $this->SearchWorldwide = (int)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = (int)$val;
    }
}

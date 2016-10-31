<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetVeRoReportStatusResponseType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractResponseType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationResultType | Provides information about the list of transactions, including number of pages and number
     * of entries.
     */
    public $paginationresult;
    /**
     * @var boolean | Indicates whether there are additional Want It Now posts that meet the search criteria.
     */
    public $hasmoreitems;
    /**
     * @var int | Indicates the maximum number of Want It Now posts that can be returned in a WantItNowPostArray
     * for a request. This value can be specified in the request by  EntriesPerPage in Pagination
     * in the request.
     */
    public $itemsperpage;
    /**
     * @var int | Specifies the number of the page of data to return in the current call. Default is 1
     * for most calls. For some calls, the default is 0. Specify a positive value equal to
     * or lower than the number of pages available (which you determine by examining the results
     * of your initial request). See the documentation for other individual calls to determine
     * the correct default value. For GetOrders, not applicable to eBay.com (for GetOrders, applicable
     * to Half.com).
     */
    public $pagenumber;
    /**
     * @var long | A unique packet identifier for the items reported.
     */
    public $veroreportpacketid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportPacketStatusCodeType | The processing status of the packet.
     */
    public $veroreportpacketstatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\VeROReportedItemDetailsType | Contains the list of the reported item details. Returns empty if no items are available
     * that match the request.
     */
    public $reporteditemdetails;
    /**
     * @param PaginationResultType $val
     * @throws Exception
     */
    public function setPaginationResult($val)
    {
        $this->paginationresult = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHasMoreItems($val)
    {
        $this->hasmoreitems = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setItemsPerPage($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->itemsperpage = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPageNumber($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->pagenumber = (int)$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setVeROReportPacketID($val)
    {
        $this->veroreportpacketid = (int)$val;
    }

    /**
     * @param VeROReportPacketStatusCodeType $val
     * @throws Exception
     */
    public function setVeROReportPacketStatus($val)
    {
        $this->veroreportpacketstatus = (int)$val;
    }

    /**
     * @param VeROReportedItemDetailsType $val
     * @throws Exception
     */
    public function setReportedItemDetails($val)
    {
        $this->reporteditemdetails = (int)$val;
    }
}

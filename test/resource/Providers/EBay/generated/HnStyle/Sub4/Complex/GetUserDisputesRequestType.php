<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetUserDisputesRequestType
 * Requests a list of disputes the requester is involved in as buyer or seller. The list includes
 * both Unpaid Item and Item Not Received disputes and can be filtered according to DisputeFilterType.
 * Use a DetailLevel of ReturnAll to return all data about each dispute, including DisputeResolution
 * and DisputeMessage elements.
 */
class GetUserDisputesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeFilterTypeCodeType | A filter used to reduce the number of disputes returned. The filter uses criteria such
     * as whether the dispute is awaiting a response, is closed, or is eligible for credit.
     * Both Unpaid Item and Item Not Received disputes can be returned for the same filter
     * value.
     */
    public $DisputeFilterType;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeSortTypeCodeType | The value and sequence to use to sort the returned disputes.
     */
    public $DisputeSortType;
    /**
     * @var dateTime | A filter that retrieves disputes whose DisputeModifiedTime is later than or equal to
     * this value. Specify the time value in GMT. See the eBay Web Services documentation for
     * information about specifying time values. For more precise control of the date range
     * filter, it is a good practice to also specify ModTimeTo. Otherwise, the end of the date
     * range is the present time. Filtering by date range is optional. You can use date range
     * filters in combination with other filters like DisputeFilterType to control the amount
     * of data returned.
     */
    public $ModTimeFrom;
    /**
     * @var dateTime | A filter that retrieves disputes whose DisputeModifiedTime is earlier than or equal
     * to this value. Specify the time value in GMT. See the eBay Web Services documentation
     * for information about specifying time values. For more precise control of the date range
     * filter, it is a good practice to also specify ModTimeFrom. Otherwise, all available
     * disputes modified prior to the ModTimeTo value are returned. Filtering by date range
     * is optional. You can use date range filters in combination with other filters like DisputeFilterType
     * to control the amount of data returned.
     */
    public $ModTimeTo;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    // @codingStandardsIgnoreEnd

    /**
     * @param DisputeFilterTypeCodeType $val
     * @throws Exception
     */
    public function setDisputeFilterType($val)
    {
        $this->DisputeFilterType = (DisputeFilterTypeCodeType)$val;
    }

    /**
     * @param DisputeSortTypeCodeType $val
     * @throws Exception
     */
    public function setDisputeSortType($val)
    {
        $this->DisputeSortType = (DisputeSortTypeCodeType)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setModTimeFrom($val)
    {
        $this->ModTimeFrom = (dateTime)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setModTimeTo($val)
    {
        $this->ModTimeTo = (dateTime)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = (PaginationType)$val;
    }
}

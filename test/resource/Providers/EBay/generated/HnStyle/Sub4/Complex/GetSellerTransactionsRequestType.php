<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetSellerTransactionsRequestType
 *
 */
class GetSellerTransactionsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
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
    /**
     * @var boolean | Indicates whether to include final value fees in the response. For most listing types,
     * the fee is returned in Transaction.FinalValueFee. For Dutch auctions that end with bids
     * (not Buy It Now purchases), the fee is returned in Item.SellingStatus.FinalValueFee. The
     * Final Value Fee for FixedPriceItem, StoresFixedPrice, and Buy It Now Dutch listing types
     * is returned on a transaction by transaction basis. For all other listing types, including
     * Chinese and Dutch (no Buy It Now purchases), the Final Value Fee is returned when the
     * listing status is Completed.
     */
    public $IncludeFinalValueFee;
    /**
     * @var boolean | Whether to retrieve the order information. Default is false.
     */
    public $IncludeContainingOrder;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SKUArrayType | Specifies a set of seller SKUs to use as a filter. Only items with the specified SKUs
     * are returned. Do not specify this tag if you do not want to filter by SKU. Corresponds
     * to the SKU property that is part of ItemType and that can be provided when, for example,
     * you use the AddItem call.
     */
    public $SKUArray;
    // @codingStandardsIgnoreEnd

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setModTimeFrom($val)
    {
        $this->ModTimeFrom = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setModTimeTo($val)
    {
        $this->ModTimeTo = (int)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeFinalValueFee($val)
    {
        $this->IncludeFinalValueFee = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setIncludeContainingOrder($val)
    {
        $this->IncludeContainingOrder = (int)$val;
    }

    /**
     * @param SKUArrayType $val
     * @throws Exception
     */
    public function setSKUArray($val)
    {
        $this->SKUArray = (int)$val;
    }
}

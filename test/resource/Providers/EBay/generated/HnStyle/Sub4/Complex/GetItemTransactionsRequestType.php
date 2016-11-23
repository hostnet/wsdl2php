<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetItemTransactionsRequestType
 *
 */
class GetItemTransactionsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ItemIDType | The item ID of the item reported for infringment.
     */
    public $ItemID;
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
     * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
     * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
     * spawned it, so a transaction is only uniquely identified on a global basis by a combination
     * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
     */
    public $TransactionID;
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
    // @codingStandardsIgnoreEnd

    /**
     * @param ItemIDType $val
     * @throws Exception
     */
    public function setItemID($val)
    {
        $this->ItemID = (int)$val;
    }

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
     * @param string $val
     * @throws Exception
     */
    public function setTransactionID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TransactionID');
        }
        $this->TransactionID = (int)$val;
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
}

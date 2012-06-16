<?php

namespace Controle;
/**
 * GetMyeBaySellingResponseType
 * Returns summary and detail information about items the user is selling, items scheduled
 * to sell, currently listed, sold, and closed but not sold.
 */
class GetMyeBaySellingResponseType extends \Controle\AbstractResponseType {
    /**
     * @var \Controle\SellingSummaryType | Contains summary information about the items the user is selling.
     */
    public $SellingSummary;
    /**
     * @var \Controle\PaginatedItemArrayType | Contains the items the user has scheduled for sale, but whose listings have not yet
     * started.
     */
    public $ScheduledList;
    /**
     * @var \Controle\PaginatedItemArrayType | Contains the items the user is selling that have active listings.
     */
    public $ActiveList;
    /**
     * @var \Controle\PaginatedOrderTransactionArrayType | Contains the items the user has sold.
     */
    public $SoldList;
    /**
     * @var \Controle\PaginatedItemArrayType | Contains the items whose listings have ended but that have not sold.
     */
    public $UnsoldList;
}


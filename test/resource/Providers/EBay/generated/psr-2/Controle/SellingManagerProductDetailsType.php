<?php

namespace Controle;
/**
 * SellingManagerProductDetailsType
 * Returned if the user is a Selling Manager Pro user.
 */
class SellingManagerProductDetailsType {
    /**
     * @var string | The exact product name of an item.
     */
    public $ProductName;
    /**
     * @var int | The numeric part number of an item.
     */
    public $PartNumber;
    /**
     * @var string | The alphanumeric part number of an item.
     */
    public $ProductPartNumber;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}


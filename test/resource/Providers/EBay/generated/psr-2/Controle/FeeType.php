<?php

namespace Controle;
/**
 * FeeType
 * Identifies the name and monetary amount of a fee that a member pays to eBay (or an eBay
 * company). These fee names and values are intended only as an aid to help estimate the fees
 * for a listing. Use GetAccount for an accurate final fee breakdown. Returned in AddItemResponseType
 * and related response types.
 */
class FeeType {
    /**
     * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
     */
    public $Name;
    /**
     * @var \Controle\AmountType | Monthly fee for the Store subscription level.
     */
    public $Fee;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}

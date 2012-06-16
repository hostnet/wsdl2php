<?php

namespace Controle;
/**
 * CategoryFinanceOfferType
 * A financing offer valid within a particular category.
 */
class CategoryFinanceOfferType {
    /**
     * @var string | Specifies a promotional offer that allow the buyer to purchase items on credit.
     */
    public $FinanceOfferID;
    /**
     * @var string | ID of the category in which the Want It Now post is listed.
     */
    public $CategoryID;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
}


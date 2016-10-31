<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * StoreVacationPreferencesType
 * Specifies a set of Store vacation preferences.
 */
class StoreVacationPreferencesType
{
    /**
     * @var boolean | Specifies whether the Store owner is on vacation.<br> When OnVacation is true, the Store
     * owner's listings do not appear on Express, regardless of the listing format and regardless
     * of how the seller has configured their vacation settings for items that appear on eBay.
     */
    public $onvacation;
    /**
     * @var dateTime | Seller return date from vacation.
     */
    public $returndate;
    /**
     * @var boolean | Hide Store Inventory format items when the Store owner is on vacation.<br><br> When
     * OnVacation is true, the Store owner's listings do not appear on Express, regardless
     * of the listing format and regardless of how the seller has configured their vacation
     * settings for items that appear on eBay.
     */
    public $hidefixedpricestoreitems;
    /**
     * @var boolean | Add a message when the Store owner is on vacation to all their active items.
     */
    public $messageitem;
    /**
     * @var boolean | Add a message to all the Store pages when the Store owner is on vacation.
     */
    public $messagestore;
    /**
     * @var boolean | Display custom message on the Store pages instead of the default message.
     */
    public $displaymessagestorecustomtext;
    /**
     * @var string | The custom message to display for the Store when the user is on vacation. May contain
     * HTML markup.
     */
    public $messagestorecustomtext;
    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setOnVacation($val)
    {
        $this->onvacation = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setReturnDate($val)
    {
        $this->returndate = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setHideFixedPriceStoreItems($val)
    {
        $this->hidefixedpricestoreitems = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setMessageItem($val)
    {
        $this->messageitem = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setMessageStore($val)
    {
        $this->messagestore = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setDisplayMessageStoreCustomText($val)
    {
        $this->displaymessagestorecustomtext = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMessageStoreCustomText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MessageStoreCustomText');
        }
        $this->messagestorecustomtext = (int)$val;
    }
}

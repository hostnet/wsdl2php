<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ReviseStatusType
 * Contains data indicating whether an item has been revised since the        listing became
 * active and, if so, which among a subset of properties        have been changed by the revision.
 *        Output only.
 */
class ReviseStatusType
{
    // @codingStandardsIgnoreStart
    /**
     * @var boolean | If true, indicates the item was revised since the listing became            active.
     *            Output only.
     */
    public $ItemRevised;
    /**
     * @var boolean | If true, indicates that a Buy It Now Price was added for the item.            Only applicable
     * to US eBay Motors items.            Output only.
     */
    public $BuyItNowAdded;
    /**
     * @var boolean | If true, indicates that the item's Buy It Now price was lowered.            Only applicable
     * to US eBay Motors items.            Output only.
     */
    public $BuyItNowLowered;
    /**
     * @var boolean | If true, indicates that the reserve price was lowered for            the item. Only
     * applicable to US eBay Motors items.            Output only.
     */
    public $ReserveLowered;
    /**
     * @var boolean | If true, indicates that the reserve price was removed            from the item. Only
     * applicable to US eBay Motors items.            Output only.
     */
    public $ReserveRemoved;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setItemRevised($val)
    {
        $this->ItemRevised = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setBuyItNowAdded($val)
    {
        $this->BuyItNowAdded = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setBuyItNowLowered($val)
    {
        $this->BuyItNowLowered = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setReserveLowered($val)
    {
        $this->ReserveLowered = (boolean)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setReserveRemoved($val)
    {
        $this->ReserveRemoved = (boolean)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (<anyXML>)$val;
    }
}

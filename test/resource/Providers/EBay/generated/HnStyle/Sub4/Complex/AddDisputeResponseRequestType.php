<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AddDisputeResponseRequestType
 * Allows a seller to respond to an Unpaid Item or Item Not Received dispute. The response
 * can add a comment or close the dispute.
 */
class AddDisputeResponseRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeIDType | The unique identifier of a dispute, returned by the eBay site when the dispute is created.
     */
    public $DisputeID;
    /**
     * @var string | The text of the message.
     */
    public $MessageText;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeActivityCodeType | The type of activity the seller is taking on the dispute. The allowed value is determined
     * by the current value of DisputeState, returned by GetDispute or GetUserDisputes. Some
     * values are for Unpaid Item disputes and some are for Item Not Received disputes.
     */
    public $DisputeActivity;
    /**
     * @var string | The shipping carrier used.
     */
    public $ShippingCarrierUsed;
    /**
     * @var string | The shipper's tracking number for the item being shipped. Required if DisputeActivity
     * is SellerShippedItem; otherwise, optional.
     */
    public $ShipmentTrackNumber;
    /**
     * @var dateTime | The date the item under dispute was shipped. Required if DisputeActivity is SellerShippedItem;
     * otherwise, optional.
     */
    public $ShippingTime;
    // @codingStandardsIgnoreEnd

    /**
     * @param DisputeIDType $val
     * @throws \Exception
     */
    public function setDisputeID($val)
    {
        $this->DisputeID = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setMessageText($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for MessageText');
        }
        $this->MessageText = $val;
    }

    /**
     * @param DisputeActivityCodeType $val
     * @throws \Exception
     */
    public function setDisputeActivity($val)
    {
        $this->DisputeActivity = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setShippingCarrierUsed($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ShippingCarrierUsed');
        }
        $this->ShippingCarrierUsed = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setShipmentTrackNumber($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for ShipmentTrackNumber');
        }
        $this->ShipmentTrackNumber = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setShippingTime($val)
    {
        $this->ShippingTime = $val;
    }
}

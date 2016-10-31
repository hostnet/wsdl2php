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
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeIDType | The unique identifier of a dispute, returned by the eBay site when the dispute is created.
     */
    public $disputeid;
    /**
     * @var string | The text of the message.
     */
    public $messagetext;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DisputeActivityCodeType | The type of activity the seller is taking on the dispute. The allowed value is determined
     * by the current value of DisputeState, returned by GetDispute or GetUserDisputes. Some
     * values are for Unpaid Item disputes and some are for Item Not Received disputes.
     */
    public $disputeactivity;
    /**
     * @var string | The shipping carrier used.
     */
    public $shippingcarrierused;
    /**
     * @var string | The shipper's tracking number for the item being shipped. Required if DisputeActivity
     * is SellerShippedItem; otherwise, optional.
     */
    public $shipmenttracknumber;
    /**
     * @var dateTime | The date the item under dispute was shipped. Required if DisputeActivity is SellerShippedItem;
     * otherwise, optional.
     */
    public $shippingtime;
    /**
     * @param DisputeIDType $val
     * @throws Exception
     */
    public function setDisputeID($val)
    {
        $this->disputeid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMessageText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MessageText');
        }
        $this->messagetext = (int)$val;
    }

    /**
     * @param DisputeActivityCodeType $val
     * @throws Exception
     */
    public function setDisputeActivity($val)
    {
        $this->disputeactivity = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setShippingCarrierUsed($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ShippingCarrierUsed');
        }
        $this->shippingcarrierused = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setShipmentTrackNumber($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ShipmentTrackNumber');
        }
        $this->shipmenttracknumber = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setShippingTime($val)
    {
        $this->shippingtime = (int)$val;
    }
}

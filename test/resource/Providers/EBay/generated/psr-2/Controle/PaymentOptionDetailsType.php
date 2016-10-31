<?php

namespace Controle;

/**
 * PaymentOptionDetailsType
 * Details about a specific payment option.
 */
class PaymentOptionDetailsType
{
    /**
     * @var \Controle\BuyerPaymentMethodCodeType | A payment method value defined in the schema.<br><br> Related fields:<br> Item.PaymentMethods
     * in AddItem<br> PaymentMethodUsed in ReviseCheckoutStatus
     */
    public $paymentoption;
    /**
     * @var string | Description of a Want It Now post. Description will not be returned for GetWantItNowSearchResults.
     */
    public $description;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param BuyerPaymentMethodCodeType $val
     * @throws Exception
     */
    public function setPaymentOption($val)
    {
        $this->paymentoption = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDescription($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Description');
        }
        $this->description = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}

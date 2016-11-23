<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * EndOfAuctionEmailPreferencesType
 * Contains the seller's preferences for the end of auction (EOA) email to the buyer.
 */
class EndOfAuctionEmailPreferencesType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | The text of the custom message for the end of auction (for auctions) or end of transaction
     * (for Buy It Now) emails.
     */
    public $TemplateText;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\anyURI | The URL of the logo to include in the customized email.
     */
    public $LogoURL;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\EndOfAuctionLogoTypeCodeType | The type of logo to include in the customized email.
     */
    public $LogoType;
    /**
     * @var boolean | Indicates whether or not the seller wishes to send a customized email to winning buyers.
     */
    public $EmailCustomized;
    /**
     * @var boolean | Indicates whether or not the text of the customized message will be customized.
     */
    public $TextCustomized;
    /**
     * @var boolean | Indicates whether or not the seller wishes to include a logo in the customized email.
     */
    public $LogoCustomized;
    /**
     * @var boolean | Indicates whether or not the seller wishes to receive a copy of the customized email
     * sent to the winning buyer.
     */
    public $CopyEmail;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTemplateText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TemplateText');
        }
        $this->TemplateText = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setLogoURL($val)
    {
        $this->LogoURL = (int)$val;
    }

    /**
     * @param EndOfAuctionLogoTypeCodeType $val
     * @throws Exception
     */
    public function setLogoType($val)
    {
        $this->LogoType = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEmailCustomized($val)
    {
        $this->EmailCustomized = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setTextCustomized($val)
    {
        $this->TextCustomized = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setLogoCustomized($val)
    {
        $this->LogoCustomized = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCopyEmail($val)
    {
        $this->CopyEmail = (int)$val;
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

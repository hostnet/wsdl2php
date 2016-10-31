<?php

namespace Controle;

/**
 * EndOfAuctionEmailPreferencesType
 * Contains the seller's preferences for the end of auction (EOA) email to the buyer.
 */
class EndOfAuctionEmailPreferencesType
{
    /**
     * @var string | The text of the custom message for the end of auction (for auctions) or end of transaction
     * (for Buy It Now) emails.
     */
    public $templatetext;
    /**
     * @var \Controle\anyURI | The URL of the logo to include in the customized email.
     */
    public $logourl;
    /**
     * @var \Controle\EndOfAuctionLogoTypeCodeType | The type of logo to include in the customized email.
     */
    public $logotype;
    /**
     * @var boolean | Indicates whether or not the seller wishes to send a customized email to winning buyers.
     */
    public $emailcustomized;
    /**
     * @var boolean | Indicates whether or not the text of the customized message will be customized.
     */
    public $textcustomized;
    /**
     * @var boolean | Indicates whether or not the seller wishes to include a logo in the customized email.
     */
    public $logocustomized;
    /**
     * @var boolean | Indicates whether or not the seller wishes to receive a copy of the customized email
     * sent to the winning buyer.
     */
    public $copyemail;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setTemplateText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TemplateText');
        }
        $this->templatetext = (int)$val;
    }

    /**
     * @param anyURI $val
     * @throws Exception
     */
    public function setLogoURL($val)
    {
        $this->logourl = (int)$val;
    }

    /**
     * @param EndOfAuctionLogoTypeCodeType $val
     * @throws Exception
     */
    public function setLogoType($val)
    {
        $this->logotype = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEmailCustomized($val)
    {
        $this->emailcustomized = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setTextCustomized($val)
    {
        $this->textcustomized = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setLogoCustomized($val)
    {
        $this->logocustomized = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setCopyEmail($val)
    {
        $this->copyemail = (int)$val;
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

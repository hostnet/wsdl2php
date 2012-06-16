<?php

namespace Controle;
/**
 * EndOfAuctionEmailPreferencesType
 * Contains the seller's preferences for the end of auction (EOA) email to the buyer.
 */
class EndOfAuctionEmailPreferencesType {
    /**
     * @var string | The text of the custom message for the end of auction (for auctions) or end of transaction
     * (for Buy It Now) emails.
     */
    public $TemplateText;
    /**
     * @var \Controle\anyURI | The URL of the logo to include in the customized email.
     */
    public $LogoURL;
    /**
     * @var \Controle\EndOfAuctionLogoTypeCodeType | The type of logo to include in the customized email.
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
     * @var \Controle\<anyXML>
     */
    public $any;
}


<?php

namespace Controle;
/**
 * AffiliateTrackingDetailsType
 * Container for fields related to affiliate tracking. For additional information, see the
 * annotations to the elements in this type.
 */
class AffiliateTrackingDetailsType {
	/**
	 * @var string | Specifies an ID to identify you to your tracking partner (tracking provider). The value
	 * you specify is obtained from your tracking partner. For example, in the case of Commission
	 * Junction, the TrackingID is the PID given to you by Commission Junction.
	 */
	public $TrackingID;
	/**
	 * @var string | Specifies the third party, e.g. Commission Junction, who is your tracking partner (tracking
	 * provider). Required if you specify a TrackingID. Depending on your tracking partner, specify
	 * one of the following values. Not all partners are valid for all sites. <br>1 = Commission
	 * Junction <br>2 = Be Free <br>3 = Affilinet <br>4 = TradeDoubler <br>5 = Mediaplex <br>6
	 * = DoubleClick <br>7 = Allyes <br>8 = BJMT
	 */
	public $TrackingPartnerCode;
	/**
	 * @var \Controle\ApplicationDeviceTypeCodeType | Reserved for future use.
	 */
	public $ApplicationDeviceType;
	/**
	 * @var string | Optional value that depends on your tracking partner (tracking provider). For example,
	 * if you specify a TrackingPartnerCode of 1 for Commission Junction, the AffiliateUserID
	 * is your Commission Junction Shopper ID (SID).
	 */
	public $AffiliateUserID;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

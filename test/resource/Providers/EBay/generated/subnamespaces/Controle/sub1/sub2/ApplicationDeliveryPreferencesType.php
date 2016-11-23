<?php

namespace Controle\sub1\sub2;

/**
 * ApplicationDeliveryPreferencesType
 * Specifies preferences describing how notifications are delivered to an application. Note
 * that notifications are subject to Anti-Spam rules. See Anti-Spam Rules in the eBay Web Services
 * Guide for more information about these rules.
 */
class ApplicationDeliveryPreferencesType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\anyURI | The URL where eBay delivers all notifications sent to the application. For delivery to
	 * a server, the URL begins with http:// or https:// and must be well formed. Use a URL that
	 * is functional at the time of the call. For delivery to an email address, the URL begins with
	 * mailto: and specifies a valid email address.
	 */
	public $ApplicationURL;
	/**
	 * @var \Controle\sub1\sub2\EnableCodeType | A token indicating whether notifications are enabled or disabled. If you disable notifications, the
	 * application does not receive them, but notification preferences are not erased.
	 */
	public $ApplicationEnable;
	/**
	 * @var \Controle\sub1\sub2\anyURI | The email address where eBay sends all application markup and markdown event notifications.
	 * When setting the email address, input must be in the format mailto://youremailaddress@yoursite.com
	 * (with the mailto:// prefix). The application has to subscribe to recieve these events using
	 * the AlertEnable field.
	 */
	public $AlertEmail;
	/**
	 * @var \Controle\sub1\sub2\EnableCodeType | A token indicating whether markup and markdown alerts are enabled or disabled.
	 */
	public $AlertEnable;
	/**
	 * @var \Controle\sub1\sub2\NotificationPayloadTypeCodeType | If this field is specified, the value must be eBLSchemaSOAP.
	 */
	public $NotificationPayloadType;
	/**
	 * @var \Controle\sub1\sub2\DeviceTypeCodeType | The means of receipt of notification. In most cases, it is Platform (typical API calls
	 * and web interaction), so this is the default, if not specified. For wireless applications,
	 * use SMS.
	 */
	public $DeviceType;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setApplicationURL($val)
	{
        $this->ApplicationURL = (int)$val;
	}

	/**
	 * @param EnableCodeType $val
	 * @throws Exception
	 */
	public function setApplicationEnable($val)
	{
        $this->ApplicationEnable = (int)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setAlertEmail($val)
	{
        $this->AlertEmail = (int)$val;
	}

	/**
	 * @param EnableCodeType $val
	 * @throws Exception
	 */
	public function setAlertEnable($val)
	{
        $this->AlertEnable = (int)$val;
	}

	/**
	 * @param NotificationPayloadTypeCodeType $val
	 * @throws Exception
	 */
	public function setNotificationPayloadType($val)
	{
        $this->NotificationPayloadType = (int)$val;
	}

	/**
	 * @param DeviceTypeCodeType $val
	 * @throws Exception
	 */
	public function setDeviceType($val)
	{
        $this->DeviceType = (int)$val;
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

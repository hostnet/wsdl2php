<?php

namespace Controle\sub1\sub2;

/**
 * MyMessagesResponseDetailsType
 * Details relating to the response to an alert or message.
 */
class MyMessagesResponseDetailsType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var boolean | Whether or not an alert or message can be responded to. To respond to an alert or message,
	 * use the URL in ResponseURL. You may need to log into the eBay Web site to complete the
	 * response.
	 */
	public $ResponseEnabled;
	/**
	 * @var \Controle\sub1\sub2\anyURI | A URL that the recipient must visit to respond to an alert or message. Responding may require
	 * logging into the eBay Web site.
	 */
	public $ResponseURL;
	/**
	 * @var dateTime | The date and time the user responded to an alert or message
	 */
	public $UserResponseDate;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setResponseEnabled($val)
	{
        $this->ResponseEnabled = (boolean)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setResponseURL($val)
	{
        $this->ResponseURL = (anyURI)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setUserResponseDate($val)
	{
        $this->UserResponseDate = (dateTime)$val;
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

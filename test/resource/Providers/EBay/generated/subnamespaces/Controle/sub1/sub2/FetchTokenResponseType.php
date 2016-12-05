<?php

namespace Controle\sub1\sub2;

/**
 * FetchTokenResponseType
 * Includes the authentication token for the user and the date it expires.
 */
class FetchTokenResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Authentication token representing the user who is making the request. The user's token
	 * must be retrieved from eBay. To determine a user's authentication token, see the Authentication
	 * and Authorization information in the eBay Web Services guide. For calls that list or retrieve
	 * item or transaction data, the user usually needs to be the seller of the item in question
	 * or, in some cases, the buyer. Similarly, calls that retrieve user or account data may be restricted
	 * to the user whose data is being requested. The documentation for each call includes information
	 * about such restrictions.
	 */
	public $eBayAuthToken;
	/**
	 * @var dateTime | Date and time at which the token returned in eBayAuthToken expires and can no longer be
	 * used to authenticate the user for that application.
	 */
	public $HardExpirationTime;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEBayAuthToken($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for eBayAuthToken');
        }
        $this->eBayAuthToken = ()$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setHardExpirationTime($val)
	{
        $this->HardExpirationTime = ()$val;
	}
}

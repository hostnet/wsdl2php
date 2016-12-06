<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CustomSecurityHeaderType
 * Security header used for SOAP API calls.
 */
class CustomSecurityHeaderType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Authentication token representing the user who is making the request. The user's token
     * must be retrieved from eBay. To determine a user's authentication token, see the Authentication
     * and Authorization information in the eBay Web Services guide. For calls that list or
     * retrieve item or transaction data, the user usually needs to be the seller of the item
     * in question or, in some cases, the buyer. Similarly, calls that retrieve user or account
     * data may be restricted to the user whose data is being requested. The documentation
     * for each call includes information about such restrictions.
     */
    public $eBayAuthToken;
    /**
     * @var string | Expiration date of the user's authentication token. Only returned within the 7-day period
     * prior to a token's expiration. To ensure that user authentication tokens are secure
     * and to help avoid a user's token being compromised, tokens have a limited life span.
     * A token is only valid for a period of time (set by eBay). After this amount of time
     * has passed, the token expires and must be replaced with a new token.
     */
    public $HardExpirationWarning;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UserIdPasswordType | Authentication information for the user on whose behalf the application is making the
     * request, and authorization information for the application making the request. Only
     * registered eBay users are allowed to make API calls. To verify that a user is registered,
     * your application normally needs to pass a user-specific value called an "authentication
     * token" in the request. This is equivalent to signing in on the eBay Web site. As API
     * calls do not pass session information, you need to pass the user's authentication token
     * every time you invoke a call on their behalf. All calls require an authentication token,
     * except the calls you use to retrieve a token in the first place. For such calls, you
     * use the eBay member's username and password instead.
     */
    public $Credentials;
    /**
     * @var string | A Base64-encoded MD5 hash that allows the recepient of a Platform Notification to verify
     * this is a valid Platform Notification sent by eBay.
     */
    public $NotificationSignature;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
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
        $this->eBayAuthToken = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setHardExpirationWarning($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for HardExpirationWarning');
        }
        $this->HardExpirationWarning = $val;
    }

    /**
     * @param UserIdPasswordType $val
     * @throws Exception
     */
    public function setCredentials($val)
    {
        $this->Credentials = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNotificationSignature($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NotificationSignature');
        }
        $this->NotificationSignature = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}

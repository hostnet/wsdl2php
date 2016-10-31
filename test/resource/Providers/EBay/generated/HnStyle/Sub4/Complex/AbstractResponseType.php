<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AbstractResponseType
 * Base type definition of a response payload that can carry any type of payload content with
 * following optional elements:<br> - timestamp of response message<br> - application-level
 * acknowledgement<br> - application-level (business-level) errors and warnings
 */
class AbstractResponseType
{
    /**
     * @var dateTime | This value represents the date and time when eBay processed the request. The time zone
     * of this value is GMT and the format is the ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ).
     * See Time Values in the eBay Web Services guide for information about this time format
     * and converting to and from the GMT time zone. Certain calls, such as GetCategories,
     * can return very large responses that change once a day or less often. For better performance,
     * such calls may return cached data. In these cases, this time value reflects the time
     * the cached response was created. Thus, this value is not necessarily within a few seconds
     * of the time you submitted the request. These are the meta-data calls that can return
     * cached responses: GetCategories, GetAttributesCS, GetCategory2CS, GetAttributesXsl, GetProductFinder,
     * GetProductFinderXsl, and GetProductSearchPage.
     */
    public $timestamp;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AckCodeType | Indicates the response status (e.g., success).
     */
    public $ack;
    /**
     * @var string | Unique key to distinguish between recommendations for each item.              Matches
     * a correlation ID you defined in the request, if any.
     */
    public $correlationid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ErrorType | A list of application-level errors (if any) that occurred when eBay processed the request.
     */
    public $errors;
    /**
     * @var string | Contains the data for one message.
     */
    public $message;
    /**
     * @var string | The version of the response payload schema. Indicates the version of the schema that
     * eBay used to process the request. See "Standard Data for All Calls" in the eBay Web
     * Services Guide for information on using the response version when troubleshooting "CustomCode"
     * values that appear in the response.
     */
    public $version;
    /**
     * @var string | This refers to the specific software build that eBay used when processing the request and
     * generating the response. This includes the version number plus additional information.
     * eBay Developer Support may request the build information when helping you resolve technical
     * issues.
     */
    public $build;
    /**
     * @var string | Event name of the notification. Only returned by Platform Notifications.
     */
    public $notificationeventname;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DuplicateInvocationDetailsType | Information that explains a failure due to a duplicate InvocationID being passed in.
     */
    public $duplicateinvocationdetails;
    /**
     * @var string | The displayable user ID of the recipient.
     */
    public $recipientuserid;
    /**
     * @var string | Unique identifier for the user that does not change when the eBay user name is changed.
     * Use when an application needs to associate a new eBay user name with the corresponding
     * eBay user. <br><br> Starting Jan 2007, when a bidder's user info is made anonymous,
     * this tag will be returned only for that bidder, and the seller of an item that the user
     * is bidding on.
     */
    public $eiastoken;
    /**
     * @var string | A Base64-encoded MD5 hash that allows the recepient of a Platform Notification to verify
     * this is a valid Platform Notification sent by eBay.
     */
    public $notificationsignature;
    /**
     * @var string | Expiration date of the user's authentication token. Only returned within the 7-day period
     * prior to a token's expiration. To ensure that user authentication tokens are secure
     * and to help avoid a user's token being compromised, tokens have a limited life span.
     * A token is only valid for a period of time (set by eBay). After this amount of time
     * has passed, the token expires and must be replaced with a new token.
     */
    public $hardexpirationwarning;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setTimestamp($val)
    {
        $this->timestamp = (int)$val;
    }

    /**
     * @param AckCodeType $val
     * @throws Exception
     */
    public function setAck($val)
    {
        $this->ack = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCorrelationID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CorrelationID');
        }
        $this->correlationid = (int)$val;
    }

    /**
     * @param ErrorType $val
     * @throws Exception
     */
    public function setErrors($val)
    {
        $this->errors = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMessage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Message');
        }
        $this->message = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setVersion($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Version');
        }
        $this->version = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setBuild($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Build');
        }
        $this->build = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setNotificationEventName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for NotificationEventName');
        }
        $this->notificationeventname = (int)$val;
    }

    /**
     * @param DuplicateInvocationDetailsType $val
     * @throws Exception
     */
    public function setDuplicateInvocationDetails($val)
    {
        $this->duplicateinvocationdetails = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setRecipientUserID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RecipientUserID');
        }
        $this->recipientuserid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEIASToken($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EIASToken');
        }
        $this->eiastoken = (int)$val;
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
        $this->notificationsignature = (int)$val;
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
        $this->hardexpirationwarning = (int)$val;
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

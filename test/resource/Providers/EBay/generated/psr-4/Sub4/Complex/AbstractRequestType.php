<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AbstractRequestType
 * Base type definition of the request payload, which can carry any type of payload content
 * plus optional versioning information and detail level requirements. All concrete request
 * types (e.g., AddItemRequestType) are derived from the abstract request type. The naming
 * convention we use for the concrete type names is the name of the service (the verb or call
 * name) followed by "RequestType": VerbNameRequestType
 */
class AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DetailLevelCodeType | Detail levels are instructions that define standard subsets of data to return for particular
     * data components (e.g., each Item, Transaction, or User) within the response payload. For
     * example, a particular detail level might cause the response to include buyer-related
     * data in every result (e.g., for every Item), but no seller-related data. Specifying
     * a detail level is like using a predefined attribute list in the SELECT clause of an
     * SQL query. Use the DetailLevel element to specify the required detail level that the
     * client application needs pertaining to the data components that are applicable to the
     * request.<br> <br> The DetailLevelCodeType defines the global list of available detail
     * levels for all request types. Most request types support certain detail levels or none
     * at all. If you pass a detail level that exists in the schema but that isn't valid for
     * a particular request, eBay ignores it processes the request without it. For each request
     * type, see the detail level tables in the Input/Output Reference to determine which detail
     * levels are applicable and which elements are returned for each applicable detail level.
     * (Some detail level tables are still in the eBay Web Services guide. They will be moved
     * to the Input/Output Reference in a future release.)<br> <br>Note that DetailLevel is
     * required input for GetMyMessages. <br> <br> With GetSellerList and other calls that
     * retrieve large data sets, please avoid using ReturnAll when possible. For example, if
     * you use GetSellerList, use a GranularityLevel or use the GetSellerEvents call instead.
     * If you do use ReturnAll with GetSellerList, use a small EntriesPerPage value and a short EndTimeFrom/EndTimeTo
     * range for better performance.
     */
    public $DetailLevel;
    /**
     * @var string | Use ErrorLanguage to return error strings for the call in a different language from
     * the language commonly associated with the site that the requesting user is registered
     * with. Specify the standard RFC 3066 language identification tag (e.g., en_US). <br> ID---
     * country<br> ----- -----<br> de_AT Austria<br> de_CH Switzerland<br> de_DE Germany <br> en_AU
     * Australia <br> en_CA Canada <br> en_GB United Kingdom<br> en_SG Singapore<br> en_US
     * United States <br> es_ES Spain <br> fr_BE Belgium (French)<br> fr_CA Canada (French)
     * <br> fr_FR France <br> it_IT Italy <br> nl_BE Belgium (Dutch)<br> nl_NL Netherlands
     * <br> zh_TW Taiwan<br> zh_CN China<br> en_IN India<br> en_IE Ireland<br> zh_HK Hong Kong
     */
    public $ErrorLanguage;
    /**
     * @var string | An ID that uniquely identifies a message for a given user. <br /><br /> This value is
     * not the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages
     * value for used as the GetMyMessages ExternalID instead.
     */
    public $MessageID;
    /**
     * @var string | The version of the response payload schema. Indicates the version of the schema that
     * eBay used to process the request. See "Standard Data for All Calls" in the eBay Web
     * Services Guide for information on using the response version when troubleshooting "CustomCode"
     * values that appear in the response.
     */
    public $Version;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ErrorHandlingCodeType | Error tolerance level for the call. For calls that support Item Specifics, this is a
     * preference that controls how eBay handles listing requests when invalid attribute data
     * is passed in. See Attribute Error Handling in the eBay Web Services guide for details
     * about this field in listing requests.
     */
    public $ErrorHandling;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\UUIDType | A unique identifer for a particular call. If the same InvocationID is passed in after
     * it has been passed in once on a call that succeeded for a particular application and
     * user, then an error will be returned. The identifier can only contain digits from 0-9
     * and letters from A-F. The identifier must be 32 characters long.  For example, 1FB02B2-9D27-3acb-ABA2-9D539C374228.
     */
    public $InvocationID;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\WarningLevelCodeType | Controls whether or not to return warnings when the application passes unrecognized
     * elements in a request (i.e., elements that are not defined in the schema). (This does
     * not control warnings related to unrecognized values within elements.) Schema element
     * names are case-sensitive, so this option can also help you remove any potential hidden
     * bugs within your application due to incorrect case or spelling in tag names before you
     * put your application into the Production environment. Note that this setting only validates
     * elements; it does not validate XML attributes.<br> <br> We recommend that you only use
     * this during development and debugging. Do not use this in requests in your production
     * code.
     */
    public $WarningLevel;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param DetailLevelCodeType $val
     * @throws Exception
     */
    public function setDetailLevel($val)
    {
        $this->DetailLevel = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setErrorLanguage($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ErrorLanguage');
        }
        $this->ErrorLanguage = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setMessageID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for MessageID');
        }
        $this->MessageID = (int)$val;
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
        $this->Version = (int)$val;
    }

    /**
     * @param ErrorHandlingCodeType $val
     * @throws Exception
     */
    public function setErrorHandling($val)
    {
        $this->ErrorHandling = (int)$val;
    }

    /**
     * @param UUIDType $val
     * @throws Exception
     */
    public function setInvocationID($val)
    {
        $this->InvocationID = (int)$val;
    }

    /**
     * @param WarningLevelCodeType $val
     * @throws Exception
     */
    public function setWarningLevel($val)
    {
        $this->WarningLevel = (int)$val;
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

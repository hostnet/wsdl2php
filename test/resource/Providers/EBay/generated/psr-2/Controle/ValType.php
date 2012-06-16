<?php

namespace Controle;
class ValType {
    /**
     * @var string | The descriptive name of an attribute or characteristic value (e.g., "New" might be a
     * literal value for a Condition attribute). In item-listing requests, if you send ValueID
     * with an id of -3 or -6, you must use ValueLiteral to enter the value the user specified.
     * Otherwise, eBay treats the request as if no value was sent at all. For eBay.com listings, use
     * AttributeSetArray.AttributeSet.Attribute.Value.ValueLiteral. The max length allowed
     * varies per attribute.<br> <br> For GetSearchResults requests (in SearchRequest), only
     * use ValueLiteral for attributes that support free-text values. That is, if eBay defines
     * a value name and a unique value ID for an attribute in GetProductFinder, do not pass
     * the name in ValueLiteral (because it won't work). Instead, specify the unique value
     * ID in ValueID.<br> <br> For Half.com, use AttributeArray.Attribute.Value.ValueLiteral in
     * listing requests. That is, the parent elements and usage for Half.com differs from eBay's
     * standard Item Specifics format (and there is no relationship to GetAttributesCS). For
     * Half.com, AttributeArray.Attribute.Value.ValueLiteral is required when you use AddItem.
     * See the eBay Web Services Guide for valid values. For the Half.com Notes attribute,
     * the max length is 500 characters. You can revise AttributeArray.Attribute.Value.ValueLiteral
     * for Half.com listings.
     */
    public $ValueLiteral;
    /**
     * @var string | (out) Reserved for future use. Suggested alternative text for ValueLiteral. Multiple
     * SuggestedValueLiteral elements can be returned in a Value node. Not applicable to Half.com.
     */
    public $SuggestedValueLiteral;
    /**
     * @var int | Constant value that identifies the attribute or characteristic in a language-independent
     * way. Unique within the characteristic set.<br> <br> In item-listing requests, if the
     * ID is defined as -3 or -6 (Other) in GetAttributesCS or GetProductSellingPages, use
     * ValueLiteral to specify the string value that the user entered. Otherwise, use ValueID
     * to specify the ID that is pre-defined in GetAttributesCS or GetProductSellingPages. In
     * item-listing requests and product searches, the possible ID values are:<br> -3 = User
     * entered an arbitrary value (not an "Other" field)<br> -6 = User entered a value in an
     * "Other" field<br> -100 = Value not specified (null)<br> #### (integer) = Identifier
     * for a pre-defined value that the user selected (e.g., -14 or 1001)<br> For eBay.com,
     * required if ValueList is specified. Not applicable to Half.com.
     */
    public $ValueID;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setValueLiteral($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for ValueLiteral');
        $this->ValueLiteral = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSuggestedValueLiteral($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for SuggestedValueLiteral');
        $this->SuggestedValueLiteral = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setValueID($val) {
        if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
        $this->ValueID = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val) {
        
        $this->any = (int)$val;
    }

}


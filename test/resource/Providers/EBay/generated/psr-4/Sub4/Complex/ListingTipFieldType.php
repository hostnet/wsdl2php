<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ListingTipFieldType
 * (out) Identifies the item field that the tip relates to.
 */
class ListingTipFieldType
{
    // @codingStandardsIgnoreStart
    /**
     * @var string | Identifier associated with the item field. Primarily for internal use. This value may
     * change over time.
     */
    public $ListingTipFieldID;
    /**
     * @var string | Related text that appears near a field or at the top of the section within which
     *         the field appears in the selling flow.
     */
    public $FieldTip;
    /**
     * @var string | A label used to preface the current value of a field. For example,            "Current
     * value" would be the CurrentValueText in "Current value: 25".            If no label
     * exists, this element is not returned.
     */
    public $CurrentFieldText;
    /**
     * @var string | Current value of the field (in the listing or in the candidate item) or meta-data about
     * the value.             For example, if the tip is recommending a longer item title,
     * the CurrentFieldValue might specify             the current length of the title. If
     * no current value is available, this information is not returned.
     */
    public $CurrentFieldValue;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setListingTipFieldID($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListingTipFieldID');
        }
        $this->ListingTipFieldID = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFieldTip($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FieldTip');
        }
        $this->FieldTip = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCurrentFieldText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CurrentFieldText');
        }
        $this->CurrentFieldText = ()$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCurrentFieldValue($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CurrentFieldValue');
        }
        $this->CurrentFieldValue = ()$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = ()$val;
    }
}

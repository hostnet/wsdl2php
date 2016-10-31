<?php

namespace Controle;

/**
 * ListingTipFieldType
 * (out) Identifies the item field that the tip relates to.
 */
class ListingTipFieldType
{
	/**
	 * @var string | Identifier associated with the item field. Primarily for internal use. This value may change
	 * over time.
	 */
	public $listingtipfieldid;
	/**
	 * @var string | Related text that appears near a field or at the top of the section within which
	 *      the field appears in the selling flow.
	 */
	public $fieldtip;
	/**
	 * @var string | A label used to preface the current value of a field. For example,            "Current
	 * value" would be the CurrentValueText in "Current value: 25".            If no label exists,
	 * this element is not returned.
	 */
	public $currentfieldtext;
	/**
	 * @var string | Current value of the field (in the listing or in the candidate item) or meta-data about
	 * the value.             For example, if the tip is recommending a longer item title, the
	 * CurrentFieldValue might specify             the current length of the title. If no current
	 * value is available, this information is not returned.
	 */
	public $currentfieldvalue;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setListingTipFieldID($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ListingTipFieldID');
        }
        $this->listingtipfieldid = (int)$val;
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
        $this->fieldtip = (int)$val;
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
        $this->currentfieldtext = (int)$val;
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
        $this->currentfieldvalue = (int)$val;
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

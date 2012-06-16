<?php

namespace Controle\sub1\sub2;
/**
 * ListingTipFieldType
 * (out) Identifies the item field that the tip relates to.
 */
class ListingTipFieldType {
	/**
	 * @var string | Identifier associated with the item field. Primarily for internal use. This value may change
	 * over time.
	 */
	public $ListingTipFieldID;
	/**
	 * @var string | Related text that appears near a field or at the top of the section within which
	 *      the field appears in the selling flow.
	 */
	public $FieldTip;
	/**
	 * @var string | A label used to preface the current value of a field. For example,            "Current
	 * value" would be the CurrentValueText in "Current value: 25".            If no label exists,
	 * this element is not returned.
	 */
	public $CurrentFieldText;
	/**
	 * @var string | Current value of the field (in the listing or in the candidate item) or meta-data about
	 * the value.             For example, if the tip is recommending a longer item title, the
	 * CurrentFieldValue might specify             the current length of the title. If no current
	 * value is available, this information is not returned.
	 */
	public $CurrentFieldValue;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}


<?php

namespace Controle;
/**
 * GetAttributesCSResponseType
 * Returns XML that describes how to present Item Specifics to a seller and how to validate
 * selected eBay attributes on the client before including them in an AddItem call or related
 * calls. See the Developer's Guide for an overview of Item Specifics and details about the
 * eBay attribute model. Also returns the current version of the meta-data system.
 */
class GetAttributesCSResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var string | Current version of the product search page data for the site. This value changes each time
	 * changes are made to the search page data. The current version value is not necessarily
	 * greater than the previous value. Therefore, when comparing versions, only compare whether
	 * the value has changed.
	 */
	public $AttributeSystemVersion;
	/**
	 * @var string | A string containing a list of all the attributes that are applicable to the site (or characteristic
	 * sets in the request), along with related meta-data. The meta-data specifies all the possible
	 * values of each attribute, the logic for presenting attributes to a user, and rules for validating
	 * the user's selections. Individual elements are not described in the eBay schema format. For
	 * information about each element in the AttributeData string, see the attribute model documentation
	 * in the eBay Web Services guide (see links below).<br> <br> Because this is returned as
	 * a string, the XML markup elements are escaped with character entity references (e.g., &amp;lt;eBay&amp;gt;&amp;lt;Attributes&amp;gt; ...). See
	 * the appendices in the eBay Web Services guide for general information about string data
	 * types.
	 */
	public $AttributeData;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAttributeSystemVersion($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for AttributeSystemVersion');
		$this->AttributeSystemVersion = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAttributeData($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for AttributeData');
		$this->AttributeData = (int)$val;
	}

}


<?php

namespace Controle\sub1\sub2;
/**
 * GetAttributesXSLResponseType
 * Retrieves the Item Specifics SYI XSL stylesheet.Apply the stylesheet to the XML returned
 * from a call to GetAttributesCS or GetProductSellingPages to render a form like the Item
 * Specifics portion of eBay's Title and Description page. See the Developer's Guide for an
 * overview of Item Specifics and information on working with the XSL.
 */
class GetAttributesXSLResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\XSLFileType | Child elements specify data related to one XSL file. See XSLFileType. Multiple XSLFile
	 * objects can be returned.
	 */
	public $XSLFile;
	/**
	 * @param XSLFileType $val
	 * @throws Exception
	 */
	public function setXSLFile($val) {
		
		$this->XSLFile = (int)$val;
	}

}


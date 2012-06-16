<?php

namespace Controle;
/**
 * GetAttributesXSLResponseType
 * Retrieves the Item Specifics SYI XSL stylesheet.Apply the stylesheet to the XML returned
 * from a call to GetAttributesCS or GetProductSellingPages to render a form like the Item
 * Specifics portion of eBay's Title and Description page. See the Developer's Guide for an
 * overview of Item Specifics and information on working with the XSL.
 */
class GetAttributesXSLResponseType extends \Controle\AbstractResponseType {
	/**
	 * @var \Controle\XSLFileType | Child elements specify data related to one XSL file. See XSLFileType. Multiple XSLFile
	 * objects can be returned.
	 */
	public $XSLFile;
}


<?php

namespace Controle\sub1\sub2;
/**
 * GetProductFinderXSLResponseType
 * Retrieves the Product Finder XSL stylesheet. Apply the stylesheet to the XML returned from
 * a call to GetProductFinder to render a form that lets a user form a multi-attribute query
 * against eBay catalog data. See the Developer's Guide for an overview of Pre-filled Item
 * Information and information on searching for catalog products.
 */
class GetProductFinderXSLResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var \Controle\sub1\sub2\XSLFileType | Child elements specify data related to one XSL file. See XSLFileType. Multiple XSLFile
	 * objects can be returned.
	 */
	public $XSLFile;
}


<?php

namespace Controle\sub1\sub2;
/**
 * XSLFileType
 * Describes an XSL file that would be returned from an Item Specifics or Pre-filled Item Information
 * meta-data call (such as GetAttributesXSL or GetProductFinderXSL).
 */
class XSLFileType {
	/**
	 * @var string | The name of the XSL file. Store this information to use it as input to the call in the
	 * future.
	 */
	public $FileName;
	/**
	 * @var string | The version number of the XSL file. Store this information to use it            as input
	 * to the call in the future.
	 */
	public $FileVersion;
	/**
	 * @var string | Contains a MIME base-64-encoded representation of the XSL file. See the eBay Web Services
	 * Guide for information on decoding the XSL stylesheet file. If no XSL file is available
	 * (or if you passed no detail level), this property is empty or not returned.
	 */
	public $FileContent;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}


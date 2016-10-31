<?php

namespace Controle;
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
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFileName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for FileName');
		$this->FileName = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFileVersion($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for FileVersion');
		$this->FileVersion = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFileContent($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for FileContent');
		$this->FileContent = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}


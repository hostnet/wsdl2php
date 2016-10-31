<?php

namespace Controle\sub1\sub2;

/**
 * GetRuNameResponseType
 * Contains the generated runame (unique identifier for an authentication data entry).
 */
class GetRuNameResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	/**
	 * @var string | A unique identifier associated with application and the combination            of URLs
	 * within this authentication entry.            Unique across all applications that execute
	 * eBay Web Services calls.            For convenience, you can call GetRuName to generate
	 * a unique value.
	 */
	public $runame;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setRuName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for RuName');
        }
        $this->runame = (int)$val;
	}
}

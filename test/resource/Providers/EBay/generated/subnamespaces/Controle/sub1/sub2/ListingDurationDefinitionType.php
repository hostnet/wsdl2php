<?php

namespace Controle\sub1\sub2;

/**
 * ListingDurationDefinitionType
 * A container node for a set of durations that apply to a certain listing type.
 */
class ListingDurationDefinitionType
{
	/**
	 * @var \Controle\sub1\sub2\token | Specifies the length of time an auction can be open, in days. The allowed durations vary
	 * according to the type of listing. The value GTC means Good Til Canceled.
	 */
	public $duration;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
	/**
	 * @var int
	 */
	public $durationsetid;
	/**
	 * @param token $val
	 * @throws Exception
	 */
	public function setDuration($val)
	{
        $this->duration = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setDurationSetID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->durationsetid = (int)$val;
	}
}

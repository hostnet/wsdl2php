<?php

namespace Controle;

/**
 * ProximitySearchType
 * Contains data for filtering a search by proximity.
 */
class ProximitySearchType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | The maximum distance from the specified postal code to search for items.
     */
    public $MaxDistance;
    /**
     * @var string | The postal code to use as the basis for the proximity search.
     */
    public $PostalCode;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setMaxDistance($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->MaxDistance = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setPostalCode($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PostalCode');
        }
        $this->PostalCode = $val;
    }

    /**
     * @param <anyXML> $val
     * @throws \Exception
     */
    public function setAny($val)
    {
        $this->any = $val;
    }
}

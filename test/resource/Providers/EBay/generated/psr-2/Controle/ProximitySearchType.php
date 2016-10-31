<?php

namespace Controle;

/**
 * ProximitySearchType
 * Contains data for filtering a search by proximity.
 */
class ProximitySearchType
{
    /**
     * @var int | The maximum distance from the specified postal code to search for items.
     */
    public $maxdistance;
    /**
     * @var string | The postal code to use as the basis for the proximity search.
     */
    public $postalcode;
    /**
     * @var \Controle\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setMaxDistance($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->maxdistance = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setPostalCode($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for PostalCode');
        }
        $this->postalcode = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}

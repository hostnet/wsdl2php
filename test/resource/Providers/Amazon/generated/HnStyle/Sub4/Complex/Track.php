<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Track
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $TrackName;
    /**
     * @var string
     */
    public $ByArtist;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setTrackName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TrackName');
        }
        $this->TrackName = $val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setByArtist($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for ByArtist');
        }
        $this->ByArtist = $val;
    }
}

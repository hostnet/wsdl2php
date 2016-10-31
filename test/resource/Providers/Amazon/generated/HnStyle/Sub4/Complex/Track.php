<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Track
{
    /**
     * @var string
     */
    public $trackname;
    /**
     * @var string
     */
    public $byartist;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setTrackName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TrackName');
        }
        $this->trackname = (int)$val;
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
        $this->byartist = (int)$val;
    }
}

<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SvW
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CompanySVWSettings
     */
    public $SVWSettings;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Sector
     */
    public $Sector;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Risicogroep
     */
    public $Risicogroep;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CAO
     */
    public $CAO;
    // @codingStandardsIgnoreEnd

    /**
     * @param CompanySVWSettings $val
     * @throws Exception
     */
    public function setSVWSettings($val)
    {
        $this->SVWSettings = (int)$val;
    }

    /**
     * @param Sector $val
     * @throws Exception
     */
    public function setSector($val)
    {
        $this->Sector = (int)$val;
    }

    /**
     * @param Risicogroep $val
     * @throws Exception
     */
    public function setRisicogroep($val)
    {
        $this->Risicogroep = (int)$val;
    }

    /**
     * @param CAO $val
     * @throws Exception
     */
    public function setCAO($val)
    {
        $this->CAO = (int)$val;
    }
}

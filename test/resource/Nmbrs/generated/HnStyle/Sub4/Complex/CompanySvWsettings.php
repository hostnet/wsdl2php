<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CompanySvWsettings
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $CodeCao;
    /**
     * @var boolean
     */
    public $EigenrisicodragerGediffWGA;
    /**
     * @var boolean
     */
    public $EigenrisicodragerUniformeWAO;
    /**
     * @var boolean
     */
    public $EigenrisicodragerZiektewet;
    /**
     * @var int
     */
    public $RisicoGroep;
    /**
     * @var decimal
     */
    public $Gediff_WGA_wn;
    /**
     * @var decimal
     */
    public $Gediff_WGA_wg;
    /**
     * @var int
     */
    public $Sector;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCodeCao($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->CodeCao = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEigenrisicodragerGediffWGA($val)
    {
        $this->EigenrisicodragerGediffWGA = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEigenrisicodragerUniformeWAO($val)
    {
        $this->EigenrisicodragerUniformeWAO = $val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setEigenrisicodragerZiektewet($val)
    {
        $this->EigenrisicodragerZiektewet = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setRisicoGroep($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->RisicoGroep = $val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setGediffWGAwn($val)
    {
        $this->Gediff_WGA_wn = $val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setGediffWGAwg($val)
    {
        $this->Gediff_WGA_wg = $val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setSector($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Sector = $val;
    }
}

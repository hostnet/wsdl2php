<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SvWsettings
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Id;
    /**
     * @var string
     */
    public $InvloedVerzekeringsplicht;
    /**
     * @var int
     */
    public $PremieKorting;
    /**
     * @var boolean
     */
    public $PremieKortingVerhoging;
    /**
     * @var int
     */
    public $CodeCao;
    /**
     * @var boolean
     */
    public $Wao_Wia;
    /**
     * @var boolean
     */
    public $Ww;
    /**
     * @var boolean
     */
    public $Zw;
    /**
     * @var int
     */
    public $CodeIabZvw;
    /**
     * @var string
     */
    public $CodeZvw;
    /**
     * @var int
     */
    public $RisicoGroep;
    /**
     * @var int
     */
    public $Sector;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Id = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setInvloedVerzekeringsplicht($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for InvloedVerzekeringsplicht');
        }
        $this->InvloedVerzekeringsplicht = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setPremieKorting($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->PremieKorting = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setPremieKortingVerhoging($val)
    {
        $this->PremieKortingVerhoging = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCodeCao($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CodeCao = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setWaoWia($val)
    {
        $this->Wao_Wia = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setWw($val)
    {
        $this->Ww = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setZw($val)
    {
        $this->Zw = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCodeIabZvw($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CodeIabZvw = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setCodeZvw($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CodeZvw');
        }
        $this->CodeZvw = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setRisicoGroep($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->RisicoGroep = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setSector($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Sector = $val;
    }
}

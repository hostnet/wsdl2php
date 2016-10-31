<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SvWsettings
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $invloedverzekeringsplicht;
    /**
     * @var int
     */
    public $premiekorting;
    /**
     * @var boolean
     */
    public $premiekortingverhoging;
    /**
     * @var int
     */
    public $codecao;
    /**
     * @var boolean
     */
    public $wao_wia;
    /**
     * @var boolean
     */
    public $ww;
    /**
     * @var boolean
     */
    public $zw;
    /**
     * @var int
     */
    public $codeiabzvw;
    /**
     * @var string
     */
    public $codezvw;
    /**
     * @var int
     */
    public $risicogroep;
    /**
     * @var int
     */
    public $sector;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->id = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setInvloedVerzekeringsplicht($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for InvloedVerzekeringsplicht');
        }
        $this->invloedverzekeringsplicht = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPremieKorting($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->premiekorting = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setPremieKortingVerhoging($val)
    {
        $this->premiekortingverhoging = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCodeCao($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->codecao = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setWaoWia($val)
    {
        $this->wao_wia = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setWw($val)
    {
        $this->ww = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setZw($val)
    {
        $this->zw = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCodeIabZvw($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->codeiabzvw = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setCodeZvw($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for CodeZvw');
        }
        $this->codezvw = (int)$val;
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
        $this->risicogroep = (int)$val;
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
        $this->sector = (int)$val;
    }
}

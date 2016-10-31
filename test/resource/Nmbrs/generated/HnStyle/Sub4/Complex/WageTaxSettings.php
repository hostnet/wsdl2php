<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class WageTaxSettings
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var decimal
     */
    public $jaarloonbt;
    /**
     * @var decimal
     */
    public $afwbijztarieflh;
    /**
     * @var boolean
     */
    public $autokleinebanenregeling;
    /**
     * @var boolean
     */
    public $loonheffingkorting;
    /**
     * @var boolean
     */
    public $voordeelreg;
    /**
     * @var boolean
     */
    public $loonheffing;
    /**
     * @var int
     */
    public $codeafdrachtvermindering;
    /**
     * @var int
     */
    public $kleurtabel;
    /**
     * @var int
     */
    public $soortinkomen;
    /**
     * @var int
     */
    public $specialetabel;
    /**
     * @var int
     */
    public $tijdvaktabel;
    /**
     * @var int
     */
    public $vakantiebonnen;
    /**
     * @var int
     */
    public $codecalc30percrule;
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
     * @param decimal $val
     * @throws Exception
     */
    public function setJaarloonBT($val)
    {
        $this->jaarloonbt = (int)$val;
    }

    /**
     * @param decimal $val
     * @throws Exception
     */
    public function setAfwBijzTariefLH($val)
    {
        $this->afwbijztarieflh = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setAutoKleineBanenRegeling($val)
    {
        $this->autokleinebanenregeling = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setLoonheffingkorting($val)
    {
        $this->loonheffingkorting = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setVoordeelreg($val)
    {
        $this->voordeelreg = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setLoonheffing($val)
    {
        $this->loonheffing = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCodeAfdrachtvermindering($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->codeafdrachtvermindering = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setKleurTabel($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->kleurtabel = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setSoortInkomen($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->soortinkomen = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setSpecialeTabel($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->specialetabel = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setTijdvakTabel($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->tijdvaktabel = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setVakantieBonnen($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->vakantiebonnen = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setCodeCalc30PercRule($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->codecalc30percrule = (int)$val;
    }
}

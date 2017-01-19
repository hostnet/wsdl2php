<?php

namespace Controle;

class WageTaxSettings
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Id;
    /**
     * @var decimal
     */
    public $JaarloonBT;
    /**
     * @var decimal
     */
    public $AfwBijzTariefLH;
    /**
     * @var boolean
     */
    public $AutoKleineBanenRegeling;
    /**
     * @var boolean
     */
    public $Loonheffingkorting;
    /**
     * @var boolean
     */
    public $Voordeelreg;
    /**
     * @var boolean
     */
    public $Loonheffing;
    /**
     * @var int
     */
    public $CodeAfdrachtvermindering;
    /**
     * @var int
     */
    public $KleurTabel;
    /**
     * @var int
     */
    public $SoortInkomen;
    /**
     * @var int
     */
    public $SpecialeTabel;
    /**
     * @var int
     */
    public $TijdvakTabel;
    /**
     * @var int
     */
    public $VakantieBonnen;
    /**
     * @var int
     */
    public $CodeCalc30PercRule;
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
     * @param decimal $val
     * @throws \Exception
     */
    public function setJaarloonBT($val)
    {
        $this->JaarloonBT = $val;
    }

    /**
     * @param decimal $val
     * @throws \Exception
     */
    public function setAfwBijzTariefLH($val)
    {
        $this->AfwBijzTariefLH = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setAutoKleineBanenRegeling($val)
    {
        $this->AutoKleineBanenRegeling = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setLoonheffingkorting($val)
    {
        $this->Loonheffingkorting = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setVoordeelreg($val)
    {
        $this->Voordeelreg = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setLoonheffing($val)
    {
        $this->Loonheffing = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCodeAfdrachtvermindering($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CodeAfdrachtvermindering = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setKleurTabel($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->KleurTabel = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setSoortInkomen($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->SoortInkomen = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setSpecialeTabel($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->SpecialeTabel = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setTijdvakTabel($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->TijdvakTabel = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setVakantieBonnen($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->VakantieBonnen = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCodeCalc30PercRule($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CodeCalc30PercRule = $val;
    }
}

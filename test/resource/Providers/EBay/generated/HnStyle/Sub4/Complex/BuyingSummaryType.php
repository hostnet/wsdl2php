<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class BuyingSummaryType
{
    /**
     * @var int | The number of items the user has bid on.
     */
    public $biddingcount;
    /**
     * @var int | The number of items the user has bid on and is winning, but that have not yet ended.
     */
    public $winningcount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The total cost of items the user is presently winning.
     */
    public $totalwinningcost;
    /**
     * @var int | The number of items the user has bid on and won.
     */
    public $woncount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The total cost of items the user has bid on and won.
     */
    public $totalwoncost;
    /**
     * @var int | The time period for which won items are displayed. Default is 31 days.
     */
    public $wondurationindays;
    /**
     * @var int | The number of items the user has made best offers on.
     */
    public $bestoffercount;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setBiddingCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->biddingcount = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setWinningCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->winningcount = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setTotalWinningCost($val)
    {
        $this->totalwinningcost = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setWonCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->woncount = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setTotalWonCost($val)
    {
        $this->totalwoncost = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setWonDurationInDays($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->wondurationindays = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setBestOfferCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->bestoffercount = (int)$val;
    }
}

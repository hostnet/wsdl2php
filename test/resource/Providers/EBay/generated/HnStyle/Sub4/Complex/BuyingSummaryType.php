<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class BuyingSummaryType
{
    // @codingStandardsIgnoreStart
    /**
     * @var int | The number of items the user has bid on.
     */
    public $BiddingCount;
    /**
     * @var int | The number of items the user has bid on and is winning, but that have not yet ended.
     */
    public $WinningCount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The total cost of items the user is presently winning.
     */
    public $TotalWinningCost;
    /**
     * @var int | The number of items the user has bid on and won.
     */
    public $WonCount;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | The total cost of items the user has bid on and won.
     */
    public $TotalWonCost;
    /**
     * @var int | The time period for which won items are displayed. Default is 31 days.
     */
    public $WonDurationInDays;
    /**
     * @var int | The number of items the user has made best offers on.
     */
    public $BestOfferCount;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setBiddingCount($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->BiddingCount = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setWinningCount($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WinningCount = $val;
    }

    /**
     * @param AmountType $val
     * @throws \Exception
     */
    public function setTotalWinningCost($val)
    {
        $this->TotalWinningCost = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setWonCount($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WonCount = $val;
    }

    /**
     * @param AmountType $val
     * @throws \Exception
     */
    public function setTotalWonCost($val)
    {
        $this->TotalWonCost = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setWonDurationInDays($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WonDurationInDays = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setBestOfferCount($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->BestOfferCount = $val;
    }
}

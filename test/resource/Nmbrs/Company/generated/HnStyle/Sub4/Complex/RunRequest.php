<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class RunRequest
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $Period;
    /**
     * @var int
     */
    public $Year;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RunRequestStatus
     */
    public $Status;
    /**
     * @var dateTime
     */
    public $HandledDate;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setPeriod($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Period = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setYear($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Year = $val;
    }

    /**
     * @param RunRequestStatus $val
     * @throws \Exception
     */
    public function setStatus($val)
    {
        $this->Status = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setHandledDate($val)
    {
        $this->HandledDate = $val;
    }
}

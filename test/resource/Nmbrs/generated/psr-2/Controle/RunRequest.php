<?php

namespace Controle;

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
     * @var \Controle\RunRequestStatus
     */
    public $Status;
    /**
     * @var dateTime
     */
    public $HandledDate;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPeriod($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Period = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setYear($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->Year = (int)$val;
    }

    /**
     * @param RunRequestStatus $val
     * @throws Exception
     */
    public function setStatus($val)
    {
        $this->Status = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setHandledDate($val)
    {
        $this->HandledDate = (int)$val;
    }
}

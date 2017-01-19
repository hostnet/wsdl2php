<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Employee;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $FirstName;
    /**
     * @var string
     */
    public $LastName;
    /**
     * @var dateTime
     */
    public $StartDate;
    /**
     * @var int
     */
    public $CompanyId;
    /**
     * @var boolean
     */
    public $UnprotectedMode;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setFirstName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for FirstName');
        }
        $this->FirstName = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setLastName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for LastName');
        }
        $this->LastName = $val;
    }

    /**
     * @param dateTime $val
     * @throws \Exception
     */
    public function setStartDate($val)
    {
        $this->StartDate = $val;
    }

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setCompanyId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyId = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setUnprotectedMode($val)
    {
        $this->UnprotectedMode = $val;
    }
}

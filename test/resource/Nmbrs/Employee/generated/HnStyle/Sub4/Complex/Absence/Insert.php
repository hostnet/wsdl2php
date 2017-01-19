<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Absence;

class Insert
{
    // @codingStandardsIgnoreStart
    /**
     * @var int
     */
    public $EmployeeId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Absence
     */
    public $Absence;
    /**
     * @var boolean
     */
    public $NewDossier;
    // @codingStandardsIgnoreEnd

    /**
     * @param int $val
     * @throws \Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeId = $val;
    }

    /**
     * @param Absence $val
     * @throws \Exception
     */
    public function setAbsence($val)
    {
        $this->Absence = $val;
    }

    /**
     * @param boolean $val
     * @throws \Exception
     */
    public function setNewDossier($val)
    {
        $this->NewDossier = $val;
    }
}

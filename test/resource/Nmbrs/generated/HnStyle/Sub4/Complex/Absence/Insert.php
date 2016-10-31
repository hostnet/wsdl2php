<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex\Absence;

class Insert
{
    /**
     * @var int
     */
    public $employeeid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Absence
     */
    public $absence;
    /**
     * @var boolean
     */
    public $newdossier;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setEmployeeId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->employeeid = (int)$val;
    }

    /**
     * @param Absence $val
     * @throws Exception
     */
    public function setAbsence($val)
    {
        $this->absence = (int)$val;
    }

    /**
     * @param boolean $val
     * @throws Exception
     */
    public function setNewDossier($val)
    {
        $this->newdossier = (int)$val;
    }
}

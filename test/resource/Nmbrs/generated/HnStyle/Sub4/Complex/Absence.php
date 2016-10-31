<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Absence
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var int
     */
    public $percentage;
    /**
     * @var dateTime
     */
    public $start;
    /**
     * @var dateTime
     */
    public $registrationstartdate;
    /**
     * @var dateTime
     */
    public $end;
    /**
     * @var dateTime
     */
    public $registrationenddate;
    /**
     * @var string
     */
    public $dossier;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setComment($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Comment');
        }
        $this->comment = (int)$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setPercentage($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->percentage = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setStart($val)
    {
        $this->start = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRegistrationStartDate($val)
    {
        $this->registrationstartdate = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setEnd($val)
    {
        $this->end = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setRegistrationEndDate($val)
    {
        $this->registrationenddate = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDossier($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Dossier');
        }
        $this->dossier = (int)$val;
    }
}

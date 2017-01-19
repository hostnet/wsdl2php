<?php

namespace Controle;

class Absence
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Comment;
	/**
	 * @var int
	 */
	public $Percentage;
	/**
	 * @var dateTime
	 */
	public $Start;
	/**
	 * @var dateTime
	 */
	public $RegistrationStartDate;
	/**
	 * @var dateTime
	 */
	public $End;
	/**
	 * @var dateTime
	 */
	public $RegistrationEndDate;
	/**
	 * @var string
	 */
	public $Dossier;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setComment($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Comment');
        }
        $this->Comment = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setPercentage($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Percentage = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setStart($val)
	{
        $this->Start = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setRegistrationStartDate($val)
	{
        $this->RegistrationStartDate = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setEnd($val)
	{
        $this->End = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setRegistrationEndDate($val)
	{
        $this->RegistrationEndDate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDossier($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Dossier');
        }
        $this->Dossier = $val;
	}
}

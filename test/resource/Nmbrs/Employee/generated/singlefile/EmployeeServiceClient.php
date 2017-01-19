<?php

class DaysVar_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class DaysVar_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DaysVar_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDaysVarGetResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DaysVar_GetResult = $val;
	}
}

class DaysVar_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class DaysVar_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DaysVar_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDaysVarGetCurrentResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DaysVar_GetCurrentResult = $val;
	}
}

class DaysVar_SetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Days;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDays($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Days = $val;
	}
}

class DaysVar_SetCurrentResponse
{}

class DaysVar_Set
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Days;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDays($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Days = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class DaysVar_SetResponse
{}

class HourComponentVar_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class HourComponentVar_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var HourComponent[]
	 */
	public $HourComponentVar_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfHourComponent $val
	 * @throws \Exception
	 */
	public function setHourComponentVarGetResult($val)
	{
        $this->HourComponentVar_GetResult = $val;
	}
}

class HourComponent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $HourCode;
	/**
	 * @var decimal
	 */
	public $Hours;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setHourCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourCode = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHours($val)
	{
        $this->Hours = $val;
	}
}

class HourComponentVar_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class HourComponentVar_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var HourComponent[]
	 */
	public $HourComponentVar_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfHourComponent $val
	 * @throws \Exception
	 */
	public function setHourComponentVarGetCurrentResult($val)
	{
        $this->HourComponentVar_GetCurrentResult = $val;
	}
}

class HourComponentVar_ClearCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class HourComponentVar_ClearCurrentResponse
{}

class HourComponentVar_Clear
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class HourComponentVar_ClearResponse
{}

class HourComponentVar_InsertCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var HourComponent
	 */
	public $Hourcomponent;
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
	 * @param HourComponent $val
	 * @throws \Exception
	 */
	public function setHourcomponent($val)
	{
        $this->Hourcomponent = $val;
	}
}

class HourComponentVar_InsertCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $HourComponentVar_InsertCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setHourComponentVarInsertCurrentResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourComponentVar_InsertCurrentResult = $val;
	}
}

class HourComponentVar_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var HourComponent
	 */
	public $Hourcomponent;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param HourComponent $val
	 * @throws \Exception
	 */
	public function setHourcomponent($val)
	{
        $this->Hourcomponent = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class HourComponentVar_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $HourComponentVar_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setHourComponentVarInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourComponentVar_InsertResult = $val;
	}
}

class HourComponentVar_Insert_Batch
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeHourComponent[]
	 */
	public $HourComponents;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeHourComponent $val
	 * @throws \Exception
	 */
	public function setHourComponents($val)
	{
        $this->HourComponents = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class EmployeeHourComponent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $HourCode;
	/**
	 * @var decimal
	 */
	public $Hours;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setHourCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourCode = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHours($val)
	{
        $this->Hours = $val;
	}
}

class HourComponentVar_Insert_BatchResponse
{}

class WageComponentVar_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class WageComponentVar_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var WageComponent[]
	 */
	public $WageComponentVar_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfWageComponent $val
	 * @throws \Exception
	 */
	public function setWageComponentVarGetResult($val)
	{
        $this->WageComponentVar_GetResult = $val;
	}
}

class WageComponent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $Code;
	/**
	 * @var decimal
	 */
	public $Value;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setValue($val)
	{
        $this->Value = $val;
	}
}

class WageComponentVar_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class WageComponentVar_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var WageComponent[]
	 */
	public $WageComponentVar_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfWageComponent $val
	 * @throws \Exception
	 */
	public function setWageComponentVarGetCurrentResult($val)
	{
        $this->WageComponentVar_GetCurrentResult = $val;
	}
}

class WageComponentVar_ClearCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class WageComponentVar_ClearCurrentResponse
{}

class WageComponentVar_Clear
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class WageComponentVar_ClearResponse
{}

class WageComponentVar_InsertCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var WageComponent
	 */
	public $WageComponent;
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
	 * @param WageComponent $val
	 * @throws \Exception
	 */
	public function setWageComponent($val)
	{
        $this->WageComponent = $val;
	}
}

class WageComponentVar_InsertCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $WageComponentVar_InsertCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setWageComponentVarInsertCurrentResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WageComponentVar_InsertCurrentResult = $val;
	}
}

class WageComponentVar_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var WageComponent
	 */
	public $WageComponent;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param WageComponent $val
	 * @throws \Exception
	 */
	public function setWageComponent($val)
	{
        $this->WageComponent = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class WageComponentVar_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $WageComponentVar_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setWageComponentVarInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WageComponentVar_InsertResult = $val;
	}
}

class WageComponentVar_Insert_Batch
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeWageComponent[]
	 */
	public $WageComponents;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeWageComponent $val
	 * @throws \Exception
	 */
	public function setWageComponents($val)
	{
        $this->WageComponents = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class EmployeeWageComponent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $Code;
	/**
	 * @var decimal
	 */
	public $Value;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setValue($val)
	{
        $this->Value = $val;
	}
}

class WageComponentVar_Insert_BatchResponse
{}

class PersonalInfo_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class PersonalInfo_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var PersonalInfo
	 */
	public $PersonalInfo_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param PersonalInfo $val
	 * @throws \Exception
	 */
	public function setPersonalInfoGetCurrentResult($val)
	{
        $this->PersonalInfo_GetCurrentResult = $val;
	}
}

class Employee
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $Number;
	/**
	 * @var string
	 */
	public $DisplayName;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setNumber($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Number = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDisplayName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DisplayName');
        }
        $this->DisplayName = $val;
	}
}

class PersonalInfo extends
 Employee
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeNumber;
	/**
	 * @var string
	 */
	public $BSN;
	/**
	 * @var string
	 */
	public $Title;
	/**
	 * @var string
	 */
	public $FirstName;
	/**
	 * @var string
	 */
	public $Initials;
	/**
	 * @var string
	 */
	public $Prefix;
	/**
	 * @var string
	 */
	public $LastName;
	/**
	 * @var string
	 */
	public $Nickname;
	/**
	 * @var Gender
	 */
	public $Gender;
	/**
	 * @var int
	 */
	public $NationalityCode;
	/**
	 * @var string
	 */
	public $PlaceOfBirth;
	/**
	 * @var string
	 */
	public $CountryOfBirthISOCode;
	/**
	 * @var string
	 */
	public $IdentificationNumber;
	/**
	 * @var int
	 */
	public $IdentificationType;
	/**
	 * @var string
	 */
	public $PartnerPrefix;
	/**
	 * @var string
	 */
	public $PartnerLastName;
	/**
	 * @var string
	 */
	public $TelephonePrivate;
	/**
	 * @var string
	 */
	public $TelephoneWork;
	/**
	 * @var string
	 */
	public $TelephoneMobilePrivate;
	/**
	 * @var string
	 */
	public $TelephoneMobileWork;
	/**
	 * @var string
	 */
	public $TelephoneOther;
	/**
	 * @var string
	 */
	public $EmailPrivate;
	/**
	 * @var string
	 */
	public $EmailWork;
	/**
	 * @var string
	 */
	public $BurgerlijkeStaat;
	/**
	 * @var string
	 */
	public $Naamstelling;
	/**
	 * @var dateTime
	 */
	public $Birthday;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmployeeNumber($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeNumber = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBSN($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for BSN');
        }
        $this->BSN = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTitle($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Title');
        }
        $this->Title = $val;
	}

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
	public function setInitials($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Initials');
        }
        $this->Initials = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPrefix($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Prefix');
        }
        $this->Prefix = $val;
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNickname($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Nickname');
        }
        $this->Nickname = $val;
	}

	/**
	 * @param Gender $val
	 * @throws \Exception
	 */
	public function setGender($val)
	{
        $this->Gender = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setNationalityCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->NationalityCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPlaceOfBirth($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PlaceOfBirth');
        }
        $this->PlaceOfBirth = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCountryOfBirthISOCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CountryOfBirthISOCode');
        }
        $this->CountryOfBirthISOCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setIdentificationNumber($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for IdentificationNumber');
        }
        $this->IdentificationNumber = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setIdentificationType($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->IdentificationType = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPartnerPrefix($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PartnerPrefix');
        }
        $this->PartnerPrefix = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPartnerLastName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PartnerLastName');
        }
        $this->PartnerLastName = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephonePrivate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephonePrivate');
        }
        $this->TelephonePrivate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneWork($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneWork');
        }
        $this->TelephoneWork = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneMobilePrivate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneMobilePrivate');
        }
        $this->TelephoneMobilePrivate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneMobileWork($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneMobileWork');
        }
        $this->TelephoneMobileWork = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneOther($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneOther');
        }
        $this->TelephoneOther = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmailPrivate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for EmailPrivate');
        }
        $this->EmailPrivate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmailWork($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for EmailWork');
        }
        $this->EmailWork = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBurgerlijkeStaat($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for BurgerlijkeStaat');
        }
        $this->BurgerlijkeStaat = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNaamstelling($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Naamstelling');
        }
        $this->Naamstelling = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setBirthday($val)
	{
        $this->Birthday = $val;
	}
}

class Gender
{
	const UNDEFINED = 'undefined';
	const MALE      = 'male';
	const FEMALE    = 'female';
}

class PersonalInfo_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class PersonalInfo_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var PersonalInfo
	 */
	public $PersonalInfo_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param PersonalInfo $val
	 * @throws \Exception
	 */
	public function setPersonalInfoGetResult($val)
	{
        $this->PersonalInfo_GetResult = $val;
	}
}

class PersonalInfo_UpdateCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var PersonalInfo
	 */
	public $PersonalInfo;
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
	 * @param PersonalInfo $val
	 * @throws \Exception
	 */
	public function setPersonalInfo($val)
	{
        $this->PersonalInfo = $val;
	}
}

class PersonalInfo_UpdateCurrentResponse
{}

class PersonalInfo_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var PersonalInfo
	 */
	public $PersonalInfo;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
	 * @param PersonalInfo $val
	 * @throws \Exception
	 */
	public function setPersonalInfo($val)
	{
        $this->PersonalInfo = $val;
	}

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
}

class PersonalInfo_UpdateResponse
{}

class PersonalInfo_GetAll_AllEmployeesByCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCompanyID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyID = $val;
	}
}

class PersonalInfo_GetAll_AllEmployeesByCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var PersonalInfoItem[]
	 */
	public $PersonalInfo_GetAll_AllEmployeesByCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfPersonalInfoItem $val
	 * @throws \Exception
	 */
	public function setPersonalInfoGetAllAllEmployeesByCompanyResult($val)
	{
        $this->PersonalInfo_GetAll_AllEmployeesByCompanyResult = $val;
	}
}

class PersonalInfoItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var PersonalInfo_V2[]
	 */
	public $EmployeePersonalInfos;
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
	 * @param ArrayOfPersonalInfo_V2 $val
	 * @throws \Exception
	 */
	public function setEmployeePersonalInfos($val)
	{
        $this->EmployeePersonalInfos = $val;
	}
}

class PersonalInfo_V2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var string
	 */
	public $DisplayName;
	/**
	 * @var int
	 */
	public $EmployeeNumber;
	/**
	 * @var string
	 */
	public $BSN;
	/**
	 * @var string
	 */
	public $Title;
	/**
	 * @var string
	 */
	public $FirstName;
	/**
	 * @var string
	 */
	public $Initials;
	/**
	 * @var string
	 */
	public $Prefix;
	/**
	 * @var string
	 */
	public $LastName;
	/**
	 * @var string
	 */
	public $Nickname;
	/**
	 * @var Gender
	 */
	public $Gender;
	/**
	 * @var int
	 */
	public $NationalityCode;
	/**
	 * @var string
	 */
	public $PlaceOfBirth;
	/**
	 * @var string
	 */
	public $CountryOfBirthISOCode;
	/**
	 * @var string
	 */
	public $IdentificationNumber;
	/**
	 * @var int
	 */
	public $IdentificationType;
	/**
	 * @var string
	 */
	public $PartnerPrefix;
	/**
	 * @var string
	 */
	public $PartnerLastName;
	/**
	 * @var string
	 */
	public $TelephonePrivate;
	/**
	 * @var string
	 */
	public $TelephoneWork;
	/**
	 * @var string
	 */
	public $TelephoneMobilePrivate;
	/**
	 * @var string
	 */
	public $TelephoneMobileWork;
	/**
	 * @var string
	 */
	public $TelephoneOther;
	/**
	 * @var string
	 */
	public $EmailPrivate;
	/**
	 * @var string
	 */
	public $EmailWork;
	/**
	 * @var int
	 */
	public $BurgerlijkeStaat;
	/**
	 * @var int
	 */
	public $Naamstelling;
	/**
	 * @var dateTime
	 */
	public $Birthday;
	/**
	 * @var dateTime
	 */
	public $CreationDate;
	/**
	 * @var int
	 */
	public $StartPeriod;
	/**
	 * @var int
	 */
	public $StartYear;
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDisplayName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for DisplayName');
        }
        $this->DisplayName = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmployeeNumber($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeNumber = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBSN($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for BSN');
        }
        $this->BSN = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTitle($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Title');
        }
        $this->Title = $val;
	}

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
	public function setInitials($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Initials');
        }
        $this->Initials = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPrefix($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Prefix');
        }
        $this->Prefix = $val;
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNickname($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Nickname');
        }
        $this->Nickname = $val;
	}

	/**
	 * @param Gender $val
	 * @throws \Exception
	 */
	public function setGender($val)
	{
        $this->Gender = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setNationalityCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->NationalityCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPlaceOfBirth($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PlaceOfBirth');
        }
        $this->PlaceOfBirth = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCountryOfBirthISOCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CountryOfBirthISOCode');
        }
        $this->CountryOfBirthISOCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setIdentificationNumber($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for IdentificationNumber');
        }
        $this->IdentificationNumber = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setIdentificationType($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->IdentificationType = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPartnerPrefix($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PartnerPrefix');
        }
        $this->PartnerPrefix = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPartnerLastName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PartnerLastName');
        }
        $this->PartnerLastName = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephonePrivate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephonePrivate');
        }
        $this->TelephonePrivate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneWork($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneWork');
        }
        $this->TelephoneWork = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneMobilePrivate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneMobilePrivate');
        }
        $this->TelephoneMobilePrivate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneMobileWork($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneMobileWork');
        }
        $this->TelephoneMobileWork = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setTelephoneOther($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for TelephoneOther');
        }
        $this->TelephoneOther = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmailPrivate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for EmailPrivate');
        }
        $this->EmailPrivate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmailWork($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for EmailWork');
        }
        $this->EmailWork = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setBurgerlijkeStaat($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->BurgerlijkeStaat = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setNaamstelling($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Naamstelling = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setBirthday($val)
	{
        $this->Birthday = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setCreationDate($val)
	{
        $this->CreationDate = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setStartPeriod($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartPeriod = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setStartYear($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartYear = $val;
	}
}

class List_GetByCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyId;
	/**
	 * @var Active
	 */
	public $active;
	// @codingStandardsIgnoreEnd

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
	 * @param Active $val
	 * @throws \Exception
	 */
	public function setActive($val)
	{
        $this->active = $val;
	}
}

class Active
{
	const ACTIVE    = 'active';
	const NOTACTIVE = 'notActive';
	const ALL       = 'all';
}

class List_GetByCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Employee[]
	 */
	public $List_GetByCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployee $val
	 * @throws \Exception
	 */
	public function setListGetByCompanyResult($val)
	{
        $this->List_GetByCompanyResult = $val;
	}
}

class List_GetByDebtor
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DebtorId;
	/**
	 * @var Active
	 */
	public $active;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDebtorId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DebtorId = $val;
	}

	/**
	 * @param Active $val
	 * @throws \Exception
	 */
	public function setActive($val)
	{
        $this->active = $val;
	}
}

class List_GetByDebtorResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Employee[]
	 */
	public $List_GetByDebtorResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployee $val
	 * @throws \Exception
	 */
	public function setListGetByDebtorResult($val)
	{
        $this->List_GetByDebtorResult = $val;
	}
}

class Employee_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class Employee_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Employee_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setEmployeeGetCurrentResult($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Employee_GetCurrentResult');
        }
        $this->Employee_GetCurrentResult = $val;
	}
}

class Employee_Insert
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

class Employee_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Employee_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmployeeInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Employee_InsertResult = $val;
	}
}

class EmployeeDocument_UploadDocument
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var string
	 */
	public $StrDocumentName;
	/**
	 * @var base64Binary
	 */
	public $Body;
	/**
	 * @var guid
	 */
	public $GuidDocumentType;
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setStrDocumentName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for StrDocumentName');
        }
        $this->StrDocumentName = $val;
	}

	/**
	 * @param base64Binary $val
	 * @throws \Exception
	 */
	public function setBody($val)
	{
        $this->Body = $val;
	}

	/**
	 * @param guid $val
	 * @throws \Exception
	 */
	public function setGuidDocumentType($val)
	{
        $this->GuidDocumentType = $val;
	}
}

class EmployeeDocument_UploadDocumentResponse
{}

class HourComponentFixed_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class HourComponentFixed_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var HourComponent[]
	 */
	public $HourComponentFixed_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfHourComponent $val
	 * @throws \Exception
	 */
	public function setHourComponentFixedGetResult($val)
	{
        $this->HourComponentFixed_GetResult = $val;
	}
}

class HourComponentFixed_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class HourComponentFixed_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var HourComponent[]
	 */
	public $HourComponentFixed_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfHourComponent $val
	 * @throws \Exception
	 */
	public function setHourComponentFixedGetCurrentResult($val)
	{
        $this->HourComponentFixed_GetCurrentResult = $val;
	}
}

class HourComponentFixed_InsertCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var HourComponent
	 */
	public $Hourcomponent;
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
	 * @param HourComponent $val
	 * @throws \Exception
	 */
	public function setHourcomponent($val)
	{
        $this->Hourcomponent = $val;
	}
}

class HourComponentFixed_InsertCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $HourComponentFixed_InsertCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setHourComponentFixedInsertCurrentResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourComponentFixed_InsertCurrentResult = $val;
	}
}

class HourComponentFixed_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var HourComponent
	 */
	public $Hourcomponent;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param HourComponent $val
	 * @throws \Exception
	 */
	public function setHourcomponent($val)
	{
        $this->Hourcomponent = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class HourComponentFixed_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $HourComponentFixed_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setHourComponentFixedInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->HourComponentFixed_InsertResult = $val;
	}
}

class HourComponentFixed_Insert_Batch
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeHourComponent[]
	 */
	public $HourComponents;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeHourComponent $val
	 * @throws \Exception
	 */
	public function setHourComponents($val)
	{
        $this->HourComponents = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class HourComponentFixed_Insert_BatchResponse
{}

class HourComponentFixed_Stop
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var HourComponent
	 */
	public $Hourcomponent;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param HourComponent $val
	 * @throws \Exception
	 */
	public function setHourcomponent($val)
	{
        $this->Hourcomponent = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class HourComponentFixed_StopResponse
{}

class Address_InsertCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var EmployeeAddress
	 */
	public $Address;
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
	 * @param EmployeeAddress $val
	 * @throws \Exception
	 */
	public function setAddress($val)
	{
        $this->Address = $val;
	}
}

class EmployeeAddress
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var boolean
	 */
	public $Default;
	/**
	 * @var string
	 */
	public $Street;
	/**
	 * @var string
	 */
	public $HouseNumber;
	/**
	 * @var string
	 */
	public $HouseNumberAddition;
	/**
	 * @var string
	 */
	public $PostalCode;
	/**
	 * @var string
	 */
	public $City;
	/**
	 * @var string
	 */
	public $StateProvince;
	/**
	 * @var string
	 */
	public $CountryISOCode;
	/**
	 * @var AddressType
	 */
	public $Type;
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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setDefault($val)
	{
        $this->Default = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setStreet($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Street');
        }
        $this->Street = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setHouseNumber($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HouseNumber');
        }
        $this->HouseNumber = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setHouseNumberAddition($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HouseNumberAddition');
        }
        $this->HouseNumberAddition = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPostalCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PostalCode');
        }
        $this->PostalCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCity($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for City');
        }
        $this->City = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setStateProvince($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for StateProvince');
        }
        $this->StateProvince = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCountryISOCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CountryISOCode');
        }
        $this->CountryISOCode = $val;
	}

	/**
	 * @param AddressType $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        $this->Type = $val;
	}
}

class AddressType
{
	const HOMEADDRESS     = 'HomeAddress';
	const POSTADDRESS     = 'PostAddress';
	const ABSENCEADDRESS  = 'AbsenceAddress';
	const HOLIDAYSADDRESS = 'HolidaysAddress';
	const WEEKENDADDRESS  = 'WeekendAddress';
}

class Address_InsertCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Address_InsertCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setAddressInsertCurrentResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Address_InsertCurrentResult = $val;
	}
}

class Address_GetListCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class Address_GetListCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeAddress[]
	 */
	public $Address_GetListCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeAddress $val
	 * @throws \Exception
	 */
	public function setAddressGetListCurrentResult($val)
	{
        $this->Address_GetListCurrentResult = $val;
	}
}

class Address_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class Address_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeAddress[]
	 */
	public $Address_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeAddress $val
	 * @throws \Exception
	 */
	public function setAddressGetListResult($val)
	{
        $this->Address_GetListResult = $val;
	}
}

class Address_GetAll_AllEmployeesByCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCompanyID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyID = $val;
	}
}

class Address_GetAll_AllEmployeesByCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeAddressItem[]
	 */
	public $Address_GetAll_AllEmployeesByCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeAddressItem $val
	 * @throws \Exception
	 */
	public function setAddressGetAllAllEmployeesByCompanyResult($val)
	{
        $this->Address_GetAll_AllEmployeesByCompanyResult = $val;
	}
}

class EmployeeAddressItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var EmployeeAddress_V2[]
	 */
	public $EmployeeAddresses;
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
	 * @param ArrayOfEmployeeAddress_V2 $val
	 * @throws \Exception
	 */
	public function setEmployeeAddresses($val)
	{
        $this->EmployeeAddresses = $val;
	}
}

class EmployeeAddress_V2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $StartPeriod;
	/**
	 * @var int
	 */
	public $StartYear;
	/**
	 * @var int
	 */
	public $EndPeriod;
	/**
	 * @var int
	 */
	public $EndYear;
	/**
	 * @var string
	 */
	public $Street;
	/**
	 * @var string
	 */
	public $HouseNumber;
	/**
	 * @var string
	 */
	public $HouseNumberAddition;
	/**
	 * @var string
	 */
	public $PostalCode;
	/**
	 * @var string
	 */
	public $City;
	/**
	 * @var string
	 */
	public $StateProvince;
	/**
	 * @var dateTime
	 */
	public $CreationDate;
	/**
	 * @var string
	 */
	public $CountryISOCode;
	/**
	 * @var AddressType
	 */
	public $Type;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setStartPeriod($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartPeriod = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setStartYear($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartYear = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEndPeriod($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EndPeriod = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEndYear($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EndYear = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setStreet($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Street');
        }
        $this->Street = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setHouseNumber($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HouseNumber');
        }
        $this->HouseNumber = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setHouseNumberAddition($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for HouseNumberAddition');
        }
        $this->HouseNumberAddition = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setPostalCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for PostalCode');
        }
        $this->PostalCode = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCity($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for City');
        }
        $this->City = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setStateProvince($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for StateProvince');
        }
        $this->StateProvince = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setCreationDate($val)
	{
        $this->CreationDate = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCountryISOCode($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CountryISOCode');
        }
        $this->CountryISOCode = $val;
	}

	/**
	 * @param AddressType $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        $this->Type = $val;
	}
}

class BankAccount_InsertCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var BankAccount
	 */
	public $BankAccount;
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
	 * @param BankAccount $val
	 * @throws \Exception
	 */
	public function setBankAccount($val)
	{
        $this->BankAccount = $val;
	}
}

class BankAccount
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var string
	 */
	public $Number;
	/**
	 * @var string
	 */
	public $Description;
	/**
	 * @var string
	 */
	public $IBAN;
	/**
	 * @var string
	 */
	public $BIC;
	/**
	 * @var string
	 */
	public $City;
	/**
	 * @var string
	 */
	public $Name;
	/**
	 * @var BankAccountType
	 */
	public $Type;
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setNumber($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Number');
        }
        $this->Number = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setIBAN($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for IBAN');
        }
        $this->IBAN = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setBIC($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for BIC');
        }
        $this->BIC = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCity($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for City');
        }
        $this->City = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Name');
        }
        $this->Name = $val;
	}

	/**
	 * @param BankAccountType $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        $this->Type = $val;
	}
}

class BankAccountType
{
	const NONE          = 'None';
	const BANKREKENING1 = 'Bankrekening1';
	const SPAARLOON     = 'Spaarloon';
	const BANKREKENING2 = 'Bankrekening2';
	const BANKREKENING3 = 'Bankrekening3';
	const BANKREKENING4 = 'Bankrekening4';
	const BANKREKENING5 = 'Bankrekening5';
	const STANDAARD     = 'Standaard';
	const LEVENSLOOP    = 'Levensloop';
}

class BankAccount_InsertCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $BankAccount_InsertCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setBankAccountInsertCurrentResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->BankAccount_InsertCurrentResult = $val;
	}
}

class BankAccount_GetListCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class BankAccount_GetListCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var BankAccount[]
	 */
	public $BankAccount_GetListCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfBankAccount $val
	 * @throws \Exception
	 */
	public function setBankAccountGetListCurrentResult($val)
	{
        $this->BankAccount_GetListCurrentResult = $val;
	}
}

class BankAccount_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class BankAccount_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var BankAccount[]
	 */
	public $BankAccount_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfBankAccount $val
	 * @throws \Exception
	 */
	public function setBankAccountGetListResult($val)
	{
        $this->BankAccount_GetListResult = $val;
	}
}

class Contract_Delete
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Id;
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
}

class Contract_DeleteResponse
{}

class Contract_Insert_v2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var Contract_v2
	 */
	public $Contract;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param Contract_v2 $val
	 * @throws \Exception
	 */
	public function setContract($val)
	{
        $this->Contract = $val;
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

class Contract_v2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $ContractID;
	/**
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * @var dateTime
	 */
	public $TrialPeriod;
	/**
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * @var int
	 */
	public $EmployementType;
	/**
	 * @var int
	 */
	public $ContractType;
	/**
	 * @var int
	 */
	public $EmploymentSequenceTaxId;
	/**
	 * @var boolean
	 */
	public $Indefinite;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setContractID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ContractID = $val;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setTrialPeriod($val)
	{
        $this->TrialPeriod = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setEndDate($val)
	{
        $this->EndDate = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmployementType($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployementType = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setContractType($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ContractType = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmploymentSequenceTaxId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmploymentSequenceTaxId = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setIndefinite($val)
	{
        $this->Indefinite = $val;
	}
}

class Contract_Insert_v2Response
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Contract_Insert_v2Result;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setContractInsertv2Result($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Contract_Insert_v2Result = $val;
	}
}

class Contract_InsertCurrentPeriod_v2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeID;
	/**
	 * @var Contract_v2
	 */
	public $Contract;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmployeeID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployeeID = $val;
	}

	/**
	 * @param Contract_v2 $val
	 * @throws \Exception
	 */
	public function setContract($val)
	{
        $this->Contract = $val;
	}
}

class Contract_InsertCurrentPeriod_v2Response
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Contract_InsertCurrentPeriod_v2Result;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setContractInsertCurrentPeriodv2Result($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Contract_InsertCurrentPeriod_v2Result = $val;
	}
}

class Contract_GetAll_v2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class Contract_GetAll_v2Response
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Contract_v2[]
	 */
	public $Contract_GetAll_v2Result;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfContract_v2 $val
	 * @throws \Exception
	 */
	public function setContractGetAllv2Result($val)
	{
        $this->Contract_GetAll_v2Result = $val;
	}
}

class Contract_GetAll_AllEmployeesByCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCompanyID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyID = $val;
	}
}

class Contract_GetAll_AllEmployeesByCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeContractItem[]
	 */
	public $Contract_GetAll_AllEmployeesByCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeContractItem $val
	 * @throws \Exception
	 */
	public function setContractGetAllAllEmployeesByCompanyResult($val)
	{
        $this->Contract_GetAll_AllEmployeesByCompanyResult = $val;
	}
}

class EmployeeContractItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var Contract_v3[]
	 */
	public $EmployeeContracts;
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
	 * @param ArrayOfContract_v3 $val
	 * @throws \Exception
	 */
	public function setEmployeeContracts($val)
	{
        $this->EmployeeContracts = $val;
	}
}

class Contract_v3
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $ContractID;
	/**
	 * @var dateTime
	 */
	public $CreationDate;
	/**
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * @var dateTime
	 */
	public $TrialPeriod;
	/**
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * @var int
	 */
	public $EmployementType;
	/**
	 * @var int
	 */
	public $ContractType;
	/**
	 * @var int
	 */
	public $EmploymentSequenceTaxId;
	/**
	 * @var boolean
	 */
	public $Indefinite;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setContractID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ContractID = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setCreationDate($val)
	{
        $this->CreationDate = $val;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setTrialPeriod($val)
	{
        $this->TrialPeriod = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setEndDate($val)
	{
        $this->EndDate = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmployementType($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmployementType = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setContractType($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ContractType = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setEmploymentSequenceTaxId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->EmploymentSequenceTaxId = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setIndefinite($val)
	{
        $this->Indefinite = $val;
	}
}

class Absence_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var Absence
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

class Absence_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Absence_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setAbsenceInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Absence_InsertResult = $val;
	}
}

class Absence_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class Absence_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Absence[]
	 */
	public $Absence_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfAbsence $val
	 * @throws \Exception
	 */
	public function setAbsenceGetListResult($val)
	{
        $this->Absence_GetListResult = $val;
	}
}

class Leave_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var Leave
	 */
	public $Leave;
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
	 * @param Leave $val
	 * @throws \Exception
	 */
	public function setLeave($val)
	{
        $this->Leave = $val;
	}
}

class Leave
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Description;
	/**
	 * @var decimal
	 */
	public $Hours;
	/**
	 * @var LeaveUsageType
	 */
	public $UsageType;
	/**
	 * @var dateTime
	 */
	public $Start;
	/**
	 * @var dateTime
	 */
	public $End;
	/**
	 * @var decimal
	 */
	public $StartHours;
	/**
	 * @var decimal
	 */
	public $EndHours;
	/**
	 * @var LeaveType
	 */
	public $Type;
	/**
	 * @var LeaveStatus
	 */
	public $Status;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHours($val)
	{
        $this->Hours = $val;
	}

	/**
	 * @param LeaveUsageType $val
	 * @throws \Exception
	 */
	public function setUsageType($val)
	{
        $this->UsageType = $val;
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
	public function setEnd($val)
	{
        $this->End = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setStartHours($val)
	{
        $this->StartHours = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setEndHours($val)
	{
        $this->EndHours = $val;
	}

	/**
	 * @param LeaveType $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        $this->Type = $val;
	}

	/**
	 * @param LeaveStatus $val
	 * @throws \Exception
	 */
	public function setStatus($val)
	{
        $this->Status = $val;
	}
}

class LeaveUsageType
{
	const UNDEFINED  = 'Undefined';
	const WITHDRAWAL = 'Withdrawal';
	const STORE      = 'Store';
}

class LeaveType
{
	const UNDEFINED = 'Undefined';
	const TYPE1     = 'Type1';
	const TYPE2     = 'Type2';
	const TYPE3     = 'Type3';
	const TYPE4     = 'Type4';
}

class LeaveStatus
{
	const NONE     = 'None';
	const PENDING  = 'Pending';
	const APPROVED = 'Approved';
	const REJECTED = 'Rejected';
}

class Leave_InsertResponse
{}

class Leave_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var LeaveType
	 */
	public $Type;
	/**
	 * @var LeaveUsageType
	 */
	public $Soort;
	/**
	 * @var int
	 */
	public $Year;
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
	 * @param LeaveType $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        $this->Type = $val;
	}

	/**
	 * @param LeaveUsageType $val
	 * @throws \Exception
	 */
	public function setSoort($val)
	{
        $this->Soort = $val;
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
}

class Leave_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Leave[]
	 */
	public $Leave_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfLeave $val
	 * @throws \Exception
	 */
	public function setLeaveGetListResult($val)
	{
        $this->Leave_GetListResult = $val;
	}
}

class Levensloop_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var dateTime
	 */
	public $Start;
	/**
	 * @var decimal
	 */
	public $Amount;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setStart($val)
	{
        $this->Start = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setAmount($val)
	{
        $this->Amount = $val;
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

class Levensloop_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Levensloop_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setLevensloopInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Levensloop_InsertResult = $val;
	}
}

class Levensloop_Stop
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var dateTime
	 */
	public $End;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setEnd($val)
	{
        $this->End = $val;
	}
}

class Levensloop_StopResponse
{}

class Levensloop_Delete
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Id;
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
}

class Levensloop_DeleteResponse
{}

class Levensloop_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class Levensloop_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Levensloop
	 */
	public $Levensloop_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Levensloop $val
	 * @throws \Exception
	 */
	public function setLevensloopGetResult($val)
	{
        $this->Levensloop_GetResult = $val;
	}
}

class Levensloop
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var decimal
	 */
	public $Value;
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
	public function setValue($val)
	{
        $this->Value = $val;
	}
}

class Spaarloon_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var dateTime
	 */
	public $Start;
	/**
	 * @var decimal
	 */
	public $Amount;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setStart($val)
	{
        $this->Start = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setAmount($val)
	{
        $this->Amount = $val;
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

class Spaarloon_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Spaarloon_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setSpaarloonInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Spaarloon_InsertResult = $val;
	}
}

class Spaarloon_Stop
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var dateTime
	 */
	public $End;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setEnd($val)
	{
        $this->End = $val;
	}
}

class Spaarloon_StopResponse
{}

class Spaarloon_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class Spaarloon_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Spaarloon
	 */
	public $Spaarloon_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Spaarloon $val
	 * @throws \Exception
	 */
	public function setSpaarloonGetResult($val)
	{
        $this->Spaarloon_GetResult = $val;
	}
}

class Spaarloon
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var decimal
	 */
	public $Value;
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
	public function setValue($val)
	{
        $this->Value = $val;
	}
}

class Spaarloon_Delete
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Id;
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
}

class Spaarloon_DeleteResponse
{}

class Spaarloon_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class Spaarloon_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Spaarloon[]
	 */
	public $Spaarloon_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfSpaarloon $val
	 * @throws \Exception
	 */
	public function setSpaarloonGetListResult($val)
	{
        $this->Spaarloon_GetListResult = $val;
	}
}

class Service_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class Service_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var ServiceInterval[]
	 */
	public $Service_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfServiceInterval $val
	 * @throws \Exception
	 */
	public function setServiceGetListResult($val)
	{
        $this->Service_GetListResult = $val;
	}
}

class ServiceInterval
{
	// @codingStandardsIgnoreStart
	/**
	 * @var dateTime
	 */
	public $Start;
	/**
	 * @var dateTime
	 */
	public $End;
	/**
	 * @var dateTime
	 */
	public $Ancienniteitsdatum;
	// @codingStandardsIgnoreEnd

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
	public function setEnd($val)
	{
        $this->End = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setAncienniteitsdatum($val)
	{
        $this->Ancienniteitsdatum = $val;
	}
}

class Service_StopCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var dateTime
	 */
	public $End;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setEnd($val)
	{
        $this->End = $val;
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

class Service_StopCurrentResponse
{}

class Service_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var dateTime
	 */
	public $Start;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setStart($val)
	{
        $this->Start = $val;
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

class Service_InsertResponse
{}

class Service_Insert2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var dateTime
	 */
	public $Start;
	/**
	 * @var dateTime
	 */
	public $Ancienniteitsdatum;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	public function setAncienniteitsdatum($val)
	{
        $this->Ancienniteitsdatum = $val;
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

class Service_Insert2Response
{}

class DaysFixed_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class DaysFixed_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DaysFixed_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDaysFixedGetResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DaysFixed_GetResult = $val;
	}
}

class DaysFixed_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class DaysFixed_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $DaysFixed_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDaysFixedGetCurrentResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DaysFixed_GetCurrentResult = $val;
	}
}

class DaysFixed_SetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Days;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDays($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Days = $val;
	}
}

class DaysFixed_SetCurrentResponse
{}

class DaysFixed_Set
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Days;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDays($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Days = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class DaysFixed_SetResponse
{}

class DaysFixed_Stop
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class DaysFixed_StopResponse
{}

class WageComponentFixed_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class WageComponentFixed_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var WageComponent[]
	 */
	public $WageComponentFixed_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfWageComponent $val
	 * @throws \Exception
	 */
	public function setWageComponentFixedGetResult($val)
	{
        $this->WageComponentFixed_GetResult = $val;
	}
}

class WageComponentFixed_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class WageComponentFixed_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var WageComponent[]
	 */
	public $WageComponentFixed_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfWageComponent $val
	 * @throws \Exception
	 */
	public function setWageComponentFixedGetCurrentResult($val)
	{
        $this->WageComponentFixed_GetCurrentResult = $val;
	}
}

class WageComponentFixed_Insert_Batch
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeWageComponent[]
	 */
	public $WageComponents;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeWageComponent $val
	 * @throws \Exception
	 */
	public function setWageComponents($val)
	{
        $this->WageComponents = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class WageComponentFixed_Insert_BatchResponse
{}

class WageComponentFixed_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var WageComponent
	 */
	public $WageComponent;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param WageComponent $val
	 * @throws \Exception
	 */
	public function setWageComponent($val)
	{
        $this->WageComponent = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class WageComponentFixed_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $WageComponentFixed_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setWageComponentFixedInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WageComponentFixed_InsertResult = $val;
	}
}

class WageComponentFixed_InsertCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var WageComponent
	 */
	public $WageComponent;
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
	 * @param WageComponent $val
	 * @throws \Exception
	 */
	public function setWageComponent($val)
	{
        $this->WageComponent = $val;
	}
}

class WageComponentFixed_InsertCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $WageComponentFixed_InsertCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setWageComponentFixedInsertCurrentResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WageComponentFixed_InsertCurrentResult = $val;
	}
}

class WageComponentFixed_Stop
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $WageComponentId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
	/**
	 * @var boolean
	 */
	public $UnprotectedMode;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setWageComponentId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->WageComponentId = $val;
	}

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
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setUnprotectedMode($val)
	{
        $this->UnprotectedMode = $val;
	}
}

class WageComponentFixed_StopResponse
{}

class Schedule_UpdateCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var Schedule
	 */
	public $Schedule;
	/**
	 * @var int
	 */
	public $CompanyRoosterNr;
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
	 * @param Schedule $val
	 * @throws \Exception
	 */
	public function setSchedule($val)
	{
        $this->Schedule = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCompanyRoosterNr($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyRoosterNr = $val;
	}
}

class Schedule
{
	// @codingStandardsIgnoreStart
	/**
	 * @var decimal
	 */
	public $HoursMonday;
	/**
	 * @var decimal
	 */
	public $HoursTuesday;
	/**
	 * @var decimal
	 */
	public $HoursWednesday;
	/**
	 * @var decimal
	 */
	public $HoursThursday;
	/**
	 * @var decimal
	 */
	public $HoursFriday;
	/**
	 * @var decimal
	 */
	public $HoursSaturday;
	/**
	 * @var decimal
	 */
	public $HoursSunday;
	/**
	 * @var decimal
	 */
	public $HoursMonday2;
	/**
	 * @var decimal
	 */
	public $HoursTuesday2;
	/**
	 * @var decimal
	 */
	public $HoursWednesday2;
	/**
	 * @var decimal
	 */
	public $HoursThursday2;
	/**
	 * @var decimal
	 */
	public $HoursFriday2;
	/**
	 * @var decimal
	 */
	public $HoursSaturday2;
	/**
	 * @var decimal
	 */
	public $HoursSunday2;
	/**
	 * @var decimal
	 */
	public $ParttimePercentage;
	/**
	 * @var dateTime
	 */
	public $StartDate;
	// @codingStandardsIgnoreEnd

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursMonday($val)
	{
        $this->HoursMonday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursTuesday($val)
	{
        $this->HoursTuesday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursWednesday($val)
	{
        $this->HoursWednesday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursThursday($val)
	{
        $this->HoursThursday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursFriday($val)
	{
        $this->HoursFriday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursSaturday($val)
	{
        $this->HoursSaturday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursSunday($val)
	{
        $this->HoursSunday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursMonday2($val)
	{
        $this->HoursMonday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursTuesday2($val)
	{
        $this->HoursTuesday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursWednesday2($val)
	{
        $this->HoursWednesday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursThursday2($val)
	{
        $this->HoursThursday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursFriday2($val)
	{
        $this->HoursFriday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursSaturday2($val)
	{
        $this->HoursSaturday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursSunday2($val)
	{
        $this->HoursSunday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setParttimePercentage($val)
	{
        $this->ParttimePercentage = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setStartDate($val)
	{
        $this->StartDate = $val;
	}
}

class Schedule_UpdateCurrentResponse
{}

class Schedule_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var Schedule
	 */
	public $Schedule;
	/**
	 * @var dateTime
	 */
	public $Start;
	/**
	 * @var int
	 */
	public $CompanyRoosterNr;
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
	 * @param Schedule $val
	 * @throws \Exception
	 */
	public function setSchedule($val)
	{
        $this->Schedule = $val;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCompanyRoosterNr($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyRoosterNr = $val;
	}
}

class Schedule_UpdateResponse
{}

class Schedule_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class Schedule_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Schedule
	 */
	public $Schedule_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Schedule $val
	 * @throws \Exception
	 */
	public function setScheduleGetCurrentResult($val)
	{
        $this->Schedule_GetCurrentResult = $val;
	}
}

class Schedule_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class Schedule_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Schedule
	 */
	public $Schedule_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Schedule $val
	 * @throws \Exception
	 */
	public function setScheduleGetResult($val)
	{
        $this->Schedule_GetResult = $val;
	}
}

class Schedule_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class Schedule_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Schedule[]
	 */
	public $Schedule_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfSchedule $val
	 * @throws \Exception
	 */
	public function setScheduleGetListResult($val)
	{
        $this->Schedule_GetListResult = $val;
	}
}

class Schedule_GetAll_AllEmployeesByCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCompanyID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyID = $val;
	}
}

class Schedule_GetAll_AllEmployeesByCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeScheduleItem[]
	 */
	public $Schedule_GetAll_AllEmployeesByCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeScheduleItem $val
	 * @throws \Exception
	 */
	public function setScheduleGetAllAllEmployeesByCompanyResult($val)
	{
        $this->Schedule_GetAll_AllEmployeesByCompanyResult = $val;
	}
}

class EmployeeScheduleItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var Schedule_V2[]
	 */
	public $EmployeeSchedules;
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
	 * @param ArrayOfSchedule_V2 $val
	 * @throws \Exception
	 */
	public function setEmployeeSchedules($val)
	{
        $this->EmployeeSchedules = $val;
	}
}

class Schedule_V2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var decimal
	 */
	public $Id;
	/**
	 * @var decimal
	 */
	public $HoursMonday;
	/**
	 * @var decimal
	 */
	public $HoursTuesday;
	/**
	 * @var decimal
	 */
	public $HoursWednesday;
	/**
	 * @var decimal
	 */
	public $HoursThursday;
	/**
	 * @var decimal
	 */
	public $HoursFriday;
	/**
	 * @var decimal
	 */
	public $HoursSaturday;
	/**
	 * @var decimal
	 */
	public $HoursSunday;
	/**
	 * @var decimal
	 */
	public $HoursMonday2;
	/**
	 * @var decimal
	 */
	public $HoursTuesday2;
	/**
	 * @var decimal
	 */
	public $HoursWednesday2;
	/**
	 * @var decimal
	 */
	public $HoursThursday2;
	/**
	 * @var decimal
	 */
	public $HoursFriday2;
	/**
	 * @var decimal
	 */
	public $HoursSaturday2;
	/**
	 * @var decimal
	 */
	public $HoursSunday2;
	/**
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * @var dateTime
	 */
	public $CreationDate;
	// @codingStandardsIgnoreEnd

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setId($val)
	{
        $this->Id = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursMonday($val)
	{
        $this->HoursMonday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursTuesday($val)
	{
        $this->HoursTuesday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursWednesday($val)
	{
        $this->HoursWednesday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursThursday($val)
	{
        $this->HoursThursday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursFriday($val)
	{
        $this->HoursFriday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursSaturday($val)
	{
        $this->HoursSaturday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursSunday($val)
	{
        $this->HoursSunday = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursMonday2($val)
	{
        $this->HoursMonday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursTuesday2($val)
	{
        $this->HoursTuesday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursWednesday2($val)
	{
        $this->HoursWednesday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursThursday2($val)
	{
        $this->HoursThursday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursFriday2($val)
	{
        $this->HoursFriday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursSaturday2($val)
	{
        $this->HoursSaturday2 = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setHoursSunday2($val)
	{
        $this->HoursSunday2 = $val;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setCreationDate($val)
	{
        $this->CreationDate = $val;
	}
}

class Salary_UpdateCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var SalaryInput
	 */
	public $Salary;
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
	 * @param SalaryInput $val
	 * @throws \Exception
	 */
	public function setSalary($val)
	{
        $this->Salary = $val;
	}
}

class SalaryInput
{
	// @codingStandardsIgnoreStart
	/**
	 * @var decimal
	 */
	public $Value;
	/**
	 * @var SalaryType
	 */
	public $Type;
	/**
	 * @var SalaryTableEmployeeInput
	 */
	public $SalaryTable;
	// @codingStandardsIgnoreEnd

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setValue($val)
	{
        $this->Value = $val;
	}

	/**
	 * @param SalaryType $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        $this->Type = $val;
	}

	/**
	 * @param SalaryTableEmployeeInput $val
	 * @throws \Exception
	 */
	public function setSalaryTable($val)
	{
        $this->SalaryTable = $val;
	}
}

class SalaryType
{
	const NONE                                = 'None';
	const BRUTO_SALARIS_FULLTIME              = 'Bruto_Salaris_Fulltime';
	const BRUTO_SALARIS_PARTIME               = 'Bruto_Salaris_Partime';
	const BRUTO_UURLOON                       = 'Bruto_Uurloon';
	const NETTO_SALARIS_PARTIME_INCL_LOONCOMP = 'Netto_Salaris_Partime_incl_looncomp';
	const NETTO_SALARIS_PARTIME_EXCL_LOONCOMP = 'Netto_Salaris_Partime_excl_looncomp';
	const NETTO_UURLOON_EXCL_LOONCOMP         = 'Netto_Uurloon_excl_looncomp';
	const WERKGERVERSLASTEN                   = 'Werkgerverslasten';
	const NETTO_UURLOON_INCL_LOONCOMP         = 'Netto_Uurloon_incl_looncomp';
}

class SalaryTableEmployeeInput
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SalaryTableScaleInput
	 */
	public $Scale;
	/**
	 * @var SalaryTableStepInput
	 */
	public $Step;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SalaryTableScaleInput $val
	 * @throws \Exception
	 */
	public function setScale($val)
	{
        $this->Scale = $val;
	}

	/**
	 * @param SalaryTableStepInput $val
	 * @throws \Exception
	 */
	public function setStep($val)
	{
        $this->Step = $val;
	}
}

class SalaryTableScaleInput
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Scale;
	/**
	 * @var decimal
	 */
	public $ScalePercentage;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setScale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Scale');
        }
        $this->Scale = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setScalePercentage($val)
	{
        $this->ScalePercentage = $val;
	}
}

class SalaryTableStepInput
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Step;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setStep($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Step');
        }
        $this->Step = $val;
	}
}

class Salary_UpdateCurrentResponse
{}

class Salary_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var SalaryInput
	 */
	public $Salary;
	/**
	 * @var dateTime
	 */
	public $Start;
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
	 * @param SalaryInput $val
	 * @throws \Exception
	 */
	public function setSalary($val)
	{
        $this->Salary = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setStart($val)
	{
        $this->Start = $val;
	}
}

class Salary_UpdateResponse
{}

class Salary_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class Salary_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Salary
	 */
	public $Salary_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Salary $val
	 * @throws \Exception
	 */
	public function setSalaryGetCurrentResult($val)
	{
        $this->Salary_GetCurrentResult = $val;
	}
}

class Salary
{
	// @codingStandardsIgnoreStart
	/**
	 * @var decimal
	 */
	public $Value;
	/**
	 * @var SalaryType
	 */
	public $Type;
	/**
	 * @var SalaryTableEmployee
	 */
	public $SalaryTable;
	/**
	 * @var dateTime
	 */
	public $StartDate;
	// @codingStandardsIgnoreEnd

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setValue($val)
	{
        $this->Value = $val;
	}

	/**
	 * @param SalaryType $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        $this->Type = $val;
	}

	/**
	 * @param SalaryTableEmployee $val
	 * @throws \Exception
	 */
	public function setSalaryTable($val)
	{
        $this->SalaryTable = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setStartDate($val)
	{
        $this->StartDate = $val;
	}
}

class SalaryTable
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Code;
	/**
	 * @var string
	 */
	public $Description;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}
}

class SalaryTableEmployee extends
 SalaryTable
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SalaryTableScale
	 */
	public $Schaal;
	/**
	 * @var SalaryTableStep
	 */
	public $Trede;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SalaryTableScale $val
	 * @throws \Exception
	 */
	public function setSchaal($val)
	{
        $this->Schaal = $val;
	}

	/**
	 * @param SalaryTableStep $val
	 * @throws \Exception
	 */
	public function setTrede($val)
	{
        $this->Trede = $val;
	}
}

class SalaryTableScale
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Scale;
	/**
	 * @var string
	 */
	public $SchaalDescription;
	/**
	 * @var decimal
	 */
	public $ScaleValue;
	/**
	 * @var decimal
	 */
	public $ScalePercentageMax;
	/**
	 * @var decimal
	 */
	public $ScalePercentageMin;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setScale($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Scale');
        }
        $this->Scale = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setSchaalDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for SchaalDescription');
        }
        $this->SchaalDescription = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setScaleValue($val)
	{
        $this->ScaleValue = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setScalePercentageMax($val)
	{
        $this->ScalePercentageMax = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setScalePercentageMin($val)
	{
        $this->ScalePercentageMin = $val;
	}
}

class SalaryTableStep
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string
	 */
	public $Step;
	/**
	 * @var string
	 */
	public $StepDescription;
	/**
	 * @var decimal
	 */
	public $StepValue;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setStep($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Step');
        }
        $this->Step = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setStepDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for StepDescription');
        }
        $this->StepDescription = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setStepValue($val)
	{
        $this->StepValue = $val;
	}
}

class Salary_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class Salary_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Salary
	 */
	public $Salary_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Salary $val
	 * @throws \Exception
	 */
	public function setSalaryGetResult($val)
	{
        $this->Salary_GetResult = $val;
	}
}

class Salary_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class Salary_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Salary[]
	 */
	public $Salary_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfSalary $val
	 * @throws \Exception
	 */
	public function setSalaryGetListResult($val)
	{
        $this->Salary_GetListResult = $val;
	}
}

class Salary_GetAll_AllEmployeesByCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCompanyID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyID = $val;
	}
}

class Salary_GetAll_AllEmployeesByCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeSalaryItem[]
	 */
	public $Salary_GetAll_AllEmployeesByCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeSalaryItem $val
	 * @throws \Exception
	 */
	public function setSalaryGetAllAllEmployeesByCompanyResult($val)
	{
        $this->Salary_GetAll_AllEmployeesByCompanyResult = $val;
	}
}

class EmployeeSalaryItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var Salary_V2[]
	 */
	public $EmployeeSalaries;
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
	 * @param ArrayOfSalary_V2 $val
	 * @throws \Exception
	 */
	public function setEmployeeSalaries($val)
	{
        $this->EmployeeSalaries = $val;
	}
}

class Salary_V2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $ID;
	/**
	 * @var decimal
	 */
	public $Value;
	/**
	 * @var int
	 */
	public $Type;
	/**
	 * @var SalaryTableEmployee
	 */
	public $SalaryTable;
	/**
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * @var dateTime
	 */
	public $CreationDate;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ID = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setValue($val)
	{
        $this->Value = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setType($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Type = $val;
	}

	/**
	 * @param SalaryTableEmployee $val
	 * @throws \Exception
	 */
	public function setSalaryTable($val)
	{
        $this->SalaryTable = $val;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setCreationDate($val)
	{
        $this->CreationDate = $val;
	}
}

class SvW_UpdateCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var SVWSettings
	 */
	public $SVWSettings;
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
	 * @param SVWSettings $val
	 * @throws \Exception
	 */
	public function setSVWSettings($val)
	{
        $this->SVWSettings = $val;
	}
}

class SvWsettings
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var string
	 */
	public $InvloedVerzekeringsplicht;
	/**
	 * @var int
	 */
	public $PremieKorting;
	/**
	 * @var boolean
	 */
	public $PremieKortingVerhoging;
	/**
	 * @var int
	 */
	public $CodeCao;
	/**
	 * @var boolean
	 */
	public $Wao_Wia;
	/**
	 * @var boolean
	 */
	public $Ww;
	/**
	 * @var boolean
	 */
	public $Zw;
	/**
	 * @var int
	 */
	public $CodeIabZvw;
	/**
	 * @var string
	 */
	public $CodeZvw;
	/**
	 * @var int
	 */
	public $RisicoGroep;
	/**
	 * @var int
	 */
	public $Sector;
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setInvloedVerzekeringsplicht($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for InvloedVerzekeringsplicht');
        }
        $this->InvloedVerzekeringsplicht = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setPremieKorting($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->PremieKorting = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setPremieKortingVerhoging($val)
	{
        $this->PremieKortingVerhoging = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCodeCao($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CodeCao = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setWaoWia($val)
	{
        $this->Wao_Wia = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setWw($val)
	{
        $this->Ww = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setZw($val)
	{
        $this->Zw = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCodeIabZvw($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CodeIabZvw = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setCodeZvw($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for CodeZvw');
        }
        $this->CodeZvw = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setRisicoGroep($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->RisicoGroep = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setSector($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Sector = $val;
	}
}

class SvW_UpdateCurrentResponse
{}

class SvW_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var SVWSettings
	 */
	public $SVWSettings;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
	 * @param SVWSettings $val
	 * @throws \Exception
	 */
	public function setSVWSettings($val)
	{
        $this->SVWSettings = $val;
	}

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
}

class SvW_UpdateResponse
{}

class SvW_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class SvW_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SVWSettings
	 */
	public $SVW_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SVWSettings $val
	 * @throws \Exception
	 */
	public function setSVWGetCurrentResult($val)
	{
        $this->SVW_GetCurrentResult = $val;
	}
}

class SvW_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class SvW_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SVWSettings
	 */
	public $SVW_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param SVWSettings $val
	 * @throws \Exception
	 */
	public function setSVWGetResult($val)
	{
        $this->SVW_GetResult = $val;
	}
}

class SvW_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class SvW_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var SVWSettings[]
	 */
	public $SVW_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfSVWSettings $val
	 * @throws \Exception
	 */
	public function setSVWGetListResult($val)
	{
        $this->SVW_GetListResult = $val;
	}
}

class WageTax_UpdateCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var WageTaxSettings
	 */
	public $LoonheffingSettings;
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
	 * @param WageTaxSettings $val
	 * @throws \Exception
	 */
	public function setLoonheffingSettings($val)
	{
        $this->LoonheffingSettings = $val;
	}
}

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

class WageTax_UpdateCurrentResponse
{}

class WageTax_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var WageTaxSettings
	 */
	public $LoonheffingSettings;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
	 * @param WageTaxSettings $val
	 * @throws \Exception
	 */
	public function setLoonheffingSettings($val)
	{
        $this->LoonheffingSettings = $val;
	}

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
}

class WageTax_UpdateResponse
{}

class WageTax_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class WageTax_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var WageTaxSettings
	 */
	public $WageTax_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param WageTaxSettings $val
	 * @throws \Exception
	 */
	public function setWageTaxGetCurrentResult($val)
	{
        $this->WageTax_GetCurrentResult = $val;
	}
}

class WageTax_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class WageTax_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var WageTaxSettings[]
	 */
	public $WageTax_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfWageTaxSettings $val
	 * @throws \Exception
	 */
	public function setWageTaxGetListResult($val)
	{
        $this->WageTax_GetListResult = $val;
	}
}

class WageTax_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class WageTax_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var WageTaxSettings
	 */
	public $WageTax_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param WageTaxSettings $val
	 * @throws \Exception
	 */
	public function setWageTaxGetResult($val)
	{
        $this->WageTax_GetResult = $val;
	}
}

class CostCenter_UpdateCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var EmployeeCostCenter[]
	 */
	public $CostCenters;
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
	 * @param ArrayOfEmployeeCostCenter $val
	 * @throws \Exception
	 */
	public function setCostCenters($val)
	{
        $this->CostCenters = $val;
	}
}

class EmployeeCostCenter
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var CostCenter
	 */
	public $CostCenter;
	/**
	 * @var Kostensoort
	 */
	public $Kostensoort;
	/**
	 * @var decimal
	 */
	public $Percentage;
	/**
	 * @var boolean
	 */
	public $Default;
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
	 * @param CostCenter $val
	 * @throws \Exception
	 */
	public function setCostCenter($val)
	{
        $this->CostCenter = $val;
	}

	/**
	 * @param Kostensoort $val
	 * @throws \Exception
	 */
	public function setKostensoort($val)
	{
        $this->Kostensoort = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setPercentage($val)
	{
        $this->Percentage = $val;
	}

	/**
	 * @param boolean $val
	 * @throws \Exception
	 */
	public function setDefault($val)
	{
        $this->Default = $val;
	}
}

class CostCenter
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Code;
	/**
	 * @var string
	 */
	public $Description;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}
}

class Kostensoort
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Code;
	/**
	 * @var string
	 */
	public $Description;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}
}

class CostCenter_UpdateCurrentResponse
{}

class CostCenter_Update
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var EmployeeCostCenter[]
	 */
	public $CostCenteren;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
	 * @param ArrayOfEmployeeCostCenter $val
	 * @throws \Exception
	 */
	public function setCostCenteren($val)
	{
        $this->CostCenteren = $val;
	}

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
}

class CostCenter_UpdateResponse
{}

class CostCenter_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class CostCenter_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeCostCenter[]
	 */
	public $CostCenter_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeCostCenter $val
	 * @throws \Exception
	 */
	public function setCostCenterGetCurrentResult($val)
	{
        $this->CostCenter_GetCurrentResult = $val;
	}
}

class CostCenter_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class CostCenter_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeCostCenter[]
	 */
	public $CostCenter_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeCostCenter $val
	 * @throws \Exception
	 */
	public function setCostCenterGetResult($val)
	{
        $this->CostCenter_GetResult = $val;
	}
}

class Function_UpdateCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $FunctionId;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setFunctionId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->FunctionId = $val;
	}
}

class Function_UpdateCurrentResponse
{}

class Function_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class Function_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Function
	 */
	public $Function_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Function $val
	 * @throws \Exception
	 */
	public function setFunctionGetCurrentResult($val)
	{
        $this->Function_GetCurrentResult = $val;
	}
}

class Function_GetAll_AllEmployeesByCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCompanyID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyID = $val;
	}
}

class Function_GetAll_AllEmployeesByCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeFunctionItem[]
	 */
	public $Function_GetAll_AllEmployeesByCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeFunctionItem $val
	 * @throws \Exception
	 */
	public function setFunctionGetAllAllEmployeesByCompanyResult($val)
	{
        $this->Function_GetAll_AllEmployeesByCompanyResult = $val;
	}
}

class EmployeeFunctionItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var Function_V2[]
	 */
	public $EmployeeFunctions;
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
	 * @param ArrayOfFunction_V2 $val
	 * @throws \Exception
	 */
	public function setEmployeeFunctions($val)
	{
        $this->EmployeeFunctions = $val;
	}
}

class Function_V2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $Code;
	/**
	 * @var string
	 */
	public $Description;
	/**
	 * @var dateTime
	 */
	public $CreationDate;
	/**
	 * @var int
	 */
	public $StartPeriod;
	/**
	 * @var int
	 */
	public $StartYear;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setCreationDate($val)
	{
        $this->CreationDate = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setStartPeriod($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartPeriod = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setStartYear($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartYear = $val;
	}
}

class Department_UpdateCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $DepartmentId;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setDepartmentId($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->DepartmentId = $val;
	}
}

class Department_UpdateCurrentResponse
{}

class Department_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class Department_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var Department
	 */
	public $Department_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Department $val
	 * @throws \Exception
	 */
	public function setDepartmentGetCurrentResult($val)
	{
        $this->Department_GetCurrentResult = $val;
	}
}

class Department
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $Code;
	/**
	 * @var string
	 */
	public $Description;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}
}

class Department_GetAll_AllEmployeesByCompany
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $CompanyID;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCompanyID($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->CompanyID = $val;
	}
}

class Department_GetAll_AllEmployeesByCompanyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeDepartmentItem[]
	 */
	public $Department_GetAll_AllEmployeesByCompanyResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeDepartmentItem $val
	 * @throws \Exception
	 */
	public function setDepartmentGetAllAllEmployeesByCompanyResult($val)
	{
        $this->Department_GetAll_AllEmployeesByCompanyResult = $val;
	}
}

class EmployeeDepartmentItem
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var Department_V2[]
	 */
	public $EmployeeDepartments;
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
	 * @param ArrayOfDepartment_V2 $val
	 * @throws \Exception
	 */
	public function setEmployeeDepartments($val)
	{
        $this->EmployeeDepartments = $val;
	}
}

class Department_V2
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var int
	 */
	public $Code;
	/**
	 * @var string
	 */
	public $Description;
	/**
	 * @var dateTime
	 */
	public $CreationDate;
	/**
	 * @var int
	 */
	public $StartPeriod;
	/**
	 * @var int
	 */
	public $StartYear;
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
	 * @param int $val
	 * @throws \Exception
	 */
	public function setCode($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->Code = $val;
	}

	/**
	 * @param string $val
	 * @throws \Exception
	 */
	public function setDescription($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for Description');
        }
        $this->Description = $val;
	}

	/**
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setCreationDate($val)
	{
        $this->CreationDate = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setStartPeriod($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartPeriod = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setStartYear($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->StartYear = $val;
	}
}

class LeaseCar_Insert
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var EmployeeLeaseCar
	 */
	public $LeaseAuto;
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
	 * @param EmployeeLeaseCar $val
	 * @throws \Exception
	 */
	public function setLeaseAuto($val)
	{
        $this->LeaseAuto = $val;
	}
}

class EmployeeLeaseCar
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $Id;
	/**
	 * @var string
	 */
	public $LicensePlate;
	/**
	 * @var decimal
	 */
	public $CatalogValue;
	/**
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * @var int
	 */
	public $ReasonNoContribution;
	/**
	 * @var int
	 */
	public $ContributionPrivatePercentage;
	/**
	 * @var decimal
	 */
	public $ContributionPrivateUse;
	/**
	 * @var decimal
	 */
	public $ContributionNotDeductible;
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
	 * @param string $val
	 * @throws \Exception
	 */
	public function setLicensePlate($val)
	{
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for LicensePlate');
        }
        $this->LicensePlate = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setCatalogValue($val)
	{
        $this->CatalogValue = $val;
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
	public function setReasonNoContribution($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ReasonNoContribution = $val;
	}

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setContributionPrivatePercentage($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->ContributionPrivatePercentage = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setContributionPrivateUse($val)
	{
        $this->ContributionPrivateUse = $val;
	}

	/**
	 * @param decimal $val
	 * @throws \Exception
	 */
	public function setContributionNotDeductible($val)
	{
        $this->ContributionNotDeductible = $val;
	}
}

class LeaseCar_InsertResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $LeaseCar_InsertResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param int $val
	 * @throws \Exception
	 */
	public function setLeaseCarInsertResult($val)
	{
        if (!is_int($val)) {
            throw new \Exception('POJO Proxy need a integer');
        }
        $this->LeaseCar_InsertResult = $val;
	}
}

class LeaseCar_GetCurrent
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
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
}

class LeaseCar_GetCurrentResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeLeaseCar
	 */
	public $LeaseCar_GetCurrentResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param EmployeeLeaseCar $val
	 * @throws \Exception
	 */
	public function setLeaseCarGetCurrentResult($val)
	{
        $this->LeaseCar_GetCurrentResult = $val;
	}
}

class LeaseCar_Get
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class LeaseCar_GetResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeLeaseCar
	 */
	public $LeaseCar_GetResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param EmployeeLeaseCar $val
	 * @throws \Exception
	 */
	public function setLeaseCarGetResult($val)
	{
        $this->LeaseCar_GetResult = $val;
	}
}

class LeaseCar_GetList
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Period;
	/**
	 * @var int
	 */
	public $Year;
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
}

class LeaseCar_GetListResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var EmployeeLeaseCar[]
	 */
	public $LeaseCar_GetListResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param ArrayOfEmployeeLeaseCar $val
	 * @throws \Exception
	 */
	public function setLeaseCarGetListResult($val)
	{
        $this->LeaseCar_GetListResult = $val;
	}
}

class LeaseCar_Delete
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var int
	 */
	public $Id;
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
}

class LeaseCar_DeleteResponse
{}

class LeaseCar_Stop
{
	// @codingStandardsIgnoreStart
	/**
	 * @var int
	 */
	public $EmployeeId;
	/**
	 * @var dateTime
	 */
	public $End;
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
	 * @param dateTime $val
	 * @throws \Exception
	 */
	public function setEnd($val)
	{
        $this->End = $val;
	}
}

class LeaseCar_StopResponse
{}

class guid
{}

/**
 * EmployeeServiceClient
 */
class EmployeeServiceClient extends SoapClient {

	const WSDL_FILE = "EmployeeService.wsdl";
	private $classmap = array(
        'DaysVar_Get' =>
            'DaysVar_Get',
        'DaysVar_GetResponse' =>
            'DaysVar_GetResponse',
        'DaysVar_GetCurrent' =>
            'DaysVar_GetCurrent',
        'DaysVar_GetCurrentResponse' =>
            'DaysVar_GetCurrentResponse',
        'DaysVar_SetCurrent' =>
            'DaysVar_SetCurrent',
        'DaysVar_SetCurrentResponse' =>
            'DaysVar_SetCurrentResponse',
        'DaysVar_Set' =>
            'DaysVar_Set',
        'DaysVar_SetResponse' =>
            'DaysVar_SetResponse',
        'HourComponentVar_Get' =>
            'HourComponentVar_Get',
        'HourComponentVar_GetResponse' =>
            'HourComponentVar_GetResponse',
        'HourComponent' =>
            'HourComponent',
        'HourComponentVar_GetCurrent' =>
            'HourComponentVar_GetCurrent',
        'HourComponentVar_GetCurrentResponse' =>
            'HourComponentVar_GetCurrentResponse',
        'HourComponentVar_ClearCurrent' =>
            'HourComponentVar_ClearCurrent',
        'HourComponentVar_ClearCurrentResponse' =>
            'HourComponentVar_ClearCurrentResponse',
        'HourComponentVar_Clear' =>
            'HourComponentVar_Clear',
        'HourComponentVar_ClearResponse' =>
            'HourComponentVar_ClearResponse',
        'HourComponentVar_InsertCurrent' =>
            'HourComponentVar_InsertCurrent',
        'HourComponentVar_InsertCurrentResponse' =>
            'HourComponentVar_InsertCurrentResponse',
        'HourComponentVar_Insert' =>
            'HourComponentVar_Insert',
        'HourComponentVar_InsertResponse' =>
            'HourComponentVar_InsertResponse',
        'HourComponentVar_Insert_Batch' =>
            'HourComponentVar_Insert_Batch',
        'EmployeeHourComponent' =>
            'EmployeeHourComponent',
        'HourComponentVar_Insert_BatchResponse' =>
            'HourComponentVar_Insert_BatchResponse',
        'WageComponentVar_Get' =>
            'WageComponentVar_Get',
        'WageComponentVar_GetResponse' =>
            'WageComponentVar_GetResponse',
        'WageComponent' =>
            'WageComponent',
        'WageComponentVar_GetCurrent' =>
            'WageComponentVar_GetCurrent',
        'WageComponentVar_GetCurrentResponse' =>
            'WageComponentVar_GetCurrentResponse',
        'WageComponentVar_ClearCurrent' =>
            'WageComponentVar_ClearCurrent',
        'WageComponentVar_ClearCurrentResponse' =>
            'WageComponentVar_ClearCurrentResponse',
        'WageComponentVar_Clear' =>
            'WageComponentVar_Clear',
        'WageComponentVar_ClearResponse' =>
            'WageComponentVar_ClearResponse',
        'WageComponentVar_InsertCurrent' =>
            'WageComponentVar_InsertCurrent',
        'WageComponentVar_InsertCurrentResponse' =>
            'WageComponentVar_InsertCurrentResponse',
        'WageComponentVar_Insert' =>
            'WageComponentVar_Insert',
        'WageComponentVar_InsertResponse' =>
            'WageComponentVar_InsertResponse',
        'WageComponentVar_Insert_Batch' =>
            'WageComponentVar_Insert_Batch',
        'EmployeeWageComponent' =>
            'EmployeeWageComponent',
        'WageComponentVar_Insert_BatchResponse' =>
            'WageComponentVar_Insert_BatchResponse',
        'PersonalInfo_GetCurrent' =>
            'PersonalInfo_GetCurrent',
        'PersonalInfo_GetCurrentResponse' =>
            'PersonalInfo_GetCurrentResponse',
        'PersonalInfo' =>
            'PersonalInfo',
        'Employee' =>
            'Employee',
        'Gender' =>
            'Gender',
        'PersonalInfo_Get' =>
            'PersonalInfo_Get',
        'PersonalInfo_GetResponse' =>
            'PersonalInfo_GetResponse',
        'PersonalInfo_UpdateCurrent' =>
            'PersonalInfo_UpdateCurrent',
        'PersonalInfo_UpdateCurrentResponse' =>
            'PersonalInfo_UpdateCurrentResponse',
        'PersonalInfo_Update' =>
            'PersonalInfo_Update',
        'PersonalInfo_UpdateResponse' =>
            'PersonalInfo_UpdateResponse',
        'PersonalInfo_GetAll_AllEmployeesByCompany' =>
            'PersonalInfo_GetAll_AllEmployeesByCompany',
        'PersonalInfo_GetAll_AllEmployeesByCompanyResponse' =>
            'PersonalInfo_GetAll_AllEmployeesByCompanyResponse',
        'PersonalInfoItem' =>
            'PersonalInfoItem',
        'PersonalInfo_V2' =>
            'PersonalInfo_V2',
        'List_GetByCompany' =>
            'List_GetByCompany',
        'Active' =>
            'Active',
        'List_GetByCompanyResponse' =>
            'List_GetByCompanyResponse',
        'List_GetByDebtor' =>
            'List_GetByDebtor',
        'List_GetByDebtorResponse' =>
            'List_GetByDebtorResponse',
        'Employee_GetCurrent' =>
            'Employee_GetCurrent',
        'Employee_GetCurrentResponse' =>
            'Employee_GetCurrentResponse',
        'Employee_Insert' =>
            'Employee_Insert',
        'Employee_InsertResponse' =>
            'Employee_InsertResponse',
        'EmployeeDocument_UploadDocument' =>
            'EmployeeDocument_UploadDocument',
        'EmployeeDocument_UploadDocumentResponse' =>
            'EmployeeDocument_UploadDocumentResponse',
        'HourComponentFixed_Get' =>
            'HourComponentFixed_Get',
        'HourComponentFixed_GetResponse' =>
            'HourComponentFixed_GetResponse',
        'HourComponentFixed_GetCurrent' =>
            'HourComponentFixed_GetCurrent',
        'HourComponentFixed_GetCurrentResponse' =>
            'HourComponentFixed_GetCurrentResponse',
        'HourComponentFixed_InsertCurrent' =>
            'HourComponentFixed_InsertCurrent',
        'HourComponentFixed_InsertCurrentResponse' =>
            'HourComponentFixed_InsertCurrentResponse',
        'HourComponentFixed_Insert' =>
            'HourComponentFixed_Insert',
        'HourComponentFixed_InsertResponse' =>
            'HourComponentFixed_InsertResponse',
        'HourComponentFixed_Insert_Batch' =>
            'HourComponentFixed_Insert_Batch',
        'HourComponentFixed_Insert_BatchResponse' =>
            'HourComponentFixed_Insert_BatchResponse',
        'HourComponentFixed_Stop' =>
            'HourComponentFixed_Stop',
        'HourComponentFixed_StopResponse' =>
            'HourComponentFixed_StopResponse',
        'Address_InsertCurrent' =>
            'Address_InsertCurrent',
        'EmployeeAddress' =>
            'EmployeeAddress',
        'AddressType' =>
            'AddressType',
        'Address_InsertCurrentResponse' =>
            'Address_InsertCurrentResponse',
        'Address_GetListCurrent' =>
            'Address_GetListCurrent',
        'Address_GetListCurrentResponse' =>
            'Address_GetListCurrentResponse',
        'Address_GetList' =>
            'Address_GetList',
        'Address_GetListResponse' =>
            'Address_GetListResponse',
        'Address_GetAll_AllEmployeesByCompany' =>
            'Address_GetAll_AllEmployeesByCompany',
        'Address_GetAll_AllEmployeesByCompanyResponse' =>
            'Address_GetAll_AllEmployeesByCompanyResponse',
        'EmployeeAddressItem' =>
            'EmployeeAddressItem',
        'EmployeeAddress_V2' =>
            'EmployeeAddress_V2',
        'BankAccount_InsertCurrent' =>
            'BankAccount_InsertCurrent',
        'BankAccount' =>
            'BankAccount',
        'BankAccountType' =>
            'BankAccountType',
        'BankAccount_InsertCurrentResponse' =>
            'BankAccount_InsertCurrentResponse',
        'BankAccount_GetListCurrent' =>
            'BankAccount_GetListCurrent',
        'BankAccount_GetListCurrentResponse' =>
            'BankAccount_GetListCurrentResponse',
        'BankAccount_GetList' =>
            'BankAccount_GetList',
        'BankAccount_GetListResponse' =>
            'BankAccount_GetListResponse',
        'Contract_Delete' =>
            'Contract_Delete',
        'Contract_DeleteResponse' =>
            'Contract_DeleteResponse',
        'Contract_Insert_v2' =>
            'Contract_Insert_v2',
        'Contract_v2' =>
            'Contract_v2',
        'Contract_Insert_v2Response' =>
            'Contract_Insert_v2Response',
        'Contract_InsertCurrentPeriod_v2' =>
            'Contract_InsertCurrentPeriod_v2',
        'Contract_InsertCurrentPeriod_v2Response' =>
            'Contract_InsertCurrentPeriod_v2Response',
        'Contract_GetAll_v2' =>
            'Contract_GetAll_v2',
        'Contract_GetAll_v2Response' =>
            'Contract_GetAll_v2Response',
        'Contract_GetAll_AllEmployeesByCompany' =>
            'Contract_GetAll_AllEmployeesByCompany',
        'Contract_GetAll_AllEmployeesByCompanyResponse' =>
            'Contract_GetAll_AllEmployeesByCompanyResponse',
        'EmployeeContractItem' =>
            'EmployeeContractItem',
        'Contract_v3' =>
            'Contract_v3',
        'Absence_Insert' =>
            'Absence_Insert',
        'Absence' =>
            'Absence',
        'Absence_InsertResponse' =>
            'Absence_InsertResponse',
        'Absence_GetList' =>
            'Absence_GetList',
        'Absence_GetListResponse' =>
            'Absence_GetListResponse',
        'Leave_Insert' =>
            'Leave_Insert',
        'Leave' =>
            'Leave',
        'LeaveUsageType' =>
            'LeaveUsageType',
        'LeaveType' =>
            'LeaveType',
        'LeaveStatus' =>
            'LeaveStatus',
        'Leave_InsertResponse' =>
            'Leave_InsertResponse',
        'Leave_GetList' =>
            'Leave_GetList',
        'Leave_GetListResponse' =>
            'Leave_GetListResponse',
        'Levensloop_Insert' =>
            'Levensloop_Insert',
        'Levensloop_InsertResponse' =>
            'Levensloop_InsertResponse',
        'Levensloop_Stop' =>
            'Levensloop_Stop',
        'Levensloop_StopResponse' =>
            'Levensloop_StopResponse',
        'Levensloop_Delete' =>
            'Levensloop_Delete',
        'Levensloop_DeleteResponse' =>
            'Levensloop_DeleteResponse',
        'Levensloop_Get' =>
            'Levensloop_Get',
        'Levensloop_GetResponse' =>
            'Levensloop_GetResponse',
        'Levensloop' =>
            'Levensloop',
        'Spaarloon_Insert' =>
            'Spaarloon_Insert',
        'Spaarloon_InsertResponse' =>
            'Spaarloon_InsertResponse',
        'Spaarloon_Stop' =>
            'Spaarloon_Stop',
        'Spaarloon_StopResponse' =>
            'Spaarloon_StopResponse',
        'Spaarloon_Get' =>
            'Spaarloon_Get',
        'Spaarloon_GetResponse' =>
            'Spaarloon_GetResponse',
        'Spaarloon' =>
            'Spaarloon',
        'Spaarloon_Delete' =>
            'Spaarloon_Delete',
        'Spaarloon_DeleteResponse' =>
            'Spaarloon_DeleteResponse',
        'Spaarloon_GetList' =>
            'Spaarloon_GetList',
        'Spaarloon_GetListResponse' =>
            'Spaarloon_GetListResponse',
        'Service_GetList' =>
            'Service_GetList',
        'Service_GetListResponse' =>
            'Service_GetListResponse',
        'ServiceInterval' =>
            'ServiceInterval',
        'Service_StopCurrent' =>
            'Service_StopCurrent',
        'Service_StopCurrentResponse' =>
            'Service_StopCurrentResponse',
        'Service_Insert' =>
            'Service_Insert',
        'Service_InsertResponse' =>
            'Service_InsertResponse',
        'Service_Insert2' =>
            'Service_Insert2',
        'Service_Insert2Response' =>
            'Service_Insert2Response',
        'DaysFixed_Get' =>
            'DaysFixed_Get',
        'DaysFixed_GetResponse' =>
            'DaysFixed_GetResponse',
        'DaysFixed_GetCurrent' =>
            'DaysFixed_GetCurrent',
        'DaysFixed_GetCurrentResponse' =>
            'DaysFixed_GetCurrentResponse',
        'DaysFixed_SetCurrent' =>
            'DaysFixed_SetCurrent',
        'DaysFixed_SetCurrentResponse' =>
            'DaysFixed_SetCurrentResponse',
        'DaysFixed_Set' =>
            'DaysFixed_Set',
        'DaysFixed_SetResponse' =>
            'DaysFixed_SetResponse',
        'DaysFixed_Stop' =>
            'DaysFixed_Stop',
        'DaysFixed_StopResponse' =>
            'DaysFixed_StopResponse',
        'WageComponentFixed_Get' =>
            'WageComponentFixed_Get',
        'WageComponentFixed_GetResponse' =>
            'WageComponentFixed_GetResponse',
        'WageComponentFixed_GetCurrent' =>
            'WageComponentFixed_GetCurrent',
        'WageComponentFixed_GetCurrentResponse' =>
            'WageComponentFixed_GetCurrentResponse',
        'WageComponentFixed_Insert_Batch' =>
            'WageComponentFixed_Insert_Batch',
        'WageComponentFixed_Insert_BatchResponse' =>
            'WageComponentFixed_Insert_BatchResponse',
        'WageComponentFixed_Insert' =>
            'WageComponentFixed_Insert',
        'WageComponentFixed_InsertResponse' =>
            'WageComponentFixed_InsertResponse',
        'WageComponentFixed_InsertCurrent' =>
            'WageComponentFixed_InsertCurrent',
        'WageComponentFixed_InsertCurrentResponse' =>
            'WageComponentFixed_InsertCurrentResponse',
        'WageComponentFixed_Stop' =>
            'WageComponentFixed_Stop',
        'WageComponentFixed_StopResponse' =>
            'WageComponentFixed_StopResponse',
        'Schedule_UpdateCurrent' =>
            'Schedule_UpdateCurrent',
        'Schedule' =>
            'Schedule',
        'Schedule_UpdateCurrentResponse' =>
            'Schedule_UpdateCurrentResponse',
        'Schedule_Update' =>
            'Schedule_Update',
        'Schedule_UpdateResponse' =>
            'Schedule_UpdateResponse',
        'Schedule_GetCurrent' =>
            'Schedule_GetCurrent',
        'Schedule_GetCurrentResponse' =>
            'Schedule_GetCurrentResponse',
        'Schedule_Get' =>
            'Schedule_Get',
        'Schedule_GetResponse' =>
            'Schedule_GetResponse',
        'Schedule_GetList' =>
            'Schedule_GetList',
        'Schedule_GetListResponse' =>
            'Schedule_GetListResponse',
        'Schedule_GetAll_AllEmployeesByCompany' =>
            'Schedule_GetAll_AllEmployeesByCompany',
        'Schedule_GetAll_AllEmployeesByCompanyResponse' =>
            'Schedule_GetAll_AllEmployeesByCompanyResponse',
        'EmployeeScheduleItem' =>
            'EmployeeScheduleItem',
        'Schedule_V2' =>
            'Schedule_V2',
        'Salary_UpdateCurrent' =>
            'Salary_UpdateCurrent',
        'SalaryInput' =>
            'SalaryInput',
        'SalaryType' =>
            'SalaryType',
        'SalaryTableEmployeeInput' =>
            'SalaryTableEmployeeInput',
        'SalaryTableScaleInput' =>
            'SalaryTableScaleInput',
        'SalaryTableStepInput' =>
            'SalaryTableStepInput',
        'Salary_UpdateCurrentResponse' =>
            'Salary_UpdateCurrentResponse',
        'Salary_Update' =>
            'Salary_Update',
        'Salary_UpdateResponse' =>
            'Salary_UpdateResponse',
        'Salary_GetCurrent' =>
            'Salary_GetCurrent',
        'Salary_GetCurrentResponse' =>
            'Salary_GetCurrentResponse',
        'Salary' =>
            'Salary',
        'SalaryTableEmployee' =>
            'SalaryTableEmployee',
        'SalaryTable' =>
            'SalaryTable',
        'SalaryTableScale' =>
            'SalaryTableScale',
        'SalaryTableStep' =>
            'SalaryTableStep',
        'Salary_Get' =>
            'Salary_Get',
        'Salary_GetResponse' =>
            'Salary_GetResponse',
        'Salary_GetList' =>
            'Salary_GetList',
        'Salary_GetListResponse' =>
            'Salary_GetListResponse',
        'Salary_GetAll_AllEmployeesByCompany' =>
            'Salary_GetAll_AllEmployeesByCompany',
        'Salary_GetAll_AllEmployeesByCompanyResponse' =>
            'Salary_GetAll_AllEmployeesByCompanyResponse',
        'EmployeeSalaryItem' =>
            'EmployeeSalaryItem',
        'Salary_V2' =>
            'Salary_V2',
        'SVW_UpdateCurrent' =>
            'SVW_UpdateCurrent',
        'SVWSettings' =>
            'SVWSettings',
        'SVW_UpdateCurrentResponse' =>
            'SVW_UpdateCurrentResponse',
        'SVW_Update' =>
            'SVW_Update',
        'SVW_UpdateResponse' =>
            'SVW_UpdateResponse',
        'SVW_GetCurrent' =>
            'SVW_GetCurrent',
        'SVW_GetCurrentResponse' =>
            'SVW_GetCurrentResponse',
        'SVW_Get' =>
            'SVW_Get',
        'SVW_GetResponse' =>
            'SVW_GetResponse',
        'SVW_GetList' =>
            'SVW_GetList',
        'SVW_GetListResponse' =>
            'SVW_GetListResponse',
        'WageTax_UpdateCurrent' =>
            'WageTax_UpdateCurrent',
        'WageTaxSettings' =>
            'WageTaxSettings',
        'WageTax_UpdateCurrentResponse' =>
            'WageTax_UpdateCurrentResponse',
        'WageTax_Update' =>
            'WageTax_Update',
        'WageTax_UpdateResponse' =>
            'WageTax_UpdateResponse',
        'WageTax_GetCurrent' =>
            'WageTax_GetCurrent',
        'WageTax_GetCurrentResponse' =>
            'WageTax_GetCurrentResponse',
        'WageTax_GetList' =>
            'WageTax_GetList',
        'WageTax_GetListResponse' =>
            'WageTax_GetListResponse',
        'WageTax_Get' =>
            'WageTax_Get',
        'WageTax_GetResponse' =>
            'WageTax_GetResponse',
        'CostCenter_UpdateCurrent' =>
            'CostCenter_UpdateCurrent',
        'EmployeeCostCenter' =>
            'EmployeeCostCenter',
        'CostCenter' =>
            'CostCenter',
        'Kostensoort' =>
            'Kostensoort',
        'CostCenter_UpdateCurrentResponse' =>
            'CostCenter_UpdateCurrentResponse',
        'CostCenter_Update' =>
            'CostCenter_Update',
        'CostCenter_UpdateResponse' =>
            'CostCenter_UpdateResponse',
        'CostCenter_GetCurrent' =>
            'CostCenter_GetCurrent',
        'CostCenter_GetCurrentResponse' =>
            'CostCenter_GetCurrentResponse',
        'CostCenter_Get' =>
            'CostCenter_Get',
        'CostCenter_GetResponse' =>
            'CostCenter_GetResponse',
        'Function_UpdateCurrent' =>
            'Function_UpdateCurrent',
        'Function_UpdateCurrentResponse' =>
            'Function_UpdateCurrentResponse',
        'Function_GetCurrent' =>
            'Function_GetCurrent',
        'Function_GetCurrentResponse' =>
            'Function_GetCurrentResponse',
        'Function_GetAll_AllEmployeesByCompany' =>
            'Function_GetAll_AllEmployeesByCompany',
        'Function_GetAll_AllEmployeesByCompanyResponse' =>
            'Function_GetAll_AllEmployeesByCompanyResponse',
        'EmployeeFunctionItem' =>
            'EmployeeFunctionItem',
        'Function_V2' =>
            'Function_V2',
        'Department_UpdateCurrent' =>
            'Department_UpdateCurrent',
        'Department_UpdateCurrentResponse' =>
            'Department_UpdateCurrentResponse',
        'Department_GetCurrent' =>
            'Department_GetCurrent',
        'Department_GetCurrentResponse' =>
            'Department_GetCurrentResponse',
        'Department' =>
            'Department',
        'Department_GetAll_AllEmployeesByCompany' =>
            'Department_GetAll_AllEmployeesByCompany',
        'Department_GetAll_AllEmployeesByCompanyResponse' =>
            'Department_GetAll_AllEmployeesByCompanyResponse',
        'EmployeeDepartmentItem' =>
            'EmployeeDepartmentItem',
        'Department_V2' =>
            'Department_V2',
        'LeaseCar_Insert' =>
            'LeaseCar_Insert',
        'EmployeeLeaseCar' =>
            'EmployeeLeaseCar',
        'LeaseCar_InsertResponse' =>
            'LeaseCar_InsertResponse',
        'LeaseCar_GetCurrent' =>
            'LeaseCar_GetCurrent',
        'LeaseCar_GetCurrentResponse' =>
            'LeaseCar_GetCurrentResponse',
        'LeaseCar_Get' =>
            'LeaseCar_Get',
        'LeaseCar_GetResponse' =>
            'LeaseCar_GetResponse',
        'LeaseCar_GetList' =>
            'LeaseCar_GetList',
        'LeaseCar_GetListResponse' =>
            'LeaseCar_GetListResponse',
        'LeaseCar_Delete' =>
            'LeaseCar_Delete',
        'LeaseCar_DeleteResponse' =>
            'LeaseCar_DeleteResponse',
        'LeaseCar_Stop' =>
            'LeaseCar_Stop',
        'LeaseCar_StopResponse' =>
            'LeaseCar_StopResponse',
        'guid' =>
            'guid',
	);

	public function __construct($wsdl = null, $options = array()) {
        foreach($this->classmap as $key => $value) {
            if(!isset($options['classmap'][$key])) {
            	$options['classmap'][$key] = $value;
            }
        }
        if(isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? $wsdl : __DIR__ . '/' . self::WSDL_FILE, $options);
	}

	/**
	 * DaysVarGet
	 * Get days worked filled in for given period.
	 *
	 * @param DaysVar_Get $parameters
	 * @return DaysVar_GetResponse
	 */
	public function DaysVarGet(DaysVar_Get $parameters) {
        return $this->__soapCall(
            'DaysVar_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DaysVarGetCurrent
	 * Get filled in days worked for the current period.
	 *
	 * @param DaysVar_GetCurrent $parameters
	 * @return DaysVar_GetCurrentResponse
	 */
	public function DaysVarGetCurrent(DaysVar_GetCurrent $parameters) {
        return $this->__soapCall(
            'DaysVar_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DaysVarSetCurrent
	 * Set days worked to the current period.
	 *
	 * @param DaysVar_SetCurrent $parameters
	 * @return DaysVar_SetCurrentResponse
	 */
	public function DaysVarSetCurrent(DaysVar_SetCurrent $parameters) {
        return $this->__soapCall(
            'DaysVar_SetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DaysVarSet
	 * Set days worked for the given period. If the period is before the company's current period,
	 * unprotected mode flag is required, else a TWK exception in thrown.
	 *
	 * @param DaysVar_Set $parameters
	 * @return DaysVar_SetResponse
	 */
	public function DaysVarSet(DaysVar_Set $parameters) {
        return $this->__soapCall(
            'DaysVar_Set',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentVarGet
	 * Get all extra hourcomponents for given period.
	 *
	 * @param HourComponentVar_Get $parameters
	 * @return HourComponentVar_GetResponse
	 */
	public function HourComponentVarGet(HourComponentVar_Get $parameters) {
        return $this->__soapCall(
            'HourComponentVar_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentVarGetCurrent
	 * Get all extra hourcomponents for the current period.
	 *
	 * @param HourComponentVar_GetCurrent $parameters
	 * @return HourComponentVar_GetCurrentResponse
	 */
	public function HourComponentVarGetCurrent(HourComponentVar_GetCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentVar_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentVarClearCurrent
	 * Clear all extra hourcomponents for current period.
	 *
	 * @param HourComponentVar_ClearCurrent $parameters
	 * @return HourComponentVar_ClearCurrentResponse
	 */
	public function HourComponentVarClearCurrent(HourComponentVar_ClearCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentVar_ClearCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentVarClear
	 * Clear all extra hourcomponents for given period.
	 *
	 * @param HourComponentVar_Clear $parameters
	 * @return HourComponentVar_ClearResponse
	 */
	public function HourComponentVarClear(HourComponentVar_Clear $parameters) {
        return $this->__soapCall(
            'HourComponentVar_Clear',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentVarInsertCurrent
	 * Insert an extra hourcomponent to the current period.
	 *
	 * @param HourComponentVar_InsertCurrent $parameters
	 * @return HourComponentVar_InsertCurrentResponse
	 */
	public function HourComponentVarInsertCurrent(HourComponentVar_InsertCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentVar_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentVarInsert
	 * Insert an extra hourcomponent to given period. If the period is before the company's current
	 * period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param HourComponentVar_Insert $parameters
	 * @return HourComponentVar_InsertResponse
	 */
	public function HourComponentVarInsert(HourComponentVar_Insert $parameters) {
        return $this->__soapCall(
            'HourComponentVar_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentVarInsertBatch
	 * Insert a batch of extra hourcomponents to given period. If the period is before the company's
	 * current period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param HourComponentVar_Insert_Batch $parameters
	 * @return HourComponentVar_Insert_BatchResponse
	 */
	public function HourComponentVarInsertBatch(HourComponentVar_Insert_Batch $parameters) {
        return $this->__soapCall(
            'HourComponentVar_Insert_Batch',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentVarGet
	 * Get all variable looncomponents for given period.
	 *
	 * @param WageComponentVar_Get $parameters
	 * @return WageComponentVar_GetResponse
	 */
	public function WageComponentVarGet(WageComponentVar_Get $parameters) {
        return $this->__soapCall(
            'WageComponentVar_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentVarGetCurrent
	 * Get all variable looncomponents for the current period.
	 *
	 * @param WageComponentVar_GetCurrent $parameters
	 * @return WageComponentVar_GetCurrentResponse
	 */
	public function WageComponentVarGetCurrent(WageComponentVar_GetCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentVar_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentVarClearCurrent
	 * Clear all variable looncomponents for the current period.
	 *
	 * @param WageComponentVar_ClearCurrent $parameters
	 * @return WageComponentVar_ClearCurrentResponse
	 */
	public function WageComponentVarClearCurrent(WageComponentVar_ClearCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentVar_ClearCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentVarClear
	 * Clear all variable looncomponents for given period.
	 *
	 * @param WageComponentVar_Clear $parameters
	 * @return WageComponentVar_ClearResponse
	 */
	public function WageComponentVarClear(WageComponentVar_Clear $parameters) {
        return $this->__soapCall(
            'WageComponentVar_Clear',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentVarInsertCurrent
	 * Insert a looncomponent to the current period.
	 *
	 * @param WageComponentVar_InsertCurrent $parameters
	 * @return WageComponentVar_InsertCurrentResponse
	 */
	public function WageComponentVarInsertCurrent(WageComponentVar_InsertCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentVar_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentVarInsert
	 * Insert a looncomponent to given period. If the period is before the company's current period,
	 * unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param WageComponentVar_Insert $parameters
	 * @return WageComponentVar_InsertResponse
	 */
	public function WageComponentVarInsert(WageComponentVar_Insert $parameters) {
        return $this->__soapCall(
            'WageComponentVar_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentVarInsertBatch
	 * Insert a batch of looncomponents to given period. If the period is before the company's
	 * current period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param WageComponentVar_Insert_Batch $parameters
	 * @return WageComponentVar_Insert_BatchResponse
	 */
	public function WageComponentVarInsertBatch(WageComponentVar_Insert_Batch $parameters) {
        return $this->__soapCall(
            'WageComponentVar_Insert_Batch',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * PersonalInfoGetCurrent
	 * Get the currently active personal info.
	 *
	 * @param PersonalInfo_GetCurrent $parameters
	 * @return PersonalInfo_GetCurrentResponse
	 */
	public function PersonalInfoGetCurrent(PersonalInfo_GetCurrent $parameters) {
        return $this->__soapCall(
            'PersonalInfo_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * PersonalInfoGet
	 * Get the active personal info for given period.
	 *
	 * @param PersonalInfo_Get $parameters
	 * @return PersonalInfo_GetResponse
	 */
	public function PersonalInfoGet(PersonalInfo_Get $parameters) {
        return $this->__soapCall(
            'PersonalInfo_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * PersonalInfoUpdateCurrent
	 * Update personal info starting from the current period.
	 *
	 * @param PersonalInfo_UpdateCurrent $parameters
	 * @return PersonalInfo_UpdateCurrentResponse
	 */
	public function PersonalInfoUpdateCurrent(PersonalInfo_UpdateCurrent $parameters) {
        return $this->__soapCall(
            'PersonalInfo_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * PersonalInfoUpdate
	 * Update personal info starting from the given period.
	 *
	 * @param PersonalInfo_Update $parameters
	 * @return PersonalInfo_UpdateResponse
	 */
	public function PersonalInfoUpdate(PersonalInfo_Update $parameters) {
        return $this->__soapCall(
            'PersonalInfo_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * PersonalInfoGetAllAllEmployeesByCompany
	 * Get all personal infos of all employees.
	 *
	 * @param PersonalInfo_GetAll_AllEmployeesByCompany $parameters
	 * @return PersonalInfo_GetAll_AllEmployeesByCompanyResponse
	 */
	public function PersonalInfoGetAllAllEmployeesByCompany(PersonalInfo_GetAll_AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'PersonalInfo_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ListGetByCompany
	 * Get all employees that belong to a company and are active as given.
	 *
	 * @param List_GetByCompany $parameters
	 * @return List_GetByCompanyResponse
	 */
	public function ListGetByCompany(List_GetByCompany $parameters) {
        return $this->__soapCall(
            'List_GetByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ListGetByDebtor
	 * Get all employees that belong to a debtor and are active as given.
	 *
	 * @param List_GetByDebtor $parameters
	 * @return List_GetByDebtorResponse
	 */
	public function ListGetByDebtor(List_GetByDebtor $parameters) {
        return $this->__soapCall(
            'List_GetByDebtor',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * EmployeeGetCurrent
	 * Get the company's current period, Format = yyyy-pp-type, example: 2010-5-M or 2010-4-4W.
	 *
	 * @param Employee_GetCurrent $parameters
	 * @return Employee_GetCurrentResponse
	 */
	public function EmployeeGetCurrent(Employee_GetCurrent $parameters) {
        return $this->__soapCall(
            'Employee_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * EmployeeInsert
	 * Create a new Employee, returns the Id of this Employee. If the date is before the company's
	 * current period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param Employee_Insert $parameters
	 * @return Employee_InsertResponse
	 */
	public function EmployeeInsert(Employee_Insert $parameters) {
        return $this->__soapCall(
            'Employee_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * EmployeeDocumentUploadDocument
	 * Uploads document for employee
	 *
	 * @param EmployeeDocument_UploadDocument $parameters
	 * @return EmployeeDocument_UploadDocumentResponse
	 */
	public function EmployeeDocumentUploadDocument(EmployeeDocument_UploadDocument $parameters) {
        return $this->__soapCall(
            'EmployeeDocument_UploadDocument',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentFixedGet
	 * Get all extra hourcomponents for given period.
	 *
	 * @param HourComponentFixed_Get $parameters
	 * @return HourComponentFixed_GetResponse
	 */
	public function HourComponentFixedGet(HourComponentFixed_Get $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentFixedGetCurrent
	 * Get all extra hourcomponents for the current period.
	 *
	 * @param HourComponentFixed_GetCurrent $parameters
	 * @return HourComponentFixed_GetCurrentResponse
	 */
	public function HourComponentFixedGetCurrent(HourComponentFixed_GetCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentFixedInsertCurrent
	 * Insert an extra hourcomponent to the current period.
	 *
	 * @param HourComponentFixed_InsertCurrent $parameters
	 * @return HourComponentFixed_InsertCurrentResponse
	 */
	public function HourComponentFixedInsertCurrent(HourComponentFixed_InsertCurrent $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentFixedInsert
	 * Insert an extra hourcomponent to given period. If the period is before the company's current
	 * period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param HourComponentFixed_Insert $parameters
	 * @return HourComponentFixed_InsertResponse
	 */
	public function HourComponentFixedInsert(HourComponentFixed_Insert $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentFixedInsertBatch
	 * Insert a batch of extra hourcomponents to given period. If the period is before the company's
	 * current period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param HourComponentFixed_Insert_Batch $parameters
	 * @return HourComponentFixed_Insert_BatchResponse
	 */
	public function HourComponentFixedInsertBatch(HourComponentFixed_Insert_Batch $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_Insert_Batch',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * HourComponentFixedStop
	 * Stop an extra Hourcomponent. If the period is before the company's current period, unprotected
	 * mode flag is required, else a TWK exception is thrown.
	 *
	 * @param HourComponentFixed_Stop $parameters
	 * @return HourComponentFixed_StopResponse
	 */
	public function HourComponentFixedStop(HourComponentFixed_Stop $parameters) {
        return $this->__soapCall(
            'HourComponentFixed_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * AddressInsertCurrent
	 * Insert given address to the current period.
	 *
	 * @param Address_InsertCurrent $parameters
	 * @return Address_InsertCurrentResponse
	 */
	public function AddressInsertCurrent(Address_InsertCurrent $parameters) {
        return $this->__soapCall(
            'Address_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * AddressGetListCurrent
	 * Get all currently active adresses.
	 *
	 * @param Address_GetListCurrent $parameters
	 * @return Address_GetListCurrentResponse
	 */
	public function AddressGetListCurrent(Address_GetListCurrent $parameters) {
        return $this->__soapCall(
            'Address_GetListCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * AddressGetList
	 * Get all adresses which are active in given period.
	 *
	 * @param Address_GetList $parameters
	 * @return Address_GetListResponse
	 */
	public function AddressGetList(Address_GetList $parameters) {
        return $this->__soapCall(
            'Address_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * AddressGetAllAllEmployeesByCompany
	 * Get all adresses of all employees.
	 *
	 * @param Address_GetAll_AllEmployeesByCompany $parameters
	 * @return Address_GetAll_AllEmployeesByCompanyResponse
	 */
	public function AddressGetAllAllEmployeesByCompany(Address_GetAll_AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Address_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * BankAccountInsertCurrent
	 * Insert given bankaccount to the current period.
	 *
	 * @param BankAccount_InsertCurrent $parameters
	 * @return BankAccount_InsertCurrentResponse
	 */
	public function BankAccountInsertCurrent(BankAccount_InsertCurrent $parameters) {
        return $this->__soapCall(
            'BankAccount_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * BankAccountGetListCurrent
	 * Get all active bankaccounts for the current period.
	 *
	 * @param BankAccount_GetListCurrent $parameters
	 * @return BankAccount_GetListCurrentResponse
	 */
	public function BankAccountGetListCurrent(BankAccount_GetListCurrent $parameters) {
        return $this->__soapCall(
            'BankAccount_GetListCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * BankAccountGetList
	 * Get all active bankaccounts for given period.
	 *
	 * @param BankAccount_GetList $parameters
	 * @return BankAccount_GetListResponse
	 */
	public function BankAccountGetList(BankAccount_GetList $parameters) {
        return $this->__soapCall(
            'BankAccount_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ContractDelete
	 * Delete a contract from the system. This action can not be undone.
	 *
	 * @param Contract_Delete $parameters
	 * @return Contract_DeleteResponse
	 */
	public function ContractDelete(Contract_Delete $parameters) {
        return $this->__soapCall(
            'Contract_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ContractInsertv2
	 * Insert Contract. If the startdate is before the company's current period, unprotected mode
	 * flag is required, else a TWK exception is thrown.
	 *
	 * @param Contract_Insert_v2 $parameters
	 * @return Contract_Insert_v2Response
	 */
	public function ContractInsertv2(Contract_Insert_v2 $parameters) {
        return $this->__soapCall(
            'Contract_Insert_v2',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ContractInsertCurrentPeriodv2
	 * Insert Contract in current period for specified employee.
	 *
	 * @param Contract_InsertCurrentPeriod_v2 $parameters
	 * @return Contract_InsertCurrentPeriod_v2Response
	 */
	public function ContractInsertCurrentPeriodv2(Contract_InsertCurrentPeriod_v2 $parameters) {
        return $this->__soapCall(
            'Contract_InsertCurrentPeriod_v2',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ContractGetAllv2
	 * Get all contracts for the specified employee.
	 *
	 * @param Contract_GetAll_v2 $parameters
	 * @return Contract_GetAll_v2Response
	 */
	public function ContractGetAllv2(Contract_GetAll_v2 $parameters) {
        return $this->__soapCall(
            'Contract_GetAll_v2',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ContractGetAllAllEmployeesByCompany
	 * Get all contracts of all employees.
	 *
	 * @param Contract_GetAll_AllEmployeesByCompany $parameters
	 * @return Contract_GetAll_AllEmployeesByCompanyResponse
	 */
	public function ContractGetAllAllEmployeesByCompany(Contract_GetAll_AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Contract_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * AbsenceInsert
	 * Insert a verzuimitem, this item will start from the given date in the object.
	 *
	 * @param Absence_Insert $parameters
	 * @return Absence_InsertResponse
	 */
	public function AbsenceInsert(Absence_Insert $parameters) {
        return $this->__soapCall(
            'Absence_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * AbsenceGetList
	 * Get a list of all verzuimitems.
	 *
	 * @param Absence_GetList $parameters
	 * @return Absence_GetListResponse
	 */
	public function AbsenceGetList(Absence_GetList $parameters) {
        return $this->__soapCall(
            'Absence_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LeaveInsert
	 * Insert a new verlof, starting from the date given in the object.
	 *
	 * @param Leave_Insert $parameters
	 * @return Leave_InsertResponse
	 */
	public function LeaveInsert(Leave_Insert $parameters) {
        return $this->__soapCall(
            'Leave_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LeaveGetList
	 * Get a list of verlofitems for the given year, type and soort.
	 *
	 * @param Leave_GetList $parameters
	 * @return Leave_GetListResponse
	 */
	public function LeaveGetList(Leave_GetList $parameters) {
        return $this->__soapCall(
            'Leave_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LevensloopInsert
	 * Start levensloop for given date and amount.
	 *
	 * @param Levensloop_Insert $parameters
	 * @return Levensloop_InsertResponse
	 */
	public function LevensloopInsert(Levensloop_Insert $parameters) {
        return $this->__soapCall(
            'Levensloop_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LevensloopStop
	 * Stop the active levensloop for given date.
	 *
	 * @param Levensloop_Stop $parameters
	 * @return Levensloop_StopResponse
	 */
	public function LevensloopStop(Levensloop_Stop $parameters) {
        return $this->__soapCall(
            'Levensloop_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LevensloopDelete
	 * Delete the given levensloop. This action can not be undone.
	 *
	 * @param Levensloop_Delete $parameters
	 * @return Levensloop_DeleteResponse
	 */
	public function LevensloopDelete(Levensloop_Delete $parameters) {
        return $this->__soapCall(
            'Levensloop_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LevensloopGet
	 * Get the active levensloop for given period.
	 *
	 * @param Levensloop_Get $parameters
	 * @return Levensloop_GetResponse
	 */
	public function LevensloopGet(Levensloop_Get $parameters) {
        return $this->__soapCall(
            'Levensloop_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SpaarloonInsert
	 * Start spaarloon for given date and amount. If the startdate is before the company's current
	 * period, unprotected mode flag is required, else a TWK exception in thrown.
	 *
	 * @param Spaarloon_Insert $parameters
	 * @return Spaarloon_InsertResponse
	 */
	public function SpaarloonInsert(Spaarloon_Insert $parameters) {
        return $this->__soapCall(
            'Spaarloon_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SpaarloonStop
	 * Stop the active spaarloon for given date.
	 *
	 * @param Spaarloon_Stop $parameters
	 * @return Spaarloon_StopResponse
	 */
	public function SpaarloonStop(Spaarloon_Stop $parameters) {
        return $this->__soapCall(
            'Spaarloon_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SpaarloonGet
	 * Get the active spaarloon for given period.
	 *
	 * @param Spaarloon_Get $parameters
	 * @return Spaarloon_GetResponse
	 */
	public function SpaarloonGet(Spaarloon_Get $parameters) {
        return $this->__soapCall(
            'Spaarloon_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SpaarloonDelete
	 * Delete the given spaarloon from the system. This action can not be undone.
	 *
	 * @param Spaarloon_Delete $parameters
	 * @return Spaarloon_DeleteResponse
	 */
	public function SpaarloonDelete(Spaarloon_Delete $parameters) {
        return $this->__soapCall(
            'Spaarloon_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SpaarloonGetList
	 * Get a list of spaarloonvalues.
	 *
	 * @param Spaarloon_GetList $parameters
	 * @return Spaarloon_GetListResponse
	 */
	public function SpaarloonGetList(Spaarloon_GetList $parameters) {
        return $this->__soapCall(
            'Spaarloon_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ServiceGetList
	 * Get all service intervals.
	 *
	 * @param Service_GetList $parameters
	 * @return Service_GetListResponse
	 */
	public function ServiceGetList(Service_GetList $parameters) {
        return $this->__soapCall(
            'Service_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ServiceStopCurrent
	 * Stop the current service interval. If the date is before the company's current period,
	 * unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param Service_StopCurrent $parameters
	 * @return Service_StopCurrentResponse
	 */
	public function ServiceStopCurrent(Service_StopCurrent $parameters) {
        return $this->__soapCall(
            'Service_StopCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ServiceInsert
	 * Start a new service interval. If the date is before the company's current period, unprotected
	 * mode flag is required, else a TWK exception is thrown.
	 *
	 * @param Service_Insert $parameters
	 * @return Service_InsertResponse
	 */
	public function ServiceInsert(Service_Insert $parameters) {
        return $this->__soapCall(
            'Service_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ServiceInsert2
	 * Start a new service interval. If the date is before the company's current period, unprotected
	 * mode flag is required, else a TWK exception is thrown.
	 *
	 * @param Service_Insert2 $parameters
	 * @return Service_Insert2Response
	 */
	public function ServiceInsert2(Service_Insert2 $parameters) {
        return $this->__soapCall(
            'Service_Insert2',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DaysFixedGet
	 * Get fixed days worked for given period.
	 *
	 * @param DaysFixed_Get $parameters
	 * @return DaysFixed_GetResponse
	 */
	public function DaysFixedGet(DaysFixed_Get $parameters) {
        return $this->__soapCall(
            'DaysFixed_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DaysFixedGetCurrent
	 * Get fixed days worked for the current period.
	 *
	 * @param DaysFixed_GetCurrent $parameters
	 * @return DaysFixed_GetCurrentResponse
	 */
	public function DaysFixedGetCurrent(DaysFixed_GetCurrent $parameters) {
        return $this->__soapCall(
            'DaysFixed_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DaysFixedSetCurrent
	 * Set fixed days worked for the current period.
	 *
	 * @param DaysFixed_SetCurrent $parameters
	 * @return DaysFixed_SetCurrentResponse
	 */
	public function DaysFixedSetCurrent(DaysFixed_SetCurrent $parameters) {
        return $this->__soapCall(
            'DaysFixed_SetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DaysFixedSet
	 * Set fixed days for given period. If the period is before the company's current period,
	 * unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param DaysFixed_Set $parameters
	 * @return DaysFixed_SetResponse
	 */
	public function DaysFixedSet(DaysFixed_Set $parameters) {
        return $this->__soapCall(
            'DaysFixed_Set',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DaysFixedStop
	 * Stop vaste days, the given period is the last for these days. If the period is before the
	 * company's current period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param DaysFixed_Stop $parameters
	 * @return DaysFixed_StopResponse
	 */
	public function DaysFixedStop(DaysFixed_Stop $parameters) {
        return $this->__soapCall(
            'DaysFixed_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentFixedGet
	 * Get all vaste looncomponents for given period.
	 *
	 * @param WageComponentFixed_Get $parameters
	 * @return WageComponentFixed_GetResponse
	 */
	public function WageComponentFixedGet(WageComponentFixed_Get $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentFixedGetCurrent
	 * Get all vaste looncomponents for the current period.
	 *
	 * @param WageComponentFixed_GetCurrent $parameters
	 * @return WageComponentFixed_GetCurrentResponse
	 */
	public function WageComponentFixedGetCurrent(WageComponentFixed_GetCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentFixedInsertBatch
	 * Insert a batch of looncomponents to given period. If the period is before the company's
	 * current period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param WageComponentFixed_Insert_Batch $parameters
	 * @return WageComponentFixed_Insert_BatchResponse
	 */
	public function WageComponentFixedInsertBatch(WageComponentFixed_Insert_Batch $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_Insert_Batch',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentFixedInsert
	 * Insert a looncomponent to given period. If the period is before the company's current period,
	 * unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param WageComponentFixed_Insert $parameters
	 * @return WageComponentFixed_InsertResponse
	 */
	public function WageComponentFixedInsert(WageComponentFixed_Insert $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentFixedInsertCurrent
	 * Insert a looncomponent to the current period.
	 *
	 * @param WageComponentFixed_InsertCurrent $parameters
	 * @return WageComponentFixed_InsertCurrentResponse
	 */
	public function WageComponentFixedInsertCurrent(WageComponentFixed_InsertCurrent $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_InsertCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageComponentFixedStop
	 * Stop a looncomponent ending after given period. If the period is before the company's current
	 * period, unprotected mode flag is required, else a TWK exception is thrown.
	 *
	 * @param WageComponentFixed_Stop $parameters
	 * @return WageComponentFixed_StopResponse
	 */
	public function WageComponentFixedStop(WageComponentFixed_Stop $parameters) {
        return $this->__soapCall(
            'WageComponentFixed_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ScheduleUpdateCurrent
	 * Update schedule starting from the current period. The company default rooster number can
	 * be specified.
	 *
	 * @param Schedule_UpdateCurrent $parameters
	 * @return Schedule_UpdateCurrentResponse
	 */
	public function ScheduleUpdateCurrent(Schedule_UpdateCurrent $parameters) {
        return $this->__soapCall(
            'Schedule_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ScheduleUpdate
	 * Update schedule starting from the given date. The company default rooster number can be
	 * specified.
	 *
	 * @param Schedule_Update $parameters
	 * @return Schedule_UpdateResponse
	 */
	public function ScheduleUpdate(Schedule_Update $parameters) {
        return $this->__soapCall(
            'Schedule_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ScheduleGetCurrent
	 * Get currently active schedule.
	 *
	 * @param Schedule_GetCurrent $parameters
	 * @return Schedule_GetCurrentResponse
	 */
	public function ScheduleGetCurrent(Schedule_GetCurrent $parameters) {
        return $this->__soapCall(
            'Schedule_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ScheduleGet
	 * Get schedule the active schedule for given period.
	 *
	 * @param Schedule_Get $parameters
	 * @return Schedule_GetResponse
	 */
	public function ScheduleGet(Schedule_Get $parameters) {
        return $this->__soapCall(
            'Schedule_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ScheduleGetList
	 * Get all schedules, untill given period.
	 *
	 * @param Schedule_GetList $parameters
	 * @return Schedule_GetListResponse
	 */
	public function ScheduleGetList(Schedule_GetList $parameters) {
        return $this->__soapCall(
            'Schedule_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * ScheduleGetAllAllEmployeesByCompany
	 * Get all schedules of all employees from company
	 *
	 * @param Schedule_GetAll_AllEmployeesByCompany $parameters
	 * @return Schedule_GetAll_AllEmployeesByCompanyResponse
	 */
	public function ScheduleGetAllAllEmployeesByCompany(Schedule_GetAll_AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Schedule_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SalaryUpdateCurrent
	 * Update salary. This salary will start from the first date of the current period.
	 *
	 * @param Salary_UpdateCurrent $parameters
	 * @return Salary_UpdateCurrentResponse
	 */
	public function SalaryUpdateCurrent(Salary_UpdateCurrent $parameters) {
        return $this->__soapCall(
            'Salary_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SalaryUpdate
	 * Update salary. This salary will start from the date given.
	 *
	 * @param Salary_Update $parameters
	 * @return Salary_UpdateResponse
	 */
	public function SalaryUpdate(Salary_Update $parameters) {
        return $this->__soapCall(
            'Salary_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SalaryGetCurrent
	 * Get the currently active salary.
	 *
	 * @param Salary_GetCurrent $parameters
	 * @return Salary_GetCurrentResponse
	 */
	public function SalaryGetCurrent(Salary_GetCurrent $parameters) {
        return $this->__soapCall(
            'Salary_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SalaryGet
	 * Get the active salary for the given period.
	 *
	 * @param Salary_Get $parameters
	 * @return Salary_GetResponse
	 */
	public function SalaryGet(Salary_Get $parameters) {
        return $this->__soapCall(
            'Salary_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SalaryGetList
	 * Get all salary, untill given period.
	 *
	 * @param Salary_GetList $parameters
	 * @return Salary_GetListResponse
	 */
	public function SalaryGetList(Salary_GetList $parameters) {
        return $this->__soapCall(
            'Salary_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SalaryGetAllAllEmployeesByCompany
	 * Get all salary, untill given period.
	 *
	 * @param Salary_GetAll_AllEmployeesByCompany $parameters
	 * @return Salary_GetAll_AllEmployeesByCompanyResponse
	 */
	public function SalaryGetAllAllEmployeesByCompany(Salary_GetAll_AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Salary_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SVWUpdateCurrent
	 * Update SVW settings starting from the current period.
	 *
	 * @param SVW_UpdateCurrent $parameters
	 * @return SVW_UpdateCurrentResponse
	 */
	public function SVWUpdateCurrent(SVW_UpdateCurrent $parameters) {
        return $this->__soapCall(
            'SVW_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SVWUpdate
	 * Update SVW settings starting from given period.
	 *
	 * @param SVW_Update $parameters
	 * @return SVW_UpdateResponse
	 */
	public function SVWUpdate(SVW_Update $parameters) {
        return $this->__soapCall(
            'SVW_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SVWGetCurrent
	 * Get the currently active SVW settings.
	 *
	 * @param SVW_GetCurrent $parameters
	 * @return SVW_GetCurrentResponse
	 */
	public function SVWGetCurrent(SVW_GetCurrent $parameters) {
        return $this->__soapCall(
            'SVW_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SVWGet
	 * Get the active SVW settings for given period.
	 *
	 * @param SVW_Get $parameters
	 * @return SVW_GetResponse
	 */
	public function SVWGet(SVW_Get $parameters) {
        return $this->__soapCall(
            'SVW_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * SVWGetList
	 * Get a list of all SVW settings.
	 *
	 * @param SVW_GetList $parameters
	 * @return SVW_GetListResponse
	 */
	public function SVWGetList(SVW_GetList $parameters) {
        return $this->__soapCall(
            'SVW_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageTaxUpdateCurrent
	 * Update loonheffing settings starting from the current period.
	 *
	 * @param WageTax_UpdateCurrent $parameters
	 * @return WageTax_UpdateCurrentResponse
	 */
	public function WageTaxUpdateCurrent(WageTax_UpdateCurrent $parameters) {
        return $this->__soapCall(
            'WageTax_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageTaxUpdate
	 * Update loonheffing settings starting from given period.
	 *
	 * @param WageTax_Update $parameters
	 * @return WageTax_UpdateResponse
	 */
	public function WageTaxUpdate(WageTax_Update $parameters) {
        return $this->__soapCall(
            'WageTax_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageTaxGetCurrent
	 * Get the currently active loonheffing settings.
	 *
	 * @param WageTax_GetCurrent $parameters
	 * @return WageTax_GetCurrentResponse
	 */
	public function WageTaxGetCurrent(WageTax_GetCurrent $parameters) {
        return $this->__soapCall(
            'WageTax_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageTaxGetList
	 * Get a list of all loonheffing settings.
	 *
	 * @param WageTax_GetList $parameters
	 * @return WageTax_GetListResponse
	 */
	public function WageTaxGetList(WageTax_GetList $parameters) {
        return $this->__soapCall(
            'WageTax_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * WageTaxGet
	 * Get the active loonheffing settings for given period.
	 *
	 * @param WageTax_Get $parameters
	 * @return WageTax_GetResponse
	 */
	public function WageTaxGet(WageTax_Get $parameters) {
        return $this->__soapCall(
            'WageTax_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * CostCenterUpdateCurrent
	 * Update the cost centers starting from the current period.
	 *
	 * @param CostCenter_UpdateCurrent $parameters
	 * @return CostCenter_UpdateCurrentResponse
	 */
	public function CostCenterUpdateCurrent(CostCenter_UpdateCurrent $parameters) {
        return $this->__soapCall(
            'CostCenter_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * CostCenterUpdate
	 * Update the kostenplaatsen starting from given period.
	 *
	 * @param CostCenter_Update $parameters
	 * @return CostCenter_UpdateResponse
	 */
	public function CostCenterUpdate(CostCenter_Update $parameters) {
        return $this->__soapCall(
            'CostCenter_Update',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * CostCenterGetCurrent
	 * Get the kostenplaatsen for the current period.
	 *
	 * @param CostCenter_GetCurrent $parameters
	 * @return CostCenter_GetCurrentResponse
	 */
	public function CostCenterGetCurrent(CostCenter_GetCurrent $parameters) {
        return $this->__soapCall(
            'CostCenter_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * CostCenterGet
	 * Get the kostenplaatsen for given period.
	 *
	 * @param CostCenter_Get $parameters
	 * @return CostCenter_GetResponse
	 */
	public function CostCenterGet(CostCenter_Get $parameters) {
        return $this->__soapCall(
            'CostCenter_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * FunctionUpdateCurrent
	 * Update the function starting from current period.
	 *
	 * @param Function_UpdateCurrent $parameters
	 * @return Function_UpdateCurrentResponse
	 */
	public function FunctionUpdateCurrent(Function_UpdateCurrent $parameters) {
        return $this->__soapCall(
            'Function_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * FunctionGetCurrent
	 * Get the currently active function.
	 *
	 * @param Function_GetCurrent $parameters
	 * @return Function_GetCurrentResponse
	 */
	public function FunctionGetCurrent(Function_GetCurrent $parameters) {
        return $this->__soapCall(
            'Function_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * FunctionGetAllAllEmployeesByCompany
	 * Get all Function history of all employees.
	 *
	 * @param Function_GetAll_AllEmployeesByCompany $parameters
	 * @return Function_GetAll_AllEmployeesByCompanyResponse
	 */
	public function FunctionGetAllAllEmployeesByCompany(Function_GetAll_AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Function_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DepartmentUpdateCurrent
	 * Update the department starting the current period.
	 *
	 * @param Department_UpdateCurrent $parameters
	 * @return Department_UpdateCurrentResponse
	 */
	public function DepartmentUpdateCurrent(Department_UpdateCurrent $parameters) {
        return $this->__soapCall(
            'Department_UpdateCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DepartmentGetCurrent
	 * Get the currently active department.
	 *
	 * @param Department_GetCurrent $parameters
	 * @return Department_GetCurrentResponse
	 */
	public function DepartmentGetCurrent(Department_GetCurrent $parameters) {
        return $this->__soapCall(
            'Department_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * DepartmentGetAllAllEmployeesByCompany
	 * Get all department history of all employees.
	 *
	 * @param Department_GetAll_AllEmployeesByCompany $parameters
	 * @return Department_GetAll_AllEmployeesByCompanyResponse
	 */
	public function DepartmentGetAllAllEmployeesByCompany(Department_GetAll_AllEmployeesByCompany $parameters) {
        return $this->__soapCall(
            'Department_GetAll_AllEmployeesByCompany',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LeaseCarInsert
	 * Insert a new leaseauto contract, this contract will start from given date within the object.
	 *
	 * @param LeaseCar_Insert $parameters
	 * @return LeaseCar_InsertResponse
	 */
	public function LeaseCarInsert(LeaseCar_Insert $parameters) {
        return $this->__soapCall(
            'LeaseCar_Insert',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LeaseCarGetCurrent
	 * Get currently active leaseauto contract.
	 *
	 * @param LeaseCar_GetCurrent $parameters
	 * @return LeaseCar_GetCurrentResponse
	 */
	public function LeaseCarGetCurrent(LeaseCar_GetCurrent $parameters) {
        return $this->__soapCall(
            'LeaseCar_GetCurrent',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LeaseCarGet
	 * Get the active leaseauto contract for given period.
	 *
	 * @param LeaseCar_Get $parameters
	 * @return LeaseCar_GetResponse
	 */
	public function LeaseCarGet(LeaseCar_Get $parameters) {
        return $this->__soapCall(
            'LeaseCar_Get',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LeaseCarGetList
	 * Get leaseauto contract list, untill given period.
	 *
	 * @param LeaseCar_GetList $parameters
	 * @return LeaseCar_GetListResponse
	 */
	public function LeaseCarGetList(LeaseCar_GetList $parameters) {
        return $this->__soapCall(
            'LeaseCar_GetList',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LeaseCarDelete
	 * Delete a leaseauto contract. This action can not be undone.
	 *
	 * @param LeaseCar_Delete $parameters
	 * @return LeaseCar_DeleteResponse
	 */
	public function LeaseCarDelete(LeaseCar_Delete $parameters) {
        return $this->__soapCall(
            'LeaseCar_Delete',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}

	/**
	 * LeaseCarStop
	 * Stop the currently active leaseauto contract.
	 *
	 * @param LeaseCar_Stop $parameters
	 * @return LeaseCar_StopResponse
	 */
	public function LeaseCarStop(LeaseCar_Stop $parameters) {
        return $this->__soapCall(
            'LeaseCar_Stop',
            array($parameters),
            array('uri'=>'https://api.nmbrs.nl/soap/v2.1/EmployeeService')
        );
	}
}

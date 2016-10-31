<?php

namespace Controle;
/**
 * ApiAccessRuleType
 * Contains the definition of a rule that governs the number of times your application can
 * access the eBay API (invoke a call) on an hourly, daily, or periodic basis.
 */
class ApiAccessRuleType {
	/**
	 * @var string | The name of the call that has an access rule. Can be a call name (e.g., AddItem), ApplicationAggregate
	 * (returns totals for all calls), PasswordAuthenticationLimiter (dummy call), or NonUTF8UsageLimiter.
	 */
	public $CallName;
	/**
	 * @var boolean | Whether use of this call counts toward the application's aggregate limit for all calls.
	 */
	public $CountsTowardAggregate;
	/**
	 * @var long | The number of calls per day that your application can make to this call before being refused. The
	 * day starts at midnight, 00:00:00 PST (not GMT).
	 */
	public $DailyHardLimit;
	/**
	 * @var long | The number of calls per day that your application can make to this call before you receive
	 * a warning. The day starts at midnight, 00:00:00 PST.
	 */
	public $DailySoftLimit;
	/**
	 * @var long | The number of times your application has used this call today.
	 */
	public $DailyUsage;
	/**
	 * @var long | The number of calls that your application can make per hour to this call before being refused.
	 * Each count begins on the hour (e.g. 1:00:00).
	 */
	public $HourlyHardLimit;
	/**
	 * @var long | The number of calls that your application can make to this call per hour before you receive
	 * a warning. Each count begins on the hour (e.g. 1:00:00).
	 */
	public $HourlySoftLimit;
	/**
	 * @var long | The number of times your application has executed this call during this hour.
	 */
	public $HourlyUsage;
	/**
	 * @var int | The length of time before your application's perodic usage counter restarts for this call.
	 * If the number of calls you make exceeds the periodic hard limit before the current period
	 * ends, further calls will be refused until the next period starts. Possible values: -1 (Periodic
	 * limit not enforced, could be any negative integer), 0 (Calendar month), 30 (Number of days,
	 * could be any positive integer). If the period is based on the calendar month, the usage counters
	 * restart on the same day of every month, regardless of the number of days in the month.
	 */
	public $Period;
	/**
	 * @var long | Number of calls per period that your application may make before a call is refused, if
	 * the periodic limit is enforced. The length of the period is specified in Period.
	 */
	public $PeriodicHardLimit;
	/**
	 * @var long | Number of calls per period that your application may make before you receive a warning,
	 * if the periodic limit is enforced. The length of the period is specified in Period.
	 */
	public $PeriodicSoftLimit;
	/**
	 * @var long | Number of calls that your application has already made this period. Returns 0 if the periodic
	 * access rule has not been configured for the application. The length of the period is specified
	 * in Period. The start date of the period is specified in PeriodicStartDate.
	 */
	public $PeriodicUsage;
	/**
	 * @var dateTime | The time (in GMT) when this access rule's period started. The period starts at midnight
	 * Pacific time. For example, if the period begins on June 29 in 2005 when California is on
	 * Pacific Daylight Time, the GMT value returned would be 2005-06-29T07:00:00.000Z If the
	 * period begins on December 29 in 2005 when California is on Pacific Standard Time, the GMT
	 * value returned would be 2005-12-29T08:00:00.000Z. Only returned when the eBay Developers
	 * Program has configured the start date for the access rule. The start date can vary per application
	 * and per call name (i.e., per access rule).
	 */
	public $PeriodicStartDate;
	/**
	 * @var dateTime | The date and time this access rule was last modified by eBay.
	 */
	public $ModTime;
	/**
	 * @var \Controle\AccessRuleCurrentStatusCodeType | Your application's current status for this rule, including whether the rule is set for
	 * your application and whether the application has exceeded its daily or hourly limit.
	 */
	public $RuleCurrentStatus;
	/**
	 * @var \Controle\AccessRuleStatusCodeType | The status of the access rule, including whether the rule is turned on or off and whether
	 * the application is currently blocked from using this call. No effect if RuleCurrentStatus
	 * is set to NotSet.
	 */
	public $RuleStatus;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setCallName($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for CallName');
		$this->CallName = (int)$val;
	}

	/**
	 * @param boolean $val
	 * @throws Exception
	 */
	public function setCountsTowardAggregate($val) {
		
		$this->CountsTowardAggregate = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setDailyHardLimit($val) {
		
		$this->DailyHardLimit = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setDailySoftLimit($val) {
		
		$this->DailySoftLimit = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setDailyUsage($val) {
		
		$this->DailyUsage = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setHourlyHardLimit($val) {
		
		$this->HourlyHardLimit = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setHourlySoftLimit($val) {
		
		$this->HourlySoftLimit = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setHourlyUsage($val) {
		
		$this->HourlyUsage = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setPeriod($val) {
		if(!is_int($val)) throw new Exception('POJO Proxy need a integer');
		$this->Period = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setPeriodicHardLimit($val) {
		
		$this->PeriodicHardLimit = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setPeriodicSoftLimit($val) {
		
		$this->PeriodicSoftLimit = (int)$val;
	}

	/**
	 * @param long $val
	 * @throws Exception
	 */
	public function setPeriodicUsage($val) {
		
		$this->PeriodicUsage = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setPeriodicStartDate($val) {
		
		$this->PeriodicStartDate = (int)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setModTime($val) {
		
		$this->ModTime = (int)$val;
	}

	/**
	 * @param AccessRuleCurrentStatusCodeType $val
	 * @throws Exception
	 */
	public function setRuleCurrentStatus($val) {
		
		$this->RuleCurrentStatus = (int)$val;
	}

	/**
	 * @param AccessRuleStatusCodeType $val
	 * @throws Exception
	 */
	public function setRuleStatus($val) {
		
		$this->RuleStatus = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val) {
		
		$this->any = (int)$val;
	}

}


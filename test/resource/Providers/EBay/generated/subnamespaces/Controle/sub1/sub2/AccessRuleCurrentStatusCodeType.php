<?php

namespace Controle\sub1\sub2;
class AccessRuleCurrentStatusCodeType {
	const NotSet = 'NotSet';
	const HourlyLimitExceeded = 'HourlyLimitExceeded';
	const DailyLimitExceeded = 'DailyLimitExceeded';
	const PeriodicLimitExceeded = 'PeriodicLimitExceeded';
	const HourlySoftLimitExceeded = 'HourlySoftLimitExceeded';
	const DailySoftLimitExceeded = 'DailySoftLimitExceeded';
	const PeriodicSoftLimitExceeded = 'PeriodicSoftLimitExceeded';
	const CustomCode = 'CustomCode';
}


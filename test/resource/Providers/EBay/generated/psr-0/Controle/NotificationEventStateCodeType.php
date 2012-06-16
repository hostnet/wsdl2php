<?php

namespace Controle;
class NotificationEventStateCodeType {
	const _New = 'New';
	const Failed = 'Failed';
	const MarkedDown = 'MarkedDown';
	const Pending = 'Pending';
	const FailedPending = 'FailedPending';
	const MarkedDownPending = 'MarkedDownPending';
	const Delivered = 'Delivered';
	const Undeliverable = 'Undeliverable';
	const Rejected = 'Rejected';
	const Canceled = 'Canceled';
	const CustomCode = 'CustomCode';
}


<?php

namespace Controle\sub1\sub2;
class PaidStatusCodeType {
	const NotPaid = 'NotPaid';
	const BuyerHasNotCompletedCheckout = 'BuyerHasNotCompletedCheckout';
	const PaymentPendingWithPayPal = 'PaymentPendingWithPayPal';
	const PaidWithPayPal = 'PaidWithPayPal';
	const MarkedAsPaid = 'MarkedAsPaid';
	const PaymentPendingWithEscrow = 'PaymentPendingWithEscrow';
	const PaidWithEscrow = 'PaidWithEscrow';
	const EscrowPaymentCancelled = 'EscrowPaymentCancelled';
	const PaymentPendingWithPaisaPay = 'PaymentPendingWithPaisaPay';
	const PaidWithPaisaPay = 'PaidWithPaisaPay';
	const PaymentPending = 'PaymentPending';
	const CustomCode = 'CustomCode';
}


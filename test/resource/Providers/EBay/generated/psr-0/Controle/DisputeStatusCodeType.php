<?php

namespace Controle;
class DisputeStatusCodeType {
	const Closed = 'Closed';
	const WaitingForSellerResponse = 'WaitingForSellerResponse';
	const WaitingForBuyerResponse = 'WaitingForBuyerResponse';
	const ClosedFVFCreditStrike = 'ClosedFVFCreditStrike';
	const ClosedNoFVFCreditStrike = 'ClosedNoFVFCreditStrike';
	const ClosedFVFCreditNoStrike = 'ClosedFVFCreditNoStrike';
	const ClosedNoFVFCreditNoStrike = 'ClosedNoFVFCreditNoStrike';
	const StrikeAppealedAfterClosing = 'StrikeAppealedAfterClosing';
	const FVFCreditReversedAfterClosing = 'FVFCreditReversedAfterClosing';
	const StrikeAppealedAndFVFCreditReversed = 'StrikeAppealedAndFVFCreditReversed';
	const ClaimOpened = 'ClaimOpened';
	const NoDocumentation = 'NoDocumentation';
	const ClaimClosed = 'ClaimClosed';
	const ClaimDenied = 'ClaimDenied';
	const ClaimInProcess = 'ClaimInProcess';
	const ClaimApproved = 'ClaimApproved';
	const ClaimPaid = 'ClaimPaid';
	const ClaimResolved = 'ClaimResolved';
	const ClaimSubmitted = 'ClaimSubmitted';
	const CustomCode = 'CustomCode';
}


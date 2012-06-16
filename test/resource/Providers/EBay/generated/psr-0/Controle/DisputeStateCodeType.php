<?php

namespace Controle;
class DisputeStateCodeType {
	const Locked = 'Locked';
	const Closed = 'Closed';
	const BuyerFirstResponsePayOption = 'BuyerFirstResponsePayOption';
	const BuyerFirstResponseNoPayOption = 'BuyerFirstResponseNoPayOption';
	const BuyerFirstResponsePayOptionLateResponse = 'BuyerFirstResponsePayOptionLateResponse';
	const BuyerFirstResponseNoPayOptionLateResponse = 'BuyerFirstResponseNoPayOptionLateResponse';
	const MutualCommunicationPayOption = 'MutualCommunicationPayOption';
	const MutualCommunicationNoPayOption = 'MutualCommunicationNoPayOption';
	const PendingResolve = 'PendingResolve';
	const MutualWithdrawalAgreement = 'MutualWithdrawalAgreement';
	const MutualWithdrawalAgreementLate = 'MutualWithdrawalAgreementLate';
	const NotReceivedNoSellerResponse = 'NotReceivedNoSellerResponse';
	const NotAsDescribedNoSellerResponse = 'NotAsDescribedNoSellerResponse';
	const NotReceivedMutualCommunication = 'NotReceivedMutualCommunication';
	const NotAsDescribedMutualCommunication = 'NotAsDescribedMutualCommunication';
	const MutualAgreementOrBuyerReturningItem = 'MutualAgreementOrBuyerReturningItem';
	const ClaimOpened = 'ClaimOpened';
	const NoDocumentation = 'NoDocumentation';
	const ClaimClosed = 'ClaimClosed';
	const ClaimDenied = 'ClaimDenied';
	const ClaimPending = 'ClaimPending';
	const ClaimPaymentPending = 'ClaimPaymentPending';
	const ClaimPaid = 'ClaimPaid';
	const ClaimResolved = 'ClaimResolved';
	const ClaimSubmitted = 'ClaimSubmitted';
	const CustomCode = 'CustomCode';
}


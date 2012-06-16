<?php

namespace Controle;
/**
 * DisputeType
 * Contains all information describing a dispute.
 */
class DisputeType {
	/**
	 * @var \Controle\DisputeIDType | The unique identifier of a dispute, returned by the eBay site when the dispute is created.
	 */
	public $DisputeID;
	/**
	 * @var \Controle\DisputeRecordTypeCodeType | The type of dispute.
	 */
	public $DisputeRecordType;
	/**
	 * @var \Controle\DisputeStateCodeType | The internal state of the dispute. The value determines which values of DisputeActivity
	 * are valid when responding to a dispute.
	 */
	public $DisputeState;
	/**
	 * @var \Controle\DisputeStatusCodeType | The status of the dispute, which provides additional information about the dispute state.
	 */
	public $DisputeStatus;
	/**
	 * @var \Controle\TradingRoleCodeType | The role of the person involved in the dispute who is not taking action or requesting information.
	 * The role is either Buyer or Seller.
	 */
	public $OtherPartyRole;
	/**
	 * @var string | The user name of the person involved in the dispute who is not taking action or requesting
	 * information. The role is either Buyer or Seller.
	 */
	public $OtherPartyName;
	/**
	 * @var \Controle\TradingRoleCodeType | The role of the person involved in the dispute who is taking action or  requesting information.
	 * The role is either Buyer or Seller.
	 */
	public $UserRole;
	/**
	 * @var \Controle\UserIDType | User ID of the order's buyer. Not applicable to Half.com.
	 */
	public $BuyerUserID;
	/**
	 * @var \Controle\UserIDType | The eBay user ID of the seller involved in the dispute.
	 */
	public $SellerUserID;
	/**
	 * @var string | Identifier for the transaction. A value of zero is used for the Chinese auction format. Thus,
	 * a value of zero is a valid transaction ID. A transaction ID is only unique to the listing that
	 * spawned it, so a transaction is only uniquely identified on a global basis by a combination
	 * of ItemID and TransactionID. Also applicable to Half.com (for GetOrders).
	 */
	public $TransactionID;
	/**
	 * @var \Controle\ItemType | Information about the item that spawned the transaction. It is a purchase from this item's
	 * listing that the transaction represents. To remove a property from an item, specify it
	 * in ModifyType as a changed property, but do not give it a value in Item. Also applicable
	 * to Half.com (for GetOrders).
	 */
	public $Item;
	/**
	 * @var \Controle\DisputeReasonCodeType | The top-level reason for the dispute. The value of DisputeReason determines which values
	 * of DisputeExplanation are valid. See DisputeExplanationCodeList for details.
	 */
	public $DisputeReason;
	/**
	 * @var \Controle\DisputeExplanationCodeType | The detailed explanation for the dispute. Valid values depend on the value of DisputeReason.
	 * See DisputeExplanationCodeList for details.
	 */
	public $DisputeExplanation;
	/**
	 * @var \Controle\DisputeCreditEligibilityCodeType | Whether the dispute is currently eligible for Final Value Fee credit. The value is usually
	 * Ineligible until 7 days after the dispute was created, unless a fee exception applies.
	 */
	public $DisputeCreditEligibility;
	/**
	 * @var dateTime | The date and time the dispute was created, in GMT.
	 */
	public $DisputeCreatedTime;
	/**
	 * @var dateTime | The date and time the dispute was modified, in GMT.
	 */
	public $DisputeModifiedTime;
	/**
	 * @var \Controle\DisputeResolutionType | The action resulting from the dispute resolution. The action might include a Final Value
	 * Fee credit to the seller, a strike to the buyer, a reversal, or an appeal.
	 */
	public $DisputeResolution;
	/**
	 * @var \Controle\DisputeMessageType | A response or message posted to a dispute, either by an application or by a user on the
	 * eBay site.
	 */
	public $DisputeMessage;
	/**
	 * @var boolean | Whether the buyer can close a dispute unhappy and escalate it to the eBay Standard Purchase
	 * Protection Program. To escalate, the buyer must be eligible for the PPP. Used in Item Not
	 * Received disputes.
	 */
	public $Escalation;
	/**
	 * @var boolean | Whether the buyer is eligible for the eBay Standard Purchase Protection Program. The eligibility
	 * rules are described in the eBay site online help. Used in Item Not Received disputes.
	 */
	public $PurchaseProtection;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
}

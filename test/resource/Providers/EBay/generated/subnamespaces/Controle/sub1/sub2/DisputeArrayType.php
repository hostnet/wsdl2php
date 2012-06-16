<?php

namespace Controle\sub1\sub2;
/**
 * DisputeArrayType
 * Represents a list of disputes. Can hold zero or more Dispute types, each of which describes
 * a dispute.
 */
class DisputeArrayType {
	/**
	 * @var \Controle\sub1\sub2\DisputeType | The information that describes a dispute, including the buyer's name, the transaction ID,
	 * the dispute state and status, whether the dispute is resolved, and any messages posted
	 * to the dispute.
	 */
	public $Dispute;
}


<?php

namespace Controle\sub1\sub2;
/**
 * MyMessagesMessageIDArrayType
 * Contains a list of up to 10 MessageID values.
 */
class MyMessagesMessageIDArrayType {
	/**
	 * @var \Controle\sub1\sub2\MyMessagesMessageIDType | An ID that uniquely identifies a message for a given user. <br /><br /> This value is not
	 * the same as the value used for the GetMemberMessages MessageID. Use the GetMemberMessages
	 * value for used as the GetMyMessages ExternalID instead.
	 */
	public $MessageID;
}


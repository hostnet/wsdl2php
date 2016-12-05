<?php

namespace Controle;

/**
 * AdFormatLeadType
 * Contains prospective buyer contact information and other details associated with a lead
 * for an ad format listing.
 */
class AdFormatLeadType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var string | Message sent from the prospective buyer to the seller.
	 */
	public $AdditionalInformation;
	/**
	 * @var \Controle\AddressType | Address information for the prospective buyer. Not returned if information is unavailable.
	 */
	public $Address;
	/**
	 * @var string | The time of day when the prospective buyer prefers to be contacted by the seller. Not returned
	 * if information is unavailable.
	 */
	public $BestTimeToCall;
	/**
	 * @var string | Email address for the user. You cannot retrieve an email address for any user with whom
	 * you do not have a transactional relationship, regardless of site. Email is only returned
	 * for applicable calls when you are retrieving your own user data OR when you and the other
	 * user are in a transactional relationship and the call is being executed within a certain
	 * amount of time after the transaction is created. Based on Trust and Safety policies, the
	 * time is unspecified and can vary by site. <br><br> Starting Jan 2007, when a bidder's user
	 * info is made anonymous, this tag will be returned only for that bidder, and the seller
	 * of an item that the user is bidding on.
	 */
	public $Email;
	/**
	 * @var string | First name of the prospective buyer.
	 */
	public $FirstName;
	/**
	 * @var string | Last name of the prospective buyer.
	 */
	public $LastName;
	/**
	 * @var string | User's primary phone number. This may return a value of "Invalid Request" if you are not
	 * authorized to see the user's phone number. Also applicable to Half.com (for GetOrders).
	 */
	public $Phone;
	/**
	 * @var dateTime | Date and time (in GMT) that the lead was submitted.
	 */
	public $SubmittedTime;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	// @codingStandardsIgnoreEnd

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setAdditionalInformation($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for AdditionalInformation');
        }
        $this->AdditionalInformation = (string)$val;
	}

	/**
	 * @param AddressType $val
	 * @throws Exception
	 */
	public function setAddress($val)
	{
        $this->Address = (AddressType)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setBestTimeToCall($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for BestTimeToCall');
        }
        $this->BestTimeToCall = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setEmail($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Email');
        }
        $this->Email = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setFirstName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FirstName');
        }
        $this->FirstName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setLastName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LastName');
        }
        $this->LastName = (string)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setPhone($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Phone');
        }
        $this->Phone = (string)$val;
	}

	/**
	 * @param dateTime $val
	 * @throws Exception
	 */
	public function setSubmittedTime($val)
	{
        $this->SubmittedTime = (dateTime)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (<anyXML>)$val;
	}
}

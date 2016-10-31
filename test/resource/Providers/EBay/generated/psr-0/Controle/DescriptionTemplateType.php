<?php

namespace Controle;

/**
 * DescriptionTemplateType
 * The information for one Theme or one Layout.
 */
class DescriptionTemplateType
{
	/**
	 * @var int | Unique identifier for this theme group.
	 */
	public $groupid;
	/**
	 * @var int | Key you specified in ProductSearchID in the search request to distinguish between query
	 * results. Primarily useful when conducting multiple searches in the same call. If no ProductSearchID
	 * value was specified in the request, returns the array index of the search result (beginning
	 * with 0). Not applicable to GetProductFamilyMembers.
	 */
	public $id;
	/**
	 * @var \Controle\anyURI | The image associated with the department, aisle, or product, if any. All domains should
	 * be associated with an image. However, there may be rare cases when an image is not available.
	 */
	public $imageurl;
	/**
	 * @var string | Name of the eBay Store. The name is shown at the top of the Store page.
	 */
	public $name;
	/**
	 * @var string | XML defining the template. Elements you must include in your XML: ThemeTop, ThemeUserCellTop,
	 * ThemeUserContent, ThemeUserCellBottom, ThemeBottom. Not returned for Layouts.
	 */
	public $templatexml;
	/**
	 * @var \Controle\DescriptionTemplateCodeType | Returns the notification type. Possible values include: AskSellerQuestion, AuctionCheckoutComplete,
	 * BestOffer, CheckoutBuyerRequestTotal, EndOfAuction, Feedback, FixedPriceEndOfTransaction,
	 * FixedPriceTransaction, ItemNotReceived, MyMessages, OutBid, SecondChanceOffer, UPIBuyerResponseDispute,
	 * UPISellerClosedDispute, UPISellerOpenedDispute, and UPISellerRespondedToDispute.
	 */
	public $type;
	/**
	 * @var \Controle\<anyXML>
	 */
	public $any;
	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setGroupID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->groupid = (int)$val;
	}

	/**
	 * @param int $val
	 * @throws Exception
	 */
	public function setID($val)
	{
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->id = (int)$val;
	}

	/**
	 * @param anyURI $val
	 * @throws Exception
	 */
	public function setImageURL($val)
	{
        $this->imageurl = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setName($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Name');
        }
        $this->name = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setTemplateXML($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for TemplateXML');
        }
        $this->templatexml = (int)$val;
	}

	/**
	 * @param DescriptionTemplateCodeType $val
	 * @throws Exception
	 */
	public function setType($val)
	{
        $this->type = (int)$val;
	}

	/**
	 * @param <anyXML> $val
	 * @throws Exception
	 */
	public function setAny($val)
	{
        $this->any = (int)$val;
	}
}

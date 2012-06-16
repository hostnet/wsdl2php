<?php

namespace Controle\sub1\sub2;
/**
 * GetUserContactDetailsResponseType
 * Returns contact information to a seller for both bidders and users who have made offers
 * (via Best Offer) during an active listing.
 */
class GetUserContactDetailsResponseType extends \Controle\sub1\sub2\AbstractResponseType {
	/**
	 * @var string | Unique eBay user ID for the user.<br> <br> In GetSearchResultsExpress, only returned when
	 * ItemDetails is set to Fine. <br><br> Starting Jan 2007, when a bidder's user info is made anonymous,
	 * this tag will contain the real ID value only for that bidder, and the seller of an item
	 * that the user is bidding on. For all other users, the real ID value will be replaced with
	 * the value "Bidder X" where X is a number indicating the order of that user's first bid.
	 * For example, if the user was the third bidder, UserID = Bidder 3. <br><br> Note that the
	 * anonymous bidder ID stays the same for a given auction, but is different for different
	 * auctions. For example, a bidder who is the third and then the seventh bidder in an auction
	 * will be listed for both bids as "Bidder 3". However, if that same bidder is the first bidder
	 * on a different auction, the bidder will be listed for that auction as "Bidder 1", not "Bidder
	 * 3".
	 */
	public $UserID;
	/**
	 * @var \Controle\sub1\sub2\AddressType | Contact information for the requested contact. Note that the email address is NOT returned.
	 */
	public $ContactAddress;
	/**
	 * @var dateTime | Indicates the date the specified user originally registered with eBay. <br><br> Starting
	 * Jan 2007, when a bidder's user info is made anonymous, this tag will be returned only for
	 * that bidder, and the seller of an item that the user is bidding on.
	 */
	public $RegistrationDate;
}


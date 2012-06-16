<?php

namespace Controle\sub1\sub2;
/**
 * AuthenticationEntryType
 * A set of application-level authentication preferences and related data that you configure
 * to support the user authentication and authorization process.
 */
class AuthenticationEntryType {
	/**
	 * @var \Controle\sub1\sub2\anyURI | A URL that you set up in order to determine when a            user's authentication and
	 * authorization process succeeded.            After a user signs into eBay and authorizes
	 * your application            to execute secure calls on their behalf, eBay redirects the
	 *            user's browser to this URL and, if TokenReturnMethod is set            to Redirect,
	 * appends the user's authentication token plus            other data that you specified to
	 * identify the user.
	 */
	public $AcceptURL;
	/**
	 * @var \Controle\sub1\sub2\anyURI | Your privacy policy URL, which is shown to end users on the eBay sign-in page.
	 */
	public $PrivacyPolicyURL;
	/**
	 * @var \Controle\sub1\sub2\anyURI | A URL that you set up in order to determine when a            user's authentication and
	 * authorization process did not succeed.            After a user signs into eBay but chooses
	 * NOT to authorize your application            to execute secure calls on their behalf, eBay
	 * redirects the            user's browser to this URL and appends data that you specified
	 *            to identify the user (but does not return an authentication token).
	 */
	public $RejectURL;
	/**
	 * @var string | A unique identifier associated with application and the combination            of URLs
	 * within this authentication entry.            Unique across all applications that execute
	 * eBay Web Services calls.            For convenience, you can call GetRuName to generate
	 * a unique value.
	 */
	public $RuName;
	/**
	 * @var \Controle\sub1\sub2\TokenReturnMethodCodeType | Specifies whether to return the token in the HTTP response stream            sent to the
	 * accept URL, or to make it available for retrieval via FetchToken.
	 */
	public $TokenReturnMethod;
	/**
	 * @var \Controle\sub1\sub2\<anyXML>
	 */
	public $any;
}


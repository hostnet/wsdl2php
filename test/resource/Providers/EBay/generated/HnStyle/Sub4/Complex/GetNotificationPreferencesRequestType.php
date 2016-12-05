<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetNotificationPreferencesRequestType
 * Retrieves the requesting application's notification preferences. Details are only returned
 * for events for which a preference was set at one point. For example, if you enabled notification
 * for the EndOfAuction event and later disabled it, the GetNotificationPreferences response
 * would cite the EndOfAuction event preference as Disabled. Otherwise, no details would be
 * returned regarding EndOfAuction.
 */
class GetNotificationPreferencesRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NotificationRoleCodeType | Specifies what type of Preference to retrieve.
     */
    public $PreferenceLevel;
    // @codingStandardsIgnoreEnd

    /**
     * @param NotificationRoleCodeType $val
     * @throws Exception
     */
    public function setPreferenceLevel($val)
    {
        $this->PreferenceLevel = ()$val;
    }
}

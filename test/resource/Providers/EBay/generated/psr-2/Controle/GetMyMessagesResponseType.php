<?php

namespace Controle;

/**
 * GetMyMessagesResponseType
 * Conains information about the messages and alerts sent to a given user. Depending on the
 * detail level, this information can include message and alert counts, resolution and flagged
 * status, message and/or alert headers, and message and/or alert body text.
 */
class GetMyMessagesResponseType extends
 \Controle\AbstractResponseType
{
    /**
     * @var \Controle\MyMessagesSummaryType | Summary data for a given user's alerts and messages. This includes the numbers of new
     * alerts and messages, unresolved alerts, flagged messages, and total alerts and messages. The
     * amount and type of data returned is the same whether or not the request included specific AlertID
     * or MessageID values. Always/Conditionally returned logic assumes a detail level of ReturnMessages.
     */
    public $summary;
    /**
     * @var \Controle\MyMessagesAlertArrayType | Contains the alert information for each alert specified in AlertIDs. The amount and
     * type of information returned varies based on the requested detail level. Contains one MyMessagesAlertType
     * object per alert. Returned as an empty node if user has no alerts.
     */
    public $alerts;
    /**
     * @var \Controle\MyMessagesMessageArrayType | Contains the message information for each message specified in MessageIDs. The amount
     * and type of information returned varies based on the requested detail level. Contains
     * one MyMessagesMessageType object per message. Returned as an empty node if user has
     * no messages.
     */
    public $messages;
    /**
     * @param MyMessagesSummaryType $val
     * @throws Exception
     */
    public function setSummary($val)
    {
        $this->summary = (int)$val;
    }

    /**
     * @param MyMessagesAlertArrayType $val
     * @throws Exception
     */
    public function setAlerts($val)
    {
        $this->alerts = (int)$val;
    }

    /**
     * @param MyMessagesMessageArrayType $val
     * @throws Exception
     */
    public function setMessages($val)
    {
        $this->messages = (int)$val;
    }
}

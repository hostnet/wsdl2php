<?php

namespace Controle;
class Order {
    /**
     * @var string
     */
    public $OrderId;
    /**
     * @var \Controle\OrderType
     */
    public $Type;
    /**
     * @var string
     */
    public $AccountReference;
    /**
     * @var \Controle\OrderStatusType
     */
    public $Status;
    /**
     * @var string
     */
    public $TransactionComment;
    /**
     * @var string
     */
    public $Comments;
    /**
     * @var string
     */
    public $Options;
    /**
     * @var string
     */
    public $LocalPresence;
    /**
     * @var string
     */
    public $Batch;
    /**
     * @var string
     */
    public $Documentation;
    /**
     * @var \Controle\Domain
     */
    public $Domain;
    /**
     * @var dateTime
     */
    public $CreDate;
}


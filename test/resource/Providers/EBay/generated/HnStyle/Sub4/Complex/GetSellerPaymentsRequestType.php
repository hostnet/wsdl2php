<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * GetSellerPaymentsRequestType
 * Retrieves a summary of pending or paid payments that Half.com created for the seller identified
 * by the authentication token in the request. Only retrieves payments that occurred within
 * a particular pay period. Each payment is for one transaction for one item in one order.
 * An order can contain transactions for multiple items from multiple sellers, but this call
 * only retrieves payments that are relevant to one seller. The financial value of a payment
 * is typically based on an amount that a buyer paid to Half.com for a transaction, with adjustments
 * for shipping costs and Half.com's commission. For most sellers, each month contains two
 * pay periods: One from the 1st to the 15th of the month, and one from the 16th to the last
 * day of the month. Sellers can refer to their account information on the Half.com site to
 * determine their pay periods. (You cannot retrieve a seller's pay periods by using eBay Web
 * Services.) When a buyer makes a purchase and an order is created, Half.com creates a payment
 * for the seller and marks it as Pending in the seller's Half.com account. Within a certain
 * number of days after the pay period ends, Half.com settles payments for that period and
 * marks each completed payment as Paid. See the Half.com Web site online help for more information
 * about how payments are managed.
 */
class GetSellerPaymentsRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RCSPaymentStatusCodeType | Not supported.
     */
    public $PaymentStatus;
    /**
     * @var dateTime | Time range filter that retrieves Half.com payments that were created within a single
     * pay period. Sellers can refer to the Half.com site to determine their pay periods. PaymentTimeFrom
     * is the earliest (oldest) time and PaymentTimeTo is the latest (most recent) time in
     * the range. Half.com pay periods start and end at midnight Pacific time, but the time
     * values are stored in the database in GMT (not Pacific time). See "Time Values" in the eBay
     * Web Services guide for information about converting between GMT and Pacific time. <br> <br> If
     * you specify a PaymentStatus of Pending, add a buffer of one hour (or one day) to both
     * ends of the time range to retrieve more data than you need, and then filter the results
     * on the client side as needed. If any pending payments match the request, the response
     * may include all payments since the beginning of the period. <br> <br> If you specify
     * a PaymentStatus of Paid, the time range must contain one full pay period. That is, PaymentTimeFrom
     * must be earlier or equal the start time of the pay period, and PaymentTimeTo must be
     * later than or equal to the end time of the pay period. Otherwise, no paid payments are returned.
     * For example, if the pay period starts on 2005-09-16 and ends on 2005-09-30, you could
     * specify an earlier PaymentTimeFrom value of 2005-09-16T00:00:00.000Z and a later PaymentTimeTo
     * value of 2005-10-01T12:00:00.000Z. <br> <br> If you specify a time range that covers
     * two pay periods, only the payments from the most recent pay period are returned. The
     * earliest time you can specify is 18 months ago.
     */
    public $PaymentTimeFrom;
    /**
     * @var dateTime | Time range filter that retrieves Half.com payments for a single pay period. See the
     * description of PaymentTimeTo for details about using this time range filter. For paid
     * payments, this value should be equal to or later than the end of the last day of the
     * pay period, where the time is converted to GMT. For example, if the period ends on 2005-09-30,
     * you could specify 2005-10-01T09:00:00.000Z, which is later than the end of the last day.
     */
    public $PaymentTimeTo;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\PaginationType | Pagination instruction that specifies the virtual page of data to return
     * per search request. Default page number is 0 (the first page).            Specify a
     * page number of 0 or a positive value lower            than the approximate number of
     * pages available.
     */
    public $Pagination;
    // @codingStandardsIgnoreEnd

    /**
     * @param RCSPaymentStatusCodeType $val
     * @throws Exception
     */
    public function setPaymentStatus($val)
    {
        $this->PaymentStatus = (RCSPaymentStatusCodeType)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setPaymentTimeFrom($val)
    {
        $this->PaymentTimeFrom = (dateTime)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setPaymentTimeTo($val)
    {
        $this->PaymentTimeTo = (dateTime)$val;
    }

    /**
     * @param PaginationType $val
     * @throws Exception
     */
    public function setPagination($val)
    {
        $this->Pagination = (PaginationType)$val;
    }
}

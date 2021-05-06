<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/services/payments_account_service.proto

namespace Google\Ads\GoogleAds\V7\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [PaymentsAccountService.ListPaymentsAccounts][google.ads.googleads.v7.services.PaymentsAccountService.ListPaymentsAccounts].
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.services.ListPaymentsAccountsResponse</code>
 */
class ListPaymentsAccountsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of accessible payments accounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.resources.PaymentsAccount payments_accounts = 1;</code>
     */
    private $payments_accounts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V7\Resources\PaymentsAccount[]|\Google\Protobuf\Internal\RepeatedField $payments_accounts
     *           The list of accessible payments accounts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Services\PaymentsAccountService::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of accessible payments accounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.resources.PaymentsAccount payments_accounts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPaymentsAccounts()
    {
        return $this->payments_accounts;
    }

    /**
     * The list of accessible payments accounts.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.resources.PaymentsAccount payments_accounts = 1;</code>
     * @param \Google\Ads\GoogleAds\V7\Resources\PaymentsAccount[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPaymentsAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V7\Resources\PaymentsAccount::class);
        $this->payments_accounts = $arr;

        return $this;
    }

}


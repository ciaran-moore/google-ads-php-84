<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/common/criteria.proto

namespace Google\Ads\GoogleAds\V7\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An income range criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.common.IncomeRangeInfo</code>
 */
class IncomeRangeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of the income range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.IncomeRangeTypeEnum.IncomeRangeType type = 1;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Type of the income range.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of the income range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.IncomeRangeTypeEnum.IncomeRangeType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the income range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.IncomeRangeTypeEnum.IncomeRangeType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V7\Enums\IncomeRangeTypeEnum\IncomeRangeType::class);
        $this->type = $var;

        return $this;
    }

}


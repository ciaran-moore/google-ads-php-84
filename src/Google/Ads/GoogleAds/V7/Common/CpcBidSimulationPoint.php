<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/common/simulation.proto

namespace Google\Ads\GoogleAds\V7\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Projected metrics for a specific CPC bid amount.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.common.CpcBidSimulationPoint</code>
 */
class CpcBidSimulationPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Projected required daily budget that the advertiser must set in order to
     * receive the estimated traffic, in micros of advertiser currency.
     *
     * Generated from protobuf field <code>int64 required_budget_amount_micros = 17;</code>
     */
    protected $required_budget_amount_micros = 0;
    /**
     * Projected number of biddable conversions.
     *
     * Generated from protobuf field <code>double biddable_conversions = 9;</code>
     */
    protected $biddable_conversions = null;
    /**
     * Projected total value of biddable conversions.
     *
     * Generated from protobuf field <code>double biddable_conversions_value = 10;</code>
     */
    protected $biddable_conversions_value = null;
    /**
     * Projected number of clicks.
     *
     * Generated from protobuf field <code>int64 clicks = 11;</code>
     */
    protected $clicks = null;
    /**
     * Projected cost in micros.
     *
     * Generated from protobuf field <code>int64 cost_micros = 12;</code>
     */
    protected $cost_micros = null;
    /**
     * Projected number of impressions.
     *
     * Generated from protobuf field <code>int64 impressions = 13;</code>
     */
    protected $impressions = null;
    /**
     * Projected number of top slot impressions.
     * Only search advertising channel type supports this field.
     *
     * Generated from protobuf field <code>int64 top_slot_impressions = 14;</code>
     */
    protected $top_slot_impressions = null;
    protected $cpc_simulation_key_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $required_budget_amount_micros
     *           Projected required daily budget that the advertiser must set in order to
     *           receive the estimated traffic, in micros of advertiser currency.
     *     @type float $biddable_conversions
     *           Projected number of biddable conversions.
     *     @type float $biddable_conversions_value
     *           Projected total value of biddable conversions.
     *     @type int|string $clicks
     *           Projected number of clicks.
     *     @type int|string $cost_micros
     *           Projected cost in micros.
     *     @type int|string $impressions
     *           Projected number of impressions.
     *     @type int|string $top_slot_impressions
     *           Projected number of top slot impressions.
     *           Only search advertising channel type supports this field.
     *     @type int|string $cpc_bid_micros
     *           The simulated CPC bid upon which projected metrics are based.
     *     @type float $cpc_bid_scaling_modifier
     *           The simulated scaling modifier upon which projected metrics are based.
     *           All CPC bids relevant to the simulated entity are scaled by this
     *           modifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Common\Simulation::initOnce();
        parent::__construct($data);
    }

    /**
     * Projected required daily budget that the advertiser must set in order to
     * receive the estimated traffic, in micros of advertiser currency.
     *
     * Generated from protobuf field <code>int64 required_budget_amount_micros = 17;</code>
     * @return int|string
     */
    public function getRequiredBudgetAmountMicros()
    {
        return $this->required_budget_amount_micros;
    }

    /**
     * Projected required daily budget that the advertiser must set in order to
     * receive the estimated traffic, in micros of advertiser currency.
     *
     * Generated from protobuf field <code>int64 required_budget_amount_micros = 17;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRequiredBudgetAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->required_budget_amount_micros = $var;

        return $this;
    }

    /**
     * Projected number of biddable conversions.
     *
     * Generated from protobuf field <code>double biddable_conversions = 9;</code>
     * @return float
     */
    public function getBiddableConversions()
    {
        return isset($this->biddable_conversions) ? $this->biddable_conversions : 0.0;
    }

    public function hasBiddableConversions()
    {
        return isset($this->biddable_conversions);
    }

    public function clearBiddableConversions()
    {
        unset($this->biddable_conversions);
    }

    /**
     * Projected number of biddable conversions.
     *
     * Generated from protobuf field <code>double biddable_conversions = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setBiddableConversions($var)
    {
        GPBUtil::checkDouble($var);
        $this->biddable_conversions = $var;

        return $this;
    }

    /**
     * Projected total value of biddable conversions.
     *
     * Generated from protobuf field <code>double biddable_conversions_value = 10;</code>
     * @return float
     */
    public function getBiddableConversionsValue()
    {
        return isset($this->biddable_conversions_value) ? $this->biddable_conversions_value : 0.0;
    }

    public function hasBiddableConversionsValue()
    {
        return isset($this->biddable_conversions_value);
    }

    public function clearBiddableConversionsValue()
    {
        unset($this->biddable_conversions_value);
    }

    /**
     * Projected total value of biddable conversions.
     *
     * Generated from protobuf field <code>double biddable_conversions_value = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setBiddableConversionsValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->biddable_conversions_value = $var;

        return $this;
    }

    /**
     * Projected number of clicks.
     *
     * Generated from protobuf field <code>int64 clicks = 11;</code>
     * @return int|string
     */
    public function getClicks()
    {
        return isset($this->clicks) ? $this->clicks : 0;
    }

    public function hasClicks()
    {
        return isset($this->clicks);
    }

    public function clearClicks()
    {
        unset($this->clicks);
    }

    /**
     * Projected number of clicks.
     *
     * Generated from protobuf field <code>int64 clicks = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClicks($var)
    {
        GPBUtil::checkInt64($var);
        $this->clicks = $var;

        return $this;
    }

    /**
     * Projected cost in micros.
     *
     * Generated from protobuf field <code>int64 cost_micros = 12;</code>
     * @return int|string
     */
    public function getCostMicros()
    {
        return isset($this->cost_micros) ? $this->cost_micros : 0;
    }

    public function hasCostMicros()
    {
        return isset($this->cost_micros);
    }

    public function clearCostMicros()
    {
        unset($this->cost_micros);
    }

    /**
     * Projected cost in micros.
     *
     * Generated from protobuf field <code>int64 cost_micros = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCostMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cost_micros = $var;

        return $this;
    }

    /**
     * Projected number of impressions.
     *
     * Generated from protobuf field <code>int64 impressions = 13;</code>
     * @return int|string
     */
    public function getImpressions()
    {
        return isset($this->impressions) ? $this->impressions : 0;
    }

    public function hasImpressions()
    {
        return isset($this->impressions);
    }

    public function clearImpressions()
    {
        unset($this->impressions);
    }

    /**
     * Projected number of impressions.
     *
     * Generated from protobuf field <code>int64 impressions = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setImpressions($var)
    {
        GPBUtil::checkInt64($var);
        $this->impressions = $var;

        return $this;
    }

    /**
     * Projected number of top slot impressions.
     * Only search advertising channel type supports this field.
     *
     * Generated from protobuf field <code>int64 top_slot_impressions = 14;</code>
     * @return int|string
     */
    public function getTopSlotImpressions()
    {
        return isset($this->top_slot_impressions) ? $this->top_slot_impressions : 0;
    }

    public function hasTopSlotImpressions()
    {
        return isset($this->top_slot_impressions);
    }

    public function clearTopSlotImpressions()
    {
        unset($this->top_slot_impressions);
    }

    /**
     * Projected number of top slot impressions.
     * Only search advertising channel type supports this field.
     *
     * Generated from protobuf field <code>int64 top_slot_impressions = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTopSlotImpressions($var)
    {
        GPBUtil::checkInt64($var);
        $this->top_slot_impressions = $var;

        return $this;
    }

    /**
     * The simulated CPC bid upon which projected metrics are based.
     *
     * Generated from protobuf field <code>int64 cpc_bid_micros = 15;</code>
     * @return int|string
     */
    public function getCpcBidMicros()
    {
        return $this->readOneof(15);
    }

    public function hasCpcBidMicros()
    {
        return $this->hasOneof(15);
    }

    /**
     * The simulated CPC bid upon which projected metrics are based.
     *
     * Generated from protobuf field <code>int64 cpc_bid_micros = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCpcBidMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * The simulated scaling modifier upon which projected metrics are based.
     * All CPC bids relevant to the simulated entity are scaled by this
     * modifier.
     *
     * Generated from protobuf field <code>double cpc_bid_scaling_modifier = 16;</code>
     * @return float
     */
    public function getCpcBidScalingModifier()
    {
        return $this->readOneof(16);
    }

    public function hasCpcBidScalingModifier()
    {
        return $this->hasOneof(16);
    }

    /**
     * The simulated scaling modifier upon which projected metrics are based.
     * All CPC bids relevant to the simulated entity are scaled by this
     * modifier.
     *
     * Generated from protobuf field <code>double cpc_bid_scaling_modifier = 16;</code>
     * @param float $var
     * @return $this
     */
    public function setCpcBidScalingModifier($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCpcSimulationKeyValue()
    {
        return $this->whichOneof("cpc_simulation_key_value");
    }

}


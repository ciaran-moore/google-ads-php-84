<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/customer_asset.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between a customer and an asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.CustomerAsset</code>
 */
class CustomerAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the customer asset.
     * CustomerAsset resource names have the form:
     * `customers/{customer_id}/customerAssets/{asset_id}~{field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Required. Immutable. The asset which is linked to the customer.
     *
     * Generated from protobuf field <code>string asset = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $asset = '';
    /**
     * Required. Immutable. Role that the asset takes for the customer link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetFieldTypeEnum.AssetFieldType field_type = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $field_type = 0;
    /**
     * Output only. Source of the customer asset link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetSourceEnum.AssetSource source = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $source = 0;
    /**
     * Status of the customer asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetLinkStatusEnum.AssetLinkStatus status = 4;</code>
     */
    protected $status = 0;
    /**
     * Output only. Provides the PrimaryStatus of this asset link.
     * Primary status is meant essentially to differentiate between the plain
     * "status" field, which has advertiser set values of enabled, paused, or
     * removed.  The primary status takes into account other signals (for assets
     * its mainly policy and quality approvals) to come up with a more
     * comprehensive status to indicate its serving state.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetLinkPrimaryStatusEnum.AssetLinkPrimaryStatus primary_status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $primary_status = 0;
    /**
     * Output only. Provides the details of the primary status and its associated
     * reasons.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.AssetLinkPrimaryStatusDetails primary_status_details = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $primary_status_details;
    /**
     * Output only. Provides a list of reasons for why an asset is not serving or
     * not serving at full capacity.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.AssetLinkPrimaryStatusReasonEnum.AssetLinkPrimaryStatusReason primary_status_reasons = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $primary_status_reasons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the customer asset.
     *           CustomerAsset resource names have the form:
     *           `customers/{customer_id}/customerAssets/{asset_id}~{field_type}`
     *     @type string $asset
     *           Required. Immutable. The asset which is linked to the customer.
     *     @type int $field_type
     *           Required. Immutable. Role that the asset takes for the customer link.
     *     @type int $source
     *           Output only. Source of the customer asset link.
     *     @type int $status
     *           Status of the customer asset.
     *     @type int $primary_status
     *           Output only. Provides the PrimaryStatus of this asset link.
     *           Primary status is meant essentially to differentiate between the plain
     *           "status" field, which has advertiser set values of enabled, paused, or
     *           removed.  The primary status takes into account other signals (for assets
     *           its mainly policy and quality approvals) to come up with a more
     *           comprehensive status to indicate its serving state.
     *     @type array<\Google\Ads\GoogleAds\V17\Common\AssetLinkPrimaryStatusDetails>|\Google\Protobuf\Internal\RepeatedField $primary_status_details
     *           Output only. Provides the details of the primary status and its associated
     *           reasons.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $primary_status_reasons
     *           Output only. Provides a list of reasons for why an asset is not serving or
     *           not serving at full capacity.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\CustomerAsset::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the customer asset.
     * CustomerAsset resource names have the form:
     * `customers/{customer_id}/customerAssets/{asset_id}~{field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the customer asset.
     * CustomerAsset resource names have the form:
     * `customers/{customer_id}/customerAssets/{asset_id}~{field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Required. Immutable. The asset which is linked to the customer.
     *
     * Generated from protobuf field <code>string asset = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Required. Immutable. The asset which is linked to the customer.
     *
     * Generated from protobuf field <code>string asset = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset = $var;

        return $this;
    }

    /**
     * Required. Immutable. Role that the asset takes for the customer link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetFieldTypeEnum.AssetFieldType field_type = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getFieldType()
    {
        return $this->field_type;
    }

    /**
     * Required. Immutable. Role that the asset takes for the customer link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetFieldTypeEnum.AssetFieldType field_type = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setFieldType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\AssetFieldTypeEnum\AssetFieldType::class);
        $this->field_type = $var;

        return $this;
    }

    /**
     * Output only. Source of the customer asset link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetSourceEnum.AssetSource source = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Output only. Source of the customer asset link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetSourceEnum.AssetSource source = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\AssetSourceEnum\AssetSource::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Status of the customer asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetLinkStatusEnum.AssetLinkStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the customer asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetLinkStatusEnum.AssetLinkStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\AssetLinkStatusEnum\AssetLinkStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. Provides the PrimaryStatus of this asset link.
     * Primary status is meant essentially to differentiate between the plain
     * "status" field, which has advertiser set values of enabled, paused, or
     * removed.  The primary status takes into account other signals (for assets
     * its mainly policy and quality approvals) to come up with a more
     * comprehensive status to indicate its serving state.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetLinkPrimaryStatusEnum.AssetLinkPrimaryStatus primary_status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPrimaryStatus()
    {
        return $this->primary_status;
    }

    /**
     * Output only. Provides the PrimaryStatus of this asset link.
     * Primary status is meant essentially to differentiate between the plain
     * "status" field, which has advertiser set values of enabled, paused, or
     * removed.  The primary status takes into account other signals (for assets
     * its mainly policy and quality approvals) to come up with a more
     * comprehensive status to indicate its serving state.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AssetLinkPrimaryStatusEnum.AssetLinkPrimaryStatus primary_status = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPrimaryStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\AssetLinkPrimaryStatusEnum\AssetLinkPrimaryStatus::class);
        $this->primary_status = $var;

        return $this;
    }

    /**
     * Output only. Provides the details of the primary status and its associated
     * reasons.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.AssetLinkPrimaryStatusDetails primary_status_details = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrimaryStatusDetails()
    {
        return $this->primary_status_details;
    }

    /**
     * Output only. Provides the details of the primary status and its associated
     * reasons.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.common.AssetLinkPrimaryStatusDetails primary_status_details = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V17\Common\AssetLinkPrimaryStatusDetails>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrimaryStatusDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Common\AssetLinkPrimaryStatusDetails::class);
        $this->primary_status_details = $arr;

        return $this;
    }

    /**
     * Output only. Provides a list of reasons for why an asset is not serving or
     * not serving at full capacity.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.AssetLinkPrimaryStatusReasonEnum.AssetLinkPrimaryStatusReason primary_status_reasons = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrimaryStatusReasons()
    {
        return $this->primary_status_reasons;
    }

    /**
     * Output only. Provides a list of reasons for why an asset is not serving or
     * not serving at full capacity.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.AssetLinkPrimaryStatusReasonEnum.AssetLinkPrimaryStatusReason primary_status_reasons = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrimaryStatusReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V17\Enums\AssetLinkPrimaryStatusReasonEnum\AssetLinkPrimaryStatusReason::class);
        $this->primary_status_reasons = $arr;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/campaign_lifecycle_goal_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation on a campaign lifecycle goal.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.CampaignLifecycleGoalOperation</code>
 */
class CampaignLifecycleGoalOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. FieldMask that determines which resource fields are modified in
     * an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. FieldMask that determines which resource fields are modified in
     *           an update.
     *     @type \Google\Ads\GoogleAds\V17\Resources\CampaignLifecycleGoal $create
     *           Create operation: Create a new campaign lifecycle goal. The campaign
     *           field should be set for this operation.
     *     @type \Google\Ads\GoogleAds\V17\Resources\CampaignLifecycleGoal $update
     *           Update operation: Update an existing campaign lifecycle goal. The
     *           campaign field should not be set for this operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\CampaignLifecycleGoalService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. FieldMask that determines which resource fields are modified in
     * an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. FieldMask that determines which resource fields are modified in
     * an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Create operation: Create a new campaign lifecycle goal. The campaign
     * field should be set for this operation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CampaignLifecycleGoal create = 1;</code>
     * @return \Google\Ads\GoogleAds\V17\Resources\CampaignLifecycleGoal|null
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    public function hasCreate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Create operation: Create a new campaign lifecycle goal. The campaign
     * field should be set for this operation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CampaignLifecycleGoal create = 1;</code>
     * @param \Google\Ads\GoogleAds\V17\Resources\CampaignLifecycleGoal $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\CampaignLifecycleGoal::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Update operation: Update an existing campaign lifecycle goal. The
     * campaign field should not be set for this operation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CampaignLifecycleGoal update = 3;</code>
     * @return \Google\Ads\GoogleAds\V17\Resources\CampaignLifecycleGoal|null
     */
    public function getUpdate()
    {
        return $this->readOneof(3);
    }

    public function hasUpdate()
    {
        return $this->hasOneof(3);
    }

    /**
     * Update operation: Update an existing campaign lifecycle goal. The
     * campaign field should not be set for this operation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CampaignLifecycleGoal update = 3;</code>
     * @param \Google\Ads\GoogleAds\V17\Resources\CampaignLifecycleGoal $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\CampaignLifecycleGoal::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

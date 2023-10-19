<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/customer_lifecycle_goal_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation on a customer lifecycle goal.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.CustomerLifecycleGoalOperation</code>
 */
class CustomerLifecycleGoalOperation extends \Google\Protobuf\Internal\Message
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
     *     @type \Google\Ads\GoogleAds\V15\Resources\CustomerLifecycleGoal $create
     *           Create operation: to create a new customer lifecycle goal or update an
     *           existing customer lifecycle goal. When creating a new customer lifecycle
     *           goal, all required fields needs to be set. Resource name and field mask
     *           needs to be empty. When updating an existing customer lifecycle goal,
     *           resource name and field mask need to be set. Partial update based on
     *           field mask is supported when updating an existing customer lifecycle
     *           goal.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\CustomerLifecycleGoalService::initOnce();
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
     * Create operation: to create a new customer lifecycle goal or update an
     * existing customer lifecycle goal. When creating a new customer lifecycle
     * goal, all required fields needs to be set. Resource name and field mask
     * needs to be empty. When updating an existing customer lifecycle goal,
     * resource name and field mask need to be set. Partial update based on
     * field mask is supported when updating an existing customer lifecycle
     * goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.CustomerLifecycleGoal create = 1;</code>
     * @return \Google\Ads\GoogleAds\V15\Resources\CustomerLifecycleGoal|null
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
     * Create operation: to create a new customer lifecycle goal or update an
     * existing customer lifecycle goal. When creating a new customer lifecycle
     * goal, all required fields needs to be set. Resource name and field mask
     * needs to be empty. When updating an existing customer lifecycle goal,
     * resource name and field mask need to be set. Partial update based on
     * field mask is supported when updating an existing customer lifecycle
     * goal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.resources.CustomerLifecycleGoal create = 1;</code>
     * @param \Google\Ads\GoogleAds\V15\Resources\CustomerLifecycleGoal $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Resources\CustomerLifecycleGoal::class);
        $this->writeOneof(1, $var);

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
